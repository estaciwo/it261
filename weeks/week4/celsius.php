<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Celsius Form Converter</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">
    <form action="" method="post">
        <fieldset>
        <label>Enter your celsius value</label>
        <input type="number" name="cel">
        <input type="submit" value="Convert it!">
        </fieldset>
    <p><a href="">Reset</a></p>
    </form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(isset($_POST['cel'])) {
    $cel = $_POST['cel'];
    // we will use a new function to make sure that our values are integers intval()
    $cel_int = intval($cel);
    $far = ($cel_int * 9/5) + 32;

        // if the end user does not enter a value, say something

        if($cel == NULL) {
            echo '<p class="error">Please fill out the Celsius Value!</p>';
        } else if($far <= 32) {
            echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and it is pretty cold out there!</p>';
        } else if ($far <= 45) {
            echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and it is getting warmer!</p>';
        } else if ($far <= 60) {
            echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and it is sweater weather!</p>';
        } else if ($far <= 75) {
        echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and we\'re going to the park!</p>';
        } else if ($far <= 90) {
            echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and we may be going to the beach!</p>';
        } else {
            echo '<p>'.$cel_int.' degrees celsius equals '.$far.' degrees fahrenheit<br> and we are  at the beach!</p>';
        }

    } // end isset

} // end post

?>
</body>
</html>