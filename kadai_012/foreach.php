<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編_第12章課題</title>
</head>
<body>
  <a>
    <?php
    $groceries = [
      "名前" => "玉ねぎ",
      "値段" => 200,
      "産地" => "北海道"];
    
    foreach($groceries as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </a>
</body>

</html>