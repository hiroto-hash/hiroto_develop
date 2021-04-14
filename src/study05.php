<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  div {margin: 10px;}
  h1 {border-bottom: solid;}
  </style>
  <title>カレンダー作成</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
  <body>
    <h1>カレンダー作成</h1>
      <h3>2020年8月のカレンダーの作成</h3>
      <a href="../index.php">戻る</a>
    <div>
    </div>
    1.date(),for文,array(),if文の全てを使って2020年8月のカレンダーをHTMLのTableタグに出力しなさい</br>
    <a  href="./img/2020_08_calendar.png" target="_blank">完成版</a>
    <div>
    <?php
 
 // 現在の年月を取得
 $year = date('2020');
 $month = date('8');
  
 // 月末日を取得
 $last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
  
 $calendar = array();
 $j = 0;
  
 // 月末日までループ
 for ($i = 1; $i < $last_day + 1; $i++) {
  
     // 曜日を取得
     $week = date('w', mktime(0, 0, 0, $month, $i, $year));
  
     // 1日の場合
     if ($i == 1) {
  
         // 1日目の曜日までをループ
         for ($s = 1; $s <= $week; $s++) {
  
             // 前半に空文字をセット
             $calendar[$j]['day'] = '';
             $j++;
  
         }
  
     }
  
     // 配列に日付をセット
     $calendar[$j]['day'] = $i;
     $j++;
  
     // 月末日の場合
     if ($i == $last_day) {
  
         // 月末日から残りをループ
         for ($e = 1; $e <= 6 - $week; $e++) {
  
             // 後半に空文字をセット
             $calendar[$j]['day'] = '';
             $j++;
  
         }
  
     }
  
 }
  
 ?>
 
 <?php echo $year; ?>年<?php echo $month; ?>月のカレンダー
 <br>
 <br>
 <table>
     <tr>
         <th>日</th>
         <th>月</th>
         <th>火</th>
         <th>水</th>
         <th>木</th>
         <th>金</th>
         <th>土</th>
     </tr>
  
     <tr>
     <?php $cnt = 0; ?>
     <?php foreach ($calendar as $key => $value): ?>
  
         <td>
         <?php $cnt++; ?>
         <?php echo $value['day']; ?>
         </td>
  
     <?php if ($cnt == 7): ?>
     </tr>
     <tr>
     <?php $cnt = 0; ?>
     <?php endif; ?>
  
     <?php endforeach; ?>
     </tr>
 </table>
    </div>
  </body>
</html>