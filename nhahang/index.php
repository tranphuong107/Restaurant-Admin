<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Restaurant</title>
    
</head>
<body>
    <!-- Start Narbar  -->
    <div class="container-fluid ">
        <div class="row">
            <div class="col ">
               

    <nav class="navbar navbar-expand-md navbar-light p-1 ">
  <div class="container">
    <a class="navbar-brand disable" >
    <img src="images/logo.png" class="img-fluid" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto  fw-bolder  ">
        <li class="nav-item  ">
          <a class="nav-link fs-6 " aria-current="page" href="http://localhost:88/nhahang/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link   fs-6" href="http://localhost:88/nhahang/categories.php">Categories</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link  fs-6" href="http://localhost:88/nhahang/food.php">Foods</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link   fs-6" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
            </div>
        </div>
    </div>
    <!-- End Narbar -->
    <!-- Start Food Search -->
    <div class="container-fluid px-0">

            <div class=" Food-Search px-0 text-center">
                <form action="" class="">
                <input type="search"  class="my-2 p-2 border-0 rounded-2 " style="width: 400px;" name="Search" placeholder="Search for Food...">
                <input type="submit" name="submit" value="Search" class="py-2 btn btn-primary  my-color border-0">
                </form>
            </div>
            
    </div>
   
    <!-- End Food search -->
  <!-- Start categories  -->
  <section class="categories ">
        <div class=" container text-center my-5 ">
            <div class="row">
                <div class="col">

                </div>
            </div>
            <h1 class=" my-text text-center pb-3 ">Explore Foods</h1>
            <div class="text-center">
            <a href="#">
            <div class=" box-3 position-relative float-start ">
                <img src="images/pizza.jpg" alt="pizza" class="w-100 rounded-3 ">
                <h3 class="position-absolute ">Pizza</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 position-relative  float-start ">
                <img src="images/burger.jpg" alt="burger" class="w-100 rounded-3 ">
                <h3 class="position-absolute">Burger</h3>
            </div>
            </a>
            <a href="#" >
            <div class="box-3 position-relative float-start ">
                <img src="images/momo.jpg" alt="momo" class="w-100 rounded-3 ">
                <h3 class="position-absolute">Momo</h3>
            </div>
            </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- End categories  -->
    <!-- Start foodmenu  -->
    <section class="food-menu">
        <div class="container ">
            <h1 class="my-text text-center pb-3">Food Menu</h1>
            <div class="food-menu-box pe-0">
                <div class="food-menu-img">
                    <img src="images/menu-momo.jpg" alt="Chicken Hawai Pizza" class=" rounded-3 w-100 ">
                </div>
                <div class="food-menu-desc">
                    <h4 class="">Chicken Hawai Pizza</h4>
                    <p class="fs-6 fw-bold mb-0">
                        $2.3
                    </p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    
                    <a href="http://localhost:88/Project01/order.php" class="p-0 px-1 btn btn-primary my-color border-0">Order now</a>
                </div>
            </div>
            <div class="food-menu-box pe-0">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Smoky burger" class="rounded-3 w-100">
                </div>
                <div class="food-menu-desc">
                    <h4>Smoky Burger</h4>
                    <p class="fs-6 fw-bold mb-0">
                        $2.3
                    </p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    
                    <a href="http://localhost:88/Project01/order.php" class="p-0 px-1 btn btn-primary my-color border-0">Order now</a>
                </div>
            </div>
            
            <div class="food-menu-box pe-0">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt=" Vegetable Pizza" class="rounded-3 w-100">
                </div>
                <div class="food-menu-desc">
                    <h4>Vegetable Pizza</h4>
                    <p class="fs-6 fw-bold mb-0">
                        $2.3
                    </p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    
                    <a href="http://localhost:88/Project01/order.php" class="p-0 px-1  btn btn-primary my-color border-0">Order now</a>
                </div>
            </div>
            <div class="food-menu-box pe-0">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt=" Vegetable Pizza" class="rounded-3 w-100">
                </div>
                <div class="food-menu-desc">
                    <h4>Vegetable Pizza</h4>
                    <p class="fs-6 fw-bold mb-0 ">
                        $2.3
                    </p>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    
                    <a href="http://localhost:88/Project01/order.php" class="p-0 px-1  btn btn-primary my-color border-0">Order now</a>
                </div>
            </div>
                <!-- <div>
                    <h4 class=" see-all text-center">See All Foods</h4>
                </div> -->
            <div class="clearfix"></div>
        </div>
    </section>
    <!-- End foodmenu -->
   <!-- Start social  -->
   <section class="social">
        <div class="container-fluid text-center">
            <ul class="mt-5">
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
     <section class="footer">
        <div class="container-fluid ">
            <p class="text-center">All rights reserved. Designed By <a class="my-color-text"href="#">Bich Phuong</a></p>
        </div>
    </section>
    <!-- End footer -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>