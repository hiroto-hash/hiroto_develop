<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>ファイル操作</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>ファイル操作</h1>
      <h3>CSVファイルや画像ファイルの書き換えや読み込み</h3>
      <a href="../index.php">戻る</a>
    <div>
      文字コードは UTF-8を使用
    </div>
    1."src/img/study06.png"画像ファイルをbase64にエンコードし出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    $img =  base64_encode(file_get_contents("img/study06.png"));
    echo $img;
   ?>
    </div>
    2."1."のエンコードした変数をbase64オブジェクトをデコードしてファイル名を「半角英数字の大文字」に変更した上で出力しなさい。</br>
    ※画像自体の表示と処理が完了した変数の出力</br>
    study06.png → STUDY06.png</br>
    <div>
    <?php
    // ココにコーディング
    // エンコードしたものを$base64_dataに代入
    $base64_data = $img;
    // エンコードしたものをデコードする
    $decode_data = base64_decode($base64_data);
    $file_name = 'study06.png';
    file_put_contents($file_name, $decode_data);
    // ディレクトリ移動
    $study = rename("study06.png", "img/study06.png");
    // デコードしたファイル名を半角英数字の大文字に変更
    $new_file_name= preg_replace_callback("/.+?(?=\.)/",function($x){return mb_strtoupper($x[0]);},$file_name);
    echo $new_file_name;

   ?>
    </div>
    3-1.ボタンを押下したら、src/files/にstudy06.csvファイルが保存される実装。</br>
    3-2.htmlでボタンを作成し押下したら実行される関数を作りなさい</br>
    3-3.fopen(),fclose(),fputcsv(),if文,arrayをすべて使って以下の様に出力しなさい。</br>
    3-4.ifではcsvファイルを正常に開けているかの確認をしなさい。</br>
    <div>
      <form method = "post">
       <button type = "submit" name = 'approve'>保存</button>
    </br>
    <?php
    // ココにコーディング
    // ディレクトリ作成
    $root_path = './src/files/';
    if (mkdir($root_path, 0777, true)){
      echo 'フォルダを作成しました。';
    }else{
      echo 'フォルダの作成が失敗しました。';
    }
    // 配列を作る
    $array = array('apple', 'orange', 'melon');
    // 保存ボタンが押されたらファイル保存、または新規作成
    $file_handler = fopen('study06.csv', 'w');
    // ファイルが正常に開けていたら配列を書き込む
    if ( $file_handler ) {
      fputcsv($file_handler, $array);
		}
    
    $file = 'study06.csv';
    if (rename($file, 'src/files/study06.csv')) {
        echo '移動しました';
    } else {
      echo '移動に失敗しました';
    };
    // ファイル閉じる
    fclose($file_handler);

    ?>
    </div>
  </body>
</html>