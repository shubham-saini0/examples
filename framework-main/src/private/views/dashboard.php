<?php

use Store\Order;
use Store\Product;
use Store\User;

session_start();

require("vendor/autoload.php");
require_once('config.php');
require_once('./classes/User.php');
require_once('./classes/Product.php');
require_once('./classes/Order.php');

$user1 = new User(10, 'FullName', 'UserName', 'Email', 'Password', 'user', 'not approved');
$arr1 = $user1->showUserTop();
$count1 = 1001;

$product1 = new Product(10, 'name', 'product1.png', 'category', 'subcategory', 'price');
$p_arr = $product1->showProductTop();
$count2 = 1001;

$order1 = new Order(1, 10, 'pending', 100, 'lucknow', 'lucknow', 'india', 2203);
$order_arr = $order1->showOrderTop();
$count3 = 1001;

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Dashboard Template · Bootstrap v5.1</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">



  <!-- Bootstrap core CSS -->
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="./assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="home.php">Home</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" 
    data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" 
    aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div>
  </header>


    <?php
    if ($_SESSION["user"]["roles"] == "admin") {
    ?>


    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="orders.php">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="customers.php">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <h2>Customers</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID</th>
                  <th scope="col">Full Name</th>
                  <th scope="col">User Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">User password</th>
                  <th scope="col">Roles</th>
                </tr>
              </thead>
              <tbody>

                <?php
                //condition to display 5 users
                for ($i = 0; $i < count($arr1); $i++, $count1++) {
                    echo "<tr> <td>" . $count1 . "</td><td>" . $arr1[$i]["id"] . "</td><td>" . $arr1[$i]["fullname"] . "</td><td>" . $arr1[$i]["username"] . "</td><td>" . $arr1[$i]["email"] . "</td><td>" . $arr1[$i]["userpassword"] . "</td><td>" . $arr1[$i]["roles"] . "</td></tr>";
                }
                ?>

              </tbody>
            </table>
          </div>


          <h2>Products</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">ID</th>
                  <th scope="col">Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">Category</th>
                  <th scope="col">Subcategory</th>
                  <th scope="col">Price</th>
                </tr>
              </thead>
              <tbody>

                <?php
                //condition to display 5 products
                for ($i = 0; $i < count($p_arr); $i++, $count2++) {
                    echo "<tr> <td>" . $count2 . "</td><td>" . $p_arr[$i]["id"] . "</td><td>" . $p_arr[$i]["name"] . "</td><td>" . $p_arr[$i]["image"] . "</td><td>" . $p_arr[$i]["category"] . "</td><td>" . $p_arr[$i]["subcategory"] . "</td><td>" . $p_arr[$i]["price"] . "</td></tr>";
                }
                ?>

              </tbody>
            </table>
          </div>


          <h2>Orders</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Order_ID</th>
                  <th scope="col">User_ID</th>
                  <th scope="col">Status</th>
                  <th scope="col">GrandTotal</th>
                  <th scope="col">Address1</th>
                  <th scope="col">Address2</th>
                  <th scope="col">Country</th>
                  <th scope="col">Zip</th>
                </tr>
              </thead>
              <tbody>

                <?php
                //condition to display 5 orders
                for ($i = 0; $i < count($order_arr); $i++, $count3++) {
                    echo "<tr> <td>" . $count3 . "</td><td>" . $order_arr[$i]["order_id"] . "</td><td>" . $order_arr[$i]["user_id"] . "</td><td>" . $order_arr[$i]["status"] . "</td><td>" . $order_arr[$i]["grandTotal"] . "</td><td>" . $order_arr[$i]["address1"] . "</td><td>" . $order_arr[$i]["address2"] . "</td><td>" . $order_arr[$i]["country"] . "</td><td>" . $order_arr[$i]["zip"] .  "</td></tr>";
                }
                ?>

              </tbody>
            </table>
          </div>



        </main>
      </div>
    </div>


    <?php
    } elseif ($_SESSION["user"]["roles"] == "user" && $_SESSION["user"]["statuses"] == 'approved') {
    }
    ?>

  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>