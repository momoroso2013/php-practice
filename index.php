<?php

$user = '';
$pass = '';


    $dbh = new PDO('mysql:host=localhost;dbname=practice_db;', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM `practice-1`';
    $stmt = $dbh->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $dbh = null;





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
    <table class="table table-condensed">
        <tr>
            <th>Practice<th>
        </tr>
        <tr>
            <td><a href="/practice-1/input.php">practice-1 regidtration</a></td>
        </tr>
        <tr>
            <td><a href="">sample</a></td>
        </tr>
    </table>
