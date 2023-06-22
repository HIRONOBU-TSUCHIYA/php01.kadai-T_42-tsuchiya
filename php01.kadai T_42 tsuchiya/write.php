<?php
// inputから受け取る
$number = $_POST['number'];
$date = $_POST['date'];
$driver_name = $_POST['driver_name'];
$company_name = $_POST['company_name'];
$price = $_POST['price'];
// データを整形する
$data = '管理番号：'.$number .'　日付：'. $date .'　運転手名：'.$driver_name .
'　依頼主：'. $company_name .'　金額：￥'. $price ."\n"; 
//データを保存 APPEND：追記
file_put_contents('data/data.txt',$data,FILE_APPEND)
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
