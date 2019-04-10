<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require 'head.php';
?>

<body class="#">

<?php
    require 'header.php';
    //require 'header-anonymous.php';
?>

<div class="">
    
</div>

<div class="messageBlock__container">
    <div class="messageBlock__title">
        <h2 class="">Ayumu Kobayashi</h2>
    </div>
    <div class="messageBlock">
        <div class="messageBlock__profile"><img src="images/" class="u-fullImage"></div>
        <div class="messageBlock__contents">
            <p class="messageBlock__text">
                はじめまして。Linkさんの投稿を見て興味を持ちました。今の時代は自己実現のSNSとかあり得ないですよねwwwwww多いに共感します。
            </p>
            <span class="messageBlock__date">12:20</span>
        </div>
    </div>
    <div class="messageBlock messageBlock--reverse">
        <div class="messageBlock__profile messageBlock__profile--reverse"><img src="images/" class="u-fullImage"></div>
        <div class="messageBlock__contents">
            <p class="messageBlock__text messageBlock__text--reverse">
                はじめまして。Linkさんの投稿を見て興味を持ちました。今の時代は自己実現のSNSとかあり得ないですよねwwwwww多いに共感します。
            </p>
            <span class="messageBlock__date l-dispRight">12:20</span>
        </div>
    </div>
</div>

<div class="">
    <form class="form">
        <input class="form__input">
    </form>
</div>

</body>