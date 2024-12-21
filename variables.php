<?php

    //VARIABLES 
    
    //String: set of characters
   $name = "Aryan Mohanty";
   $food = "pizza";
   $email = "aryan333498@gmail.com";

    //Whole Integers : numbers which doesn't consist of any decimal values

    $age = 22;
    $user = 2;
    $quantity =3;
    //Float: Numbers which consists of decimal values

    $gpa = 2.3;
    $price = 4.99;

    //Booleans: values which are either true or false;
    //They are used internally and dont get displayed;
    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;
    
   echo "Hello {$name} <br>" ;
   echo "You like {$food} <br>";
   echo "Your email is {$email} <br><br>";
   echo "You are {$age} old <br>";
   echo "There are {$user} online <br><br>";
   echo "Your GPA is {$gpa} <br>";
   echo "Your Pizza is \${$price} <br>";
    //PHP is confused as we are preceding with a $ sign
   echo "Online user is {$online}<br>";
   echo "You have ordered {$quantity} x {$food}s <br>";

   $total = $quantity*$price;
   echo"Your total is: \${$total}";
?>