<?php

require_once 'inquiry_02.php';

$inquiry = new Inquiry();
$inquiry->userid = $_POST['userid'];
$inquiry->pass = $_POST['pass'];


$inquiry->login_check();
header("main_02.php");
exit();

?>
