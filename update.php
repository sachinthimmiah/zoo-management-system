<?php

@include 'connect.php';

$id = $_GET['updateid'];

if(isset($_POST['submit']))
{

    $AnimalName = $_POST['AnimalName'];
    $CageNumber = $_POST['CageNumber'];
    $FeedNumber = $_POST['FeedNumber'];
    $AnimalImage = $_POST['AnimalImage'];
    $Description = $_POST['Description'];
    $CreationDate = $_POST['CreationDate'];


    $sql = "UPDATE tblanimal set AnimalName='$AnimalName',CageNumber='$CageNumber',FeedNumber='$FeedNumber',AnimalImage='$AnimalImage',Description='$Description',CreationDate='$CreationDate' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result)
    {
       // echo "Data inserted successfully";
      header('location:Display.php');
      

    }
    else
    {
        die(mysqli_error($con));
    }


}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style3.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css">

    <title>Animals details</title>
  </head>
  <body>
    <div class="pages">
    <h3>Animals Details</h3>
</div>
    <div class="container my-5">
    <form method="post">
     

  <div class="mb-3">
    <label>Animal_Name</label>
    <input type="text" class="form-control"
    placeholder="Enter the animal name" name="AnimalName" autocomplete="off">
</div>
<div class="mb-3">
    <label>Cage Number</label>
    <input type="text" class="form-control"
    placeholder="Enter cage number" name="CageNumber" autocomplete="off">
</div>
<div class="mb-3">
    <label>Feed Number</label>
    <input type="text" class="form-control"
    placeholder="Enter your feed number" name="FeedNumber" autocomplete="off">
</div>

<div class=" mb-3">
  <label>Animal image</label>
  
  <input type="file" class="form-control" name="AnimalImage" >
</div>
 
<div class="mb-3">
    <label>Description</label>
    <input type="text" class="form-control"
    placeholder="Enter the desc" name="Description" autocomplete="off">
</div>
 
<div class="mb-3">
    <label>Creation DatE</label>
    <input type="date" class="form-control"
    placeholder="Enter the date" name="CreationDate" autocomplete="off">
</div>
 
  <button type="submit" class="btn btn-primary" href="Display.php" name="submit">Update</button>
</form>
</div>

  </body>
</html>