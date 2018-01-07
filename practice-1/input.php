<?php

session_start();

$genre_list = [
    1 => "うれしい",
    2 => "かなしい",
    3 => "たのしい",
    4 => "はらだたしい",
    5 => "その他"
    ]
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
        <input type="text" name="title" value="<?php echo isset($_SESSION['title']) ? $_SESSION['title'] : "" ?>" class="form-control col-2">
        <label>Time</label>
        <input type="date" name="date" value="<?php echo isset($_SESSION['date']) ? $_SESSION['date'] : "" ?>"class="form-control col-2">
        <label>Jerne</label>
        <select name="genre_number" class="form-control col-2">
            <?php foreach($genre_list as $genre_number => $genre): ?>
            <option value="<?php echo $genre_number ?>" <?php echo $genre_number == $_SESSION["genre_number"] ? "selected" : ""?>> <?php echo $genre?></option>
            <?php endforeach; ?>
        </select>
        <label>Text</label>
        <textarea name="text" class="form-control col-3" rows="4" placeholder="何があったの？"><?php echo isset($_SESSION['text']) ? $_SESSION['text'] : "" ?></textarea>
        <input type="submit" value="確認" class="btn btn-success">
    </form>
</body>
