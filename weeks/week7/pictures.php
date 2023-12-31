<?php

$people['Donald_Trump'] = 'trump2_Former President from NY.';
$people['Joe_Biden'] = 'biden2_President from PA.';
$people['Hilary_Clinton'] = 'clint2_Secretary from NY.';
$people['Bernie_Sanders'] = 'sande2_Senator from VT.';
$people['Elizabeth_Warren'] = 'warre2_Senator from MA.';
$people['Kamala_Harris'] = 'harri2_Vice President from CA.';
$people['Cory_Booker'] = 'booke2_Senator from NJ.';
$people['Andrew_Yang'] = 'ayang2_Entrepreneur from NY.';
$people['Pete_Buttigieg'] = 'butti2_Transportation Secretary from IN.';
$people['Amy_Klobuchar'] = 'klobu2_Senator from MN.';
$people['Julian_Castro'] = 'castr2_Former Housing/Urban from TX.';
// variable  key   value
// $name            $image


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 7, class exercise - pictures</title>
    <style>
        table {
            border: 1px solid red;
            border-collapse: collapse;
        }

        td {
            border: 1px solid red;
        }

        img {
            max-width: 200px;
        }
    </style>
</head>
<body>
    <table>
        <?php foreach($people as $name => $image):?>
        <tr>
            <td><img src="images/<?php echo substr($image,0,5) ;?>.jpg" alt="<?php echo str_replace('_',' ',$name) ;?>"></td>
            <td><?php echo str_replace('_',' ',$name) ;?></td>
            <td><?php echo substr($image,7,-1); ?></td>
            <td><img src="images/<?php echo substr($image,0,6) ;?>.jpg" alt="<?php echo str_replace('_',' ',$name) ;?>"></td>
        </tr>
        <?php endforeach ; ?>
    </table>
</body>
</html>