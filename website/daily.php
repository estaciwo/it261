<?php
include('./includes/header.php')
?>

<main style="background:<?php echo $main; ?>; margin:<?php echo $mainMargin; ?>; border: 10px solid <?php echo $border; ?>; padding: <?php echo $dailypad; ?>">
<h1><i>DAILY SYNTHESIZER HISTORY</i></h1>
<h2><?php echo $weekday; ?></h2>
<p><?php echo $content; ?></p>
    <h2>Want to learn more about electronic music?</h2>
        <ul style="list-style-type:none;">
            <li><a href="daily.php?today=Sunday">Sunday</a></li>
            <li><a href="daily.php?today=Monday">Monday</a></li>
            <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
            <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
            <li><a href="daily.php?today=Thursday">Thursday</a></li>
            <li><a href="daily.php?today=Friday">Friday</a></li>
            <li><a href="daily.php?today=Saturday">Saturday</a></li>
        </ul>
</main>

<aside style="background:<?php echo $main; ?>; margin:<?php echo $mainMargin; ?>; border: 10px solid <?php echo $border; ?>; padding: <?php echo $dailypad; ?>">
<h2><?php echo $dayAside; ?></h2>
<h3><?php echo $name; ?></h3>
<img src="images/<?php echo $pic ;?>" alt="<?php echo $alt ;?>">

</aside>
<?php
include('./includes/footer.php')
?>