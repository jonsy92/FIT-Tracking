<html>
    <head>
       <link rel="stylesheet" href="stylesheet.css"> 
       <title>Login</title>
    </head>

    <body>
<?php
// box shadow 
require 'FIT_TRACKER.php';

$nickname = $_POST["nickname"];
$password = $_POST["password"];
$hashpw = md5($password);
 

$fit = new FIT_TRACKER();

if($fit->check_input($nickname, $hashpw))
{
    header('Location: navigator.php' );
}
 else 
{
   $fit->check_input($nickname, $hashpw);
   echo ("<div><p>Ihr Benutzername oder Passwort ist leider falsch.</p></div>") ; 
   
 }

 ?>
 </body>
    </html>




