<?php
require_once 'inquiry_02.php';

$inquiry = new Inquiry();
$inquiry->userid = $_POST['userid'];
$inquiry->pass = $_POST['pass'];


if($inquiry->login_check());
  $error = $inquiry->error;
  include 'login.php';
exit();
?>
