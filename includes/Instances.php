<?php

$GLOBALS['classes'] = [];
/**
 * 
 */
class Instances
{
	public static function get($name)
	{
		$classes =& $GLOBALS['classes'];
		$obj = null;
		if (isset($classes[$name]))
		{
			$obj =& $classes[$name];
		}
		else
		{
			$obj = new $name;
			$classes[$name] =& $obj;
		}
		return $obj;
	}
}