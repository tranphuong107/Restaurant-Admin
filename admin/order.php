<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Order</title>
  </head>
  <body>
    <!-- start part1 -->
    <div class="container-fluid px-0">
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
            <h2 class="fw-bold fs-3 mb-4">Manage Order</h2>
            <div class="">  
              <a href="#" class="btn-add btn btn-primary ">Add New User</a>
              <div class="table-responsive">
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" class="border-bottom top border-dark ">S.N</th>
                            <th scope="col" class="border-bottom top border-dark">Food</th>
                            <th scope="col" class="border-bottom top border-dark" >Price</th>
                            <th scope="col" class="border-bottom top border-dark">Qty.</th>
                            <th scope="col" class="border-bottom top border-dark" >Total</th>
                            <th scope="col" class="border-bottom top border-dark">Order Date</th>
                            <th scope="col" class="border-bottom top border-dark">Status</th>
                            <th scope="col" class="border-bottom  border-dark" >Customer Name</th>
                            <th scope="col" class="border-bottom top border-dark">Contact</th>
                            <th scope="col" class="border-bottom top border-dark" >Email</th>
                            <th scope="col" class="border-bottom top border-dark" >Address</th>
                            <th scope="col" class="border-bottom top border-dark">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row border-bottom-0 mx-1">1.</th>
                            <td>Mixed 
                                Pizza
                            </td>
                            <td >10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30
                                04:07:17
                            </td>
                            <td class="status-color">Delivered</td>
                            <td>Jana Brush</td>
                            <td>+1(562)
                                101-2018
                            </td>
                            <td>tydujy@mailinator.com</td>
                            <td>Minina irue
                                ducimus
                            </td>
                            <td class="fw-bold "><h3 class="fw-bold action-color" >Update Order</h3>
                            </td>  
                        </tr>

                        <tr class="">
                            <td scope="row border-bottom-0">2.</th>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30
                                03:52:17
                            </td>
                            <td class="status-color">Delivered</td>
                            <td>Kelly Dillard</td>
                            <td>+1(908)
                                914-3106
                            </td>
                            <td>fexekihor@mailinator.com</td>
                            <td>Incidunt ipsum add
                            </td>
                            <td class="fw-bold "><h3 class="fw-bold action-color" >Update Order</h3>
                            </td>  
                        </tr>
                        <tr class="">
                            <td scope="row border-bottom-0">3.</th>
                            <td>Sadeko Momo
                            </td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30
                                03:49:53
                            </td>
                            <td class="cancelled-color fw-bold" >Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1(576)
                                540-2098
                            </td>
                            <td>zuhafiq@mailinator.com</td>
                            <td>Duis aliqua Qui lor
                            </td>
                            <td class="fw-bold ">
                            <h3 class="fw-bold action-color" >Update Order</h3>
                            </td>  
                        </tr>
                    </tbody>
                </table>
              </div>
        </div>
      </div>
    </div>
    <!-- end part2 -->
    <!-- start part3 -->
    <div class="container-fluid">
      <div class="row ">
        <div class="col my-bg ">
          <p class="text-center ">
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