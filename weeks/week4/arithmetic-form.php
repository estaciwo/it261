<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Our Arithmetic Form</h1>
    <form action="" method="post">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">

            <label>Phone</label>
            <input type="tel" name="phone">

            <label>How many Lattes?</label>
            <input type="number" name="lattes">

            <label>How many Cappucinos?</label>
            <input type="number" name="cappucinos">

            <label>How many Americanos?</label>
            <input type="number" name="americanos">

            <label>Special Requests?</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Send my order">
        </fieldset>
    </form>

    <p><a href="">Reset</a></p>

    <?php
    // name, phone, lattes, cappucinos, americanos, comments

    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');

    if(isset($_POST['name'],
        $_POST['phone'],
        $_POST['lattes'],
        $_POST['cappucinos'],
        $_POST['americanos'],
        $_POST['comments']
    )) {
        if(empty($_POST['name'] &&
        $_POST['phone'] &&
        $_POST['lattes'] &&
        $_POST['cappucinos'] &&
        $_POST['americanos'] &&
        $_POST['comments']
        )) {
            echo '<p class="error">Please fill out all of the fields</p>';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $lattes = $_POST['lattes'];
            $cappucinos = $_POST['cappucinos'];
            $americanos = $_POST['americanos'];
            $comments = $_POST['comments'];
            $total = $lattes + $cappucinos + $americanos;

            // if and elseif statement regarding our time

            if($our_time <= 11) {
                $our_time = "Good Morning";
            } elseif ($our_time <= 17) {
                $our_time = "Good Afternoon";
            } else {
                $our_time = "Good Evening";
            }

            echo '
            <div class="box">
            <h2>'.$our_time.' '.$name.'!</h2>
            <p>We have texted your order to this <b>number:</b> '.$phone.' totaling '.$total.' beverages:</p>
            <ul>
                <li>'.$lattes.' Lattes</li>
                <li>'.$cappucinos.' Cappucinos</li>
                <li>'.$americanos.' Americanos</li>
            </ul>
            <p>And this is your special <b>request:</b> '.$comments.'</p>
            <p>Thank you for choosing our establishment!</p>
            </div>
            ';
        }

    } // end isset
?>
</body>
</html>