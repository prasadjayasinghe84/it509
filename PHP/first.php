<?php
echo("Helow PHP");

//Exercise:1

$val_1=5;
$val_2=7;


echo($val_1+$val_2);
echo("<br>");
echo($val_1-$val_2);
echo("<br>");
echo($val_1/$val_2);
echo("<br>");
echo($val_1*$val_2);


// Execise:2

$age=12;
if ($age<13){

  echo("Recommed Animated movies") ; 
}elseif($age<=18){
    echo("Recommed Teenage movies") ;  

}elseif($age>60){
    echo("Recommed Classical movies") ;  
}else{
    echo("Error in age");
}

// Execise:3
$day ="Saturday";
switch ($day) {
    case "Monday":
        echo("Watch a movie at Cinama");
      break;
    case "Tuesday":
        echo("Watch a movie at Cinama");
      break;
    case "Wednesday":
        echo("Watch a movie at Cinama");
        break;
    case "Thursday":
        echo("Watch a movie at Cinama");
        break;
    case "Friday":
        echo("Watch a movie at Cinama");
        break;
    case "Saturday":
        echo("Watch a movie at home");
        break;
    case "Sunday":
        echo("Watch a movie at home");
      break;
     
    default:
      echo("Error not a week day");
  }
