<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $TicketID= $_GET['deleteid'];


    $sql = "DELETE from tcktforeign where TicketID=$TicketID";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        //echo "deleted successfully";
        header('location:Display3.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>