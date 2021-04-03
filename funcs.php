<?php

//DBから全データ取得

function dbc()
{
    $host = "localhost";
    $dbname = "b_db";
    $user = "root";
    $pass = "root";

    $dns = "mysql:host=$host;dbname=$dbname;charset=utf8";
    try{
    $pdo = new PDO($dns,$user, $pass,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    return $pdo;
    }catch(PDOException $e){
        exit($e->getMessage());
    }
}
?>