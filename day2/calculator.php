<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $inputOne = htmlspecialchars($_POST["inputOne"]);
    $inputTwo = htmlspecialchars($_POST["inputTwo"]);
    $operations = htmlspecialchars($_POST["operations"]);
    $result;


    if(!$inputOne || !$inputTwo){
        echo "All fields are required";
    } 

    if(!is_numeric($inputOne) || !is_numeric($inputTwo)){
        echo"<br>";
        echo"It should be a number";
    }

   switch($operations){
    case "addition": 
        $result = $inputOne + $inputTwo;
        echo "$inputOne + $inputTwo = Result: $result";
        break;
    case "subtraction":
         $result = $inputOne - $inputTwo;
        echo "$inputOne - $inputTwo = Result: $result";
        break;
    case "multiplication":
         $result = $inputOne * $inputTwo;
      echo "$inputOne x $inputTwo = Result: $result";
        break;
    case "division":
        if($inputTwo == 0){
            echo "<br>Cannot be divided by 0";
        } else {
            $result = $inputOne / $inputTwo;
           echo "$inputOne ÷ $inputTwo = Result: $result";
        }
        break;
    default:
     echo"<br>";
     echo"Please choose an operation";
   }
    echo"<br>";
   echo"<a href='index.php'>Calculate Again</a>";
}

