<?php

// このセクションで実装すること
// pre1.phpからpre2.phpに値を送信し、値を受け取ります。

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- action先をpre2.phpにしています。 -->
    <form action="./pre2.php" method="post">
        <!-- 名前を送信するプログラム -->
        <p><label>お名前</label><input type="text" name="name"></p>

        <!-- メールアドレスを送信するプログラムを作成してください -->
        <p><label></label></p>

        <!-- 送信ボタン -->
        <input type="submit" value="送信">
    </form>
</body>

</html>