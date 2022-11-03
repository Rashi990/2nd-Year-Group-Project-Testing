<!DOCTYPE html>
<html>
<head>
    <!--give page title-->
    <title>LOGIN</title>
    <!--attach css file-->
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
  <!--main frame-->
  <div class="main">
    <!--top bar-->
    <div class="top_side">
      <div class="empty">
      </div>
      <div class="login_btn">
        <button type="button" name="button" class="button2"><a href="login.php" class="link">Login</a></button>
      </div>
    </div>
    <br>
    <div class="middle_side">
      <!--left side of main frame-->
      <div class="left_side">
        <!--image file-->
        <img src="https://images.pexels.com/photos/8798954/pexels-photo-8798954.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image doesn't load. Please refreash your browser.">
      </div>
      <!--right side of main frame-->
      <div class="right_side">
        <!--create forms-->
        <form class="register_notice_form" action="" method="">
          <!--notice-->
          <div class="un_div">
            <h2>*For the safty of the patients, we are only accept members between 18 and 40 because blood stem cells from younger donors provide more suvival-rate.</h2>
          </div>
        </form>
        <form class="middle_form" action="signup2.php" method="post">
          <!--selection-->
          <div class="middle_q">
            <label><h2 class="normal">Which discribes your age?</h2><h2 class="red">*</h2></label>
          </div>
          <div class="middle_a">
            <!--first button-->
            <button class="button1" type="submit" name="signin">Between 18 and 40</button>
            <!--second button-->
            <button class="button1" type="submit" name="signin">41 or Older</button>
          </div>
        </form>
      </div>
    </div>
    <div class="bottom_side">
      <!--signature-->
    </div>
  </div>
</body>
</html>
