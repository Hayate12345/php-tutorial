<?php

// このセクションで実装すること
// pre1.phpから送信された値を受け取り、出力します。

// 名前を受け取る
$name = filter_input(INPUT_POST, 'name');

// メールアドレスを受け取る (nullを変更し、値を受け取ってください)
$email = null;

// 出力
echo '名前は->' . $name . '<br>';
echo 'メールアドレスは->' . $email . '<br>';
