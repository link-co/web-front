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

<div class="rowContainer">
    <ul class="rowContainer__inner">
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="others-profile.php" class="imageText__main">
                    <img src="images/" class="imageText__icon">
                    <span class="imageText__text">スターバックスさんがあなたの投稿をシェアしました</span>
                </a>
                <a href="#" class="imageText__sub">
                    <img src="images/" class="u-fullImage">
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="others-profile.php" class="imageText__main">
                    <img src="images/" class="imageText__icon">
                    <span class="imageText__text">コメダ珈琲さんがあなたのことをフォローしました</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="others-profile.php" class="imageText__main">
                    <img src="images/" class="imageText__icon">
                    <span class="imageText__text">ドトール＆エクセルシオール＆コメダ珈琲＆星乃珈琲＆スターバックス＆タリーズさんがあなたのことをフォローしました</span>
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="others-profile.php" class="imageText__main">
                    <img src="images/" class="imageText__icon">
                    <span class="imageText__text">ドトールさんがあなたの投稿をシェアしました</span>
                </a>
                <a href="#" class="imageText__sub">
                    <img src="image/" class="u-fullImage">
                </a>
            </div>
        </li>
        <li class="rowContainer__list">
            <div class="imageText">
                <a href="others-profile.php" class="imageText__main">
                    <img src="images/" class="imageText__icon">
                    <span class="imageText__text">星乃珈琲さんがあなたの投稿をシェアしました</span>
                </a>
                <a href="#" class="imageText__sub">
                    <img src="image/" class="u-fullImage">
                </a>
            </div>
        </li>
    </ul>
</div>

</body>