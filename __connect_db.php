<?php
$db_host = 'localhost'; //資料庫位置
$db_name = '123'; //資料庫名稱
$db_user = 'root'; //mySQL登入帳號
$db_pass = '';//mySQL登入密碼

$dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8',$db_host,$db_name);

//PDO設定
$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //讀取資料時轉為關聯式陣列
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];

try{
    $pdo = new PDO($dsn,$db_user,$db_pass,$pdo_options);
}catch(PDOException $ex){
    echo 'EX:'.$ex -> getMessage();
}



