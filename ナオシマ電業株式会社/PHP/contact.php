<?php 
    // フォームのボタンが押されたら
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // フォームから送信されたデータを各変数に格納
        $name = $_POST["fname1"];
        $furigana = $_POST["fname2"];
        $email = $_POST["mail1"];
        $tel = $_POST["tel1"];
        $address = $_POST["address"];
        $content  = $_POST["content"];
    }

?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ</h2></div>
<div>
    <form action="" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
            <input type="hidden" name="address" value="<?php echo $address; ?>">
            <input type="hidden" name="content" value="<?php echo $content; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div>
                <div>
                    <label>お名前</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $furigana; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tel; ?></p>
                </div>
                <div>
                    <label>住所</label>
                    <p><?php echo $address?></p>
                </div>
                <div>
                    <label>お問い合わせ内容</label>
                    <p><?php echo nl2br($content); ?></p>
                </div>
            </div>
        <input type="button" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</body>
</html>