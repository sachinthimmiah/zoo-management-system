<?php


error_reporting(0);
session_start();
$host = "localhost";

$user = "root";

$password = "";

$db = "zoo_ms";

$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST['username'];
    $pass = $_POST['password'];



    $sql = "select * from admin where username='" . $name . "' AND password='" . $pass . "'";

    $result = mysqli_query($data, $sql);
    $row = mysqli_fetch_array($result);

   if($row['usertype']=="Admin")
   {
        $_SESSION['username'] = $name;
        $_SESSION['usertype']="Admin";
        header("location:Adminhome.php");
   }
   else
   {
    
        $message = "#";
        $_SESSION['loginMessage'] = $message;
        header("location:login.php");
   }
}


?>