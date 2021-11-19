<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- TITLE -->
    <title>Index 3</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <meta name="keywords" content="  <?php
  if (!empty($metatags)) {
    echo $metatags;
  }
  ?>">
  

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/frontend/images/favicon.ico">

  <!-- Title -->
  <?php
  if (!empty($title)) {
  ?>
    <title><?php echo $title; ?></title>
  <?php
  }
  ?>
  


  <!-- Stylesheet -->
  <?php
  if (!empty($styles)) {
    foreach ($styles as $style) {
      echo $style;
    }
  }
  ?>

  <style>

    .section-home-guestbook.home-guestbook-style-2.bg-22 {
      background: url("<?php echo base_url();?>assets/devrath/images/home-3/<?php echo $testiBackground[0]->file; ?>");
      background-position: 50% 50%;
      background-attachment: fixed;
      background-repeat: no-repeat;
      background-size: cover;
      z-index: 0;
     }

     
 .bgr-footer {
  background: url('<?php echo base_url();?><?php echo $footer_background; ?>') !important;  
  background-size: cover !important;
  position: relative; 
}




    .bg-10 {
    background-image: url('<?php echo base_url();?>assets/devrath/images/statics/<?php echo $countersbackground[0]->file; ?>') !important;  
    }



  </style>



    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]>
<body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]>
<body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]>
<body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<body> <!--<![endif]-->


<!-- PRELOADER -->
<!-- <div id="preloader">
    <span class="preloader-dot"></span>
</div> -->
<!-- END / PRELOADER -->

<div id="page-wrap" class="bg-white-2">

