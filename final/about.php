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

include('includes/header.php');

?>

<main>
<h2>Adminer Database</h2>

<p><a href="images/data1.png"><img src="images/data1.png" alt="database of users"></a></p>
<p><a href="images/data2.png"><img src="images/data2.png" alt="database of users"></a></p>
</main>


<!-- end wrapper -->

<?php
include('./includes/footer.php');