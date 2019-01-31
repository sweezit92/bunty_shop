<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url('css');?>/bootstrap.min.css">
<title>Explore+</title>
<link rel="stylesheet" href="<?php echo base_url('css');?>/font-awesome.min.css" />
<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.theme.default.min.css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style>
.field-icon {
  float: right;
  margin-right: 15px;
  margin-top: -46px;
  position: relative;
  font-size:18px;
  z-index: 2;
}
</style>
</head>
<body class="iner_page">
<?php
$this->load->view("common/header");
?>
<!-- breadcrumb -->
<div class="iner_breadcrumb bg-light p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">My Account</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50 m-b-30">
  
    
  <div class="container">
    <div class="row">
      <div class="col-md-12">
	  <?php
		if($this->session->flashdata('success')){
	  ?>
		<div class="alert alert-success">
		  <strong><?php echo $this->session->flashdata('success');?></strong>
		</div>
	  <?php
	  }
	  if($this->session->flashdata('failed')){
	  ?>
		<div class="alert alert-danger">
		  <strong><?php echo $this->session->flashdata('failed');?></strong>
		</div>
	  <?php
	  }
	  ?>
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3> Account details </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
              <form method="post" action="<?php echo base_url('my_account/update_details');?>" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="first_name" value="<?php echo $fetch_details->first_name;?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="last_name"value="<?php echo $fetch_details->last_name;?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo $fetch_details->email;?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="number" class="form-control" name="phone" value="<?php echo $fetch_details->phone;?>" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Password</label>
                      <input type="password" class="form-control" name="password" value="<?php echo $fetch_details->password;?>" id="password-field" required>
					  <span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
                    </div>
                  </div>
                </div>
				        <button class="change_btn mt-2 text-capitalize" type="submit" value="button">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Dashboard_sec -->

<?php
$this->load->view("common/footer");
?>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js"></script> 
<script src="<?php echo base_url('js');?>/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('js');?>/custom.js"></script>
<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
  input.attr("type", "text");
  } else {
  input.attr("type", "password");
  }
});
</script>
</body>
</html>