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
    <title>Sign up to Chatbox</title>

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand">Chatbox</a>
          <p>have a account <a href="index.php">Login</a> </p>
      </div>
    </nav>
    <!-- login page -->


      <div class="container main_page">
        <div class="row">


        <!-- loginimage -->
        <div class="col-lg-6 col-md-6 ">
          <br><br><br>
          <img src="image/create-account-img.jpg" alt="loginillustrationimage" height="80%" width="80%">
        </div>
        <!-- login information -->
        <div class="col-lg-6 col-md-6 ">
          <br><br><br>
          <h1 class="login_hadding">Create account</h1>
          <p class="login_para">to chat more people</p>
          <form action="create_account.php" method="post">
            <div class="row">
              <div class="col">
                <input type="text" class="form-control border border-primary" name="user_name" placeholder="First name" required>
              </div>
              <div class="col">
                <input type="text" class="form-control border border-primary" name="password" placeholder="make password">
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control border border-primary"name="gmail" placeholder="Gmail" required>
              </div>
              <div class="col">
                <input type="text" class="form-control border border-primary"name="phone" placeholder="Phone no." required>
              </div>
            </div><br>
            <div class="row">
              <div class="col">
                <input type="text" class="form-control border border-primary"name="city" placeholder="City" required>
              </div>
              <div class="col">
                <input type="text" class="form-control border border-primary"name="age" placeholder="Age" required>
              </div>
            </div><br>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender" id="option1" checked> Male
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender" id="option2" > Female
              </label>
              <label class="btn btn-outline-primary">
                <input type="radio" name="gender" id="option3" > Other
              </label>
            </div><br><br>
            <button type="submit" name="submit" class="btn btn-primary mb-2">Create account</button>
          </form>


        </div>

      </div><br><br>
      </div>





  </body>
</html>
