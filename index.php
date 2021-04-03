<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注文フォーム</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<form method="post" action="order.php">

<div id="order_name">
<p>夜空</p>
<input type="hidden" name="name" value="夜空">
<img src="./img/01.jpg" alt="">
<select name="eat1">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
<p>¥5,000</p>
</div>

<p><input type="submit" value="合計を確認する"></p>

</form>

</body>
</html>