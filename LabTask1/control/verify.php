<?php
$fname = $_REQUEST["fname"];
$lname = $_REQUEST["lname"];
$age = $_REQUEST["age"];
//$designation = $_POST["designation"];
//$preferredlanguage = $_POST["preferredlanguage"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

if($fname=="")
{
    echo "First name is required!" ."<br>";
}
else{
    echo "First name is" .$fname;
}
if($lname=="")
{
    echo "Last name is required!" ."<br>";
}
else{
    echo "Last name is" .$lname;
}
if($email=="")
{
    echo "Email is required!" ."<br>";
}
else{
    echo "Email is" .$email;
}

if(strlen($password) <8)
{
    echo "Password should be more than 8 characters" ."<br>";
}
else
{
    echo "Password is valid" ."<br>";
}



if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    echo "Your designation is " . $designation."<br>";
    
}
else
{
    echo "Select your designation." . "<br>";
}


if(isset($_REQUEST["JAVA"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"])){
    if(isset($_REQUEST["JAVA"]) && isset($_REQUEST["PHP"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["PHP"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"]) && isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"];
    }
    elseif(isset($_REQUEST["PHP"])){
        echo "Your preferred language is " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["C++"];
    }

}
else
{
    echo "Select your preferred language." . "<br>";
}


?>