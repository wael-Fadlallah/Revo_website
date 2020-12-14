<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/bootstrap.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/assets/css/style-starter.css'>
    <link rel='stylesheet' href='<?php echo base_url() ; ?>/style/style.css'>
    <script src='<?php echo base_url() ; ?>/js/jquery.js'></script>
    <script src='<?php echo base_url() ; ?>/js/bootstrap.js'></script>
    <script src='<?php echo base_url() ; ?>/js/popper.js'></script>
    <script src='<?php echo base_url() ; ?>/assets/js/jquery.magnific-popup.min.js' defer></script>
    <script src='<?php echo base_url() ; ?>/assets/js/owl.carousel.js'></script>
   
    <!-- <link href="<?php echo base_url() ; ?>/assets/fonts/Tajawal-Regular.ttf" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300&display=swap" rel="stylesheet"> 
	<meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <div style="display:none" id="usersession"><?php echo $this->session->userdata('user');?></div>
 </head>
<br>
<body dir='rtl'>
    
<div class="w3l-bootstrap-header fixed-top">
  <nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
      <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-diamond"></span>REVO</a> -->
      <!-- if logo is image enable this    -->
        <a class="navbar-brand" href="<?php echo base_url('/');?>">
            <img src="<?php echo base_url('/assets/images/Logo_for_website-01.png');?>"  alt="Your logo" title="Your logo" style="height:60px;" />
        </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="font-size:20px">
          <li class="nav-item active">
            <a class="nav-link text-center" id="index" href="<?php echo base_url('main/index');?>">الرئيسية</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-center" id="about" href="<?php echo base_url('main/about');?>">عن ريفو</a>
          </li>
          <li class="nav-item"> 
            <a class="nav-link text-center" id="contact" href="<?php echo base_url('main/contact');?>">اتصل بنا</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<!-- index-block1 -->


<script>
  $(document).ready(function(){
    var url = '<?php echo base_url();?>';
if(window.location.href === url || window.location.href === url+'main/index'){
  $('#index').css('color','#bf5252');
}
if(window.location.href === url+'main/about'){
  $('#about').css('color','#bf5252');
}
if(window.location.href === url+'main/contact'){
  $('#contact').css('color','#bf5252');
}

  });
</script>