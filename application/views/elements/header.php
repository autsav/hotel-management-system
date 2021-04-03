<!DOCTYPE html>
<html lang="en">  
<head>
<title>Hotel Management System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- <link rel="shortcut icon" type="image/jpg" href="<?php echo base_url('images/fav.png')?>"/>

<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" integrity="sha512-gp+RQIipEa1X7Sq1vYXnuOW96C4704yI1n0YB9T/KqdvqaEgL6nAuTSrKufUX3VBONq/TPuKiXGLVgBKicZ0KA==" crossorigin="anonymous" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/adminlte.min.css') ?>" media="screen" title="no title">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" media="screen" title="no title">

<script src="<?php echo base_url('assets/js/jquery-3.1.0.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.0/esm/ionicons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg==" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" integrity="sha512-Zk7h8Wpn6b9LpplWXq1qXpnzJl8gHPfZFf8+aR4aO/4bcOD5+/Si4iNu9qE38/t/j1qFKJ08KWX34d2xmG0jrA==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.1/js/OverlayScrollbars.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js" integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A==" crossorigin="anonymous"></script>


<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" media="screen" title="no title"> -->

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
<link rel="stylesheet" href="https://fonts.google.com/specimen/Bebas+Neue?preview.text_type=custom">
<link rel="stylesheet" href="https://fonts.google.com/specimen/Abel?preview.text_type=custom">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!-- <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/dist/css/adminlte.min.css">
    
   
  <script src="<?php echo base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

  <script src="<?php echo base_url() ?>/assets/plugins/jquery-validation/jquery.validate.js"></script>


<style>
    
.loginpanel, .registerpanel {
    /* border-style: groove; */
    background: #23272a;
    border-radius: 10px;
    border-width: 1px;
    color: black;
    width: 250px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(10, 10, 10, 10);
    text-align: center;
     margin: 17% auto;
     height: 100%;
}
body{
    background: #afb3b93d;;
}


</style>
<!-- Stylesheet file -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />
</head>
<body>

