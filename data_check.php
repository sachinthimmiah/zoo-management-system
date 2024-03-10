<?php

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

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact(name,email,message)VALUES('$name ','$email','$message')";


    $result = mysqli_query($data, $sql);

    if($result)
    {
        echo("location:contact.php");

        
     
    
    
    }
    else
    {
     
        echo "failed";
    }


    
}







?>