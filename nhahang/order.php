<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <link rel="stylesheet" href="css/order-style.css">
</head>
<body>
    <!-- Start Narbar  -->
    <section class="navbar">
        <div class="container">
           
                <div class="logo">
                    <img src="images/logo.png" alt="" class="img-responsive">
                </div>
                <div class="menu text-right">
                    <ul>
                     <li>
                            <a href="index.php">Home </a>
                     </li>
                        <li>
                            <a href="categories.php">Categories</a>
                        </li>
                        <li>
                            <a href="Foods.php">Foods</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            
                <div class="clearfix"></div>
        </div>
    </section>
    <!-- End Narbar -->
    <!-- start order food-->
    <section class="order-food">
        <div class="container">
            <h1 class="text-center">Fill this form to confirm your order.</h1>
            <form action="#" >
                <fieldset class="form-confirm">
                    <legend class="form-text"> Selected Food</legend>
                    <div class="food-order-img">
                        <img src="images/menu-pizza.jpg" alt="" class="img-responsive img-curve">
                    </div>
                    <div class="food-order-text">
                        <h2>Food Tittle</h2>
                        <p class="food-price"> $2.3</p>
                        <h3>Quantity</h3>
                        <input type="number" value="1 " class="sl" name="quantity" id="">
                    </div>
                </fieldset>
            </form>

            <form action="#" >
                <fieldset class="form-confirm ">
                    <legend class="form-text">Delivery Details</legend>
                        <h4>Full Name</h4>
                        <input class="input-box" type="text" size="30"/><br/>
                        <h4>Phone Number</h4>
                        <input class="input-box" type="text" size="30"/><br/>
                        <h4>Email</h4>
                        <input class="input-box" type="text" size="30"/><br/>
                        <h4>Address</h4>
                        <input class="input-box Address" type="text" name="" id="">
                        <a href="#" class="btn-confirm btn-primary">Confirm Order</a>
                </fieldset>
            </form>
        </div>
    </section>
    <!-- end order -->
    <!-- Start social  -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/50/000000/facebook-circled.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluency/50/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/ios-filled/50/4a90e2/twitter.png"/></a>
                </li>
                
            </ul>
        </div>
    </section>
    <!-- End social -->
    <!-- Start footer  -->
    <section class="footerS">
        <div class="container">
            <p class="text-center">All rights reserved. Designed By <a href="#">Bich Phuong</a></p>
        </div>
    </section>
    <!-- End footer -->
</body>
</html>