
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
</head>
<body class="iner_page">

<?php
$this->load->view("common/header");
?>

<!-- breadcrumb -->
<div class="iner_breadcrumb p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mobile</li>
      </ul>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Detail_part -->
<section class="detail_part m-t-50">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box"> <img class="img-fluid" id="imageID" src="<?php echo base_url('images');?>/tshirt_1.jpeg" alt="Classified Plus" style="height:500px;width:100%;">
          <div class="m-t-20">
            <ul class="owl-carousel list-unstyled m-b-0" id="product_slider">
			<?php
			for($i=1;$i<=4;$i++){
			?>
				<li> <img id="img-fluid_<?php echo $i;?>" class="img-fluid"  src="<?php echo base_url('images');?>/tshirt_<?php echo $i;?>.jpeg" alt="slide <?php echo $i;?>" onclick="show_image(<?php echo $i;?>);" style="height:100px;"> </li>
			<?php
			}
			?>
              
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box">
          <div class="detail_head">
            <h3> Apple iPhone 6S (Space Gray, 16 GB)<br>
              Good Condition </h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            <ul class="list-unstyled text-capitalize m-b-0 m-t-15">
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-clock-o"></i> <span> 7 Jan, 17 10:10 pm </span></a> </li>
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-tags"></i><span> new </span></a> </li>
              <li class="d-inline-block"><a href="#"> <i class="fa fa-eye"></i> <span> view </span> </a> </li>
            </ul>
          </div>
          <ul class="list-unstyled d-inline-block float-left detail_left m-b-0">
            <li>Handset color :</li>
            <li>Primary Camera :</li>
            <li>Processor :</li>
            <li>Screen Size :</li>
            <li>Internal Memory :</li>
          </ul>
          <ul class="list-unstyled d-inline-block m-l-40 detail_right  m-b-0">
            <li>Black</li>
            <li>13 MP</li>
            <li>1.56 GHz + 1.82 GHz</li>
            <li>5.5 Inches</li>
            <li>6 GB</li>
          </ul>
          <div class="detail_bottum m-t-15">
            <div class="row">
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <input class="form-check-input" value="" type="checkbox">
                  <label class="form-check-label"> </label>
                  <img src="<?php echo base_url('images');?>/warrenty.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">Onsite Assure Warranty*<br>
                    $15 (6 months)</div>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <input class="form-check-input" value="" type="checkbox">
                  <label class="form-check-label"> </label>
                  <img src="<?php echo base_url('images');?>/insurance.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">SyncNscan Insurance (12 mon.)<br>
                    For just $50</div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail_prize p-t-10">
            <ul class="list-unstyled">
              <li class="d-inline-block pr-3"> Deal Price : </li>
              <li class="d-inline-block Price_m"> INR 950.00 </li>
            </ul>
          </div>
          <div class="detail_btn d-flex m-t-20">
            <!-- <button class="btn_chat w-100 text-white mr-3 py-2 border-0" type="submit" value="button"><i class="fa fa-comment-o"></i> chat</button> -->
            <button class="btn_chat w-100 text-white py-2 border-0" type="submit" value="button"> <i class="fa fa-phone"></i> 123 456 789</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Description -->

<!-- Description -->
<section class="description">
  <div class="container"> 
    
    <!-- Row  -->
    <div class="row justify-content-left">
      <div class="col-md-7 text-left">
        <h2 class="title">Description</h2>
      </div>
    </div>
    <!-- Row  -->
    
    <div class="row">
      <div class="col-md-12">
        <div class="description_box">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          <p>Condition 10/10 White color 32gb internal memory 3gb RAM Model SM-N9005 (4G/LTE) All accessories (box, hands-free, charger, data cable)
            Not refurb, Not copy, original samsung phone</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Description --> 

<!-- Top_listings -->
<section class="top_listings m-b-50">
  <div class="container"> 
    
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center m-b-10">
        <h2 class="title">Related Ads</h2>
      </div>
    </div>
    <!-- Row  -->
    
    <div class="row">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-1.png" alt="Classified Plus">
            <div class="featured-new bg_warning1"> <a href="#"> New </a> </div>
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="#">Mobile</a> </div>
              <div class="book-mark"><a href="#"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Smartphone for sele</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="#"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-2.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="#">Fashion</a> </div>
              <div class="book-mark"><a href="#"><i class="fa fa-bookmark-o"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Cloth for sele</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="#"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-18.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="#">Furniture</a> </div>
              <div class="book-mark"><a href="#"><i class="fa fa-bookmark-o"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Bed sheet for sele</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="#"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="<?php echo base_url('images');?>/Featured-img-19.png" alt="Classified Plus"> </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between ">
              <div class="heading"> <a href="#">Baby products</a> </div>
              <div class="book-mark"><a href="#"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p>Bed sheet for sele</p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="#"><i class="fa fa-map-marker"></i> East 7th street 98 </a></li>
                <li><a href="#"><i class="fa fa-heart-o"></i> Save</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- End top_listings --> 

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
function show_image(e){
	var img = document.getElementById('img-fluid_'+e+'');
	var url = img.getAttribute('src'); // foo.jpg
	jQuery("#imageID").attr('src', url );    
}

</script>

</body>
</html>