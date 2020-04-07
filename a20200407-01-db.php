<?php

//連線資訊讀取__connect_db.php
require __DIR__.'/__connect_db.php';

//讀取指定資料庫中的某資料表
$stmt = $pdo -> query("SELECT * FROM address_book");

//取得資料表中一列的結果
// $row = $stmt -> fetch();
// print_r($row);

//取得資料表中全部資料
$rows = $stmt ->fetchAll();
echo json_encode($rows);