<?php
if (isset($_POST['register'])) {
  include_once('db.inc.php');
$fName = trim($_POST['fName']);
$lName = $_POST['lName'];
$email = $_POST['email'];
$city = $_POST['city'];
$tel = $_POST['phoneNumber'];
// var_dump($fName);

if (empty($fName) || empty($lName) || empty($city)) {
  header('Location: ../register.php?error=emptyfield');
  exit();
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../register.php?error=wrongemail');
  exit();
} else {
    $sql = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    $resultChecker = mysqli_num_rows($result);
    if ($resultChecker > 0) {
      header('Location: ../register.php?error=userexist');
  exit();
    } else {
      $sql = "INSERT INTO users (fName, lName, city, email, tel) VALUES ('$fName', '$lName', '$city', '$email', $tel);";
      mysqli_query($conn, $sql);
      header('Location: ../register.php?error=success');
    }
}
} else {
 header('Location: ../register.php');
}


