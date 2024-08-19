<?php
//セッション開始、氏名を取得
session_start();
$name = isset($_SESSION['name']) ? $_SESSION['name']:'Anonymous';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP_Basic_Assignment_Web_App</title>
</head>
<body>
  <h2>登録が完了しました。</h2>
  <p><?php echo $name; ?>様の社員情報がデータベースに保存されました。</p>
  <button id="back-btn" onclick="location.href='form.php';">戻る</button>

  <?php
  //セッション変数初期化とセッションの終了
  $_SESSION = array();
  session_destroy();
  ?>
</body>