<!<!doctype html>
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
                <li><a href="login.php">Login</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="cart.php"><i class="fas fa-shopping-cart"></i></a></li>

                </ul>
            </div>
        </section>
                
   
        
        <section id="prodetails" class="section-p1">
            <div class="single-pro-image">
                <img src="Gproject/prod1.jpg" width="100%" id="mainImg">
                
            </div>  
            <div class="single-pro-details">
                <h6>T-Shirt</h6>
                <h4>قميص رجالي</h4>
                <h2>ر70</h2>
                <select> 
                    <option>Select Size</option>
                    <option>XL</option>
                    <option>XXL</option>
                    <option>XXL</option>
                    <option>Small</option>
                    <option>Large</option>
                </select>
                <input type="number" value="1">
                <button class="normal">اضف الى السلة</button>
                <h4>وصف المنتج</h4>
                <span>قميص قطني عالي الجودة مصنوع من القطن الناعم والمريح. يتميز هذا القميص بتصميم كلاسيكي وأنيق
                    ، مع ياقة مدورة وأكمام قصيرة. يتوفر القميص بعدة ألوان جذابة، مما يجعله مثاليًا للارتداء في أي مناسبة. يمكن ارتداء هذا القميص بشكل مستقل أو تحت سترة أو قميص آخر لإضفاء لمسة أنيقة على أي مظهر. يتوفر القميص بمقاسات مختلفة لتناسب جميع الأحجام والأشكال
                   . احصل على هذا القميص القطني الرائع وأضفه إلى خزانة ملابسك اليوم!
                </span>
                

            </div>
            
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
        
        
        
        <section id="commentS">
        <div class="section-p1">
  <h3>:ارسل ملاحظتك</h3>
  <form action="/comment/submit" method="post">
    <input type="text" name="name" placeholder="Your Name">
    <input type="email" name="email" placeholder="Your Email">
    <textarea name="comment" rows="5" cols="30"></textarea>
    <input type="submit" value="Submit">
  </form>
</div>
        </section>    
        
        
        <script src="script.js"></script> 
    </body>
    
</html>


