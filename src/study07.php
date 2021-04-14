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
    // mySQLに接続
      try {
          $db = new PDO('mysql:dbname=japan;host=localhost;charset=utf8', 'root', 'root');
          echo "データベースが接続できました";
      } catch (PDOException $e) {
          echo 'データベースとの接続を閉じました ';
          exit();
      }
    ?>

    </div>
    2. japan.prefecture.id=14のレコードを取得しnameを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
      $sql = 'SELECT name FROM prefecture WHERE ID = 14';
      $result = $db->query($sql);
      $fetch = $result->fetch(PDO::FETCH_COLUMN);
      echo $fetch;
    ?>
    </div>
    3. japan.prefecture.name='秋田県'のレコードを取得しname_kanaを出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    $sql = 'SELECT name_kana FROM prefecture WHERE ID = 5';
    $result = $db->query($sql);
    $fetch = $result->fetch(PDO::FETCH_COLUMN);
    echo $fetch;
    ?>
    </div>
    4. japan.prefectureからnameをwhile文、fetch_assoc()とSQLのSELECT使ってすべて取得しなさい出力する際は１レコードずつ改行しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    $sql = 'SELECT name FROM prefecture';
    $stmt = $db->query($sql);
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "$result[name]<br>";
    }
    ?>
    </div>
    5. japan.region.id = japan.prefecture.region_idとした場合、関東地方(region.id = 3)と一致する都道府県と地方をSQLのJOINを使って出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    $sql = 'SELECT prefecture.name AS prefecture, region.name AS region FROM prefecture INNER JOIN region
    ON japan.prefecture.region_id = region.id AND region.id = 3';
    $result = $db->query($sql);
    $fetch = $result->fetchAll(PDO::FETCH_ASSOC);

    // 関東地方と一致する都道府県を出力
    foreach ($fetch as $key) {
        echo $key['prefecture'];
    }
 
    ?>
    </div>
    6. japan.prefectureにSQLのINSERTとNOT EXISTSを使ってid=48(他のフィールドは任意)を、</br>
    id=48のデータが存在しない時だけ登録するレコード１つを追加し、追加したレコードを出力しさい。</br>
    <div>
    <?php
    // ココにコーディング
    $sql = "INSERT INTO prefecture (id, region_id, name, name_kana)
    SELECT 48, 9, '追加県', 'ツイカケン' FROM dual
      WHERE NOT EXISTS(
        SELECT * FROM prefecture
             WHERE prefecture.id = 48)";
    
      if ($stmt = $db->query($sql)) {
          echo "成功";
          $sql2 = 'SELECT * FROM prefecture WHERE prefecture.id = 48';
          $result = $db->query($sql2);
          $fetch2 = $result->fetch(PDO::FETCH_ASSOC);
          foreach ($fetch2 as $key=>$value) {
              echo  '</br>'.$key.'は'.$value.'です。';
          }
      } else {
          echo "失敗";
      }
        ?>
    </div>
    6. japan.prefecture.id=1のレコードのnameを北国name_kanaをキタグニに変更し、出力しなさい。</br>
    <div>
    <?php
    // ココにコーディング
    $sql = "UPDATE prefecture SET name = '北国', name_kana = 'キタグニ'
    WHERE prefecture.id = 1";
    $stmt = $db->query($sql);
    $fetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $sql2 = 'SELECT * FROM prefecture WHERE prefecture.id = 1';
    $result = $db->query($sql2);
    $fetch2 = $result->fetch(PDO::FETCH_ASSOC);
    foreach ((array)$fetch2 as $key=>$value) {
        echo  '</br>'.$key.'は'.$value.'です。';
    }
    ?>
    </div>
    7. 6.で追加したレコードをSQLのDELETEを使って削除しなさい。</br>
    該当しない場合は「該当しませんでした」、削除ができた場合は「prefecture.nameを削除しました。」と出力しなさい</br>
    <div>
    <?php
    // ココにコーディング
    $sql = 'DELETE FROM prefecture WHERE prefecture.id = 1';
  
    if ($stmt = $db->query($sql)){
      echo "prefecture.nameを削除しました。";
    }else{
      echo "該当しませんでした。";
    };
    ?>
    </div>
    </div>
  </body>
</html>