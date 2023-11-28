<?php

include('config.php');

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: characters.php');
}

$sql = 'SELECT * FROM characters WHERE character_id = '.$id.' ';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $first_name = stripcslashes($row['first_name']);
        $last_name = stripcslashes($row['last_name']);
        $birthdate = stripcslashes($row['birthdate']);
        $occupation = stripcslashes($row['occupation']);
        $bio = stripcslashes($row['bio']);
        $feedback = '';

    }// close while loop

} else {
    $feedback = 'Also not working!';
}

include('./includes/header.php')

?> 

<main>
<h1>Twin Peaks: Further Details!</h1>
<div class=intros>
<h2>Even more about <?php echo $first_name; ?></h2>
<ul>
    <?php
        echo '
        <li><b>First Name:</b> '.$first_name.'</li>
        <li><b>Last Name:</b> '.$last_name.'</li>
        <li><b>Birthdate:</b> '.$birthdate.'</li>
        <li><b>Occupation:</b> '.$occupation.'</li>
        ';
    ?>
</ul>
<p>
    <?php echo $bio; ?>
</p>
<p>Back to the <a href="characters.php">main page</a></p>
</div>
</main>

<aside>
<h3><?php echo $first_name . ' ' . $last_name ; ?></h3>
<figure>
    <img src="./images/twin<?php echo $id ;?>.jpg" alt="<?php echo $first_name; ?>">
    <figcaption>
        <?php echo $occupation ;?>
    </figcaption>
</figure>

</aside>
<!-- end wrapper -->

<?php

@mysqli_free_result($result);

@mysqli_close($iConn);

include('./includes/footer.php');