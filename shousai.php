<?php

$id = $_GET["id"]; //?id~**を受け取る
include("funcs.php");

$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE ユニーク値 = ' . $id . ';');
$stmt->bindValue(":id", $id, PDO::PARAM_INT);
$status = $stmt->execute();
//３．データ表示
if ($status == false) {
    sql_error($status);
} else {
    $row = $stmt->fetch();
}
?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="bm_list_view.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->
    <!-- Main[Start] -->
    <form method="POST" action="index.php">
        <div class="jumbotron">
            <fieldset>
                <legend>詳細データ</legend>
                <label>書籍名：<input type="text" name="name" value="<?= $row['書籍名'] ?>"></label><br>
                <label>書籍URL：<input type="text" name="url" value="<?= $row['書籍URL'] ?>"></label><br>
                <input type="hidden" name="id" value=<?= $row['ユニーク値'] ?>>
                <input type="submit" value="戻る">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
</body>