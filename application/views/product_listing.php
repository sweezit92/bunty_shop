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
<link rel="stylesheet" href="<?php echo base_url('css');?>/owlcarousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/owlcarousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url('css');?>/price_range_style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body class="iner_page listing_left_sidebar">

<?php
$this->load->view("common/header");
?>

<!-- banner -->
<section class="banner">
        <div class="banner-innerpage Category_banner">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center "> 
      <!-- Column -->
      <div class="text-center">
        <h1 class="title">Listings</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Listing</li>
          </ol>
        </nav>
      </div>
      <!-- Column --> 
    </div>
</div>
      </div>
</section>
<!-- End banner --> 

<!-- listing_left_sidebar -->
<section class="top_listings">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="title">Select one of the best listings</h2>
        <h6 class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>
      </div>
    </div>
    <!-- Row  -->
   
    
    <div class="row m-t-40 margin_top">
    <div class="col-md-3 col-sm-12 col-xs-12">
        <div class="sidebar-wrapper">
          <div class="single-sidebar">
            <form class="search-form" action="#">
              <input placeholder="Keywords" type="text">
              <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
          </div>
          <div class="single-sidebar">
            <div class="sec-title">
              <h3 class="all-categories">All Category</h3>
              <ul class="categories clearfix slide">
                <li><a href="#">Food & Vegetables (1029)</a></li>
                <li><a href="#">Meat & Fish (175)</a></li>
                <li><a href="#">Fashion (1800)</a></li>
                <li><a href="#">CCTV,Laptop,LCD,LED (3129)</a></li>
                <li><a href="#">Travel Bookings (7160)</a></li>
                <li><a href="#">Jewellery (600)</a></li>
                <li><a href="#">Baby Product (460)</a></li>
                <li><a href="#">Grocery (540)</a></li>
                <li><a href="#">Electronics (4300)</a></li>
                <li><a href="#">Used Vehicle (12000)</a></li>
				<li><a href="#">Furniture (12000)</a></li>
              </ul>
            </div>
            <div class="single-sidebar">
              <div class="sec-title">
                <h3 class="condition mb-2">Condition</h3>
                              <div class="form-group form-check condition-slide">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label text-uppercase">New</label>
              </div>
              <div class="form-group form-check condition-slide">
                <input type="checkbox" class="form-check-input">
                <label class="form-check-label text-uppercase">Used</label>
              </div>
              </div>
            </div>
            
            <div class="single-sidebar">
              <div class="sec-title">
                <h3 class="price_r mb-2">Price Range</h3>
                  <div class="price-range-block">
	<div id="slider-range" class="price-filter-range slider-range2"></div>

	<div class="m-t-20 m-b-20">
	  <input type="text" oninput="validity.valid||(value='0');" id="min_price" class="price-range-field" />
	  <input type="text" oninput="validity.valid||(value='10000');" id="max_price" class="price-range-field price-range-field2"/>
	</div>

</div>
                </div>
                </div>

          </div>
        </div>
      </div>
   <div class="col-md-9 col-sm-12 col-xs-12">   
 <div class="row">
 <div class="col-md-12 col-sm-12 col-xs-12 m-b-10">
        <div class="listing-select-parts d-flex justify-content-between">
          <div class="listing-select-head-left d-inline-block">
            <h3> Showing ( 1-12 products of 7,371 products  ) </h3>
          </div>
          <div class="listing-select-head-right d-inline-block ">
            
            <div class="sort_by d-inline-block pl-3">
            <form>
              <div class="form-group">
                <select class="form-control">
                  <option>Shop by</option>
                  <option selected>Popular</option>
                  <option>Price</option>
                  <option>Relevant</option>
                  <option>Latest</option>
                </select>
              </div>
            </form>
            </div> </div>
            </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-1.png" alt="Classified Plus">
            <!-- <div class="featured-new bg_warning1"> <a href="#"> New </a> </div> -->
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Mobile</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Smartphone for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-2.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Fashion</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark-o"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Cloth for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      
      
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-9.png" alt="Classified Plus">
            
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Vehicles</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Renger cycle for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-11.png" alt="Classified Plus">
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Real Estate</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Luxury house for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-13.png" alt="Classified Plus">
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Fashion</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Ladies sandal for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-16.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Vehicles</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Car BMW for sales</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
            
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-18.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Furniture</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark-o"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Bed sheet for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-19.png" alt="Classified Plus">
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Baby products</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Bed sheet for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-12.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="<?php echo base_url("product_details");?>">Mobile</a> </div>
              <div class="book-mark"><a href="<?php echo base_url("product_details");?>"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Smartphone for sale</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="<?php echo base_url("product_details");?>"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-12">
      <button class="view-btn hvr-pulse-grow" type="submit" value="button">View all</button>
      </div>
    </div>
    </div>
    </div>
  </div>
</section>
<!-- End listing_left_sidebar --> 


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
$(document).ready(function(){
    $(".all-categories").on('click', function(e){
        $(".slide").slideToggle("slow");
    });
});


$(document).ready(function(){
    $(".condition").on('click', function(e){
        $(".condition-slide").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".post-by").on('click', function(e){
        $(".post-slide").slideToggle("slow");
    });
});

$(document).ready(function(){
    $(".price_r").on('click', function(e){
        $(".price-range-block").slideToggle("slow");
    });
});
</script>
<script src="<?php echo base_url('js');?>/price_range_script.js"></script>
<script src="<?php echo base_url('js');?>/jquery-ui.js"></script> 
</body>
</html>