<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$open = fopen('formdata.txt','a+');

$writeThis = $firstName . ',' . $lastName . ',' . $email . "\n";

fwrite($open,$writeThis);

fclose($open);

echo "<h1>This worked!</h1>";

?>

