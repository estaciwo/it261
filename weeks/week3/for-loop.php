<?php
// this file will demonstrate for loops in addition to placing your php inside your HTML!!!
// the for loop loops through a block of code a specified number of times.
// for (init counter; test c ounter; increment counter) {
//     code to be executed for each iteration; 
// }

// celsius and fahrenheit

// $far = ($celsius * 9/5) + 32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celsius Table</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

        table {
            width:500px;
            margin:20px auto;
            border-collapse:collapse;
            border:1px solid lightblue;
        }

        td, th {
            border:1px solid lightblue;
            border-collapse:collapse;
            padding:5px;
        }

        h1, h2, h3 {
            text-align:center;
            margin:10px 0;
            color:green;
        }
    </style>
</head>
<body>
    <h1>My Celsius / Fahrenheit Table</h1>
    <table>
        <tr>
            <th>Celsius</th>
            <th>Fahrenheit</th>
        </tr>
        <?php
            for($cel = 0; $cel <= 100; $cel += 5) {
                $far = ($cel * 9/5) + 32;
                echo '<tr>';
                echo '<td> '.$cel.' degrees </td>';
                echo '<td>  '.$far.' degrees </td>';
                echo '</tr>';
            }
        ?>
    </table>

    <h2>You will now complete a kilometer / mileage table on your own!</h2>
    <h3>Kilometers to Miles Conversion Table</h3>
    <table>
        <tr>
            <th>Kilometers</th>
            <th>Miles</th>
        </tr>
        <?php
            for($kilo = 0; $kilo <= 100; $kilo += 5){
                $mil = ($kilo * .621371);
                echo '<tr>';
                echo '<td> '.$kilo.' kilometers</td>';
                echo '<td> '.number_format($mil,2).' miles</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>