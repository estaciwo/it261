<?php
include('config.php');
include('./includes/header.php'); 

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$privacy = '';
$utility = '';
$neighb = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$privacy_err = '';
$utility_err = '';
$neighb_err = '';

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

    if(empty($_POST['privacy'])) {
        $privacy_err = 'Please agree to our privacy policy';
        
            } else {
                $privacy = $_POST['privacy'];
            }

    if(empty($_POST['utility'])) {
        $utility_err = 'Please choose your pickup option';
            } else {
                $utility = $_POST['utility'];
            }

    if(empty($_POST['neighb'])) {
        $neighb_err = 'Please choose your neighborhood';
            } else {
                $neighb = $_POST['neighb'];
            }

    function utilities($utility) {
        $my_return='';
        if(!empty($_POST['utility'])) {
            $my_return = implode(', ' , $_POST['utility']);
        }
        return $my_return;
    }

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['privacy'],
    $_POST['utility'],
    $_POST['neighb'],)) {

        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email on '.date('m/d/y, h i A');
        $body = '
            First Name: '.$first_name.' '.PHP_EOL.'
            Last Name: '.$last_name.' '.PHP_EOL.'
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Utility Pickup: '.utilities($utility).' '.PHP_EOL.'
            Neighborhood: '.$neighb.' '.PHP_EOL.'
       ';

    $headers = array(
        'From' => 'joesjunk@example.com'
    );

    if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $phone && 
    $utility &&
    $neighb) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }
    }
} 
?>

<div id="wrapper"> 

<main class="junk">
<h1 class="junk">Joe's Junk Pickup</h1>

<p>Use the form below to get a cost estimate on a junk pickup in the city of Seattle.</p>
    
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>
                <b>Joe's Junk Pickup Estimate Form!</b>
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

            <br><label><b>Privacy</b></label>
            <ul>
            <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"'; ?>>Yes</li>
            </ul>
            <span class="error"><?php echo $privacy_err; ?></span>

            <br><label><b>Choose your pick-up type:</b></label>
                <ul>
                    <li><input type="checkbox" name="utility[]" value="recycle" <?php if (isset($_POST['utility']) && in_array('recycle',$utility)) echo 'checked="checked"'; ?>>Recycling</li>

                    <li><input type="checkbox" name="utility[]" value="garb" <?php if (isset($_POST['utility']) && in_array('garb',$utility)) echo 'checked="checked"'; ?>>Garbage</li>

                    <li><input type="checkbox" name="utility[]" value="yard" <?php if (isset($_POST['utility']) && in_array('yard',$utility)) echo 'checked="checked"'; ?>>Yard Waste</li>

                    <li><input type="checkbox" name="utility[]" value="large" <?php if (isset($_POST['utility']) && in_array('large',$utility)) echo 'checked="checked"'; ?>>Large Item</li>
                </ul>
                <span class="error"><?php echo $utility_err; ?></span>

            <br><label><b>Neighborhoods</b></label>
                <select name="neighb">
                    <option value="" <?php if(isset($_POST['neighb']) && is_null($_POST['neighb'])) echo 'selected="unselected"';?>>Choose your neighborhood!</option>

                    <option value="dtn" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "dtn") echo 'selected="selected"';?>>Downtown</option>

                    <option value="cap" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "cap") echo 'selected="selected"';?>>Capitol Hill</option>

                    <option value="cen" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "cen") echo 'selected="selected"';?>>Central District</option>

                    <option value="que" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "que") echo 'selected="selected"';?>>Queen Anne</option>

                    <option value="uni" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "uni") echo 'selected="selected"';?>>University District</option>

                    <option value="bal" <?php if(isset($_POST['neighb']) && $_POST['neighb'] == "bal") echo 'selected="selected"';?>>Ballard</option>
                </select>
                <br><span class="error"><?php echo $neighb_err; ?></span>

            <br><input type="submit" value="Send it">

                <p><a href="">Reset</a></p>
                
        </fieldset>
    </form>

</main>
    <aside class="junk">
    <h3>Joe's Junk Pickup</h3>
    <img src="images/truck.jpg" alt="toy garbage truck">
    <p>310 Royal Brougham Way</p>
    <p>Seattle, WA 98110</p>
    </aside>
</div>

<?php
include('./includes/footer.php')
?>