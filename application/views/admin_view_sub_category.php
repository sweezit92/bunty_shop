
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
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
        <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50">
  <div class="container">
    <div class="row">
      <?php
	  include("common/admin_sidebar.php");
	  ?>
      <div class="col-md-9">
        <div class="dashboard_main">
          <div class="dashboard_heding">
            <h3> Subcategories Listing </h3>
          </div>
          <div class="row m-t-15">
            <div id="recent-transactions" class="col-12"> <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements"> </div>
              <div class="table">
                <table class="table table-xl mb-0 table-responsive">
                  <thead>
                    <tr>
                      <th class="border-top text-capitalize">Serial No. </th>
                      <th class="border-top text-capitalize">category </th>
					            <th class="border-top text-capitalize">subcategory </th>
                      <th class="border-top text-capitalize">Added Date </th>
                      <th class="border-top text-capitalize">action</th>
                    </tr>
                  </thead>
                  <tbody>
  				  	     <?php
                   $i = 1;
  					       foreach($get_sub_cat as $fetch_sub_cat){
  					       ?>
                    <tr>
                      <td class="text-truncate"><?php echo $i;?></td>
          					  <td class="text-truncate"><?php echo $fetch_sub_cat->category_name;?></td>
          					  <td class="text-truncate"><?php echo $fetch_sub_cat->sub_category_name;?></td>
                      <td class="text-truncate"><?php echo date('d/m/Y',$fetch_sub_cat->sub_category_date);?></td>
                      <td class="text-truncate">
                        <a href="<?php echo base_url('admin_view_sub_category/');?><?php echo $fetch_sub_cat->sub_category_id;?>"> <i class="fa fa-pencil"></i> </a>
                        <a href="<?php echo base_url('admin_view_sub_category/delete_cat/');?><?php echo $fetch_sub_cat->sub_category_id;?>"> <i class="fa fa-trash"></i> </a>
                      </td>
                    </tr>
					         <?php 
                   $i++;
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
<script src="<?php echo base_url('js');?>/jquery-3.3.1.min.js"></script> 
<script src="<?php echo base_url('js');?>/popper.min.js"></script> 
<script src="<?php echo base_url('js');?>/bootstrap.min.js"></script> 
<script src="<?php echo base_url('js');?>/owl.carousel.min.js"></script> 
<script src="<?php echo base_url('js');?>/custom.js"></script>
</body>
</html>