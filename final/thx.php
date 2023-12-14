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


<div id="wrapper"> 
    <main class="junk">
    <p>Thank you for your interest in public transit! You will be contacted shortly.</p>
    <p><a href="contact.php"><b>Back to form</b></a></p>
    </main>
</div>

<?php
include('includes/footer.php')
?>