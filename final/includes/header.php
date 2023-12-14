<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <title><?php echo $title; ?></title>
    <!-- <link href="css/styles.css" type="text/css" rel="stylesheet"> -->
    <link href="css/<?php echo $style ;?>.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body;?>">
<header>
    <div class="inner-header">
        <a href="index.php">
            <h1>U.S. Public Transit</h1>
        </a>
   <?php 

if(isset($_SESSION['username'])) :?>

<div class="welcome-logout">
<h4> Hello
<?php echo $_SESSION['username'] ; ?>
<a href="index.php?logout='1'" > Log out </a>
</h4>



</div>

<?php endif; ?>
    <nav>
        <ul>
        <?php
            echo make_links($nav);
        ?>
        </ul>
    </nav>
    </div>


<!-- end inner header -->
</header>