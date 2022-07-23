<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Food</title>
  </head>
  <body>
    <!-- start part1 -->
    <div class="container-fluid px-0 ">
      <div class="row">
        <div class="col">
          <ul class="nav justify-content-center my-text border-bottom border-dark">
            <li class="nav-item">
            <a class="nav-link  my-text " href="home.php">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link my-text " href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-text " href="categories.php">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-text" href="food.php">Food</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-text " href="order.php">Order</a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-text">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- end part 1 -->
    <!-- start part2 -->
    <div class="container-fluid wapper px-0">
      <div class="row p2 ms-auto">
        <div class="col ">
            <h2 class="fw-bold fs-3 mb-4">Manage Food</h2>
          <div class="">  
            <a href="#" class="btn-add btn btn-primary ">Add New User</a>
            <div class="table-responsive">
              <table class="table table-borderless">
                  <thead>
                      <tr >
                          <th scope="col " class="border-bottom border-dark row-seperator">S.N</th>
                          <th scope="col" class="border-bottom border-dark">Tittle</th>
                          <th scope="col" class="border-bottom border-dark">Price</th>
                          <th scope="col" class="border-bottom border-dark">Image</th>
                          <th scope="col" class="border-bottom border-dark" >Featured</th>
                          <th scope="col" class="border-bottom border-dark">Active</th>
                          <th scope="col" class="border-bottom border-dark" >Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr class="">
                          <td scope="row border-bottom-0 " class="align-middle">1.</th>
                          <td class="w-25 align-middle">Dumplings Specials</td>
                          <td class="align-middle">$5.00</td>
                          <td class="col-2 ">
                            <img src="images/menu-momo.jpg" alt="" class="w-50 img-dt">
                          </td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          
                          </td>
                      </tr>
                      <tr class="">
                        <td scope="row border-bottom-0" class="align-middle" >2.</th>
                          <td class="w-25 align-middle">Best Burger</td>
                          <td  class="align-middle">$4.00</td>
                          <td>
                            <img src="images/menu-burger.jpg" alt="" class="w-50 img-dt">
                          </td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          </td>
                      </tr>
                      <tr class="">
                          <td scope="row border-bottom-0"  class="align-middle">3.</th>
                          <td class="w-25 align-middle"> Somky BBQ Pizza</td>
                          <td  class="align-middle">$6.00</td>
                          <td class="">
                            <img src="images/pizza.jpg" alt="" class="w-50 img-dt">
                          </td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          
                          </td>
                      </tr>
                      <tr class="">
                          <td scope="row border-bottom-0" class="align-middle" >4.</th>
                          <td class="w-25 align-middle"> Sakedo Momo</td>
                          <td  class="align-middle">$6.00</td>
                          <td>
                            <img src="images/momo.jpg" alt="" class="w-50 img-dt">
                          </td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          
                          </td>
                      </tr>
                      <tr class="">
                          <td scope="row border-bottom-0" class="align-middle" >5.</th>
                          <td class="w-25 align-middle">Mixed Pizza</td>
                          <td  class="align-middle">$10.00</td>
                          <td class="">
                            <img src="images/menu-pizza.jpg" alt="" class="w-50 img-dt">
                          </td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">Yes</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          
                          </td>
                      </tr>
                      <tr>
                          <td scope="row border-bottom-0"  class="align-middle">6.</th>
                          <td class="w-25 align-middle">Quia est ipsum id id</td>
                          <td  class="align-middle">$5.00</td>
                          <td>
                            <h6 class="my-text-color">image not added</h6>
                          </td>
                          <td class="align-middle">No</td>
                          <td class="align-middle">No</td>
                          <td class="align-middle">
                          <a href="#" class="btn-update btn  btn-primary p-0 ">Update Food</a>
                          <a href="#" class="btn-delete btn  btn-primary p-0 ">Delete Food</a>
                          
                          </td>
                      </tr>
                  </tbody>
                </table>
              <div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end part2 -->
   <!-- start part3 -->
   <div class=" container-fluid  ">
      <div class="row ">
        <div class="col my-bg ">
          <p class="text-center  ">
            2020 All rights reserved. Food House. Developed By - <a class="fw-bold" href="#">Bích Phương</a>
          </p>
          
        </div>
      </div>
    </div>
    <!-- end part3 -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>