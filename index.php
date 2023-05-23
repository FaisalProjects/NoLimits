<?php 
session_start();
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
                <li><a class="active" href="index.php">Home</a></li>
                <?php 
                if (isset($_SESSION ['email'])){
                echo '<li><a href="logout.php">Logout</a></li>';
                         }
                    else {
                    echo ' <li><a href="login.php">Login</a></li>';
                        }?>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>

                </ul>
            </div>
            <div id="mobile">
                <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
                <i id="bar" class="fas fa-outdent"></i>

            </div>
        </section>
                
    <section id="hero"> 
        
        <h4> لاتفوت الفرصة</h4>
        <h2>عروض يومية</h2>
        <h1> على جميع المنتجات</h1>
        <p>70%كود خصم تخرج يخصم حتى </p>
        <a href="shop.php"><button>تسوق الان!</button></a>
            
    </section>        
        <section id="feature"class=".section-p1"> 
        <div class="fe-box">
            <a href="https://www.muvicinemas.com/en" target="_blank"><img class="fdev" src="Gproject/muviAD.jpg" alt=""> </a>
            <h4>مساحة اعلانية</h4>
        </div>    
    </section>        
    
        
        
        
    <section id="product1"class=".section-p1" >
        <h2> <span> منتجات مميزة</span>  </h2>
        <p>مجموعة الصيف المميزة</p>
        <div class="pro-container" onclick="window.location.href='sproduct.php';">
            <div class="pro">
            <img src="Gproject/prod1.jpg">
            <div class="des">
                <span>مجموعة المصمم فهد</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر70</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div> 
             <div class="pro">
            <img src="Gproject/prod2.jpg">
            <div class="des">
                <span>مجموعة المصمم خالد</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر90</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>     <div class="pro">
            <img src="Gproject/prod66.jpeg">
            <div class="des">
                <span>مجموعة المصمم اسامة</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر70</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>     <div class="pro">
            <img src="Gproject/prod6.jfif">
            <div class="des">
                <span>مجموعة المصمم عبدالله</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر65</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>     <div class="pro">
            <img src="Gproject/prod3.jpg">
            <div class="des">
                <span>مجموعة المصمم عمر</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر70</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>     <div class="pro">
            <img src="Gproject/prod444.jpg">
            <div class="des">
                <span>مجموعة المصمم تركي</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر99</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>     <div class="pro">
            <img src="Gproject/prod5.jpg">
            <div class="des">
                <span>مجموعة المصممة سارة</span>
                <h5>مميز</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    
                </div>
                <h4>ر75</h4>
            </div>
            <a herf="#"><i class="fal fa-shopping-cart cart"></i></a>  
            </div>    
            
        </div>
            
        </section>
        
        
        <section id="banner" class=".section-m1">
        <h4>دعم فني على مدار اليوم</h4>
        <h2>Up to <span>80% Off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
            
    </section>   
        
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
        <hr> 
        <section id="commentS">
            
            <div>
            <form method="post" action="" enctype="multipart/form-data">
                <span>ارسل ملاحظتك</span>
                <h2>نستمع لكم دائما</h2>
               
                <input type="text" name='name' placeholder="Your name"/>
                <input type="text" name='email' placeholder="E-mail" />
                <input type="text" name='subject' placeholder="Subject" />
                <input type="text" name='text' placeholder="Your Message" />
                <input type='submit' name="submit"/>
                
                
                <?php

   if(isset ($_POST ['submit'])) {
       include 'database.php';

    $NAME = $_POST['name'];
    $EMAIL = $_POST['email'];
    $SUBJECT = $_POST['subject'];
    $TEXT = $_POST['text'];

        $insert = "INSERT INTO grad (name, email, subject, text) values ('$NAME', '$EMAIL', '$SUBJECT', '$TEXT')";
          $run =  mysqli_query($con, $insert);
          
          if ($run){
        echo "<script>alert('شكرا لكم سيتم الرد على البريد')</script>";           

          }else {
          echo "<script>alert('لم يتم الاستلام')</script>";
          }
          }
          ?>



            </form> 
            </div>
        </section>
          
        
        
        <script src="script.js"></script> 
    </body>
    
</html>

