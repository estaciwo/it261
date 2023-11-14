<?php
include('config.php');
include('./includes/header.php')


?>
<div id="wrapper">

<div id="hero">
<img src="images/twelve.jpg" alt="Twelve is greater than 3">

</div>
<!-- end hero -->

<main>
<h1>Welcome to our Web App Programming Class!</h1>
<h2>We are going to learn PHP!</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor nunc dui, vitae blandit elit tincidunt vitae. Pellentesque feugiat elit velit, et ultrices nibh tempor ac. In condimentum pharetra tellus, eget ullamcorper mi aliquam et. Nulla consectetur sollicitudin nunc et varius. Donec scelerisque accumsan eros quis dignissim. Curabitur accumsan tincidunt enim ac sodales. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras tristique tempor odio ut efficitur. Maecenas a consectetur purus, sit amet vestibulum sem. Praesent volutpat cursus tortor ac lobortis. Mauris iaculis aliquet dui et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<h2>Another Headline 2!</h2>
<p>Donec non cursus elit, eu dictum risus. Sed porttitor enim id mi varius, vel euismod nunc porta. Nunc placerat arcu ac accumsan sagittis. Fusce pulvinar purus vitae pretium congue. Sed ut felis sed ipsum convallis sodales. Fusce non suscipit quam. Integer eget ex fringilla, aliquam massa ut, placerat odio.</p>

</main>

<aside>
<h3>Refresh for a new city!</h3>
<?php 

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
$photos[5] = 'photo6';

$i = rand(0,5);

$selected_image = ''.$photos[$i].'.jpg';

echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">'; ?>

</aside>


</div>
<!-- end wrapper -->

<?php 
include('./includes/footer.php');