<?php
if (isset($_POST['update'])) {
  include_once('db.inc.php');
$fName = trim($_POST['fName']);
$lName = trim($_POST['lName']);
$email = trim($_POST['email']);
$city = trim($_POST['city']);
$tel = $_POST['phoneNumber'];
$id = $_POST['id'];
if (empty($fName) || empty($lName) || empty($city)) {
  header('Location: ../update.php?error=emptyfield');
  exit();
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: ../update.php?error=wrongemail');
  exit();
} else {
      $sql = "UPDATE users SET fName = '$fName', lName = '$lName', city = '$city', email = '$email', tel = '$tel' WHERE id = $id;";
      mysqli_query($conn, $sql);
      header('Location: ../index.php?update=success');
    }
} else {
 header('Location: ../update.php');
}