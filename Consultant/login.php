<?php
session_start();

include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

  function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $uname = validate($_POST['username']);
  $pass = validate($_POST['password']);

  if (empty($uname)) {
    header("Location: index.php?error=User Name is Required");
    exit();
  }else if (empty($pass)) {
    header("Location: index.php?error=Password is Required");
    exit();
  }else {
    $sql = "SELECT * FROM consultant WHERE username='$uname' AND passowrd='$pass'";

    $result = mysqli_query($conn,$sql);
      if($result === FALSE) {
        die(mysqli_error($conn));
      }
    $row = mysqli_fetch_assoc($result);
    if ($row['username'] === $uname && $row['passowrd'] === $pass) {
      $_SESSION['username'] = $row['username'];
      $_SESSION['con_id'] = $row['con_id'];
      $_SESSION['con_f_name'] = $row['con_f_name'];
      header("Location: con_home.php");
      exit();
    }
    else {
      header("Location: index.php?error=Incorrect User Name or Password");
      exit();
    }
  }
}

else {
  header("Location: index.php");
  exit();
}
