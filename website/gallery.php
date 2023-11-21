
<?php
    include('config.php');
    include('./includes/header.php');    
?>
    <h1 class="food">Foods of the World!</h1>
    <table class="food">
        <tr>
            <th class="food">Entree</th>
            <th class="food">Name</th>
            <th class="food">Origin</th>
        </tr>
        <?php foreach($food as $name => $image):?>
        <tr>
            <td class="food">
                <img src="images/<?php echo substr($image,0,4) ;?>.jpg" alt="<?php echo str_replace('_',' ',$name) ;?>" class="food">
            </td>
            <td class="food">
                <?php echo str_replace('_',' ',$name) ;?>
            </td>
            <td class="food">
                <?php echo substr($image,5); ?>
            </td>
        </tr>
        <?php endforeach ; ?>
    </table>

<?php
include('./includes/footer.php')
?>