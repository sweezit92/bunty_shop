
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo.png">
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
        <li class="breadcrumb-item active" aria-current="page"><?php echo $fetch_pro_one_image->category_name;?></li>
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
        <div class="detail_box"><img class="img-fluid" id="imageID" src="<?php echo base_url('uploads');?>/<?php echo $fetch_pro_one_image->image_name;?>" alt="Classified Plus" style="height:500px;width:100%;">
          <div class="m-t-20">
            <ul class="owl-carousel list-unstyled m-b-0" id="product_slider">
        			<?php
        			   foreach($fetch_pro_data AS $pro_data){
        			?>
        				<li> <img id="img-fluid_<?php echo $pro_data->image_id;?>" class="img-fluid"  src="<?php echo base_url('uploads');?>/<?php echo $pro_data->image_name;?>" alt="slide <?php echo $pro_data->image_id;?>" onclick="show_image(<?php echo $pro_data->image_id;?>);" style="height:100px;"> </li>
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
            <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><h3> <?php echo $fetch_pro_one_image->product_name;?></h3></li>
                <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-clock-o">&nbsp;<span><?php echo date('d/m/Y',$fetch_pro_one_image->product_date);?></span></i></a> </li>
              </ul>
          </div>
          <p> <?php echo $fetch_pro_one_image->product_desc;?></p>
          <?php
            if($fetch_pro_one_image->category_name == 'Services'){
          ?>
          <div class="detail_bottum m-t-15">
            <div class="row">
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <label class="form-check-label"> </label>
                  <img src="<?php echo base_url('images');?>/warrenty.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">Onsite Assure Warranty*<br>
                    $15 (6 months)</div>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <label class="form-check-label"> </label>
                  <img src="<?php echo base_url('images');?>/insurance.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">SyncNscan Insurance (12 mon.)<br>
                    For just $50</div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
          <div class="detail_prize p-t-10">
            <ul class="list-unstyled">
              <li class="d-inline-block pr-3"> Deal Price : </li>
              <li class="d-inline-block Price_m"> INR <?php echo $fetch_pro_one_image->product_price;?> </li>
            </ul>
          </div>
          <div class="detail_btn d-flex m-t-20">
            <!-- <button class="btn_chat w-100 text-white mr-3 py-2 border-0" type="submit" value="button"><i class="fa fa-comment-o"></i> chat</button> -->
            <button class="btn_chat w-100 text-white py-2 border-0" type="submit" value="button"> <i class="fa fa-phone"></i> +91 9007672001 </button>
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
          <?php echo $fetch_pro_one_image->product_desc;?>
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
        <h2 class="title">Related Products</h2>
      </div>
    </div>
    <!-- Row  -->
    
    <div class="row">
      <?php
        foreach($fetch_related_data AS $each_related_data){
      ?>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> 
            <?php
              $product_id = $each_related_data->product_id;
              $this->load->model('product_details_m');
              $fetch_image = $this->product_details_m->fetch_image_product($product_id);
            ?>
            <img class="img-fluid rounded-top" src="<?php echo base_url('uploads');?>/<?php echo $fetch_image->image_name;?>" alt="Classified Plus" style="height:250px;">
            <!--<div class="featured-new bg_warning1"> <a href="#"> New </a> </div>-->
          </div>
          <div class="featured-text">
            <div class="text-stars m-t-5">
              <a href="<?php echo base_url("product_details");?>/<?php echo $each_related_data->product_id;?>"><h3 class="m-t-10" style="font-size:18px;">
                <?php 
                  $pro_name = $each_related_data->product_name;
                  $trim_pro_name = substr($pro_name,0,25);
                  echo $trim_pro_name;
                  echo "...";
                ?>
              </h3></a>
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><span style="font-size:13px;"><?php echo date('d/m/Y',$each_related_data->product_date);?></span></li>
                <li class="text-stars"><strong>INR <?php echo $each_related_data->product_price;?></strong></li>
              </ul>
            </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="#"><i class="fa fa-phone"></i> 123 456 789 </a></li>
                <li class="text-stars"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <?php
        }
      ?>
     <!------------
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
      </div>-->
  </div>
</section>
<!-- End top_listings --> 

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
function show_image(e){
	var img = document.getElementById('img-fluid_'+e+'');
	var url = img.getAttribute('src'); // foo.jpg
	jQuery("#imageID").attr('src', url );    
}

</script>

</body>
</html>