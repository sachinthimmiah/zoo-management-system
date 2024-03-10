<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $TicketID= $_GET['deleteid'];


    $sql = "DELETE from tcktnormal where TicketID=$TicketID";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        //echo "deleted successfully";
        header('location:Display2.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}

?>