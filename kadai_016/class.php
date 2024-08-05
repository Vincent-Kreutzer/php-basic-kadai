<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP_Basic_Kadai_16</title>
</head>
<body>
  <p>
    <?php
      //Foodクラス定義
      class Food {       
        //プロパティ定義
        private $name;
        private $price;
        
        //コンストラクタ定義
        public function __construct(string $name, int $price) {
          $this->name = $name;
          $this->price = $price;
        }     

        //メソッド定義
        public function show_price() {
          echo $this->price . '<br>';
        }             
      }

      //Animalクラス定義
      class Animal {

        //プロパティ定義
        private $name;
        private $height;
        private $weight;

        //コンストラクタ定義
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
        
        //メソッド定義
        public function show_height() {
          echo $this->height . '<br>';        
        }       
      }

      $food = new Food('potato', 250);
      $animal = new Animal('dog', 60, 5000);

      print_r($food);
      print_r($animal);
      $food->show_price();
      $animal->show_height();
    ?>
  </p>
</body>
</html>