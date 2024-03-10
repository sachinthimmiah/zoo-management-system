<?php
error_reporting(0);
include 'connect.php';


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
   <button  class="btn btn-primary my-5"><a href="addanimals.php" class="text-light">Add Animals </a> </button>
    
   <table class="table">
  <thead>
    <tr>
      <th scope="col">Id no</th>
      <th scope="col">Cage Number</th>
      <th scope="col">Animal Name</th>
      <th scope="col">Creation Date</th>
      <th scope="col">Feed Number</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
   
<?php
$sql = "Select * from tblanimal";
$result = mysqli_query($con,$sql);
if($result)
{
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $CageNumber = $row['CageNumber'];
        $AnimalName = $row['AnimalName'];
        $CreationDate = $row['CreationDate'];
        $FeedNumber = $row['FeedNumber'];
        echo ' <tr>
        <th scope="row">'.$id.'</th>
        <td>'.$CageNumber.'</td>
        <td>'.$AnimalName.'</td>
        <td>'.$CreationDate.'</td>
        <td>'.$FeedNumber.'</td>
        <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="Delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
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