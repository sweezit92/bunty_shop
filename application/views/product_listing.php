<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url('css');?>/bootstrap.min.css">
<title>Vujubaba</title>
<link rel="stylesheet" href="<?php echo base_url('css');?>/font-awesome.min.css" />
<link href="<?php echo base_url('css');?>/style.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('css');?>/owlcarousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/owlcarousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/jquery-ui.css">
<!--<link rel="stylesheet" href="<?php echo base_url('css');?>/price_range_style.css">-->
<link rel="stylesheet" href="<?php echo base_url('css');?>/rangeslider.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo.png">

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
        <!--<h6 class="subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h6>-->
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
                <?php
                  foreach($fetch_all_categories AS $each_category){
                ?>
                <li><a href="<?php echo base_url('product_listing');?>/<?php echo $each_category->category_id;?>"><?php echo $each_category->category_name;?></a></li>
               <?php
                  }
               ?>
              </ul>
            </div>
            <!--<div class="single-sidebar">
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
            </div>-->
            
            <div class="single-sidebar">
              <div class="sec-title">
                <h3 class="price_r mb-2">Price Range</h3>
                  <div class="price-range-block">
                      <form method="POST" action="<?php echo base_url('product_listing/price_range');?>/<?php echo $category_id;?>">
                        <div class="m-t-20 m-b-20">
                          <h6 style="color:#73859B;">INR&nbsp;<span class="budget"><span></h6>
                          <?php
                            if(empty($this->session->userdata['price_range']['price'])){
                          ?>
                            <input type="range" name="budgetzz"  id="myRange" data-rangeslider  value="<?php echo $max_price;?>" min="0" max="<?php echo $max_price;?>" onchange="this.form.submit();">
                          <?php
                            }else{
                              $stored_price = $this->session->userdata['price_range']['price'];
                          ?> 
                            <input type="range" name="budgetzz"  id="myRange" data-rangeslider  value="<?php echo $stored_price;?>" min="0" max="<?php echo $max_price;?>" onchange="this.form.submit();">
                          <?php
                            }
                          ?>
                        </div>
                      </form>
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
            <?php
              if(!empty($fetch_cat_name->category_name)){
            ?>
              <h2> <?php echo $fetch_cat_name->category_name;?></h2>
            <?php
              }else{
            ?>
              <h2>All Categories</h2>
            <?php
              }
            ?>
          </div>
          <div class="listing-select-head-right d-inline-block ">
            
            <div class="sort_by d-inline-block pl-3">
            <form  method="POST" action="<?php echo base_url('product_listing/sort_by_func');?>/<?php echo $category_id;?>">
              <div class="form-group">
                <select class="form-control" name="sort_by" onchange="this.form.submit();">
                  <option>Shop by</option>
                  <option selected value="Popular">Popular</option>
                  <option value="Price">Price</option>
                  <option value="Relevant">Relevant</option>
                  <option value="Latest">Latest</option>
                </select>
              </div>
            </form>
            </div> </div>
            </div>
      </div>
      <?php
        if(!empty($fetch_all_products)){
        foreach($fetch_all_products AS $each_productzz){
      ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30" style="height:400px;">
          <div class="featured-img"><a href="<?php echo base_url("product_details");?>/<?php echo $each_productzz->product_id;?>"> <img class="img-fluid rounded-top" src="<?php echo base_url('uploads');?>/<?php echo $each_productzz->image_name;?>" alt="Classified Plus" style="height:250px;"></a>
            <!-- <div class="featured-new bg_warning1"> <a href="#"> New </a> </div> -->
          </div>
          <div class="featured-text">
             <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><?php 
                  $pro_name = $each_productzz->product_name;
                  $trim_pro_name = substr($pro_name,0,20);
                  echo $trim_pro_name;
                  echo "...";
                ?></li>
                <li><strong>INR <?php echo $each_productzz->product_price;?></strong></li>
              </ul>
            <div class="text-stars featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></li>
                <li><a href="tel:+919007672001"> <i class="fa fa-phone"> +91 9007672001 </i> </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
      }else{
      ?>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
        <div class=" m-t-30">
          <strong>Sorry, no results found...</strong>
        </div>
      </div>
      <?php
        }
      ?>
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
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js"></script> 
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

</script>

<script>
    $(function() {

        var $document = $(document);
        var selector = '[data-rangeslider]';
        var $element = $(selector);

        // For ie8 support
        var textContent = ('textContent' in document) ? 'textContent' : 'innerText';

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
        var new_val = $('#myRange').val();
            $('span.budget').text(new_val);
        }

        $document.on('input', 'input[type="range"], ' + selector, function(e) {
            valueOutput(e.target);
        });

        // Basic rangeslider initialization
        $element.rangeslider({

        // Deactivate the feature detection
        polyfill: false,

        // Callback function
        onInit: function() {
            valueOutput(this.$element[0]);
        },
           
        });

    });


    </script>

<script src="<?php echo base_url('js');?>/rangeslider.js"></script>
<!--<script src="<?php echo base_url('js');?>/price_range_script.js"></script>-->
<script src="<?php echo base_url('js');?>/jquery-ui.js"></script> 
</body>
</html>