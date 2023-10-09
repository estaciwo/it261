<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1><a href="index.php">Eric's Portal Page</a></h1>
    <h2>The navigation below represents our BIG assignments</h2>
    <div id="wrapper">
        <nav>
            <ul>
                <li><a href="">Switch</a></li>
                <li><a href="">Troubleshoot</a></li>
                <li><a href="">Calculator</a></li>
                <li><a href="">Email</a></li>
                <li><a href="">Database</a></li>
                <li><a href="">Gallery</a></li>
            </ul>
        </nav>

        <main>
            <h2>About Eric</h2>
            <img class="right" src="images/eric.jpg" alt="Eric">
            <p>Hi, I'm Eric! While I grew up outside New York City, I've now spent about the same amount of time in Seattle — two decades in each place. In my free time I play music and video games, and enjoy participating in pub trivia matches. I also might spend too much time watching YouTube videos about urban planning. My goal at Seattle Central is to finish a web development certificate program within a year, then maybe take some additional programming classes or continue toward a degree in computer science.     
            </p>
        </main>

        <aside>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ol>
        </aside>
        <div id="screenshots">
            <div id="mamp"><h3>Screenshot 1: MAMP Installed</h3>
            <img class="full" src="images/mamptest.png" alt="MAMP screenshot">
            </div>
            <div>
            <h3>Screenshot 2: PHP Errors Working</h3>
            <img class="full" src="images/errortest.png" alt="PHP error screenshot">
            </div>
        </div>
    </div>
    <!-- close wrapper -->
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