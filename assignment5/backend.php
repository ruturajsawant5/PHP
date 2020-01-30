<?php

$email=$_POST['mail'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format<br>";
    }
    else{
              echo "valid email format<br>";

    }
    
        $name =$_POST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Only letters and white space allowed";
    }
    else{
              echo "valid name";

    }
?>