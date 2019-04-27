<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require 'head.php';
?>

<body>

<?php
    require 'header.php';
    //require 'header-anonymous.php';
?>

<div>
    <div>
        <h1>
            <img src="images/logos/logo-letters-white.png">
        </h1>
        <span>さあ、はじめよう</span>
    </div>
    <div class="u-flexCenter">
        <a href="#" class="roundButton">新規登録</a>
        <a href="#" class="roundButton">ログイン</a>
    </div>
</div>

</body>

<!--
以下スマホ対応用
<body class="indexPage">
    <div class="textbox textbox--white u-mbM">
        <h1 class="textbox__head">
            <img src="./images/logos/logo-letters-white.png" class="textbox__logo">
        </h1>
        <h2 class="textbox__body">さあ、はじめよう</h2>
    </div>

    <div class="u-flexCenter u-mbM">
        <div class="roundButton">
            <a href="./signup.php" class="roundButton__inner">新規登録</a>
        </div>
        <div class="roundButton">
            <a href="./login.php" class="roundButton__inner">ログイン</a>            
        </div>
    </div>
    
    <div class="textbox textbox--white">
        <span class="textbox__foot">
            新規登録を行った場合は弊社の<br>
            <a href="#" class="textlink">利用規約</a>および
            <a href="#" class="textlink">プライバシーポリシー</a><br>
            に同意したものとみなします
        </span>
    </div>
</body>
-->