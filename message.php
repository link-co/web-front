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

<div class="messageBlock__container">
    <div class="messageBlock__title u-mbM--pc">
        <h2 class="">Ayumu Kobayashi</h2>
    </div>
    
    <ul>
        <li>
            <div class="messageBlock">
                <div class="messageBlock__profile"><img src="images/" class="u-fullImage"></div>
                <div class="messageBlock__contents">
                    <p class="messageBlock__text">
                        はじめまして。Linkさんの投稿を見て興味を持ちました。今の時代は自己実現のSNSとかあり得ないですよねwwwwww多いに共感します。
                    </p>
                    <span class="messageBlock__date">12:20</span>
                </div>
            </div>
        </li>
        <li>
            <div class="messageBlock messageBlock--reverse">
                <div class="messageBlock__contents">
                    <p class="messageBlock__text messageBlock__text--reverse">
                        はじめまして。Linkさんの投稿を見て興味を持ちました。今の時代は自己実現のSNSとかあり得ないですよねwwwwww多いに共感します。
                    </p>
                    <span class="messageBlock__date l-dispRight">12:20</span>
                </div>
            </div>
        </li>
    </ul>
    
    <div class="textboxInput">
        <form class="form">
            <div class="form__group">
                <input class="form__input textboxInput__input" placeholder="メッセージを入力">
                <button class="form__button"><img src="images/icons/check.png" class="iconM"></button>
            </div>
        </form>
    </div>
</div>

</body>