<?php

date_default_timezone_set('Asia/Tokyo');

$name = $_POST['name'];
$email = $_POST['email'];
$body = $_POST['body'];

try {
$pdo = new PDO('mysql:host=localhost;dbname=form_db;charset=utf8','root','Sogekinngu135@',
array(PDO::ATTR_EMULATE_PREPARES => false));
} catch (PDOException $e) {
 exit('データベース接続失敗。'.$e->getMessage());
}

$stmt = $pdo -> prepare("INSERT INTO form_db (name, email, body, created_at) VALUES (:name, :email, :body, now())");
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':body', $body, PDO::PARAM_STR);

$stmt->execute();

?>





<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="main">

  <div class="contact-form">

  <h2>お問い合わせいただきありがとうございます。</h2>

  <div class="form-item">■ 名前</div>
  <?php echo $_POST['name']; ?>
  <div class="form-item">■ メールアドレス</div>
  <?php echo $_POST['email']; ?>
  <div class="form-item">■ お問い合わせ内容</div>
  <?php echo $_POST['body']; ?>


</div>
  </div>

</body>
</html>
