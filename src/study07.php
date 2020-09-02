<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>SQL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>SQL</h1>
      <h3>SQLデータベースへ接続と操作</h3>
      <a href="../index.php">戻る</a>
    <div>
    <b>事前準備</b></br>
    dc_study_php/japan.sqlをMAMPのmySQLにインポートする。</br>
    エラーがでていなければ、成功で再描画するとサイドバーにjapanデータベースが作成されている</br>
    </div>
    1-1. new mysqli()オブジェクト型かmysqli_connect()手続き型どちらかを使ってSQLデータベースと接続の確認をしなさい。</br>
    接続した場合は「データベースとの接続ができました」と出力しなさい。</br>
    1-2. if文で成功した場合と失敗した場合の条件を書きなさい。</br>
    失敗した場合、mysqli_close()を使って接続を閉じて、「データベースとの接続を閉じました」と出力なさい。</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    2. japan.prefecture.id=14のレコードを取得しnameを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    3. japan.prefecture.name='秋田県'のレコードを取得しname_kanaを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    4. japan.prefectureからnameをwhile文、fetch_assoc()とSQLのSELECT使ってすべて取得しなさい出力する際は１レコードずつ改行しなさい。</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    5. japan.region.id = japan.prefecture.region_idとした場合、関東地方(region.id = 3)と一致する都道府県と地方をSQLのJOINを使って出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    6. japan.prefectureにSQLのINSERTとNOT EXISTSを使ってid=48(他のフィールドは任意)を、</br>
    id=48のデータが存在しない時だけ登録するレコード１つを追加し、追加したレコードを出力しさい。</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    6. japan.prefecture.id=1のレコードのnameを北国name_kanaをキタグニに変更し、出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    7. 6.で追加したレコードをSQLのDELETEを使って削除しなさい。</br>
    該当しない場合は「該当しませんでした」、削除ができた場合は「prefecture.nameを削除しました。」と出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
　  ?>
    </div>
    </div>
  </body>
</html>