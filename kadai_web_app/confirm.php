<?php
//セッション開始
session_start();

//formの入力データ取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];

//エラーメッセージ格納
$errors = [];

//社員名用バリデーション
if (empty($name)) {
  $errors[] = "氏名を入力してください。";
}

//年齢用バリデーション
if (empty($age)) {
  $errors[] = "年齢を入力してください。";
} elseif (!is_numeric($age)) {
  $errors[] = "年齢は半角英数で入力してください。";
}

//入力に問題がなければセッション・クッキー保存
if (empty($errors)) {
  $_SESSION['name'] = $name;
  $_SESSION['age'] = $age;
  $_SESSION['department'] = $department;

  setcookie('name', $name, time() + 1800);
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <title>PHP_Basic_Assignment_Web_App</title>
</head>

<body>
  <h2>入力内容をご確認ください。</h2>

  <table border="1">
    <tr>  
      <th>項目</th>
      <th>入力内容</th>
    </tr>  
    <tr>
      <td>社員名</td>
      <td><?php echo $name; ?></td>
    </tr>
    <tr>
      <td>年齢</td>
      <td><?php echo $age; ?></td>
    </tr>
    <tr>
      <td>所属部署</td>
      <td><?php echo $department; ?></td>
    </tr>
  </table>
  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel_btn" onclick="history.back();">キャンセル</button>
  </p>

  <?php
  //入力項目にエラーがある場合
  if (!empty($errors)) {
    foreach ($errors as $error) {
      echo '<font color="red">' . $error . '</font>' . '<br>';
    }
    //且つ確定ボタンの無効化処理をブラウザ側に送信
    echo '<script> document.getElementById("confirm-btn").disabled = true; </script>';
  };
  ?>
</body>
</html>