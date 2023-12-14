<?php

session_start();
include('includes/config.php');

if(!isset($_SESSION['username'])) {

    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php'); ?>

<div id="wrapper">

<div id="hero">
<?php 

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
$photos[5] = 'photo6';
$photos[6] = 'photo7';
$photos[7] = 'photo8';
$photos[8] = 'photo9';
$photos[9] = 'photo10';

$i = rand(0,9);

$selected_image = ''.$photos[$i].'.jpg';

echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">'; ?>

</div>
<!-- end hero -->

<?php 
include('./includes/footer.php');