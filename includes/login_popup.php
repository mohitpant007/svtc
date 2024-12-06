<div class="modal fade bd-example-modal-lg" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrationModalLabel">Registration Form</h5>
                    <button type="button" id="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <form id="registrationForm" method="POST" >
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" name="phone" id="phone" pattern="[0-9]{10}" title="Enter a valid 10-digit mobile number" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="repeatPassword" class="form-label">Repeat Password</label>
                            <input type="password" class="form-control" name="re_password" id="re_password"placeholder="Repeat your password" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 login-button">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>