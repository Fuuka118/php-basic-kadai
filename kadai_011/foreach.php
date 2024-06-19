<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>kadai_011</title>
 </head>
 
 <body>
    <?php
    $food = ["name"=> "玉ねぎ","price"=> 200,"area"=> " 北海道"];

    foreach ($food as $key => $value) {
      echo "{$key}：{$value}<br>";
    }

    ?>
  
 </body>

 </html>