<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <div class="inner-header">
        <a href="index.html">

            <img id="logo" src="images/logo.png" alt="logo">
        </a>
    <nav>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Daily</a></li>
            <li><a href="">Project</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Gallery</a></li>
        </ul>
    </nav>

    </div>
<!-- end inner header -->
</header>
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
<h3>This is our headline three in our beautiful aside</h3>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras tristique tempor odio ut efficitur. Maecenas a consectetur purus, sit amet vestibulum sem. Praesent volutpat cursus tortor ac lobortis. Mauris iaculis aliquet dui et posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

</aside>


</div>
<!-- end wrapper -->

<footer>
    <ul>
        <li>Copyright &copy;
            2022</li>
        <li>All Rights Reserved</li>
        <li><a href="../index.php">Web Design by Eric Staciwo</a></li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>
        
        <script>
                document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
                document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
        </script>
</footer>
</body>
</html>