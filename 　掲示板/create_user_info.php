<?php
require_once 'inquiry_02.php';

$inquiry = new Inquiry();
$inquiry->userid = $_POST['userid'];
$inquiry->pass = $_POST['pass'];


if($inquiry->validation()){
  $error = $inquiry->error;
  echo "最初からやり直してください";
  exit();
}

$inquiry->save();
header("Location:signup_complete.php");
exit();
?>
