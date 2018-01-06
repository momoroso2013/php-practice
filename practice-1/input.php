<?php 

?>
<!DOCTYPE html>
 <head>
    <meta charset="utf-8">
    <!-- BootstrapのCSS読み込み -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
    <h3 class="text-info">MEMO</h1>
    <form action="confirm.php" method="POST" class="form-group">
        <label>Title</label>
        <input type="text" name="title" class="form-control col-2">
        <label>Time</label>
        <input type="date" name="date" class="form-control col-2">
        <label>Jerne</label>
        <select name="jerne" class="form-control col-2">
            <option value="1">うれしい</option>
            <option value="2">かなしい</option>
            <option value="3">たのしい</option>
            <option value="4">はらだたしい</option>
        </select>
        <label>Text</label>
        <textarea name="text" class="form-control col-3" placeholder="text"></textarea>
        <input type="submit" value="登録" class="btnbtn-default">
    </form>
</body>
