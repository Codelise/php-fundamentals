<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
$userName = htmlspecialchars($_POST['userName']);
$userAge = htmlspecialchars($_POST['age']);
$favColor = htmlspecialchars($_POST['favColor']);

if(empty($userName) || empty($userAge) || empty($favColor)){
    echo "<script>alert('Please input something!')</script>";
}
else if ($userAge <=0){
    echo "<h2>Please enter above 0</h2>";
} 
else if($userAge >= 100){
    echo"<h2>You are a living legend!</h2>";
}
else {
     echo "<h2>Personal Info Card</h2>";
    echo "<h3>Name: $userName</h3>";
    echo "<h3>Age: $userAge</h3>";
    echo "<h3>Favorite Color: $favColor</h3>";
}
} 
else {
    header("Location: index.php");
}