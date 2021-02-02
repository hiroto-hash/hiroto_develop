<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>四則演算</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>四則演算</h1>
    <h3>四則演算を使って以下の問題を解きなさい</h3>
      <a href="../index.php">戻る</a>
    <div>
    $firstNumber = 9; </br>
    $secondNumber = 3; </br>
    </div>
    1.変数を加算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    echo 9 + 3;

    ?>
    </div>
    2.変数を減算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    echo 9 - 3;
    ?>
    </div>
    3.変数を乗算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    echo 9 * 3;
    ?>
    </div>
    4.変数を除算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    echo 9 / 3; 
    ?>
    </div>
    5.四則演算子を使ってBMI値の計算結果を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    <a href="https://keisan.casio.jp/exec/system/1161228732" target="_blank">BMIとは</a>
    <div>
    <?php
    echo 70 / (175 * 2);
    ?>
    </div>
    6.四則演算子を使ってBMI値の計算結果とif文でBMI判定を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    例: 
    あなたのBMIは〇〇で、"痩せすぎor通常体重or肥満(１度)or肥満(2度)肥満(3度)or肥満(4度)"です。</br>
    <div>
    <?php
    if($BMIResult < 16){
      echo "痩せすぎ";
    }
      elseif($BMIResult >= 18.5 && $BMIResult <= 24.99){
       echo "普通体重";
      }
        elseif($BMIResult >= 35.00 && $BMIResult <= 39.99){
         echo "肥満(1度)";
        }
       　elseif($BMIResult >= 30.00 && $BMIResult <= 34.99){
        　echo "肥満(2度)";
      　　}
      　　　else($BMIResult >= 40.00){
       　　　echo "肥満(3度)";
      　　　}
    $BMIResult = "0.2";
    $figure = "BMI判定";
    echo "あなたのBMI値は". $BMIResult . "で、" . $figure . "です。";
    ?>
    </div>
  </body>
</html>