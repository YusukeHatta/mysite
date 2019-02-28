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

 <?php
 mb_language("Japanese");
 mb_internal_encoding("UTF-8");

 $name = $_POST['name'];
 $email = $_POST['email'];
 $body = $_POST['body'];

 if(mb_send_mail($name, $email, $body)){
 echo "メールを送信しました";
 } else {
 echo "メールの送信に失敗しました";
}
 ?>
</div>
  </div>

</body>
</html>
