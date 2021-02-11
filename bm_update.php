<?php
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//   POSTデータ受信 → DB接続 → SQL実行 → 前ページへ戻る
//2. $id = POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
//1. POSTデータ取得
$name   = $_POST["name"];
$url  = $_POST["url"];
$koment = $_POST["koment"];
$id    = $_POST["id"];
//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();
//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE
                            gs_bm_table
                        SET
                            書籍名 = :name,
                            書籍URL = :url,
                            書籍コメント = :koment,
                            登録日時 = sysdate()
                        WHERE
                            ユニーク値 = :id ;
                        ");
$stmt->bindValue(':name', h($name), PDO::PARAM_STR);      //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', h($url), PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':koment', h($koment), PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', h($id), PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行
//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('bm_list_view.php');
}
?>
