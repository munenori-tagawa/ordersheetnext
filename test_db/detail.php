<?php

require_once('funcs.php');
$pdo = db_conn();
/**
 * [ここでやりたいこと]
 * 1. クエリパラメータの確認 = GETで取得している内容を確認する
 * 2. select.phpのPHP<?php ?>の中身をコピー、貼り付け
 * 3. SQL部分にwhereを追加
 * 4. データ取得の箇所を修正。
 */
$id = $_GET['id'];


// try {
//     $db_name = 'gs_dbdb'; //データベース名
//     $db_id   = 'root'; //アカウント名
//     $db_pw   = ''; //パスワード：MAMPは'root'
//     $db_host = 'localhost'; //DBホスト
//     $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }

$stmt = $pdo->prepare('SELECT * FROM test_db WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意

$status = $stmt->execute();

if ($status === false) {
    //*** function化する！******\
    $error = $stmt->errorInfo();
    exit('SQLError:' . print_r($error, true));
} else {
    //データが取得出来た場合の処理
    $result = $stmt->fetch();



}

?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>オーダー登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">オーダー一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <<form method="POST" action="update.php">
        <div class="jumbotron">
            <fieldset>
                <legend>オーダー</legend>
                <label>id:<input type="text" name="id" value="<?= $result['id']?>"></label><br>
                <label>味の選択：<input type="text" name="taste" value="<?= $result['taste']?>"></label><br>
                <label>スープの選択：<input type="text" name="soup" value="<?= $result['soup']?>"></label><br>
                <label>麵の太さ：<input type="text" name="size" value="<?= $result['size']?>"></label><br>
                <label>麵の量：<input type="text" name="volume" value="<?= $result['volume']?>"></label><br>
                <label><textarea name="content" rows="4" cols="40"><?= $result['content']?></textarea></label><br>
                <input type="hidden" name="id" value="<?= $result['id']?>">
                <input type="submit" value="修正">
            </fieldset>
        </div>
    </form>
</body>

</html>
