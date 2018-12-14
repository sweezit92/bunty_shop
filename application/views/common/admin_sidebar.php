<div class="col-md-3">
	<div class="dashboard_menu">
	  <div class="dashbord_img">
	    <div class="dashboard_back"> <img class="img-fluid w-100" src="<?php echo base_url('images');?>/dash-background.png" alt="Classified Plus"> </div>
	    <div class="rounded_img"> <img class="img-fluid" src="<?php echo base_url('images');?>/admin.png" alt="Classified Plus"> </div>
	    <div class="aditya">Admin</div>
	  </div>
	  <ul class="list-unstyled  m-t-20">
	    <li class="<?php echo(($this->uri->segment(1) == 'admin_add_category')?'active':'');?>"><span><i class="fa fa-address-card"></i></span><a href="<?php echo base_url("admin_add_category");?>"> Add Category </a></li>
	    <li class="<?php echo(($this->uri->segment(1) == 'admin_view_category')?'active':'');?>"><span><i class="fa fa-list"></i></span><a href="<?php echo base_url("admin_view_category");?>"> View Categories </a></li>
		<li class="<?php echo(($this->uri->segment(1) == 'admin_add_product')?'active':'');?>"><span><i class="fa fa-address-card"></i></span><a href="<?php echo base_url("admin_add_product");?>"> Add Product </a></li>
		<li class="<?php echo(($this->uri->segment(1) == 'admin_view_product')?'active':'');?>"><span><i class="fa fa-list"></i></span><a href="<?php echo base_url("admin_view_product");?>"> View Product </a></li>
		<li class="<?php echo(($this->uri->segment(1) == 'admin_settings')?'active':'');?>"><span><i class="fa fa-cog"></i></span><a href="<?php echo base_url("admin_settings");?>"> Change Password </a></li>
	    <li><span><i class="fa fa-sign-in"></i></span><a href="<?php echo base_url("logout");?>"> Logout </a></li>
	  </ul>
	</div>
</div>