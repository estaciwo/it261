<?php

include('config.php');
include('./includes/header.php');

?>

<main>
<h1>CHARACTERS OF TWIN PEAKS</h1>
<div class="intros">
<?php
$sql = 'SELECT * FROM characters'; 

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo '
            <div class="entry"><h2>'.$row['first_name'].' '.$row['last_name'].'</h2>
            <ul>
                <li>Birthdate: '.$row['birthdate'].'</li>
                <li>Occupation: '.$row['occupation'].'</li>
            </ul>
            <p><a href="character-bio.php?id='.$row['character_id'].'">Click here</a> to learn more about '.$row['first_name'].'</p>
            </div>
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

<aside>
    <img src="images/welcome_sign.jpg" alt="welcome to twin peaks sign">
</aside>

<!-- end wrapper -->

<?php
include('./includes/footer.php');