<?php

require_once('funcs.php');
$pdo = db_conn();
//1. POSTデータ取得
//$id = $_POST['id'];
$taste = $_POST['taste'];
$soup = $_POST['soup'];
$size = $_POST['size'];
$volume = $_POST['volume'];
$content = $_POST['content'];

//2. DB接続します
//*** function化する！  *****************
// try {
//     $db_name = 'gs_dbdb'; //データベース名
//     $db_id   = 'root'; //アカウント名
//     $db_pw   = ''; //パスワード：MAMPは'root'
//     $db_host = 'localhost'; //DBホスト
//     $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }



//３．データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
                        test_db(
                            id, taste, soup, size, volume, content
                            )
                        VALUES (
                            null, :taste, :soup, :size, :volume, :content
                            );'
);

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
//$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->bindValue(':taste', $taste, PDO::PARAM_STR);
$stmt->bindValue(':soup', $soup, PDO::PARAM_STR); //PARAM_INTなので注意
$stmt->bindValue(':size', $size, PDO::PARAM_STR);
$stmt->bindValue(':volume', $volume, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //*** function化する！*****************
    header('Location: index.php');
    exit();
}
