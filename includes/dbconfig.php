<?php
define('DB_SERVER', 'localhost');
if ($_SERVER['HTTP_HOST'] === 'localhost')
{
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
}
else
{
  define('DB_USERNAME', 'genefied_sunsafe-ipl');
  define('DB_PASSWORD', 'Fpa8CVdwHi~R');
}

define('DB_DATABASE', 'svtc_db');

class DB {
	// public $connection;
	protected $db;
  protected $vendor;

  public $transaction = FALSE;
  public $queries;
  public $upload_dir;
  public $upload_url;
	
  public function __construct()
  {
  	$this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		if ($this->db->connect_error) die('Database error -> ' . $this->db->connect_error);

    $this->queries = [];
    if ($_SERVER['HTTP_HOST'] === 'localhost')
    {
	    $this->upload_dir = __DIR__.'/../../gm_upload/';
	    $this->upload_url = 'upload/';
	  }
	  else if ($_SERVER['HTTP_HOST'] === 'phoenix.genefied.co')
	  {
	  	$this->upload_dir = __DIR__.'upload/';
	    $this->upload_url = 'upload/';
	  }
  }

  public function getConnection()
  {
  	return $this->db;
  }

  public function escapeString($sql)
  {
    return $this->db->escape_string($sql);
  }  

  public function insertId()
  {
    return $this->db->insert_id;
  }

  public function getResult($sql)
  {
    global $rowCount;
    $this->queries[] = $sql;

    $result = $this->db->query($sql);
    $resultArray = [];
    if (empty($result))
    {
      return $resultArray;
    }
    while ($arrayResult = $result->fetch_assoc()) {
        $resultArray[] = $arrayResult;
    }
    return $resultArray;
  }

  public function resultQuery($sql)
  {
    return $this->getResult($sql);
  }

  public function query($sql)
  {
    //echo $sql;die();  
    return $this->getResult($sql);
  }

  public function executeQuery($sql)
  {
    $this->queries[] = $sql;
    $ret = $this->db->query($sql);
    // if ($ret === FALSE && $this->transaction)
    // {
    // 	$this->rollbackTransaction();
    // }
    return $ret;
  }

  public function getQuery($table, $select, $column = null, $value = null, $extra = '')
  {
    $sql = "SELECT $select FROM $table";
    if (is_array($column))
    {
      return $this->whereAnd($table, $select, $column, $extra);
    }
    if ( !( is_null($column) || is_null($value) ) )
    {
      $sql .= " WHERE $column = '{$this->escapeString($value)}'";
    }
    $sql .= $extra;
    //echo $sql;die();
    return $this->resultQuery($sql);
  }
   public function getQueryQrcode($table, $select, $column = null, $value = null, $extra = '')
  {
    $sql = "SELECT $select FROM $table";
    if (is_array($column))
    {
      return $this->whereAnd($table, $select, $column, $extra);
    }
    if ( !( is_null($column) || is_null($value) ) )
    {
      $sql .= " WHERE $column = '{$this->escapeString($value)}' order by id desc ";
    }
    $sql .= $extra;
    return $this->resultQuery($sql);
  }
  public function getOtpData($table, $select,$mobileNo)
  {
    $sql = "SELECT $select FROM $table where mobile_no=$mobileNo order by id desc limit 1";
    return $this->resultQuery($sql);
  }
  
  public function getQueryLike($table, $select, $column, $value, $extra = '')
  {
    $sql = "SELECT $select FROM $table";
    $sql .= " WHERE $column LIKE '$value'";
    $sql .= $extra;
    //echo $sql;die();
    return $this->resultQuery($sql);
  }
  public function getBatchQuery($sql)
  {
    //$sql = "SELECT $select FROM $table";
    //$sql .= " WHERE $column LIKE '$value'";
    //$sql .= $extra;
    //echo $sql;die();
    return $this->resultQuery($sql);
  }

  public function whereAnd($table, $select, $where = [], $extra = '')
  {
    $sql = "SELECT $select FROM $table";
    if (empty($where))
    {
      return $this->resultQuery($sql);
    }
    $sql .= " WHERE ";
    $arr = [];
    foreach ($where as $col => $value)
    {
      $arr[] = "$col = '{$this->db->escape_string($value)}'";
    }
    $sql .= implode(' AND ', $arr);
    $sql .= $extra;
    return $this->resultQuery($sql);
  }

  public function whereIn($table, $select, $column, $array)
  {
    $str = implode("','", $array);
    $sql = "SELECT $select FROM `$table` WHERE `$column` IN('$str')";
    return $this->resultQuery($sql);
  }

  public function insertQuery($table, $data)
  {
      
    if (empty($data))
      return FALSE;
    $columns = implode(',', array_keys($data));
    $values = array_values($data);
    $valueStr = '';
    foreach ($values as $value)
    {
      $valueStr .= "'{$this->db->escape_string($value)}',";
    }
    $valueStr = substr($valueStr, 0, -1);
    $sql = "INSERT INTO $table ($columns) VALUES ($valueStr)";
    //echo $sql;die();
    if ($this->executeQuery($sql))
      return $this->insertId();
    else
      return FALSE;
  }

 	public function multiInsertQuery($table, $columns, $data)
 	{
 		if (empty($data))
      return FALSE;
    $columns = '`'.implode('`,`' , $columns).'`';
    $sql = "INSERT INTO $table ($columns) VALUES ";
    foreach ($data as $values)
    {
    	$valueStr = '(';
    	foreach ($values as $value)
	    {
	      $valueStr .= "'{$this->db->escape_string($value)}',";
	    }
	    $valueStr = substr($valueStr, 0, -1);
	    $valueStr .= ')';
	    $sql .= $valueStr.',';
    }
    $sql = substr($sql, 0, -1);
    return $this->executeQuery($sql);
 	}

  public function updateQuery($table, $data, $column, $value)
  {
    if (empty($data))
      return FALSE;

    $dataStr = '';
    foreach ($data as $col => $val)
    {
      $dataStr .= "`$col`='{$this->db->escape_string($val)}',";
    }
    $dataStr = substr($dataStr, 0, -1);
    $sql = "UPDATE $table SET $dataStr WHERE $column = $value";
    return $this->executeQuery($sql);
  }
  
  public function updateQueryData($colArray,$tablename,$id) {
		global $dbError;
		$dbError = true;
		$query = "";
		$update = array();
		foreach($colArray as $col => $value) {
			$update[] = $col."='".$value."'";
		}
		$query = "UPDATE $tablename SET ".implode(",",$update)." WHERE id = ".$id;
		$this->db->query($query) or die($this->db->error);
	}

  public function deleteQuery($table, $column, $value = '')
  {
    $arr = []; $sql = '';
    if (is_array($column))
    {
    	if (empty($column))
    	{
    		echo 'column is empty';
    		return FALSE;
    	}
    	$sql = "DELETE FROM $table WHERE ";
    	foreach ($column as $col => $val)
    	{
    		$arr[] = "$col = '{$this->db->escape_string($val)}'";
    	}
    	$sql .= implode(' AND ', $arr);
    }
    else
    {
    	$sql = "DELETE FROM $table WHERE $column = $value";
    }
    // dd($sql);
    return $this->executeQuery($sql);
  }

  public function startTransaction()
  {
  	$this->transaction = TRUE;
  	return $this->executeQuery('START TRANSACTION;');
  }

  public function commitTransaction()
  {
  	$this->transaction = FALSE;
  	return $this->executeQuery('COMMIT;');
  }

  public function rollbackTransaction()
  {
  	// printl('Rollback');
  	$this->transaction = FALSE;
  	return $this->executeQuery('ROLLBACK WORK;');
  }

  public function error()
  {
    return $this->db->error;
  }

  public function uploadDir($str = null)
  {
  	if ($str && file_exists($this->upload_dir.$str) )
  	{
  		return $this->upload_dir.$str;
  	}
  	return $this->upload_dir;
  }

  public function uploadUrl($str = null)
  {
  	if ($str)
  	{
  		return $this->upload_url.$str;
  	}
  	return $this->upload_url;
  }
}
?>