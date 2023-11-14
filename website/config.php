<?php

ob_start(); // removes header errors until all PHP is processed?

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' : 
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;

    case 'about.php' : 
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php' : 
        $title = 'Daily page of our Website Project';
        $headerbg = "black";
        $body = 'daily inner';
        $dailypad = '10px';
        $mainMargin = '20px 0  40px 0';
        $main = '#f0f0f0';
        $body = '#f0f0f0';
        break;

    case 'project.php' : 
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;

    case 'contact.php' : 
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;

    case 'gallery.php' : 
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;

    case 'thx.php' : 
    $title = 'Thank You! | Seattle Utilities';
    $body = 'thx';
    break;
}

// our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a style="color:red;" href="'.$key.'">'.$value.'</a></li>';
        } else {
            $my_return .= '<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>';
        }
    } //end foreach
    return $my_return;
} // end function

// beginning of switch for homework 3!
date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' : 
        $weekday = 'Software Sunday!';
        $dayAside = 'Sunday';
        $name = 'Serum software synthesizer';
        $pic = 'serum.jpg';
        $alt = 'Serum Software Synthesizer';
        $border = 'turquoise';
        $content = 'A <b>software synthesizer</b> or softsynth is a computer program that generates digital audio, usually for music.';
        break;

    case 'Monday' : 
        $weekday = 'Moog Monday!';
        $dayAside = 'Monday';
        $name = 'Robert Moog';
        $pic = 'moog.jpg';
        $alt = 'Robert Moog';
        $border = 'pink';
        $content = '<b>Robert Arthur Moog</b> was an American engineer and electronic music pioneer. He was the founder of the synthesizer manufacturer Moog Music and the inventor of the first commercial synthesizer, the Moog synthesizer, which debuted in 1964.';
        break;

    case 'Tuesday' : 
        $weekday = 'Techno Tuesday!';
        $dayAside = 'Tuesday';
        $name = 'The Belleville Three';
        $pic = 'belleville.jpg';
        $alt = 'The Belleville Three';
        $border = 'lightblue';
        $content = '<b>The Belleville Three</b> are three American musicians, Juan Atkins, Derrick May, and Kevin Saunderson, who are credited with inventing the Detroit Techno genre in Belleville, MI.';
        break;

    case 'Wednesday' : 
        $weekday = 'Wendy Wednesday!';
        $dayAside = 'Wednesday';
        $name = 'Wendy Carlos';
        $pic = 'wendy.jpg';
        $alt = 'Wendy Carlos';
        $border = 'orange';
        $content = '<b>Wendy Carlos</b> is an American musician and composer best known for her electronic music and film scores.';
        break;
            
    case 'Thursday' : 
        $weekday = 'Thaddeus Thursday!';
        $dayAside = 'Thursday';
        $name = 'Thaddeus Cahill';
        $pic = 'thaddeus.jpg';
        $alt = 'Thaddeus Cahill';
        $border = 'yellow';
        $content = 'In 1895 <b>Thaddeus Cahill</b> submitted his first patent for the Telharmonium, “The Art of and Apparatus for Generating and Distributing Music Electrically.” The Telharmonium can be considered the first significant electronic musical instrument and was a method of electro-magnetically synthesising and distributing music over the new telephone networks of Victorian America.';
        break;

    case 'Friday' : 
        $weekday = 'FM Friday!';
        $dayAside = 'Friday';
        $name = 'FM synthesis';
        $pic = 'algorithms.jpg';
        $alt = 'FM synthesis algorithms';
        $border = 'red';
        $content = '<b>F</b>requency <b>M</b>odulation synthesis is a form of sound synthesis whereby the frequency of a waveform is changed by modulating its frequency with a modulator. The frequency of an oscillator is altered in accordance with the amplitude of a modulating signal. FM synthesis can create both harmonic and inharmonic sounds.';
        break;

    case 'Saturday' : 
        $weekday = 'Suzanne Saturday!';
        $dayAside = 'Saturday';
        $name = 'Suzanne Ciani';
        $pic = 'ciani.jpg';
        $alt = 'Suzanne Ciani';
        $border = 'purple';
        $content = '<b>Suzanne Ciani</b> is an American musician, sound designer, composer, and record label executive who found early success in the 1970s with her electronic music and sound effects for films and television commercials.';
        break;
}

// my form's PHP

$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$gender = '';
$phone = '';
$comments = '';
$privacy = '';
$regions = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$gender_err = '';
$phone_err = '';
$comments_err = '';
$privacy_err = '';
$regions_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {

// if inputs are empty, we will declare a statement else we will assign the $_POSTS to a variable
// $wines = $_POST['wines']

    if(empty($_POST['wines'])) {
    // say something or do something
    $wines_err = 'What... no wines?';

        } else {
            $wines = $_POST['wines'];
        }

    if(empty($_POST['first_name'])) {
        // say something or do something
        $first_name_err = 'Please fill in your first name';
        
            } else {
                $first_name = $_POST['first_name'];
            }

    if(empty($_POST['last_name'])) {
        // say something or do something
        $last_name_err = 'Please fill in your last name';
        
            } else {
                $last_name = $_POST['last_name'];
            }

    if(empty($_POST['email'])) {
        // say something or do something
        $email_err = 'Please fill in your email';
        
            } else {
                $email = $_POST['email'];
            }

    if(empty($_POST['gender'])) {
        // say something or do something
        $gender_err = 'Please check your gender';
        
            } else {
                $gender = $_POST['gender'];
            }

    if(empty($_POST['phone'])) {
        // say something or do something
        $phone_err = 'Please fill in your phone number';
        
            } else {
                $phone = $_POST['phone'];
            }

    if(empty($_POST['comments'])) {
        // say something or do something
        $comments_err = 'We value your input';
        
            } else {
                $comments = $_POST['comments'];
            }

    if(empty($_POST['privacy'])) {
        // say something or do something
        $privacy_err = 'You must agree to receive spam email!';
        
            } else {
                $privacy = $_POST['privacy'];
            }

    if(empty($_POST['regions'])) {
        // say something or do something
        $regions_err = 'Please choose your region';
        
            } else {
                $regions = $_POST['regions'];
            }
    
} // end server request method? should be at very bottom?

function my_wines($wines) {
    $my_return='';
    if(!empty($_POST['wines'])) {
        $my_return = implode(',' , $_POST['wines']);
    }
    return $my_return;
} // end my_wines function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {

$to = 'staciwo@gmail.com';
$subject = 'Test email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Wines: '.my_wines($wines).' '.PHP_EOL.'
Region: '.$regions.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'

';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);

// we will be adding an if statement - that this email form will work only if all the fields are filled out!!!

if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $gender && 
    $phone && 
    $wines &&
    $regions && 
    $comments)) {

        mail($to, $subject, $body, $headers);
        header('Location:thx.php');
    }

// don't forget, you must upload your form onto the server to receive an email!!!


} // end isset
