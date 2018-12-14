<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url('css');?>/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <h1 class="title">Login</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
<form method="post" action="<?php echo base_url('login/login_check');?>">
    <div class="modal-dialog" role="document" style="max-width: 550px !important;">
      <div class="modal-content">
        <div class="modal-header" >
          <h5 class="modal-title">Login</h5>
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
                <input type="text" class="form-control" name="email" placeholder="Enter email" required>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Enter password" id="password-field" required>
				<span toggle="#password-field" class="fa fa-eye field-icon toggle-password"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" >
				Login 
			</button>
		</div>
          
        </div>
        <div class="register text-center">Not a member yet? <a href="<?php echo base_url('register');?>">Register</a></div>
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
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> 
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