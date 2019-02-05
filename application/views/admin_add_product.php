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
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo base_url('css');?>/bootstrap-fileupload.min.css" />
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo.png">

<style>
.add_more{
	padding: 6px 20px 8px 20px !important;
    color: white !important;
    font-weight: bold !important;
    font-size: 18px !important;
	background: #00a651;
	border-radius: 25px;
	text-decoration : none;
}
.remove{
background: red;
}

</style>
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
        <li class="breadcrumb-item active" aria-current="page">Product</li>
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
	  if($this->session->flashdata('duplicate')){
	  ?>
		<div class="alert alert-danger">
		  <strong><?php echo $this->session->flashdata('duplicate');?></strong>
		</div>
	  <?php
	  }
	  ?>
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3> Add Product </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
              <h3>Product detail </h3>
              <form method="post" enctype="multipart/form-data" action="<?php echo base_url('admin_add_product/insert_product');?>">
                <div class="form-group selectdiv">
                  <label>category</label>
                  <select class="form-control" name="cat_id">
                    <option selected disabled>Select a category</option>
                    <?php
                    foreach ($get_cat as $fetch_cat) {
                    ?>
                    <option value="<?php echo $fetch_cat->category_id;?>"><?php echo $fetch_cat->category_name;?></option>
                    <?php
                    }
                    ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" name="product_name" class="form-control" placeholder="Add product name">
                </div>
				
				<div class="form-group  yoo ">
                  <label>Add Image</label>
				  <div class="fileupload fileupload-new" data-provides="fileupload"><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img style="height:150px;" src= "http://via.placeholder.com/190x140" alt=""></div><div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div><div><span class="btn btn-white btn-file" style="margin-left:1px;"><span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span><input type="file" name="userfile[]" class="default"></span></div></div>
                </div>
				<a class="add_more" href="javascript:void(0);" onclick="add_more_image();">Add More</a> 
				<p>&nbsp;</p>
				<div class="form-group">
                  <label>price</label>
                  <input type="number" name="product_price" class="form-control" placeholder="Add your price">
                </div>
                
                <div class="ad_description">
                  <label>Add Details</label>
                  <div class="form-group">
                    <textarea class="form-control" name="desc"></textarea>
                  </div>
                </div>
				<button class="change_btn mt-2 text-capitalize" type="submit" value="button">add product</button>
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
<script>
	CKEDITOR.replace( 'desc' );
	
	

		
</script>

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js"></script> 
<script src="<?php echo base_url('js');?>/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('js');?>/custom.js"></script>
<script src="<?php echo base_url('js');?>/bootstrap-fileupload.min.js"></script>

<script>
function add_more_image()
{
    var htmlz = '<div class="atrri_add_cont"><div class="fileupload fileupload-new" data-provides="fileupload"><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img style="height:150px;" src= "http://via.placeholder.com/190x140" alt=""></div><div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div><div style="margin-bottom: 10px"><span class="btn btn-white btn-file" style="margin-left:1px;"><span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span><input type="file" name="userfile[]" class="default"></span></div><a class="add_more remove" href="javascript:void(0);">Remove</a></div><br/></div>';

         $(".yoo").append(htmlz);
    
    $("body").on("click",".remove",function(){ 
          $(this).parents(".atrri_add_cont").remove();
      });
}
</script>

</body>
</html>