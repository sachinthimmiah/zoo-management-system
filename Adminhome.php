<?php

session_start();

if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
 

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
    <meta charset="utf-8">
     <title>Admin panel</title>
     <link rel="stylesheet" href="style2.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body style="background-image: url('92.jpeg');background-repeat:no-repeat;background-size:cover;">
       <div class="btn">
         <span class="fas fa-bars"></span>
</div>
<nav class="sidebar">
<div class="text">ZMS </div>
<ul>
  <li class="active"><a href="#">Dashboard</a></li>
              
  
       <li>
           <a href="#" class="feat-btn">Animals Details
       <span class="fas fa-caret-down first"></span>
       </a>
    
  <ul class="feat-show">


            <li><a href="addanimals.php">Add Animals</a></li>
            <li><a href="Display.php">Manage Animals</a></li>
            </ul>
            </li>
            
            


          <li>
           <a href="#" class="serv-btn">Normal Tickets 
           <span class="fas fa-caret-down second"></span>
            </a>


              <ul class="serv-show">
              <li><a href="Normaltkt.php">Add Ticket</a></li>
             <li><a href="Display2.php"> Manage Ticket</a></li>
           </ul>
            </li>




            <li><a href="Display1.php">Manage Type Ticket</a></li>
            <li>
            <a href="#" class="etc1">Foreigners Tickets
            <span class="fas fa-caret-down third"></span>
             </a>



               <ul class="etc2">
              <li><a href="foreignerstkt.php">Add Ticket</a></li>
              <li><a href="Display3.php">Manage Ticket</a></li>
               </ul>
            </li>




            <li>
               <a href="#" class="etc3">Reports
               <span class="fas fa-caret-down fourth"></span>
               </a>
                <ul class="etc4">
               <li><a href="Normalrprt.php">Normal people Report</a></li>
              <li><a href="Foreignerrprt.php">Foreigner people Report</a></li>
               </ul>
            </li>




            <li>
             <a href="#" class="etc5">Search
             <span class="fas fa-caret-down fifth"></span>
              </a>
              <ul class="etc6">
            <li><a href="normalticketsearch.php">Normal Ticket Search</a></li>
            <li><a href="ForeignerTicketSearch.php">Foreigner Ticket Search</a></li>
             </ul>
              </li>




               <li>
              <a href="logout.php" class="">Logout</a>
               </li>
             </ul>
           </nav>
           
           </div>
            
         </div>
         
          
<script>
          $('.btn').click(function(){
          $(this).toggleClass("click");
          $('.sidebar').toggleClass("show");
         });

           $('.feat-btn').click(function(){
          $('nav ul .feat-show').toggleClass("show");
           $('nav ul .first').toggleClass("rotate");
           });


           $('.serv-btn').click(function(){
           $('nav ul .serv-show').toggleClass("show1");
           $('nav ul .second').toggleClass("rotate");
           });

           $('.etc1').click(function(){
          $('nav ul .etc2').toggleClass("show2");
          $('nav ul .third').toggleClass("rotate");
           });


           $('.etc3').click(function(){
           $('nav ul .etc4').toggleClass("show3");
            $('nav ul .fifth').toggleClass("rotate");
           });

           
           $('.etc5').click(function(){
            $('nav ul .etc6').toggleClass("show4");
            $('nav ul .sixth').toggleClass("rotate");
           }); 



           $('nav ul li').click(function(){
           $(this).addClass("active").siblings().removeClass("active");
           });
</script>
</body>
</html>