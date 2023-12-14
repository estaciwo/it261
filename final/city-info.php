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

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: cities.php');
}

$sql = 'SELECT * FROM transit WHERE city_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $city_name = stripcslashes($row['city_name']);
        $transit_org = stripcslashes($row['transit_org']);
        $ridership = stripcslashes($row['ridership']);
        $founding = stripcslashes($row['founding']);
        $descrip = stripcslashes($row['descrip']);
        $feedback = '';

    }// close while loop

} else {
    $feedback = 'Also not working!';
}

include('includes/header.php')

?> 

<main>
<h2>Even more about <?php echo $transit_org; ?></h2>
<div>
<ul>
    <?php
        echo '
        <li><b>City Name:</b> '.$city_name.'</li>
        <li><b>Transit Organization:</b> '.$transit_org.'</li>
        <li><b>Annual Ridership:</b> '.$ridership.'</li>
        <li><b>Year Founded:</b> '.$founding.'</li>
        ';
    ?>
</ul>
<p>
    <?php echo $descrip; ?>
</p>
<p>Back to the <a href="cities.php">cities page</a></p>
</div>
</main>

<aside>
<h3><?php echo $city_name ; ?></h3>
<figure>
    <img src="./images/city<?php echo $id ;?>.jpg" alt="<?php echo $city_name; ?>">
    <figcaption>
        <?php echo $transit_org ;?>
    </figcaption>
</figure>

</aside>
<!-- end wrapper -->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('includes/footer.php');