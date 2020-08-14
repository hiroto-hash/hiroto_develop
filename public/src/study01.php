<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  </style>
  <title>四則演算</title>
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
    // ココにコーディング

    ?>
    </div>
    2.変数を減算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    3.変数を乗算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    4.変数を除算演算子を使って答えを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    5.四則演算子を使ってBMI値の計算結果を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    <a href="https://keisan.casio.jp/exec/system/1161228732" target="_blank">BMIとは</a>
    <div>
    <?php
    // ココにコーディング
    ?>
    </div>
    6.四則演算子を使ってBMI値の計算結果とif文でBMI判定を出力しなさい</br>
    身長 = 175cm</br>
    体重 = 70kg</br>
    例: 
    あなたのBMIは〇〇で、"痩せすぎor通常体重or肥満(１度)or肥満(2度)肥満(3度)or肥満(4度)"です。</br>
    <div>
    <?php
    // ココにコーディング
    $BMIResult = "BMI値";
    $figure = "BMI判定";
    echo "あなたのBMI値は". $BMIResult . "で、" . $figure . "です。";
    ?>
    </div>
  </body>
</html>