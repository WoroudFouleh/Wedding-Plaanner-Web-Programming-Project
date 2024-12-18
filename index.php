
<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <!--<title> Login and Registration Form in HTML & CSS | CodingLab </title>-->
  <link rel="stylesheet" href="logCSS.css">
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <input type="checkbox" id="flip">
  <div class="cover">
    <div class="front">
      <img src="images/q9.jpg" alt="">
      <div class="text">
        <span class="text-1"> <br></span>
        <span class="text-2"></span>
      </div>
    </div>
    <div class="back">
      <img class="backImg" src="images/q6.jpg" alt="">
      <div class="text">
        <span class="text-1"> <br> </span>
        <span class="text-2"></span>
      </div>
    </div>
  </div>
  <div class="forms">
    <div class="form-content">
      <div class="login-form">
        <div class="title">Login</div>
        <form action="process.php" method="post">
          <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Enter your email" required autocomplete="off">
            </div>
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Enter your password" required autocomplete="off">
            </div>
<!--            <div class="text"><a href="">Forgot password?</a></div>-->
            <div class="button input-box">
              <input type="submit"  value="login">
            </div>
            <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
          </div>
        </form>
      </div>
      <div class="signup-form">
        <div class="title">Signup</div>
        <form action="connect.php" method="post">
          <div class="input-boxes">
            <div class="input-box">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="Enter your name" required autocomplete="off">
            </div>

            <div class="input-box">
              <i class="fa  fa-phone"></i>
              <input type="text" name="phonenumber" placeholder="Enter your phone number" required autocomplete="off">
            </div>


            <div class="input-box">
              <i class="fas fa-envelope"></i>
              <input type="text" name="email" placeholder="Enter your email" required autocomplete="off">
            </div>
            <div class="input-box">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Enter your password" required autocomplete="off">
            </div>
            <div class="button input-box">
              <input type="submit" value="Sign Up">
            </div>
            <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>


