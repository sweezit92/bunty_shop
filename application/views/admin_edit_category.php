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
        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50 m-b-30">
  
    
  <div class="container">
    <div class="row">
      <?php
	  include("common/admin_sidebar.php");
	  ?>
      <div class="col-md-9">
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
            <h3> Edit Category </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
              <form method="post" action="<?php echo base_url('admin_edit_category/update_category/');?><?php echo $this->uri->segment(2);?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Category</label>
                  <input type="text" class="form-control" name="cat_name" value="<?php echo $fetch_cat->category_name;?>" required>
                </div>
				        <div class="form-group">
                  <label>Add Image</label>
                  <p>&nbsp;</p>
                  <img src="<?php echo base_url('uploads/');?><?php echo $fetch_cat->category_image;?>" height="100">
				  <input type="hidden" name="img_name" value="<?php echo $fetch_cat->category_image;?>">
                  <p>&nbsp;</p>
                  <input type="file" class="form-control" name="image">
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
</body>
</html>