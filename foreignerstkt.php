<?php

@include "connect.php";
error_reporting(0);
if(isset($_POST['submit']))
{
  $TicketID = $_POST['TicketID'];
    $VisitorName = $_POST['VisitorName'];
    $NoAdult = $_POST['NoAdult'];
    $NoChildren = $_POST['NoChildren'];
    $Adultprice = $_POST['Adultprice'];
    $Childrenprice = $_POST['Childrenprice'];
    $PostingDate = $_POST['PostingDate'];

  $sql = "INSERT INTO  tcktforeign(VisitorName,NoAdult,NoChildren,Adultprice,Childrenprice,PostingDate)
  VALUES('$VisitorName','$NoAdult','$NoChildren','$Adultprice','$Childrenprice','$PostingDate')";
 
    $result = mysqli_query($con,$sql);
    if($result)
    {
     // echo "Data inserted successfully";
      header('location:Display3.php');
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

    <title>Ticket details</title>
  </head>
  <body>
  <button class="btn btn-primary m-lg-3"><a href="logout1.php"class="text-light">Back</a></button>
    <div class="pages">
    <h3>Foreign Ticket</h3>
</div>
    <div class="container my-5">
    <form method="POST">
<div class="mb-3">
    <label>Vistor Name</label>
    <input type="text" class="form-control"
    placeholder="Visitor Name" name="VisitorName" autocomplete="off">
</div>
 
<div class="mb-3">
    <label> No Adult</label>
    <input type="number" class="form-control"
    placeholder="No.of Adult" name="NoAdult" autocomplete="off">
</div>
 
<div class="mb-3">
    <label> No Children</label>
    <input type="number" class="form-control"
    placeholder="No.of Childrens" name="NoChildren" autocomplete="off">
</div>
 
 
<div class="mb-3">
    <label>Posting Date</label>
    <input type="date" class="form-control"
    placeholder="PostingDate" name="PostingDate" autocomplete="off">
</div>
<?php

$ret=mysqli_query($con,"select * from tckttype where Tickettype='Foreign Adult'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<input type="hidden" name="Adultprice" value="<?php  echo $row['Price'];?>">
<?php } ?>

  <?php

$ret=mysqli_query($con,"select * from  tckttype  where Tickettype='Foreign Child'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 <input type="hidden" name="Childrenprice" value="<?php  echo $row['Price'];?>">
                                          
                                          <?php } ?>

 
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

  </body>
</html>
<?php   ?>