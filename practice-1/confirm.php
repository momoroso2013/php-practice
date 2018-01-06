<?php
$title = isset($_POST['title']) ? $_POST['title'] : "";
$date = isset($_POST['date']) ? $_POST['date'] : "";
$jerne = isset($_POST['jerne']) ? $_POST['jerne'] : "";
$text = isset($_POST['text']) ? $_POST['text'] : "";

// セッション保存

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
    <table class="table table-striped">
        <tr>
            <th >内容確認</th>
            <th ></th>
        </tr>
        <tr>
            <td>Title</td>
            <td><?php echo nl2br(htmlspecialchars($title)); ?></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><?php echo nl2br(htmlspecialchars($date)); ?></td>
        </tr>
        <tr>
            <td>Jerne</td>
            <td><?php echo nl2br(htmlspecialchars($jerne)); ?></td>
        </tr>
        <tr>
            <td>Text</td>
            <td><?php echo nl2br(htmlspecialchars($text)); ?></td>
        </tr>
    </table>

    <a href="input.php" class="btn btn-primary">Back</a>
    <!-- ><button type="submit" href="/complete.php" class="btn btn-success">完了</button> -->
</body>
