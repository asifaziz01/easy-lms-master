<div class="row h-100">
    <div class="col-12 col-md-10 mx-auto my-auto">
        <div class="card auth-card shadow">
            <div class="position-relative image-side text-center">
            	<div class="d-flex flex-column h-100 align-items-center justify-content-center">
	                <p class=" text-white h2">ALREADY HAVE<br>AN ACCOUNT? <br>SIGN-IN</p>
	                <p class="white mb-0">
	                    <a href="<?php echo site_url('login/user/index')?>" class="btn btn-light ">Sign In</a>
	                </p>
            	</div>
            </div>
            <div class="form-side">
                <?php if ( is_file ($logo)) { ?>
                    <img src="<?php echo $logo; ?>" height="50" title="<?php echo $page_title; ?>" class="text-center">
                <?php } else { ?>
                    <h4 class="text-center"><?php echo $page_title; ?></h4>
                <?php } ?>
                <h6 class="text-center">Create a new <?php if ($role_id == USER_ROLE_TEACHER) echo 'teacher'; else echo 'student'; ?> account</h6>
                <?php echo form_open ('login/login_actions/register', array('id'=>'validate-1')); ?>
                	<input type="hidden" name="user_role" value="<?php echo $role_id; ?>">
                	<input type="hidden" name="sr_no" value="">
                	<input type="hidden" name="second_name" value="">
                	<input type="hidden" name="user_batch" value="0">
                	<div class="d-lg-flex">
                		<div class="flex-grow-1 pr-lg-1">
		                    <label class="form-group has-float-label mb-4">
		                    	<input type="text" name="first_name" class="form-control required"  value="<?php echo set_value ('first_name'); ?>" placeholder="Enter Your Name" />
		                        <span>Your Name<span class="text-danger">*</span></span>
		                    </label>
                		</div>
                		<div class="flex-grow-1 pl-lg-1">
		                    <label class="form-group has-float-label mb-4">
		                    	<input type="text" name="primary_contact" class="form-control digits required" value="<?php echo set_value ('primary_contact'); ?>" placeholder="Enter Your Mobile Number" />
		                        <span>Mobile<span class="text-danger">*</span></span>
		                    </label>
                		</div>
                	</div>
                    <label class="form-group has-float-label mb-4">
                    	<input type="text" name="email" class="form-control email required" value="<?php echo set_value ('email'); ?>" placeholder="Enter Your Email" />
                        <span>Email (Optional)</span>
                    </label>

                    <label class="form-group has-float-label mb-4">
                    	<div class="input-group">
						  	<input type="password" name="password" id="reg-password" class="form-control required" placeholder="Password"  aria-label="Password" aria-describedby="show-password" />
						  	<div class="input-group-append">
						  		<button class="btn btn-outline-secondary default" type="button" id="show-password"><i id="password-icon" class="fa fa-eye d-lg-none"></i><span class="d-none d-lg-inline-block" id="show-password-link">Show Password</span></button>
						  	</div>
						</div>
                        <span>Password</span>
						<p class="text-muted">Choosing a strong password is recommended</p>
                    </label>
                    <?php if ($access_code != '' && $found == true) { ?>
                        <label class="form-group has-float-label mb-4">
                          <input class="form-control" placeholder="Access Code" type="text" name="access_code" value="<?php echo $access_code; ?>" readonly>
                            <span>Access Code</span>
                        </label>
                    <?php } else { ?>
                        <label class="form-group has-float-label mb-4">
                            <input class="form-control" placeholder="Access Code" type="text" name="access_code" value="<?php echo $access_code; ?>" >
                            <span>Access Code</span>
                            <p class="text-muted">If you don't have access code, contact your coaching-center/institution</p>
                        </label>
                    <?php } ?>

                    <div class="d-flex justify-content-between align-items-center">
                        <button class="btn btn-primary btn-lg btn-shadow" name="save" type="submit">Create Account</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>