<?php

session_start();

include("funcs.php");
sessionCheck();

require_once('funcs.php');

$pdo = db_conn();
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
    sql_error($status);
}else{
  while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $view .= '<p>';

        // 詳細ページリンク
        $view .= '<a href="bm_update_view.php?id=' . h($result['ユニーク値']) . '">';
        $view .= $result["indate"] . "：" . h($result["書籍名"]);
        $view .= $result["indate"] . "：" . h($result["書籍URL"]);
        $view .= $result["indate"] . "：" . h($result["書籍コメント"]);
        $view .= '</a>';

        // 削除ページリンク
        if($_SESSION["kanri_flg"] == 1){
        $view .= '<a href="delete.php?id=' . h($result['ユニーク値']) . '">';
        $view .= '【削除】';
        $view .= '</a>';
      }
      
        $view .= '</p>'; 
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>本ブックマーク表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
        <div class="container jumbotron">
            <a href="bm_update_view.php"></a>
            <?= $view ?>
        </div>
    </div>
<!-- Main[End] -->

</body>
</html>
