<div class="topbar"> 
  <!-- Header  -->
  <div class="header">
    <div class="container po-relative">
      <nav class="navbar navbar-expand-lg hover-dropdown header-nav-bar"> <a href="01-Home-Page.html" class="navbar-brand"><!-- <img src="images/logo.png" alt="Classified Plus"> --><span style="color:white;">LOGO</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="h5-info">
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
			<?php
			if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['role'] != 'admin'){
			?>
			<li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("my_account");?>"><b>My Account</b></a></li>
			<?php
			}else if(isset($this->session->userdata['logged_in']['user_id']) && $this->session->userdata['logged_in']['role'] != 'user'){
			?>
			<li class="nav-item"> <a class="nav-link"  href="<?php echo base_url("admin_settings");?>"><b>My Account</b></a></li>
			<?php
			}
			?>
          </ul>
          <div class="header_r d-flex">
            <ul class="ml-auto post_ad">
			<?php
			if(isset($this->session->userdata['logged_in']['user_id'])){
			?>
              <li class="nav-item search loin"><a class="nav-link" href="<?php echo base_url('logout');?>"> <b>Logout</b></a></li>
		    <?php
		    }else{
			?>
			  <li class="nav-item search loin"><a class="nav-link" href="<?php echo base_url('login');?>"> <b>Register/Sign In</b></a></li>
			<?php
			}
		    ?>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- End Header  --> 
</div>