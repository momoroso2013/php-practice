<?php

session_start();
$title = isset($_SESSION['title']) ? $_SESSION['title'] : exit("Error: title 最初からやり直してください");
$date = isset($_SESSION['date']) ? $_SESSION['date'] : exit("Error: date 最初からやり直してください");
$genre = isset($_SESSION['genre_number']) ? (int) $_SESSION['genre_number'] : exit("Error: genre 最初からやり直してください");
$text = isset($_SESSION['text']) ? $_SESSION['text'] : exit("Error: text 最初からやり直してください");

$user = '';
$pass = '';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=practice_db;', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'INSERT INTO `practice-1` (title, date, genre, text) VALUES (?, ?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->bindValue(2, $date, PDO::PARAM_INT);
    $stmt->bindValue(3, $genre, PDO::PARAM_INT);
    $stmt->bindValue(4, $text, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
} catch (PDOException $e) {
    echo 'Error: ' . htmlspecialchars($e->getMessage());
}



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
