<?php
$file = fopen("data.csv", "r");
$result = array();
while(!feof($file)) {
    $line = fgets($file);
    $data = explode("," , $line);
    array_push($result, $data);
}
fclose($file);
echo(json_encode($result));
?>