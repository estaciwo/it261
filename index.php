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
                <li><a href="website/daily.php">Switch</a></li>
                <li><a href="website/adder.php">Troubleshoot</a></li>
                <li><a href="website/calculator.php">Calculator</a></li>
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
            <h2><a href="https://github.com/estaciwo/it261">Github</a></h2>
            <h2>Weekly Class Exercises</h2>
            <h3>Week 2</h3>
            <ol>
                <li><a href="weeks/week2/var.php">var.php</a></li>
                <li><a href="weeks/week2/vars2.php">vars2.php</a></li>
                <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
                <li><a href="weeks/week2/currency.php">currency.php</a></li>
                <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
            </ol>
            <h3>Week 3</h3>
            <ol>
                <li><a href="weeks/week3/if.php">if.php</a></li>
                <li><a href="weeks/week3/date.php">date.php</a></li>
                <li><a href="weeks/week3/for-each.php">for-each.php</a></li>
                <li><a href="weeks/week3/for-loop.php">for-loop.php</a></li>
                <li><a href="weeks/week3/switch.php">switch.php</a></li>
                <li><a href="weeks/week3/index.php">index.php</a></li>
            </ol>
            <h3>Week 4</h3>
            <ol>
                <li><a href="weeks/week4/form-get.php">form-get.php</a></li>
                <li><a href="weeks/week4/form1.php">form1.php</a></li>
                <li><a href="weeks/week4/form2.php">form2.php</a></li>
                <li><a href="weeks/week4/form3.php">form3.php</a></li>
                <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
                <li><a href="weeks/week4/celsius.php">celsius.php</a></li>
                <li><a href="weeks/week4/adder.php">adder.php</a></li>
            </ol>
            <h3>Week 5</h3>
            <ol>
                <li><a href="weeks/week5/currency1.php">currency1.php</a></li>
                <li><a href="weeks/week5/currency2.php">currency2.php</a></li>
                <li><a href="weeks/week5/currency3.php">currency3.php</a></li>
            </ol>
             <h3>Week 6</h3>
            <ol>
                <li><a href="weeks/week6/form.php">form.php</a></li>
                <li><a href="weeks/week6/form2.php">form2.php</a></li>
                <li><a href="weeks/week6/functions.php">functions.php</a></li>
            </ol>
             <h3>Week 7</h3>
            <ol>
                <li><a href="weeks/week7/form3.php">form3.php</a></li>
                <li><a href="weeks/week7/pictures.php">pictures.php</a></li>
                <li><a href="weeks/week7/rand.php">rand.php</a></li>
                <li><a href="weeks/week7/strings.php">strings.php</a></li>
            </ol>
              <h3>Week 8</h3>
            <ol>
                <li><a href="weeks/week8/people.php">people.php</a></li>
                <li><a href="weeks/week8/people-view.php">people-view.php</a></li>
            </ol>
        </aside>
        <div id="screenshots">
            <div class="screenshot">
                <h3>Screenshot 1: MAMP Installed</h3>
                <img class="full" src="images/mamptest.png" alt="MAMP screenshot">
            </div>
            <div class="screenshot">
                <h3>Screenshot 2: PHP Errors Working</h3>
                <img class="full" src="images/errortest.png" alt="PHP error screenshot">
            </div>
            <div class="screenshot">
                <h3>Screenshot 3: Adminer Database</h3>
                <a href="website/images/database.png"><img src="website/images/database.png" alt="database of twin peaks characters"></a>
            </div>
        </div>
</main>
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