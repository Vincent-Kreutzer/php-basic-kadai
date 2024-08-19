<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP_Basic_Assignment_Web_App</title>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="confirm.php" method="post">
    <table>
      <tr>
        <td><label>社員名</label></td>
        <td>
          <input type="text" name="employee_name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name']:''; ?>"><br>
        </td>
      </tr>
      <tr>
        <td><label>年齢</label></td>
        <td>
          <input type="text" name="employee_age"><br>
        </td>
      </tr>
      <tr>
        <td><label>所属部署</label></td>
        <td>
          <select name="department">
            <option value="開発部" selected>開発部</option>
            <option value="営業部">営業部</option>
            <option value="人事部">人事部</option>
          </select>
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>