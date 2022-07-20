<?php
 $session_start();
 $error=0;
 if(isset($_POST["login"]))
 {
    if(empty($_POST["uname"]) && empty($_POST["pass"]))
    {
        echo "username and password can not be empty";
    }
    else
    {
        $mydata = file_get_contents("../Data/data.json");
        $phpdata = json_decode($mydata);
        foreach($phpdata as $data)
        {
            /* foreach($data as $myobj => $value) */
            {
                if($_POST["uname"]==$data->UserName && $_POST["pas"]==$data->Password)
                {
                    $_SESSION["uname"]=$_POST["uname"];
                    $_SESSION["pass"]=$_POST["pass"];
                    header("Location:../view/labtask1html.php")
                }

                else
                {
                    $error =1;
                }
            }
        }

       
            
        
    }
 }

?>