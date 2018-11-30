
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
        <li class="breadcrumb-item active" aria-current="page">View Category</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="dashboard_menu">
          <div class="dashbord_img">
            <div class="dashboard_back"> <img class="img-fluid w-100" src="<?php echo base_url('images');?>/dash-background.png" alt="Classified Plus"> </div>
            <div class="rounded_img"> <img class="img-fluid" src="<?php echo base_url('images');?>/aditya.png" alt="Classified Plus"> </div>
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
          </ul>>
        </div>
      </div>
      <div class="col-md-9">
        <div class="dashboard_main">
          <div class="dashboard_heding">
            <h3> Categories Listing </h3>
          </div>
          <!-- <div class="row">
            <div class=" col-md-12 all_ads">
              <ul class="list-unstyled m-0">
                <li class="my_ad m-b-15"><a href="#"> All(42) </a></li>
                <li class="my_ad m-b-15"><a href="#"> Published (88) </a></li>
                <li class="my_ad m-b-15"><a href="#"> Featured (12) </a></li>
                <li class="my_ad m-b-15"><a href="#"> Sold (02) </a></li>
                <li class="my_ad m-b-15"><a href="#"> Active (42) </a></li>
                <li class="my_ad m-b-15"><a href="#"> Expired (01) </a></li>
              </ul>
            </div>
          </div> -->
          <div class="row m-t-15">
            <div id="recent-transactions" class="col-12"> <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements"> </div>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="border-top text-capitalize">Serial No. </th>
                      <th class="border-top text-capitalize">category </th>
                      <th class="border-top text-capitalize">action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  for($i=1;$i<=10;$i++){
				  ?>
                    <tr>
                      <td class="text-truncate"><a href="#"> <?php echo $i;?> </a></td>
					  <td class="text-truncate"><a href="#"> Electronics </a></td>
                      <td class="text-truncate">
                        <button type="submit" value="butten"> <i class="fa fa-pencil"></i> </button>
                        <button type="submit" value="butten"> <i class="fa fa-trash"></i> </button>
                      </td>
                    </tr>
				  <?php
				  }
				  ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center m-t-20 m-b-50">
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
          </ul>
        </nav>
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