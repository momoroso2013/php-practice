<?php
require dirname(dirname(__FILE__)) . '/pass.php';
require 'shared/head.php';

session_start();
$user = $_SESSION['db_user'];
$pass = $_SESSION['db_pass'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=practice_db;', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM `practice-1`';
    $stmt = $dbh->query($sql);
    $registered_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;
} catch (PDOException $e) {
    echo 'Error: ' . htmlspecialchars($e->getMessage());
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
    <h3>一覧</h3>
    <table class="table table-striped">
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>Genre</th>
            <th>Text</th>
        </tr>
            <?php foreach($registered_data as $a_data): ?>
        <tr>
            <td><?php echo htmlspecialchars($a_data['title']); ?></td>
            <td><?php echo htmlspecialchars($a_data['date']); ?></td>
            <td><?php echo htmlspecialchars($genre_list[$a_data['genre']]); ?></td>
            <td><?php echo nl2br(htmlspecialchars($a_data['text'])); ?></td>
        </tr>
            <?php endforeach; ?>
    </table>
    <a href="input.php" class="btn btn-success">登録する</a>
</body>
