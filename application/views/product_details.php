
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
        <li class="breadcrumb-item"><a href="<?php echo base_url('home');?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo base_url('product_listing');?>">Detail</a></li>
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
                  <div class="warranty d-inline-block">Onsite Assure Warranty</div>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <label class="form-check-label"> </label>
                  <img src="<?php echo base_url('images');?>/insurance.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">SyncNscan Insurance (12 mon.)</div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
		   <div class="detail_prize p-t-10">
		   <?php
				if($this->session->flashdata('failed')){
			?>
				<div class="alert alert-danger"> <strong><?php echo $this->session->flashdata('failed');?></strong> </div>
			<?php
				}
				else if($this->session->flashdata('success')){
			?>
				<div class="alert alert-success"> <strong><?php echo $this->session->flashdata('success');?></strong> </div>
			<?php
				}
			?>
			<form method="POST" action="<?php echo base_url('product_details/check_availability');?>/<?php echo $this->uri->segment(2);?>">
				<ul class="list-unstyled">
				  <li class="d-inline-block pr-3"> Check Availability : </li>
				  <li class="d-inline-block Price_m"><input type="text" class="form-control" placeholder="Enter Pincode" name="pincode"></li>
				  <li class="d-inline-block Price_m"><button type="submit" class="btn btn-info">Check Pincode</button></li>
				</ul>
			</form>
          </div>
		  <div class="detail_prize p-t-10">
            <ul class="list-unstyled">
              <li class="d-inline-block pr-3"> Deal Price : </li>
              <li class="d-inline-block Price_m"> INR <?php echo $fetch_pro_one_image->product_price;?> </li>
            </ul>
          </div>
          
          <div class="detail_btn d-flex m-t-20">
            <button class="btn_chat w-100 text-white mr-3 py-2 border-0"  data-toggle="modal" data-target="#modalForm"><i class="fa fa-comment-o"></i> Call Me back</button>
            <a href="tel:+919007672001" class="btn_chat w-100 text-white py-2 border-0"> <i class="fa fa-phone" style="margin-left:17px;"> +91 9007672001 </i> </a>

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
     <!-- Modal -->
      <div class="modal fade" id="modalForm" role="dialog">
          <div class="modal-dialog">
              <div class="modal-content">
                  <!-- Modal Header -->
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">&times;</span>
                          <span class="sr-only">Close</span>
                      </button>
                      <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
                  </div>
                  <form action="<?php echo base_url('product_details/send_email');?>/<?php echo $this->uri->segment(2);?>" method="POST">
                  <!-- Modal Body -->
                  <div class="modal-body">
                      <p class="statusMsg"></p>
                        <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="Enter your name"/ name="full_name">
                        </div>
                        <div class="form-group">
                            <label for="inputMobile">Mobile</label>
                            <input type="number" class="form-control" id="inputMobile" placeholder="Enter your mobile number" name="mobile"/>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Enter your email"  name="email"/>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea class="form-control" id="inputMessage" placeholder="Enter your message"  name="message"></textarea>
                        </div>
                  </div>
                  <!-- Modal Footer -->
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary submitBtn">SUBMIT</button>
                  </div>
                  </form>
              </div>
          </div>
      </div>
      <!-- MODAL ENDS -->
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

$("#check_avail").mouseleave(function(){
  alert("You entered p1!");
});
</script>

</body>
</html>