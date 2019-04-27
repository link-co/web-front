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

<div class="pageHead u-dispNone--pc">
    <div class="pageHead__flexBox">
        <div>
            <span class="pageHead__note">3月20日土曜日</span>
            <h1 class="pageHead__title">最新の投稿</h1>
        </div>
        <div class="pageHead__profile">
            <a href="my-profile.php" class="">
                <img src="./images/" class="u-fullImage">
            </a>
        </div>
    </div>
</div>

<div class="cardsContainer cardsContainer--pageTop">
    <ul class="cardsContainer__inner">
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <div class="card">
                <div class="card__item">
                    <div class="l-flexSide">
                        <div class="profileLabel">
                            <div class="profileLabel__icon">
                                <a href="#"><img src="#" class="u-fullImage"></a>
                            </div>
                            <div class="profileLabel__texts">
                                <ul class="">
                                    <li class=""><a href="others-profile.php">ユーザーネーム</a></li>
                                    <li class="profileLabel__note"><a href="#">@userID</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="extraButton">
                            <div class="extraButton__inner">
                                <ul class="u-flexCenter">
                                    <li class="extraButton__dot"></li>
                                    <li class="extraButton__dot"></li>
                                    <li class="extraButton__dot"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card__item">
                    <div class="postContents">
                        <a href="#" class="postContents__inner">
                            <div class="postContents__sub">
                                <img src="images/" class="postContents__thumb">
                            </div>
                            <div class="postContents__main">
                                <span class="postContents__title">若者のSNS疲れを調査してみた | 株式会社Link</span>
                                <div class="postContents__foot">
                                    <span class="postContents__note">note</span>
                                    <span class="postContents__note">2019/03/20 15:00</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card__item">
                    <ul class="l-flex">
                        <li class="l-flexChild">
                            <div class="iconText">
                                <a href="#" class="iconText__inner">
                                    <img src="images/icons/link.png" class="iconText__icon">
                                    <span class="iconText__text u-fs08rem--sp">このURLをシェアする</span>
                                </a>
                            </div>
                        </li>
                        <li class="l-flexChild">
                            <div class="iconText">
                                <a href="#" class="iconText__inner">
                                    <img src="images/icons/mail.png" class="iconText__icon">
                                    <span class="iconText__text  u-fs08rem--sp">メッセージを送る</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
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
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
        <li class="cardsContainer__list">
            <?php require 'post-card.php'; ?>
        </li>
    </ul>
</div>

<div id="newPost" class="floatingActionButton">+</div>

<div id="extraMenu" class="extraMenu">
    <ul class="extraMenu__inner">
        <li class="extraMenu__item">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <img src="images/icons/sound-off.png" class="iconText__icon">
                    <div class="iconText__text">このユーザーをミュートする</div>
                </a>
            </div>
        </li>
        <li class="extraMenu__item">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <img src="images/icons/stop.png" class="iconText__icon">
                    <div class="iconText__text">このユーザーをブロックする</div>
                </a>
            </div>
        </li>
        <li class="extraMenu__item">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <img src="images/icons/flag.png" class="iconText__icon">
                    <div class="iconText__text">このユーザーを報告する</div>
                </a>
            </div>
        </li>
        <li class="extraMenu__item">
            <div class="iconText">
                <a href="#" class="iconText__inner">
                    <img src="images/icons/flag.png" class="iconText__icon">
                    <div class="iconText__text">このリンクを報告する</div>
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

<div id="postModal" class="modal">
    <div class="modal__inner">
        <div class="modal__head">
            <img src="images/logos/logo-letters.png" class="u-fullImage">
        </div>
        <div class="modal__body">
            <form class="form">
                <div class="form__group u-bgcGrey u-mbS">
                    <img src="images/icons/link.png" class="iconM u-mrIconNText">
                    <input class="form__input" placeholder="URLを貼り付け">
                </div>
                <div class="l-flexCenter">
                    <button class="form__button containedButton u-mAuto">投稿する</button>
                </div>
            </form>
        </div>
        <div id="closePostModal" class="modal__close">
            <img src="images/icons/times-white.png" class="u-fullImage">
        </div>
    </div>
</div>

</body>