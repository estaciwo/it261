
<!DOCTYPE html>
<html lang="en">
<head>
<title>My Adder Assignment</title>
<style>
    h1 {
        color:green;
        text-align:center;
    }

    h2 {
        text-align:center;
    }

    p {
        text-align:center;
        color:red;
    }

    form {
        border:1px solid red;
        margin:0 225px;
        padding:10px;
    }
</style>
</head>
<body>
<h1>Adder.php</h1>

<form action="" method="post">
    <label>Enter the first number:</label>
    <input type="text" name="num1"><br>
    <label>Enter the second number:</label>
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!"> 
</form>

<?php  

    if (isset($_POST['num1'],
        $_POST['num2'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $myTotal = $num1 + $num2;

            echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
            echo '<p> and the answer is <br> '.$myTotal .'!</p>';
            echo '<p><a href="">Reset page</a></p>';
        }

?>

</body>
</html>

<!-- 

x php added too soon for desired result    
x isset needs $_POST['num2']
x <style> tags missing code
x -= instead of =
x misspelled variable: $Nu2 should be $num2
x $num1 needs single quotes instead of double quotes
x $num2 needs single quotes around it
x extra quotes near end of line
x </p> tag missing
x <br> tag misplaced
x opening <p> tag missing
x double quotes that are also misplaced
x </p> tag missing
x doctype missing
x lang attribute missing
x "name" attribute should be lowercase to match
x <form> written incorrectly; missing
x opening <label> missing
x </label> in wrong spot; <label> missing
x </h2> tag missing
x " missing from value attribute
x closing php tag after HTML 
x unnecessary '; at bottom 

-->