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
                        <span class="iconText__text">@szkz</span>
                    </a>
                </li>
                <li class="iconText">
                    <a href="#" class="iconText__inner iconText__inner--center">
                        <img src="./images/icons/link.png" class="iconText__icon">
                        <span class="iconText__text">linktr.ee/szkz</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="textbox">
            <p class="textbox__body u-taCenter">
                慶應義塾大学法学部卒業/Harvard Law School(LL.M.)/Skadden,Arps,Slate,Meagher Senior Partner
            </p>
        </div>
    </div>
</div>

<?php require 'others-page-tab.php'; ?>

<div class="cardsContainer cardsContainer--top">
    <ul class="cardsContainer__inner">
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
                                    <li class=""><a href="#">ユーザーネーム</a></li>
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
                                    <span class="iconText__text">URLをシェア</span>
                                </a>
                            </div>
                        </li>
                        <li class="l-flexChild">
                            <div class="iconText">
                                <a href="#" class="iconText__inner">
                                    <img src="images/icons/mail.png" class="iconText__icon">
                                    <span class="iconText__text">メッセージ</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </li>
        
    </ul>
</div>

</body>