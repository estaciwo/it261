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
<h2><?php echo $weekday; ?>'s highlight on public transportation:</h2>
<h3><?php echo $city; ?></h3>
<p><?php echo $content; ?></p>
        <ul style="list-style-type:none;">
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
</main>

<aside>
<h2><?php echo $weekday; ?></h2>
<img src="images/<?php echo $pic ;?>" alt="<?php echo $alt ;?>">
<h3><?php echo $organization; ?></h3>

</aside>
<?php
include('./includes/footer.php')
?>