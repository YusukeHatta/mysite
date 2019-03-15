<?php
 class Rol{

  public $id;
  public $userid;
  public $pass;
  public $error;

  public function validation(){

    if ($this->userid == "") {
      $this->error["userid"] = "IDが入力されていません";  // code...
    } elseif (strlen($this->userid) > 20) {
      $this->error["userid"] = "IDを２０文字以内で入力してください";
    }
    if ($this->pass == "") {
      $this->error["pass"] = "パスワードが入力されていません";  // code...
    } elseif (strlen($this->pass) > 20) {
      $this->error["pass"] = "パスワードを２０文字以内で入力してください";
    }
    if (count(array_keys($this->error))> 0) {
      return true;
    }
    return false;
 }

  public function save(){

    $userid = $_POST['userid'];
    //パスワードの暗号化
    $hash_pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    try {
      $pdo = new PDO('mysql:host=localhost;dbname=comment_board;charset=utf8','root','Sogekinngu135@',
      array(PDO::ATTR_EMULATE_PREPARES => false));
    } catch (PDOException $e) {
      exit('データベース接続失敗しました！。'.$e->getMessage());
    }

    $stmt = $pdo -> prepare("INSERT INTO login (userid, pass) VALUES (:userid, :pass)");
    $stmt->bindParam(':userid', $userid, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $hash_pass);

    $stmt->execute();

  }


  public function login_check(){

    try {
        // データベースへの接続開始
        $dbh = new PDO('mysql:host=localhost;dbname=rol;charset=utf8','root','Sogekinngu135@');

        // bindParamを利用したSQL文の実行
        $sql = 'SELECT * FROM user WHERE userid = :userid;';
        $sth = $dbh->prepare($sql);
        $sth->bindParam(':userid', $this->userid);
        $sth->execute();
        $pass = $sth->fetch();

        //認証処理
        if ($this->userid == "") {
          $this->error["userid"] = "ユーザーIDが入力されていません";  // code...
        }
        if ($this->pass == "") {
          $this->error["pass"] = "パスワードが入力されていません";  // code...
        } else if ($this->pass != $pass['pass']) {
          $this->error["pass"] = "ユーザーIDまたはパスワードが一致しません";  // code...
        }
        if (count(array_keys($this->error))> 0) {
          return true;
        }

        return false;


        // データベースへの接続に失敗した場合
    } catch (PDOException $e) {
        print('接続失敗:' . $e->getMessage());
        die();
    }

}


}

 ?>
