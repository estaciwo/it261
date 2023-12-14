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

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$city = '';
$mode = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$city_err = '';
$mode_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {

    if(empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
        } else {
            $first_name = $_POST['first_name'];
        }

    if(empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
        } else {
            $last_name = $_POST['last_name'];
        }

    if(empty($_POST['email'])) {
        $email_err = 'Please enter your email';
            } else {
                $email = $_POST['email'];
            }

    if(empty($_POST['phone'])) {
        $phone_err = 'Please enter your phone number';
    } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
            $phone_err = 'Invalid format!';
            } else {
                $phone = $_POST['phone'];
            }
    }

    if(empty($_POST['city'])) {
        $city_err = 'Please enter your city';
            } else {
                $city = $_POST['city'];
            }

    if(empty($_POST['mode'])) {
        $mode_err = 'Please choose your mode of transit';
            } else {
                $mode = $_POST['mode'];
            }

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to our privacy policy';
        
            } else {
                $privacy = $_POST['privacy'];
            }

    function modes($mode) {
        $my_return='';
        if(!empty($_POST['mode'])) {
            $my_return = implode(', ' , $_POST['mode']);
        }
        return $my_return;
    }

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['city'],
    $_POST['mode'],
    $_POST['privacy'])) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on '.date('m/d/y, h i A');
        $body = '
            First Name: '.$first_name.' '.PHP_EOL.'
            Last Name: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            City: '.$city.' '.PHP_EOL.'
            Mode of Transit: '.modes($mode).' '.PHP_EOL.'
       ';

        $headers = array(
            'From' => 'ustransit@example.com'
        );

        if(!empty(
        $first_name &&
        $last_name &&
        $email &&
        $phone && 
        $city &&
        $mode) &&
        preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

            mail($to, $subject, $body, $headers);
            header('Location:thx.php');
        }
    }
} 
?>

<div id="wrapper"> 

<main>
<h1>Public Transportation Information</h1>

<p>Use the form below to get more information on public transportation in your city.</p>
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>
                <b>Public Transporation Information Form</b>
            </legend>

            <label><b>First Name</b></label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
            <br><span class="error"><?php echo $first_name_err; ?></span>

            <br><label><b>Last Name</b></label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
            <br><span class="error"><?php echo $last_name_err; ?></span>

            <br><label><b>Email</b></label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
            <br><span class="error"><?php echo $email_err; ?></span>

            <br><label><b>Phone</b></label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <br><span class="error"><?php echo $phone_err; ?></span>

            <br><label><b>City</b></label>
            <input type="text" name="city" value="<?php if(isset($_POST['city'])) echo htmlspecialchars($_POST['city']) ;?>">
            <br><span class="error"><?php echo $city_err; ?></span>

            <br><label><b>Choose your transit type:</b></label>
                <ul>
                    <li><input type="checkbox" name="mode[]" value="bus" <?php if (isset($_POST['mode']) && in_array('bus',$mode)) echo 'checked="checked"'; ?>>Bus</li>

                    <li><input type="checkbox" name="mode[]" value="light" <?php if (isset($_POST['mode']) && in_array('light',$mode)) echo 'checked="checked"'; ?>>Light Rail</li>

                    <li><input type="checkbox" name="mode[]" value="subway" <?php if (isset($_POST['mode']) && in_array('subway',$mode)) echo 'checked="checked"'; ?>>Subway</li>

                    <li><input type="checkbox" name="mode[]" value="para" <?php if (isset($_POST['mode']) && in_array('para',$mode)) echo 'checked="checked"'; ?>>Paratransit</li>

                    <li><input type="checkbox" name="mode[]" value="ferry" <?php if (isset($_POST['mode']) && in_array('ferry',$mode)) echo 'checked="checked"'; ?>>Ferry</li>
                </ul>
                <span class="error"><?php echo $mode_err; ?></span>

            <br><label><b>Privacy</b></label>
            <ul>
            <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li>
            </ul>
            <span class="error"><?php echo $privacy_err; ?></span>
            
            <br><input type="submit" value="Send it">

                <p><a href="">Reset</a></p>
                
        </fieldset>
    </form>

</main>
    
</div>

<?php
include('includes/footer.php')
?>