<!DOCTYPE html>
<html>

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootswatch/bootswatch-template.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/font-awesome/css/all.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
</head>

<body>




    <?php $this->load->view('layout/menu'); ?>


    <?php
        echo $content;
        ?>


</body>

</html>