<?php


include("../model/database.php");


$fname=$_REQUEST["fname"]; 
$lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];


if(empty($fname)){
    echo" The First Name is empty" .$fname."<br>";
}
else{
    echo" Your First Name is " .$fname."<br>";
}

if(is_numeric($lname)){
    echo" The Last Name is empty" .$lname."<br>";
}
else{
    echo" Your Last Name is " .$lname."<br>";
}


if(isset($_POST["Java"]) || isset($_POST["PHP"]) || isset($_POST["C++"])){
    echo"You have selected Checkbox";
}
else{
    echo"You have not selected any Checkbox"."<br>";
}


if(empty($email)){
    echo" The Email is empty" .$email."<br>";
}
else{
    echo" Your Email is ".$email."<br>";
}

if(strlen($password)<6){
    echo" The Password can not be less than 6 characters!"."<br>";
}
else{
    echo" Your Password is Correct."."<br>";
}


?>