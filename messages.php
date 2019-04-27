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

<div class="pageHead u-dispNone--pc">
    <div class="pageHead__flexBox">
        <div>
            <h1 class="pageHead__title">メッセージ</h1>
        </div>
        <div class="pageHead__profile">
            <a href="my-profile.php" class="">
                <img src="./images/" class="u-fullImage">
            </a>
        </div>
    </div>
</div>

<div class="rowContainer">
    <ul class="rowContainer__inner">
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="message.php" class="imageText__inner">
                    <img src="images/" class="imageText__icon">
                    <div class="l-flexVertical">
                        <span class="imageText__text imageText__text--primary u-fwBold">スターバックス</span>
                        <span class="imageText__text">こんにちは、小林歩さん</span>
                    </div>
                    <span class="imageText__note">2019/04/20</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="message.php" class="imageText__inner">
                    <img src="images/" class="imageText__icon">
                    <div class="l-flexVertical">
                        <span class="imageText__text imageText__text--primary u-fwBold">ドトール</span>
                        <span class="imageText__text">こんにちは、小林歩さん</span>
                    </div>
                    <span class="imageText__note">2019/04/20</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="message.php" class="imageText__inner">
                    <img src="images/" class="imageText__icon">
                    <div class="l-flexVertical">
                        <span class="imageText__text imageText__text--primary u-fwBold">エクセルシオール</span>
                        <span class="imageText__text">こんにちは、小林歩さん</span>
                    </div>
                    <span class="imageText__note">2019/04/20</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="message.php" class="imageText__inner">
                    <img src="images/" class="imageText__icon">
                    <div class="l-flexVertical">
                        <span class="imageText__text imageText__text--primary u-fwBold">星乃珈琲</span>
                        <span class="imageText__text">こんにちは、小林歩さん</span>
                    </div>
                    <span class="imageText__note">2019/04/20</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="message.php" class="imageText__inner">
                    <img src="images/" class="imageText__icon">
                    <div class="l-flexVertical">
                        <span class="imageText__text imageText__text--primary u-fwBold">タリーズコーヒー</span>
                        <span class="imageText__text">こんにちは、小林歩さん</span>
                    </div>
                    <span class="imageText__note">2019/04/20</span>
                </a>
            </div>
        </li>
    </ul>
</div>

</body>