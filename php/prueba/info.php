<?php

if(!$_POST){
  header('location: http://localhost/php/prueba/index.php');
}

$name = $_POST['name'];
$sex = $_POST['sex'];
$year = $_POST['year'];
$months = $_POST['months'];
$days = $_POST['days'];
$terms = $_POST['terms'];

# IFs de información #

if ($name){
  echo "<b>Name: </b>$name" . '<br />';
} else{
  echo '<b>Name: </b>The user did not established your name.' . '<br />';
}

if ($sex){
  echo "<b>Sex: </b>$sex" . '<br />';
} else{
  echo '<b>Sex: </b>The user did not established your name.' . '<br />';
}

if ($year){
  echo "<b>Year: </b>$year" . '<br />';
} else{
  echo '<b>Year: </b>The user did not established your year of birth.' . '<br />';
}

if ($months){
  echo "<b>Month: </b>$months" . '<br />';
} else{
  echo '<b>Month: </b>The user did not established your month of birth.' . '<br />';
}

if ($days){
  echo "<b>Day: </b> $days" . '<br />';
} else{
  echo '<b>Day: </b>The user did not established your day of birth.' . '<br />';
}

if ($terms){
  echo "<b>Terms: </b>$terms" . '<br />';
} else{
  echo '<b>Terms: </b>The user did not accept the Terms.' . '<br />';
}

?>
