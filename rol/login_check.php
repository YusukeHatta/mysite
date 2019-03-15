<?php
require_once 'rol.php';

$inquiry = new Rol();
$inquiry->userid = $_POST['userid'];
$inquiry->pass = $_POST['pass'];

session_start();

if($inquiry->login_check()) {
  // エラーの際
  $error = $inquiry->error;
  include 'login.php';
} else {

  $_SESSION['is_login'] = '1';


  header("Location:main.php");
}
exit();


if (!isset($_SESSION['is_login']) || $_SESSION['is_login'] != "1") {
 header("Location:login.php");
 exit();
}



?>
