<?php
//データベースに繋ぐfunction
require_once "./funcs.php";

//値を受け取る
$name = $_POST["name"];
$eat1 = $_POST["eat1"];
$eat1_total = $eat1*5000;

if($eat1 !== 0){
    // order_tableに保存
    $sql = "INSERT INTO order_table(name, eat1, eat1_total)
    VALUE(:name, :eat1, :eat1_total)";
    try {
        //prepareで準備
        $stmt = dbc()->prepare($sql);
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':eat1', $eat1);
        $stmt->bindValue(':eat1_total', $eat1_total);
        //実行
        $stmt->execute();
    }catch(Exception $e){
        //エラーページに飛ばす
        echo $e->getMessage();
        echo "エラーだよ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文完了</title>
</head>
<body>

<p>注文が完了しました</p>
<a href="./index.php">戻る</a>

</body>
</html>