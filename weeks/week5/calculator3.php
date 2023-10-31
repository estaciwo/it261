<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Calculator</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
    <label>Mileage</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">
  
    <input type="submit" value="Show miles!">

    <p><a href="">Reset it!</a></p>
</fieldset>
</form>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['miles'])) {

    echo '<p class="error">Please add your mileage</p>';

} elseif(isset($_POST['miles'])) {
            $miles = $_POST['miles'];

    echo '
        <div class="box">
        <p>You have driven <b>'.$miles.' miles!</b></p>
        </div>
    ';
    }

}   
?>
</body>
</html>