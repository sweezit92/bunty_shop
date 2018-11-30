
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
        <li class="breadcrumb-item active" aria-current="page">Add Subcategory</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50 m-b-30">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="dashboard_menu">
          <div class="dashbord_img">
            <div class="dashboard_back"> <img class="img-fluid w-100" src="images/dash-background.png" alt="Classified Plus"> </div>
            <div class="rounded_img"> <img class="img-fluid" src="images/aditya.png" alt="Classified Plus"> </div>
            <div class="aditya">aditya</div>
          </div>
          <ul class="list-unstyled  m-t-20">
            <li><span><i class="fa fa-address-card"></i></span><a href="<?php echo base_url("admin_add_category");?>"> Add Category </a></li>
            <li class="active"><span><i class="fa fa-list"></i></span><a href="<?php echo base_url("admin_view_category");?>"> View Categories </a></li>
            <li><span><i class="fa fa-address-card"></i></span><a href="<?php echo base_url("admin_add_sub_category");?>"> Add Subcategory </a></li>
            <li><span><i class="fa fa-list"></i></span><a href="<?php echo base_url("admin_view_sub_category");?>"> View Subcategories </a></li>
			<li><span><i class="fa fa-address-card"></i></span><a href="<?php echo base_url("admin_add_product");?>"> Add Product </a></li>
            <li><span><i class="fa fa-list"></i></span><a href="<?php echo base_url("admin_product_listing");?>"> Product Listing </a></li>
            <!-- <li><span><i class="fa fa-star"></i></span><a href="<?php echo base_url("admin_query");?>"> Query </a></li> -->
            <li><span><i class="fa fa-sign-in"></i></span><a href="<?php echo base_url("home");?>"> Logout </a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3> Add Subcategory </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
              <form>
			  	<div class="form-group selectdiv">
                  <label>Category</label>
                  <select class="form-control">
                    <option>Select a Category</option>
                    <option>Electronics</option>
                    <option>Foods & Vegetables</option>
                    <option>Fashion</option>
                    <option>Jewellery</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Subcategory</label>
                  <input type="text"  class="form-control" placeholder="Subcategory">
                </div>
				<button class="change_btn mt-2 text-capitalize" type="submit" value="button">Add</button>
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
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script> 
<script src="<?php echo base_url('js');?>/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('js');?>/custom.js"></script>
</body>
</html>