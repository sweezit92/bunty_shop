<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url('css');?>/bootstrap.min.css" >
<title>Vujubaba</title>
<link rel="stylesheet" href="<?php echo base_url('css');?>/font-awesome.min.css" />
<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.theme.default.min.css" />
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
 -->
 <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo.png">
 <style>
.field-icon {
  float: right;
  margin-right: 15px;
  margin-top: -56px;
  position: relative;
  font-size:18px;
  z-index: 2;
}
</style>
</head>
<body class="iner_page faq">
<?php
$this->load->view('common/header');
?>

<!-- banner -->
<section class="banner">
        <div class="banner-innerpage Category_banner">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center "> 
      <!-- Column -->
      <div class="text-center">
        <h1 class="title">Register</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav>
      </div>
      <!-- Column --> 
    </div>
</div>
      </div>
</section>
<!-- End banner --> 

<section class="error_section">
<div class="container">
<form method="post" action="<?php echo base_url('register/add_user');?>">
    <div class="modal-dialog" role="document" style="max-width: 550px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Register</h5>
        </div>
        <div class="modal-body">
		    <?php
				if($this->session->flashdata('failed')){
			?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
			<?php
				}
			?>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="first_name" placeholder="Enter first name" required>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" id="Phone_No" name="last_name" placeholder="Enter last name" required>
              </div>
            </div>
			<div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="number" class="form-control" id="Phone_No" name="phone" placeholder="Enter phone number" required>
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="Email" class="form-control" id="Email" name="email" placeholder="Enter your email" required>
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="pass" placeholder="Enter password" id="password-field" required>
				<span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
              </div>
            </div>
            
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" >
				Register 
			</button>
		</div>
          <div class="form-info">
			<p class="text-center p-b-10">By Register I agree to receive emails.</p>
		</div>
          
        </div>
        <div class="register text-center">Already a member? <a href="<?php echo base_url('login');?>">Login</a></div>
      </div>
    </div>
	</form>
</div>
</section>

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