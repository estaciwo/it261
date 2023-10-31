<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Calculator</title>
    <link href="css/stylescalc.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">

<fieldset>
    
    <!-- text fields -->
    <label>Name</label>
    <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">
    <label>Total miles driving?</label>
    <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">
    <label>How fast do you typically drive?</label>
    <input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">
    <label>How many hours per day do you plan on driving?</label>
    <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

    <!-- radio buttons -->
    <label>Price of gas</label>
    <ul>
    <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked="checked"';?>> $3.00</li>
    <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked="checked"';?>> $3.50</li>
    <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked="checked"';?>> $4.00</li>
    </ul>
  
    <!-- dropdown -->
    <label>Fuel efficiency</label>
    <select name="fuel"> 
        <option value="" <?php if(isset($_POST['fuel']) && is_null($_POST['fuel'])) echo 'selected="unselected"';?>>Select one!</option>
        <option value="terr" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'terr') echo 'selected="selected"';?>>Terrible @ 10mpg</option>
        <option value="dece" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'dece') echo 'selected="selected"';?>>Decent @ 20mpg</option>
        <option value="great" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'great') echo 'selected="selected"';?>>Great @ 40mpg</option>
        <option value="awes" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 'awes') echo 'selected="selected"';?>>Awesome @ 60mpg</option>
    </select>
    <input type="submit" value="Calculate">

    <p><a href=""><i>Reset</i></a></p>
</fieldset>
</form>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<p class="error">Please add your name</p>';
} 

if(empty($_POST['miles'])) {
    echo '<p class="error">Please add your mileage</p>';
} 

if(empty($_POST['speed'])) {
    echo '<p class="error">Please add your driving speed</p>';
} 

if(empty($_POST['hours'])) {
    echo '<p class="error">Please add your hours driven</p>';
} 

if(empty($_POST['price'])) {
    echo '<p class="error">Please add the price of gas</p>';
} 

if($_POST['fuel'] == NULL) {
    echo '<p class="error">Please enter your fuel efficiency</p>';
}

if(isset($_POST['name'],
    $_POST['miles'],
    $_POST['speed'],
    $_POST['hours'],
    $_POST['price'],
    $_POST['fuel'])) {
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $speed = floatval($_POST['speed']);
            $hours = floatval($_POST['hours']);
            $price = $_POST['price'];
            $fuel = $_POST['fuel'];
    
    if((($_POST['miles']) && ($_POST['speed'])) != 0) {
        $hourTotal = $miles / $speed; 
        $days = $hourTotal / 24;
        }

    if(($_POST['fuel'])  != NULL) {
        if(isset($_POST['fuel']) && $_POST['fuel'] == 'terr') {
            $gallons = $miles / 10;
        } elseif(isset($_POST['fuel']) && $_POST['fuel'] == 'dece') {
            $gallons = $miles / 20; 
        } elseif(isset($_POST['fuel']) && $_POST['fuel'] == 'great') {
            $gallons = $miles / 40;
        } elseif(isset($_POST['fuel']) && $_POST['fuel'] == 'awes') {
            $gallons = $miles / 60;
        }
    }

    if(($_POST['fuel'])  != NULL) {
        if(isset($_POST['price']) && $_POST['price'] == '3.00') {
            $dollars = $gallons * 3.00;
        } elseif(isset($_POST['price']) && $_POST['price'] == '3.50') {
            $dollars = $gallons * 3.50; 
        } elseif(isset($_POST['price']) && $_POST['price'] == '4.00') {
            $dollars = $gallons * 4.00;
        }
    }

  

        if(!empty($name && $miles && $speed && $hours) && ($fuel != NULL)) {

            echo '
                <div class="box">
                <p>Hello '.$name.', you will be travelling a total of '.number_format($hourTotal,2).' hours, taking '.number_format($days,2).' days.</b> And, you will be using '.number_format($gallons,2).' gallons of gas, costing you '.number_format($dollars,2).' dollars.</p>
                </div>
                </div>
            ';
        }

    }  
} 
?>
</body>
</html>