<?php
require dirname(dirname(__FILE__)) . '/pass.php';
require 'shared/head.php';

session_start();
$id = isset($_SESSION['id']) ? $_SESSION['id'] : exit("Error: 最初からやり直してください");
$title = isset($_SESSION['title']) ? $_SESSION['title'] : exit("Error: title 最初からやり直してください");
$date = isset($_SESSION['date']) ? $_SESSION['date'] : exit("Error: date 最初からやり直してください");
$genre = isset($_SESSION['genre_number']) ? (int) $_SESSION['genre_number'] : exit("Error: genre 最初からやり直してください");
$text = isset($_SESSION['text']) ? $_SESSION['text'] : exit("Error: text 最初からやり直してください");

$user = $_SESSION['db_user'];
$pass = $_SESSION['db_pass'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=practice_db;', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'UPDATE `practice-1` SET title = ?, date = ?, genre = ?, text = ? WHERE id = ?';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->bindValue(2, $date, PDO::PARAM_INT);
    $stmt->bindValue(3, $genre, PDO::PARAM_INT);
    $stmt->bindValue(4, $text, PDO::PARAM_STR);
    $stmt->bindValue(5, $id, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;
} catch (PDOException $e) {
    echo 'Error: ' . htmlspecialchars($e->getMessage());
}



?>
<body>
    <h3 class="">登録が完了しました</h3>
    <a href="index.php" class="btn btn-success">TOPに戻る</a>
</body>

<?php

session_destroy()

?>
