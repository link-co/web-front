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

<div class="l-halfCircle u-mbM u-myColored">
    <div class="profilePanel">
        <div class="l-dispRight u-pdG">
            <ul class="l-flexRight">
                <li class="u-mrS">
                    <a href="edit-profile.php">
                        <img class="iconM" src="images/icons/pencil.png">
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <img class="iconM" src="images/icons/gear.png">
                    </a>
                </li>
            </ul>
            
        </div>
        <div class="">
            <img src="images/" class="profilePanel__thumb">
            <span class="profilePanel__name">USER NAME</span>
        </div>
        <div class="">
            <ul class="l-flexCenter">
                <li class="iconText">
                    <a href="#" class="iconText__inner iconText__inner--center">
                        <span class="iconText__text">@aymkbyshi</span>
                    </a>
                </li>
                <li class="iconText">
                    <a href="#" class="iconText__inner iconText__inner--center">
                        <img src="./images/icons/link.png" class="iconText__icon">
                        <span class="iconText__text">linktr.ee/aymkbyshi</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="textbox">
            <p class="textbox__body u-taCenter">
                慶應義塾大学経済学部卒業/ハーバードビジネススクールMBA/Goldman Sachs Senior Partner
            </p>
        </div>
    </div>
</div>

<?php require 'my-page-tab.php'; ?>

<div class="cardsContainer cardsContainer--top">
    <ul class="cardsContainer__inner">
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
    </ul>
</div>

<div id="extraMenu" class="extraMenu">
    <ul class="extraMenu__inner">
        <li class="extraMenu__item">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <img src="images/icons/trash-can.png" class="iconText__icon">
                    <div class="iconText__text">この投稿を削除</div>
                </a>
            </div>
        </li>
        <li id="closeExtraMenu" class="extraMenu__item extraMenu__item--colored">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <div class="iconText__text l-dispCenter">キャンセル</div>
                </a>
            </div>
        </li>
    </ul>
</div>

</body>