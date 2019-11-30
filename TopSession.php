<?php
    session_start();
    include "connect.php";
    
    if (isset($_COOKIE["userID"])) 
    {
        $id = $_COOKIE["userID"]; 
       // $empid = $_COOKIE["empid"]; 
        $r = $pdo->query("SELECT * FROM user WHERE userID = '$id'");
        $row = $r->fetch();
        $_SESSION["userID"] = $row["userID"];
       // $_SESSION["empid"] = $row["EmpId"];
    }
//    else if (isset($_COOKIE["username"]) && !isset($_COOKIE["empid"])) 
//    {
//        $id = $_COOKIE["username"]; 
//        $r = $pdo->query("SELECT * FROM account WHERE Username = '$id'");
//        $row = $r->fetch();
//        $_SESSION["username"] = $row["Username"];
//    }
?>