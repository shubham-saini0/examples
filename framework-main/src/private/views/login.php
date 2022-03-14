<?php
/*
//condition to check for user login
if (isset($_POST["btn-login"])) {
    $email = $_POST["Input"];
    $password = $_POST["Password"];
    $user1 = new User(10, 'FullName', 'UserName', 'Email', 'Password', 'user', 'reject');
    $arr = $user1->showUser();
    $_SESSION["user"] = array();
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i]["email"] == $email && $arr[$i]["userpassword"] == $password && $arr[$i]["statuses"] == 'approved') {
            $f = 1;
            $_SESSION["user"]["id"] = $arr[$i]["id"];
            $_SESSION["user"]["fullname"] = $arr[$i]["fullname"];
            $_SESSION["user"]["username"] = $arr[$i]["username"];
            $_SESSION["user"]["email"] = $arr[$i]["email"];
            $_SESSION["user"]["roles"] = $arr[$i]["roles"];
            $_SESSION["user"]["statuses"] = 'approved';
            header("Location: ../dashboard.php");
        } elseif ($arr[$i]["email"] == $email && $arr[$i]["userpassword"] == $password && $arr[$i]["statuses"] == 'reject') {
            $_SESSION["user"]["roles"] = $arr[$i]["roles"];
            $_SESSION["user"]["statuses"] = 'reject';
            $f = 2;
            break;
        } else {
            $f = 0;
        }
    }
    if ($f == 0) {
        echo "Invalid credentials";
    }
    if ($f == 2) {
        echo "User not approved";
    }
}
*/
?>


<html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Signin Template · Bootstrap v5.1</title>

  <!-- Bootstrap core CSS -->
  <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">


  <style>

    <?php include_once('../node_modules/bootstrap/dist/css/bootstrap.min.css') ?>
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
  <link href="./assets/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-50 m-auto pt-5">
    <form action="" method="POST">
      <h1 class="h3 mb-3 fw-normal">Sign In</h1>

      <div class=" w-50 m-auto form-floating">
        <input type="email" class="form-control" name="Input" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class=" w-50 m-auto form-floating">
        <input type="password" class="form-control" name="Password" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="w-50 btn btn-lg btn-primary" name="btn-login" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; CEDCOSS Technologies</p>
    </form>
  </main>



</body>

</html>