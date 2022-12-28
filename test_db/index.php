<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題テスト</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 0;
            font-size: 16px;
        }
    </style>
</head>

<body>          
    <header>
      <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <!-- method, action, 各inputのnameを確認してください。  -->
    <form method="POST" action="insert.php">
        <div class="jumbotron">
        <div class="order-page">
  <form action="index.php" method="post">
    <div><h1>いらっしゃいませ ご注文をどうぞ！</div>

    <p><h2>何味にしますか？</h2></p>
    <h3>醤油・味噌・塩・合わせ・カレー</h3>：<input type="text" name="taste"></p>
    <p><h2>スープは何ベースですか？</h2></p>
    <h3>鶏ガラ・とんこつ・えび・鶏白湯・べジポタ・カツオ</h3>：<input type="text" name="soup"></p>
    <p><h2>麺の太さはどうしますか？</h2></p>
    <h3>太麵・中太麺・中華麺・縮れ麺・細麺</h3>：<input type="text" name="size"></p>
    <p><h2>麺の量はどうしますか？</h2></p>
    <h3>特盛・大盛・並・八分・ハーフ</h3>：<input type="text" name="volume"></p>

    <!-- <p>麵の硬さはどうしますか？：
      <select name="firmness">
        <option value="かたい">かたい</option>
        <option value="ややかため">ややかため</option>
        <option value="ほどよい">ほどよい</option>
        <option value="やややわめ">やややわめ</option>
        <option value="やわめ">やわめ</option>
      </select>
    </p>

    <p>スープの温度はどうしますか？：
      <select name="temperature">
        <option value="熱々">熱々</option>
        <option value="熱い">熱い</option>
        <option value="ほどよい">ほどよい</option>
        <option value="ややぬるめ">ややぬるめ</option>
        <option value="ぬるい">ぬるい</option>
      </select>
    </p>

    <p>味の濃さはどうしますか？：
      <select name="darkness">
        <option value="濃い">濃い</option>
        <option value="やや濃い">やや濃い</option>
        <option value="ほどよい">ほどよい</option>
        <option value="やや薄い">やや薄い</option>
        <option value="薄い">薄い</option>
      </select>
    </p>


    <p>野菜はどうしますか？：
      <input type="radio" name="vegetable" value="倍盛り">倍盛り
      <input type="radio" name="vegetable" value="大盛">大盛
      <input type="radio" name="vegetable" value="標準">標準
      <input type="radio" name="vegetable" value="少なめ">少なめ
      <input type="radio" name="vegetable" value="なし">なし
    </p>

    <p>油はどうしますか？：
      <input type="radio" name="oil" value="多め">多め
      <input type="radio" name="oil" value="やや多め">やや多め
      <input type="radio" name="oil" value="ふつう">ふつう
      <input type="radio" name="oil" value="やや少なめ">やや少なめ
      <input type="radio" name="oil" value="少なめ">少なめ
    </p>

    <p>にんにくはどうしますか？：
      <input type="radio" name="garlic" value="多め">多め
      <input type="radio" name="garlic" value="やや多め">やや多め
      <input type="radio" name="garlic" value="ふつう">ふつう
      <input type="radio" name="garlic" value="やや少なめ">やや少なめ
      <input type="radio" name="garlic" value="少なめ">少なめ
    </p>-->

    <p>他にトッピングなどあればこちらに：</p>
    <p><textarea name="content" cols="50" rows="5"></textarea></p>
    <p><input type="submit" name="submitBtn" value="オーダー"></p>
  </form>
  <footer>
    <p>©ramen order</p>
    </footer>

            </fieldset>
        </div>
    </form>
</body>

</html>
