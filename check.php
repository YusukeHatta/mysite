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
      <h2>お問い合わせ内容</h2>
      <form method="post" action="sent.php">
      <div class="form-item">■ 名前</div>
      <?php echo $_POST['name']; ?>
      <div class="form-item">■ メールアドレス</div>
      <?php echo $_POST['email']; ?>
      <div class="form-item">■ お問い合わせ内容</div>
      <?php echo $_POST['body']; ?>
      <input type="submit" value="送信">
    </form>
    </div>
  </div>

</body>
</html>
