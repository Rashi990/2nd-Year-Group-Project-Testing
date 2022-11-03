<?php
session_start();
if (isset($_SESSION['con_id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
<head>
    <!--give page title-->
    <title>Consultant Page</title>
    <!--attach css file-->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Hello <?php echo $_SESSION['con_f_name']; ?></h1>
  <a href="logout.php" class="logout">Logout</a>
</body>
</html>

<?php
}
else {
  header("Location: index.php");
  exit();
}
?>
