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

<main class="list">
<h2>Major Transit Organizations in the U.S.</h2>
<div>
<?php
$sql = 'SELECT * FROM transit'; 

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <div class="entry"><h3>'.$row['city_name'].': '.$row['transit_org'].'</h3>
                <p>Annual ridership: '.$row['ridership'].'</p>
                <p>Learn more about <a href="city-info.php?id='.$row['city_id'].'">'.$row['transit_org'].'</a>!</p>

        ';
    } // end while loop

} else {
    echo 'Not working';
}

@mysqli_free_result($result);

@mysqli_close($iConn);

?>
</div>
</main>

<!-- end wrapper -->

<?php
include('includes/footer.php');