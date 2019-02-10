<?php

    // リクエストBodyからファイルのデータを取得.
    $image = file_get_contents("php://input");

    // 取得したバイナリデータを画像(png)として保存.
    file_put_contents('dl.csv',$image);

?>