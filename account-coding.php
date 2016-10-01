<?php

 require 'FIT_TRACKER.php';
 
$fit = new FIT_TRACKER();

$nickname = $_POST["nickname"];
$password = $_POST["password"];
$email = $_POST["email"];
$kfa = $_POST["kfa"];
$size = $_POST["size"];
$weight = $_POST["weight"];
$sex = $_POST["sex"];
$birthdate = $_POST["birthdate"];
$ffm = $fit->calculate_FFM($weight, $kfa);
$ffmi = $fit->calculate_FFMI($ffm, $kfa, $size);

$fit->create_user($nickname, $password, $size, $weight, $kfa, $ffmi, $birthdate, $sex, $email);

 ?>       
