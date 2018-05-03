<?php
$animalSounds = [
    'cat' => 'meow',
    'duck' => 'quack'
];


// In JSON it will look like 
/*
  var animalSounds = {
   "cat"  : "meow",
   "duck" : "quack"
  }
*/
?>
<html>
    <table>
        <tr>
            <th>Animal</th>
            <th>Sound</th>
        </tr>
        <?php
        foreach($animalSounds as $key => $value) {
            echo "
            <tr>
                <td>$key</td>
                <td>$value</td>
            </tr>
            " ;
        }
        ?>
    </table>
</html>