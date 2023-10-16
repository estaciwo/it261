<?php

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

// beginning of switch for homework 3!
date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
    case 'Sunday' : 
        $weekday = '<h2>Software Sunday!</h2>';
        $name = '<h3>Serum software synthesizer</h3>';
        $pic = 'serum.jpg';
        $alt = 'Serum Software Synthesizer';
        $border = 'turquoise';
        $content = '<p>A <b>software synthesizer</b> or softsynth is a computer program that generates digital audio, usually for music.</p>';
        break;

    case 'Monday' : 
        $weekday = '<h2>Moog Monday!</h2>';
        $name = '<h3>Robert Moog</h3>';
        $pic = 'moog.jpg';
        $alt = 'Robert Moog';
        $border = 'pink';
        $content = '<p><b>Robert Arthur Moog</b> was an American engineer and electronic music pioneer. He was the founder of the synthesizer manufacturer Moog Music and the inventor of the first commercial synthesizer, the Moog synthesizer, which debuted in 1964.</p>';
        break;

    case 'Tuesday' : 
        $weekday = '<h2>Techno Tuesday!</h2>';
        $name = '<h3>The Belleville Three</h3>';
        $pic = 'belleville.jpg';
        $alt = 'The Belleville Three';
        $border = 'lightblue';
        $content = '<p><b>The Belleville Three</b> are three American musicians, Juan Atkins, Derrick May, and Kevin Saunderson, who are credited with inventing the Detroit Techno genre in Belleville, MI.</p>';
        break;

    case 'Wednesday' : 
        $weekday = '<h2>Wendy Wednesday!</h2>';
        $name = '<h3>Wendy Carlos</h3>';
        $pic = 'wendy.jpg';
        $alt = 'Wendy Carlos';
        $border = 'orange';
        $content = '<p><b>Wendy Carlos</b> is an American musician and composer best known for her electronic music and film scores.</p>';
        break;
            
    case 'Thursday' : 
        $weekday = '<h2>Thaddeus Thursday!</h2>';
        $name = '<h3>Thaddeus Cahill</h3>';
        $pic = 'thaddeus.jpg';
        $alt = 'Thaddeus Cahill';
        $border = 'yellow';
        $content = '<p>In 1895 <b>Thaddeus Cahill</b> submitted his first patent for the Telharmonium, “The Art of and Apparatus for Generating and Distributing Music Electrically.” The Telharmonium can be considered the first significant electronic musical instrument and was a method of electro-magnetically synthesising and distributing music over the new telephone networks of Victorian America.</p>';
        break;

    case 'Friday' : 
        $weekday = '<h2>FM Friday!</h2>';
        $name = '<h3>FM synthesis algorithms</h3>';
        $pic = 'algorithms.jpg';
        $alt = 'FM synthesis algorithms';
        $border = 'red';
        $content = '<p><b>F</b>requency <b>M</b>odulation synthesis is a form of sound synthesis whereby the frequency of a waveform is changed by modulating its frequency with a modulator. The frequency of an oscillator is altered in accordance with the amplitude of a modulating signal. FM synthesis can create both harmonic and inharmonic sounds.</p>';
        break;

    case 'Saturday' : 
        $weekday = '<h2>Suzanne Saturday!</h2>';
        $name = '<h3>Suzanne Ciani</h3>';
        $pic = 'ciani.jpg';
        $alt = 'Suzanne Ciani';
        $border = 'purple';
        $content = '<p><b>Suzanne Ciani</b> is an American musician, sound designer, composer, and record label executive who found early success in the 1970s with her electronic music and sound effects for films and television commercials.</p>';
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body;?>" style="background:<?php echo $body; ?>">
<header style="background:<?php echo $headerbg; ?>">
    <div class="inner-header">
        <a href="index.php">

            <img id="logo" src="images/logo.png" alt="logo">
        </a>
    <!-- <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav> -->
    <nav>
        <ul>
        <?php
        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '<li><a style="color:red;" href="'.$key.'">'.$value.'</a></li>';
            } else {
                echo '<li><a style="color:green" href="'.$key.'">'.$value.'</a></li>';
            }
            } // end foreach
        ?>
        </ul>
    </nav>
    </div>
<!-- end inner header -->
</header>