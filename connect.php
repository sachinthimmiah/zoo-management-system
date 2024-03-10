<?php

$con = new mysqli('localhost', 'root', '', "zoo_ms");


if(!$con)
{
    die(mysqli_error($con));
}
 

?>
