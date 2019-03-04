<?php
session_start();

// ログイン状態チェック
if (!isset($_SESSION["NAME"])) {
    header("Location: Logout.php");
    exit;
}
?>
<?php

$datafile = 'bbs.dat';

function h($s){
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $message = $_POST['message'];

  if ($message !== '') {


  $postedat = date('Y-m-d H:i:s');

  $newdata = $message . "\t" . $_SESSION["NAME"]. "\t". $postedat. "\n";

  $fp = fopen($datafile, 'a');
  fwrite($fp, $newdata);
  fclose($fp);
}
}

$posts = file($datafile, FILE_IGNORE_NEW_LINES);

$posts = array_reverse($posts);

 ?>

 <?php
$dir = "/goodbtn"; //フォルダのパス
require_once $_SERVER['DOCUMENT_ROOT'] . $dir .'/GoodBtn.php';
$goodBtn = new GoodBtn($dir);
?>


<!doctype html>
<html>
    <head <?php $goodBtn->head(); ?>
        <meta charset="UTF-8">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <title>メイン</title>
    </head>
    <body>
        <h1>メイン画面</h1>
        <!-- ユーザーIDにHTMLタグが含まれても良いようにエスケープする -->
        <p>ようこそ<u><?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?></u>さん</p>  <!-- ユーザー名をechoで表示 -->
        <ul>
            <li><a href="logout.php">ログアウト</a></li>
        </ul>



        <h2>簡易掲示板</h2>
        <form class="" action="" method="post">
        <div class="form-item">名前</div>
        <?php echo htmlspecialchars($_SESSION["NAME"], ENT_QUOTES); ?>
        <div class="form-item">内容</div>
        <textarea name="message"></textarea>
        <input type="submit" value="投稿">
        </form>



        <h2>投稿一覧（<?php echo count($posts); ?>件）</h2>
        <ul>
        <?php if (count($posts)) : ?>
            <?php foreach ($posts as $post) : ?>
              <?php list($message, $_SESSION["NAME"], $postedat) = explode("\t", $post); ?>
              <li><?php echo h($message); ?> (<?php echo h($_SESSION["NAME"]); ?>) - <?php echo h($postedat); ?></li>
              <?php $goodBtn->viewBtn(); ?>
            <?php endforeach; ?>
        <?php else : ?>
        <li>まだ投稿はありません</li>
        <?php endif; ?>
        </ul>
        </form>

    </body>
</html>
