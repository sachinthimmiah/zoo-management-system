<?php

$con = new mysqli('localhost', 'root', '', "zoo_ms");

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style3.css'>

</head>
<body>
<button class="btn btn-primary m-lg-5"><a href="logout1.php"class="text-light">Back</a></button>
<div class="container my-5 w-100 h-75" >
    <form method="POST">
      <h3>  Search by Ticket ID / Visitor Name </h3>
        <input type="text" placeholder="Search Name/TicketID " class="conatiner1 w-100 h-2"
        name="search" >
        <button class="btn btn-primary btn-large" name="Submit">Search</button>
    </form>

<div class="conatiner my-5">
<table class="table">

<?php
if(isset($_POST['Submit']))
{
    $search = $_POST['search'];
  
    $sql = "Select * from tcktforeign where TicketID like '%$search%' or VisitorName like '%$search%'";
    $result = mysqli_query($con, $sql);



    if($result)
    {
        if(mysqli_num_rows($result) >0)
        {
            echo  '<thead>
<tr>
<th>TicketID</th>
<th>VisitorName</th>
<th>PostingDate</th>

</tr>
</thead>
';


      while ($row = mysqli_fetch_assoc($result))
       {



        echo '<tbody>
<tr>
<td>' . $row['TicketID'] . '</td>  
<td>' . $row['VisitorName'] . '</td> 
<td>' . $row['PostingDate'] . '</td> 




</tr>
</tbody>';
      }

        }


        else
        {
            echo'<h2 class=:text-danger>Data not found </h2>';
        }
    }




}


?>




</table>
</div>
</div>
</div>
 
</body>
</html>