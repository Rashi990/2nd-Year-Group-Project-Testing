<!DOCTYPE html>
<html>
<head>
    <!--give page title-->
    <title>LOGIN</title>
    <!--attach css file-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!--main frame-->
  <div class="main">
    <!--left side of main frame-->
    <div class="left_side">
        <!--title-->
        <h1 align=center>WELCOME BACK!</h1>
        <!--subtitle-->
        <h3 align=center>Please enter your details.</h3>
        <br>
      <!--create a form-->
      <form class="login_form" action="login.php" method="post">
        <?php if (isset($_GET['error'])) {?>
          <p class="error"><?php echo ($_GET['error']); ?></p>
        <?php } ?>
      <!--labels for user name and password-->
      <div class="un_div">
        <label>User Name</label>
        <input type="text" name="username" placeholder="User Name">
      </div>
      <div class="pass_div">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
      </div>
      <br>
      <div class="options">
      <!--remember me checkbox-->
      <!--forgot password link-->
      </div>
      <!--sign in button-->
      <button class="button1" type="submit" name="signin">Sign in</button>
      <!--create account link-->
      <div class="account">
        <h5>Don't have an account? <a href="signup.php" class="link">create account</a></h5>
      </div>
      </form>
      <!--signature-->
    </div>
    <!--right side of main frame-->
    <div class="right_side">
      <!--image file-->
      <img src="https://images.pexels.com/photos/8798942/pexels-photo-8798942.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image doesn't load. Please refreash your browser.">
    </div>
  </div>
</body>
</html>
