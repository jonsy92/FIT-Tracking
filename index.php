<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css">       
        <title>FIT-Tracking</title>     
    </head>
    
    <body>
        
        <div>   
        <table border="0" align="left">
        <form action="login.php" method="post">
            <tr><td></td></td><td><h1>Login</h1></td></tr>
            <tr>     
                <td>   Nutzername:</td><td><input type="text" name="nickname" ></td>
            </tr>
            <tr>
                <td>   Passwort:</td><td> <input type="password" name="password" ></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Login-Daten absenden"></td>
            </tr>
       
       </form>
        <br>
        <br>
        <form action="password-security.php" method="POST">
             <tr>     
             <td></td><td></td>
            </tr> 
               <tr>     
             <td></td><td></td>
            </tr>
               <tr>     
             <td></td><td></td>
            </tr>
               <tr>     
             <td></td><td></td>
            </tr>
               <tr>     
             <td></td><td></td>
            </tr>
            <tr>     
             <td></td><td><input type="submit" value="Passwort vergessen?"></td>
            </tr> 
        </form>
        
            <form action="create-account.php" method="POST">         
            <tr>     
             <td></td><td><input type="submit" value="Neuen Account anlegen"></td>
            </tr> 
        </form>
           
        </div>
        
</table>
       
       
       
        <?php
        // put your code here
        ?>
    </body>
</html>
