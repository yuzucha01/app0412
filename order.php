<?php
//値を受け取る
$name = $_POST["name"];
$eat1 = $_POST["eat1"];
$eat1_total = $eat1*5000;

if($eat1 == 0){
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ご注文確認</title>
</head>
<body>

<form action="./total.php" method="post">
    <div>
    注文名：<?php echo $name; ?>
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    注文数：<?php echo $eat1; ?>
    <input type="hidden" name="eat1" value="<?php echo $eat1; ?>">
    合計：<?php echo $eat1_total; ?>
    <input type="hidden" name="$eat1_total" value="<?php echo $eat1_total; ?>">
    </div>
    <input type="submit" value="注文する">
</form>

</body>
</html>