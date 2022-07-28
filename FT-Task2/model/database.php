
<?php

class databaseConnection{

 function openConnection(){
 $dataBaseHost = 'localhost';
 $dataBaseUser = 'root';
 $dataBasePass = '';
 $dataBase = 'labtask';

 $connection = NEW mysqli($dataBaseHost, $dataBaseUser, $dataBasePass, $dataBase);

 if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
   }

 return $connection;
 }

 function userRegistration($connection, $table, $fname, $lname, $age, $designation, $planguage,$email,$password,$picture){
 $sqlQuery = "INSERT INTO employee (fname, lname, age, designation, planguage, email, password, picture) VALUES ('$fname', '$lname', $age, '$designation', '$planguage','$email','$password','')";

 $result = $connection->query($sqlQuery);
 return $result;    
}

 function closeConnection($connection)
 {
 $connection -> close();
 }
}
?>

