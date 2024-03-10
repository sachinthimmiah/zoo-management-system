<?php
@include 'connect.php';
error_reporting(0);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD</title>
     
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

</head>
<body>
<button class="btn btn-primary m-lg-5"><a href="logout1.php"class="text-light">Back</a></button>
    
    
  <div class="container">
  <table class="table table-striped">
  <thead >
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Ticket Type</th>
      <th scope="col">Price</th>
       
    </tr>
  </thead>

  <tbody>


<?php

$sql = "Select * from tckttype";
$result = mysqli_query($con, $sql);
if($result)
{ 
    while($row = mysqli_fetch_assoc($result))
    {
        $id= $row['id'];
        $Tickettype= $row['Tickettype'];
        $Price = $row['Price'];
        echo ' <tr>
    <th scope="row">'.$id.'</th>
    <td>'.$Tickettype.'</td>
    <td>'.$Price.'</td>
  </tr>';
    
    }
    
}



?>


  </tbody>
</table>
  
 
</div>
</body>
</html>