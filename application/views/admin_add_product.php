
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
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3> Add Product </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
              <h3>Product detail </h3>
              <form>
                <div class="form-group selectdiv">
                  <label>category</label>
                  <select class="form-control">
                    <option>Select a Category</option>
                    <option>Electronics</option>
                    <option>Foods & Vegetables</option>
                    <option>Fashion</option>
                    <option>Jewellery</option>
                  </select>
                </div>
                <div class="form-group selectdiv">
                  <label>subcategory</label>
                  <select class="form-control">
                    <option>Select a Subcategory</option>
                    <option>Mobile Case</option>
                    <option>AC</option>
                    <option>Cloths</option>
                    <option>Necklace</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>price</label>
                  <input type="text"  class="form-control" placeholder="Ad your price">
                </div>
                
                <div class="img_browse">
                  <label>Photos for your Product</label>
                  <div class="form-group">
                    <div class="tg-fileuploadlabel">
                      <label>Please add images of your ad</label>
                      <button class="form-control-file text-capitalize" type="submit" value="button">Select Files</button>
                      <span>Maximum upload file size: 500 KB</span> </div>
                  </div>
                </div>
                
                <div class="ad_description">
                  <label>Add Details</label>
                  <div class="form-group">
                    <div class="ad_description_type">
                      <div class="note-editor">
                        <div class="note-toolbar btn-toolbar">
                          <div class="form-group selectdiv m-0">
                            <select class="form-control">
                              <option>Paragraph</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                          <div class="note-style btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-bold"></i></button>
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-italic"></i></button>
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-underline"></i></button>
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-text-width"></i></button>
                          </div>
                          <div class="note-para btn-group border-left border-right">
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-list-ul"></i></button>
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-list-ol"></i></button>
                          </div>
                          <div class="note-height btn-group">
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-chain-broken"></i></button>
                            <button type="button" class="btn btn-default btn-sm btn-small"><i class="fa fa-link"></i></button>
                          </div>
                        </div>
                        <textarea class="note-codable"></textarea>
                      </div>
                    </div>
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