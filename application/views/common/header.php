<div class="topbar"> 
  <!-- Header  -->
  <div class="header">
    <div class="container po-relative">
      <nav class="navbar navbar-expand-lg hover-dropdown header-nav-bar"> <a href="<?php echo base_url("home");?>" class="navbar-brand"><!-- <img src="<?php echo base_url('images');?>/logo.png" alt="Classified Plus"> --> <span style="color:white;">LOGO</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="h5-info" style="margin-left:380px;;">
          <ul class="navbar-nav">
            
            <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("home");?>"><b>Home</b></a></li>
			<li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("about");?>"><b>About</b></a></li>
			<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <b>Category</b> </a>
              <ul class="b-none dropdown-menu font-14 animated fadeInUp">
                <li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Food & Vegetables</b> </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Meat & Fish</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Fashion</b></a></li>
                <li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>CCTV,Laptop,LCD,LED</b></a></li> 
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Travel Bookings</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Jewellery</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Baby Product</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Grocery</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Electronics</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Used Vehicle</b></a></li>
				<li><a class="dropdown-item" href="<?php echo base_url("product_listing");?>"><b>Furniture</b></a></li>
			  </ul>
			</li>
			<li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("product_listing");?>"><b>Product</b></a></li>
            <li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("contact");?>"><b>Contact</b></a></li>
          </ul>
          <div class="header_r d-flex">
            <ul class="ml-auto post_ad">
              <li class="nav-item search loin"><a class="nav-link" href="#" data-toggle="modal" data-target="#login"> <b>Register/Sign In</b></a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
    <!-- Modal -->
  <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login to Classifieds Plus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><img src="images/close.png"  alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
        <!-- <div class="list-unstyled list-inline social-login">
        <a href="#" class="facebook"> <img src="images/fb.png" alt="Classified Plus">Continue wiith Facbook</a>
        <a href="#" class="google"> <img src="images/google_p.png" alt="Classified Plus"> <span>Continue with Google</span></a>
        </div>
          <div class="or-divider">
            <h6>or</h6>
          </div> -->
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="log_username" placeholder="Email/Username">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="log_password" placeholder="Password">
              </div>
            </div>
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Continue 
			</button>
		</div>
          <div class="form-info">
			<div class="md-checkbox">
				<input type="checkbox" name="rememberme" id="rememberme" value="forever">
				<label for="rememberme" class="">Remember me</label>
			</div>
			<!-- <div class="forgot-password">
				<a href="#">Forgot password?</a>
			</div> -->
		</div>
          
        </div>
        <div class="register text-center">Not a member yet? <a href="#" data-toggle="modal" data-target="#register">Register</a></div>
      </div>
    </div>
  </div>
  
    <!-- Modal -->
  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login to Classifieds Plus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true"><img src="images/close.png" alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
        <!-- <div class="list-unstyled list-inline social-login">
        <a href="#" class="facebook"> <img src="images/fb.png" alt="Classified Plus">Continue wiith Facbook</a>
        <a href="#" class="google"> <img src="images/google_p.png" alt="Classified Plus"> <span>Continue with Google</span></a>
        </div>
          <div class="or-divider">
            <h6>or</h6>
          </div> -->
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="log_username" placeholder="Name">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="number" class="form-control" id="Phone_No" name="log_password" placeholder="Number">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="Email" class="form-control" id="Email" name="Email" placeholder="Email">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="log_password" placeholder="Password">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" id="Confirm_password" name="Confirm_password" placeholder="Confirm Password">
              </div>
            </div>
            
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Continue 
			</button>
		</div>
          <div class="form-info">
			<p class="text-center p-b-10">By Register I agree to receive emails.</p>
		</div>
          
        </div>
        <div class="register text-center">Already a member? <a href="#">Login</a></div>
      </div>
    </div>
  </div>
  <!-- End Header  --> 
</div>