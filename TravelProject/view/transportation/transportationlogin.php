<?php
require ("../../control/transportationcontrol/transportationloginprocess.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <h1>Transportation Login Page</h1>
    </head>
    <body>
        <table>
            <form action = '', method = 'POST'>
                <table>
                    <tr>
                        <td>User Name:</td> 
                        <td><input type = 'text' name = 'uname'><?php echo $unameError ?></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type='text' name='password' value =><?php echo $passwordError ?></td>
                    </tr>
                    <tr>
                        <td><input type = 'submit' name = 'submit' value = 'SUBMIT'></button></td>
                        <td><a href = 'transportationRegister.php'>Not registered yet?</a></td>
                        <td><a href = '../mainpage.php'>Homepage</a></td>
                    </tr>
                </table>
            </form>
        </table>
    </body>
</html>