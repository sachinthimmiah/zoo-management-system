<?php
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD.1</title>
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

</head>
<body>
<button class="btn btn-primary m-lg-5"><a href="logout1.php"class="text-light">Back</a></button>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">TicketID</th>
      <th scope="col">VisitorName</th>
    <!--  <th scope="col">Adultprice</th>
      <th scope="col">Childrenprice</th>-->
      <th scope="col">NoAdult </th>
      <th scope="col">NoChildren</th>
      <th scope="col">Generating Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>



  <?php

$sql = "Select * from tcktforeign";
$result = mysqli_query($con, $sql);
if($result)
{
    while ($row = mysqli_fetch_assoc($result)) 
    {
      $TicketID = $row['TicketID'];
      $VisitorName = $row['VisitorName'];
      $NoAdult = $row['NoAdult'];
      $NoChildren = $row['NoChildren'];
      $PostingDate = $row['PostingDate'];
      echo ' <tr>
      <th scope="row">' .   $TicketID . '</th>
      <td>' . $VisitorName. '</td>
      <td>' . $NoAdult . '</td>
      <td>' . $NoChildren . '</td>
      <td>' . $PostingDate . '</td>
      <td> 
      
      <button class="btn btn-primary"><a href="View1.php? viewid='.$TicketID.'" class="text-light">View</a></button>
      
    <button class="btn btn-danger"><a href="delete2.php? deleteid='.$TicketID.'" class="text-light">Delete</a></button>
      </td>
      </tr>';







    }
}



?>

  </tbody>
</table>
   
 
</div>
</body>
</html>