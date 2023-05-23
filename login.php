<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'grad') or die ('unable to connect');
?>

<!doctype html>
<html lang="en"> 
    
    <head> 
        <meta charset="UTF-8">     
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> NoLimits </title>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> 
        <link rel="stylesheet" href="style.css"> 
    </head>

    <body>
        
        <section id="header"> 
            <a id="img" href="#"><img src="Gproject/logoo.png" class="logo" alt=""></a>  
        
            <div> 
                
               <ul id="navbar"> 
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="login.php">Login</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>

                </ul>
            </div>
        </section>
        <hr>
        <section id="commentS">

            <form action="" method="POST">
                <h2>تسجيل الدخول</h2>
                <input type='text' name='email' placeholder="E-mail">
                <input type='password' name='password' placeholder="password">
                <button name='login' class="normal">Login</button>
                <a href="signup.php">  لا املك حساب</a>

                 <?php

   if(isset ($_POST ['login'])) {
       include 'database.php';

    $EMAIL = $_POST['email'];
    $PASSWORD = $_POST['password'];

       $select = mysqli_query($con, "SELECT * FROM login WHERE email = '$EMAIL' AND password = '$PASSWORD'");
       $raw = mysqli_fetch_array($select);
       
   if($raw){
       $_SESSION['email'] = $raw ['email'];
       $_SESSION['password'] = $raw ['password'];
       
        } else {
            echo "<script>alert('ايميل او كلمة مرور خاطئة')</script>";   
        }
            
        }
        if(isset($_SESSION['email'])){
            header("location:index.php");
        }
       
       
          ?>

            </form>  
        </section>
        <hr>

        
        
   
   
        
        
        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="Gproject/logoo.png" width="250">
                <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>

                      
                    
                </div>
                    
                </div>
                
            </div>
            <div class="col">
                <h4>My Account</h4>
                <a href="#">Sign in</a>
                <a href="#">View Cart</a>
                <a href="#">Track my order</a>
                <a href="#">Help</a>
            </div>
            
        </footer>    
        
        
        
        
        
        <script src="script.js"></script> 
    </body>
    
</html>


