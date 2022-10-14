<?php

// このセクションで実装すること
// pre1.phpからpre2.phpに値を送信し、値を受け取ります。
// pre1.php、pre2.phpはfilter_inputで値の送受信を行いましたが、今回はセッションを利用します。

// セッション利用宣言
session_start();

// 名前
$name = 'hayate';

// メールアドレス（nullを変更し値を代入してください）
$email = null;

// セッションに値を代入します。
$_SESSION['name'] = $name;

// メールアドレスの値をセッションに代入してください
// $_

// pre4.phpにアクセスし、値の表示を確認してください。

