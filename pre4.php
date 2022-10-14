<?php

// セッション利用宣言
session_start();

// 送信された値を受け取ります。
// 値を配列に格納します。
$arr = [];
$arr[] = $_SESSION;

// foreach文で取り出し、出力します。
foreach($arr as $a){
    echo $a['name'];
    // echo $a['email'];
}

// これらの方法で受け取ることもできます。
$name = $_SESSION['name'];
echo $name;