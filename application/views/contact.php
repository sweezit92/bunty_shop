
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
        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->



<section id="Contact_form">
  <div class="container">
    <div class="contacts_mape">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1229.5864897864183!2d75.76904979762698!3d26.886852269789564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1499667244188" allowfullscreen="" width="1170" height="512"></iframe>
        </div>
      </div>
    </div>
    <div class="contacts_bottom">
      <div class="row">
        <div class="col-lg-9 col-md-9 feature_box single-blog-post">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-left">
              <h2 class="title">Contact Form</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
             <div class="row">
              <div class="col-md-12">
                <form method="post" class="m-t-40">
                  <div class="row">
                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                      <input class="form-control" id="name" name="name" placeholder="Full Name" type="text">
                    </div>
                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                      <input class="form-control" name="Email" placeholder="Email" type="text">
                    </div>
                    <div class="form-group col-md-4 col-sm-12 col-xs-12">
                      <input class="form-control" id="Subject" name="Subject" placeholder="Subject" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <div class="input-group">
                        <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                      <button class="btn btn-primary btn-skin" name="submit" type="submit"> SUBMIT NOW</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 feature_box">
          <div class="row justify-content-center">
            <div class="col-lg-12 text-left">
              <h2 class="title">Get In Touch</h2>
              
            </div>
          </div>
          <div class="row m-t-30">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-md-12  col-sm-12">
                <p class=" subtitle">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                  <div class="card">
                    <div class="card-body d-flex">
                      <div class="icon-space align-self-top"> <i class="fa fa-map-marker" aria-hidden="true"></i> </div>
                      <div class="align-self-center">
                        <h5>Address : </h5>
                        <p class="m-t-10">Level 13, 2 Elizabeth St,
                          Lorem Ipsum is simply dummy text </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12  col-sm-12">
                  <div class="card">
                    <div class="card-body d-flex">
                      <div class="icon-space align-self-top"> <i class="fa fa-envelope-o" aria-hidden="true"></i> </div>
                      <div class="align-self-center">
                        <h5>Have any questions? </h5>
                        <p class="m-t-10">Support@themes.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12  col-sm-12">
                  <div class="card">
                    <div class="card-body d-flex">
                      <div class="icon-space align-self-top"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                      <div class="align-self-center">
                        <h5>Call us &amp; Hire us </h5>
                        <p class="m-t-10"> +01 (0) 23456 7891</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12  col-sm-12">
                  <div class="card">
                    <div class="card-body d-flex">
                      <div class="icon-space align-self-top"> <i class="fa fa-fax" aria-hidden="true"></i> </div>
                      <div class="align-self-center">
                        <h5>Have any questions? </h5>
                        <p class="m-t-10">Support@themes.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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