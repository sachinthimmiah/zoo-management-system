<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    
    <title>Login form</title>
    
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     
     
 
    <link rel="stylesheet" type="text/css" href="style1.css">
     
</head>
<body>

<h4>
<?php
error_reporting(0);
echo $_SESSION['loginMessage'];
?>

</h4>




    <form action="login_check.php"method="POST" class="Login"> 
    <div   class="container">
        <div    class="header">
            <h1>Login</h1>
        </div>
        <div class="main">
            <form>
                <span>
                    <i class="fa fa-user"></i>
                    <input type="text" placeholder="Username" name="username">
                </span><br>
                <span>
                    <i class="fa fa-lock"></i>
                    <input type="Password" placeholder="Password" name="password">
                    </span><br>
                    <button>login</button>
                    
                     <li>
                      
                    <a href="Back.php" class="header1">Back</a>
                </li>
            </form>
        </div>
    </div>            
</form>

 

</body>
</html>