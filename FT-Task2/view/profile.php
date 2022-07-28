<?php
include("../control/process.php");
?>


<html>
    <head>
        <title>
           Final-Lab-Task
        </title>
        <link rel= "stylesheet" type="text/css" href="../css/style.css">
    </head>

    <header>
    <div class="abc">
        <h1>ABC Management System</h1>
        <h3>We Create Future</h3>
    </div>
    <div class="navbar">
        <p>Home &nbsp; &nbsp; &nbsp; &nbsp; About Us &nbsp; &nbsp; &nbsp; &nbsp; Shop</p>
        
    </div>
    </header>

<body>
   
    <h1 class="reg"> Registration Form</h1><hr>

<form action="../control/process.php" method="post">
    <table id="form">
        <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname"></td>
    </tr>
    <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname"> </td>
    </tr>
    <tr>
    <td>Age:</td>
    <td><input type="age" name="age"> </td>
    </tr>
    
	<td>Designation: </td>
	<td>
    <input type="radio" name="Designation" value="JuniorProgrammer"> Junior Programmer 
	<input type="radio" name="Designation" value="SeniorProgrammer"> Senior Programmer 
    <input type="radio" name="Designation" value="ProjectLead"> Project Lead 
    </td>
    </tr>
    <tr>
    <td>Preferred langueage</td>
    <td>
    <input type="checkbox" name="Java" value="Java"> Java
	<input type="checkbox" name="PHP" value="PHP"> PHP 
    <input type="checkbox" name="C++" value="C++"> C++ 
    </td>
    </tr>
    <tr>
    <td>Enter your Email:</td>
    <td><input type="text" name="email"> </td>
    </tr>
    <tr>
	<td>Enter Password: </td>
	<td><input type="password"  name="password"> </td>
    </tr>
    <tr>
    <tr>
	<td>Please Choose a file</td>
    <td>
	<input type="file" ></td>
    </tr>
</table>
        
    <table>

    <tr>
    <td id="button">
	<input type="submit" value="Submit" class="button submit" name="Submission">
	<input type="reset" value="Reset" class="button reset" name="Submission">
    </td>
    </tr>
    </table>
    
</table>

</form>

</body>

</html>