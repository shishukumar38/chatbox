<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="image/favicon.png" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <title>Chatbox</title>

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">Chatbox</a>
          <p>New user? <a href="signup.php"> Sing up</a> </p>
      </div>
    </nav>
    <!-- login page -->


      <div class="container main_page">
        <div class="row">


        <!-- loginimage -->
        <div class="col-lg-6 col-md-6 ">
          <br><br><br>
          <img src="image/loginillustration.jpg" alt="loginillustrationimage" height="80%" width="80%">
        </div>
        <!-- login information -->
        <div class="col-lg-6 col-md-6 ">
          <br><br><br>
          <h1 class="login_hadding">Welcome back</h1>
          <p class="login_para">login to continue</p>
          <!-- php -->
          <?php
           session_start();
           error_reporting(0);
           if (isset($_POST['submit'])) {
           $user_name = $_POST['user_name'];
           $password = $_POST['password'];
           $con = mysqli_connect('localhost','root','','chatbox');
           $query = "SELECT * FROM create_account WHERE user_name='$user_name' && password='$password' ";
           $data = mysqli_query($con, $query);
           $total = mysqli_num_rows($data);
           if ($total==1 or $total==2) {
             header('location:chat.php');
             // header('location:uploadimage.html');
             // code...
           }
           else {
             ?>
             <p class="erro">Access Denied ❌ try again!</p>
             <?php
           }

          }
          ?>
          <!-- php -->
          <form action="index.php" method="post">
            <input class="form-control form-control-lg border border-primary" type="text" name="user_name" placeholder="User name" aria-label=".form-control-lg example" ><br>
            <input class="form-control form-control-lg border border-primary" type="password" name="password" placeholder="password" aria-label="default input example" required><br>

            <div class="row">
              <div class="col-md-6 col-sm-6">
                <button type="submit" name="submit" class="btn btn-primary btn-lg col-md-6">login</button>
              </div>
              <div class="col-md-6 col-sm-6">
                <p>forget password</p>
              </div>

            </div>
          </form>

        </div>

      </div><br><br>
      </div>





  </body>
</html>
