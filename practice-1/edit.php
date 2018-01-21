<?php
require 'shared/head.php';
require dirname(dirname(__FILE__)) . '/pass.php';

session_start();
$user = $_SESSION['db_user'];
$pass = $_SESSION['db_pass'];

$referer = $_SERVER['HTTP_REFERER'];
if ($referer == "http://momo-php-practice/practice-1/check.php") {
    $title = isset($_SESSION['title']) ? $_SESSION['title'] : '';
    $date = isset($_SESSION['date']) ? $_SESSION['date'] : '';
    $genre_number = isset($_SESSION['genre_number']) ? (int) $_SESSION['genre_number'] : '';
    $text = isset($_SESSION['text']) ? $_SESSION['text'] : '';

    $data = [
        'title' => $title,
        'date' => $date,
        'genre_number' => $genre_number,
        'text' => $text
    ];
} else {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $_SESSION['id'] = $id;
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=practice_db;', $user, $pass);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = 'SELECT * FROM `practice-1` WHERE id = ?';
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        $request = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $data = $request[0];
        $dbh = null;
    } catch (PDOException $e) {
        echo 'Error: ' . htmlspecialchars($e->getMessage());
    }
}

$genre_list = [
    1 => "うれしい",
    2 => "かなしい",
    3 => "たのしい",
    4 => "はらだたしい",
    5 => "その他"
    ];
?>
<body>
    <h3 class="text-info">編集</h1>
    <form action="check.php" method="POST" class="form-group">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo isset($data['title']) ? $data['title'] : "" ?>" class="form-control col-2">
        <label>Time</label>
        <input type="date" name="date" value="<?php echo isset($data['date']) ? $data['date'] : "" ?>"class="form-control col-2">
        <label>Jerne</label>
        <select name="genre_number" class="form-control col-2">
            <?php foreach($genre_list as $genre_number => $genre): ?>
            <option value="<?php echo $genre_number ?>" <?php echo $genre_number == $data["genre_number"] ? "selected" : ""?>> <?php echo $genre?></option>
            <?php endforeach; ?>
        </select>
        <label>Text</label>
        <textarea name="text" class="form-control col-3" rows="4" placeholder="何があったの？"><?php echo isset($data['text']) ? $data['text'] : "" ?></textarea>
        <a href="index.php" class="btn btn-info">一覧に戻る</a>
        <input type="submit" value="確認" class="btn btn-success">
    </form>
</body>
