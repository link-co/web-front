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

<div class="cardsContainer cardsContainer--topp">
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
                        <div class="l-dispRight">
                            <a href="#" class="longRoundButton"><img src="images/icons/following.png" class="iconM"></a>
                        </div>
                    </div>
                </div>
                <div class="card__item">
                    <ul class="l-flex">
                        <li class="l-flexChild">
                            <div class="iconText">
                                <a href="#" class="iconText__inner">
                                    <img src="images/icons/link.png" class="iconText__icon">
                                    <span class="iconText__text">linktr.ee/aymkbyshi</span>
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
                <div class="card__item">
                    <p class="textbox__body">
                        2002年に東京大学経済学部を卒業.
                        最優秀卒業論文に与えられる大内兵衛賞を受賞し経済学部卒業生総代となる.
                        米国プリンストン大学へ留学して2007年にPh.D.を取得（経済学）.
                        政策研究大学院大学助教授を経て2014年4月から現職.
                    </p>
                </div>
            </div>
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
                                    <li class=""><a href="#">ユーザーネーム</a></li>
                                    <li class="profileLabel__note"><a href="#">@userID</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="l-dispRight">
                            <a href="#" class="longRoundButton"><img src="images/icons/following.png" class="iconM"></a>
                        </div>
                    </div>
                </div>
                <div class="card__item">
                    <ul class="l-flex">
                        <li class="l-flexChild">
                            <div class="iconText">
                                <a href="#" class="iconText__inner">
                                    <img src="images/icons/link.png" class="iconText__icon">
                                    <span class="iconText__text">linktr.ee/aymkbyshi</span>
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
                <div class="card__item">
                    <p class="textbox__body">
                        2002年に東京大学経済学部を卒業.
                        最優秀卒業論文に与えられる大内兵衛賞を受賞し経済学部卒業生総代となる.
                        米国プリンストン大学へ留学して2007年にPh.D.を取得（経済学）.
                        政策研究大学院大学助教授を経て2014年4月から現職.
                    </p>
                </div>
            </div>
        </li>
    </ul>
</div>

</body>