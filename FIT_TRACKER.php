<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FIT_TRACKER
 *
 * @author jonas.niedrig
 */
 class FIT_TRACKER 
{
    
//-------------------------------------------------------------------------------------------------     
     // Pasword Hash : Function -> md5
    function create_user($name,$pw,$size,$weight,$kfa,$ffmi,$birthdate,$sex,$email)
    {   
        $bool = false;
        $dbhost = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fit-rasbi';
        
// Create connection
$conn = new mysqli($dbhost, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "INSERT INTO User (Name, Size, Birthdate, Sex, Email) VALUES ('$name' , '$size' , '$birthdate' , '$sex' , '$email')";

if ($conn->query($sql) === TRUE) {
    $bool = true;
} else {
    $bool =false;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = ("select UID from User where Name ='$name' ");

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$id = $row["UID"];        

//var_dump(mysqli_error());

 $sql = "INSERT INTO Stats (UID, Weight, Kfa, Ffmi, Picture) VALUES ('$id', '$weight', '$kfa', '$ffmi', 'NotFound')";

if ($conn->query($sql) === FALSE) {
 
     $bool = false;
     echo "Error: " . $sql . "<br>" . $conn->error;
}
// Pasword Hash
$hashpw = md5($pw);
 $sql = "INSERT INTO Password (UID, Passwordtext) VALUES ('$id', '$hashpw')";

if ($conn->query($sql) === TRUE) {
    $bool = false;
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

if ($bool = true)
{
    header('Location: index.php' );
}
    }
  
//-------------------------------------------------------------------------------------------------   
  function check_input($name,$pw)
   {
        $dbhost = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fit-rasbi';
        
// Create connection
$conn = new mysqli($dbhost, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}    


$sql = ("select UID from User where Name ='$name' ");

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$uid= $row["UID"];   

$sql = ("select Passwordtext from Password where UID ='$uid' ");

$result = $conn->query($sql);
$row = $result->fetch_assoc();
$password = $row["Passwordtext"];   

   if($uid == 0)
   {
       return false;
   }
   else
   {
    if($pw == $password)
    {
        return true;
    }
    else
    {
       return false;
    }
   }
  }
//------------------------------------------------------------------------------------------------- 
  
  function calculate_FFM ($weight,$kfa)
  {
      return ($weight*(100-$kfa)/100);
  }
  
//------------------------------------------------------------------------------------------------- 
  
    function calculate_FFMI ($ffm,$kfa,$size)
  {
        $size = $size/100;
      return ($ffm/($size*$size)+6.3*(1.8-$size));
  }
  
//------------------------------------------------------------------------------------------------- 
  function calculate_KFA ($stomage,$neck,$size,$sex,$hip)
  {   
      if($sex=="m")
      {
      return 498/(1.0324-0.19077*log10($stomage-$neck)+0.19077*log10($size))-450; 
      }
      elseif($sex=="w")
      {
      return 498/(1.29579-0.35004*log10($stomage+$hüfte-$neck)+0.22100*log10($size))-450; 
      }
  }

}

?>