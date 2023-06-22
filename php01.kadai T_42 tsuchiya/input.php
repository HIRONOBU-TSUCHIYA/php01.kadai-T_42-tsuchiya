<html>

<head>
    <meta charset="utf-8">
    <title>オーダー入力フォーム</title>
    
</head>
<link rel="stylesheet" href="css/style.css">
<body>
    <h1>運行管理表</h1>
    <div class="form-container">
            <h2>オーダー入力フォーム</h2>
            <form action="write.php" method="post">
            <div class="form-group">
                <label for="number">【管 理 番 号】</label>
                <input type="number" id="number" name="number" required>
                </div>
                <div class="form-group">
                <label for="date">【　日　付　】</label>
                <input type="date" id="date" name="date" required>
                </div>
                <div class="form-group">
                <label for="driver">【運 転 手 名】</label>
                <input type="text" id="driver_name" name="driver_name" required>
                </div>         
                <div class="form-group">
                <label for="company_name">【依頼主様名】</label>
                <input type="text" id="company_name" name="company_name" required>
                </div>
                <div class="form-group">
                <label for="price">【　金　額　】</label>
                <input type="text" id="price" name="price" required>
                </div>

                <input type="submit" value="送信">
            </form>
   
        <!-- 管理№ 　: <input type="text" name="number"><br>
        会社名　: <input type="text" name="company"><br>
        運転手名: <input type="text" name="name"><br>
        車番　　: <input type="text" name="carnumber"><br>
        車格　　：<input type="text" name="size"><br>
        売上　　：<input type="text" name="price"> -->

        
    </form>
</body>

</html>
