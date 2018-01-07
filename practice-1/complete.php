<?php

session_start();
$title = isset($_SESSION['title']) ? $_SESSION['title'] : exit("Error: 最初からやり直してください");
$date = isset($_SESSION['date']) ? $_SESSION['date'] : exit("Error: 最初からやり直してください");
$genre = isset($_SESSION['genre']) ? $_SESSION['genre'] : exit("Error: 最初からやり直してください");
$text = isset($_SESSION['text']) ? $_SESSION['text'] : exit("Error: 最初からやり直してください");

// 値を保存させる


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
    <h3 class="">登録が完了しました</h3>
    <a href="index.php" class="btn btn-success">TOPに戻る</a>
</body>

<?php

session_destroy()

?>
