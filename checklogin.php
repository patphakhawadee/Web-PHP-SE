<?php session_start(); ?>
<html>
    <?php include "headhtml.php"; ?>
    <body>
        <?php //include "header.php"; ?>
    <br><div class="content_box"> 
        <?php
            include "connect.php";
            $pass = $_POST["password"];
            if(!empty($_POST["id"]))
            {
                    $s =  $pdo -> prepare("SELECT * FROM user WHERE userEmail = ? AND userPass = ?");
                    $s -> bindValue(1, $_POST["id"]);
                    $s -> bindValue(2, $_POST["password"]);
                    $s -> execute();
                    $row = $s -> fetch();


                    if($pass != $row['userPass']||$row["userEmail"]=='')
                    {
                        echo "<script type='text/javascript'>
                                window.location = 'login.php?check=false';
                              </script>";
                    }
                    else //if($row["EmpId"]=='')
                    {
                        $_SESSION["userID"] = $row["userID"];
                       // setcookie("empid","", time()-999999999);
                            
                                setcookie("userID", $row["userID"], time()+34567890);
                             
                        header("location: index.php");
                    }
//                    else if(isset($row["EmpId"]))
//                    {
//                        $_SESSION["username"] = $row["Username"];
//                        $_SESSION["empid"] = $row["EmpId"];
//                            if (isset($_POST["remember"])) 
//                            {
//                                setcookie("username", $row["Username"], time()+34567890);
//                                setcookie("empid", $row["EmpId"], time()+34567890);
//                            } 
//                         header("location: manage.php");
//                    }
            }
            else
            {
                echo "<script type='text/javascript'>
                window.location = 'login.php';
                </script>";
            }
        ?>
        </div>
    </body>
</html>