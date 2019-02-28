<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>お問い合わせフォーム</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div class="main">

<?php
// データベース名の定義
define('DB_DATABASE', 'form_db');
// データベースユーザー名の定義
define('DB_USERNAME', 'root');
// データベースユーザーの接続パスワードの定義
define('DB_PASSWORD', 'Sogekinngu135@');
// DSN（データソースネーム）の定義
define('DB_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

try {
    // コンストラクタ作成の際に、DSN・ユーザー名・パスワード情報を渡す
    $db = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    // エラーが起きた際にExceptionを出力する設定
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // クエリ実行
    $statement = $db->prepare("INSERT INTO user(name, email, body) VALUES(?, ?, ?);");

    $statement->execute(['山田花子', 'yamada@example.com', 'お問い合わせ内容文']);
    
    echo "Inserted Id : ".$db->lastInsertId();
} catch (PDOException $e) {

    var_dump($e);

    exit;
}

?>
  <div class="contact-form">

  <h2>お問い合わせいただきありがとうございます。</h2>

  <div class="form-item">■ 名前</div>
  <?php echo $_POST['name']; ?>
  <div class="form-item">■ メールアドレス</div>
  <?php echo $_POST['email']; ?>
  <div class="form-item">■ お問い合わせ内容</div>
  <?php echo $_POST['body']; ?>

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
