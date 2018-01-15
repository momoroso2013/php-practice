<?php
require 'shared/head.php';

$title = isset($_POST['title']) ? $_POST['title'] : "";
$date = isset($_POST['date']) ? $_POST['date'] : "";
$genre_number = isset($_POST['genre_number']) ? $_POST['genre_number'] : "";
$text = isset($_POST['text']) ? $_POST['text'] : "";

$genre_list = [
    1 => "うれしい",
    2 => "かなしい",
    3 => "たのしい",
    4 => "はらだたしい",
    5 => "その他"
    ];

// セッション保存
session_start();

$_SESSION['title'] = $title;
$_SESSION['date'] = $date;
$_SESSION['genre_number'] = $genre_number;
$_SESSION['text'] = $text;

?>
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
            <td>Genre</td>
            <td><?php echo nl2br(htmlspecialchars($genre_list[$genre_number])); ?></td>
        </tr>
        <tr>
            <td>Text</td>
            <td><?php echo nl2br(htmlspecialchars($text)); ?></td>
        </tr>
    </table>

    <a href="input.php" class="btn btn-primary">Back</a>
    <a href="complete.php" class="btn btn-success">登録</a>
</body>
