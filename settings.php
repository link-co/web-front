<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require 'head.php';
?>

<body class="u-bgcGrey">

<?php
    require 'header.php';
    //require 'header-anonymous.php';
?>

<div class="rowContainer">
    <ul class="">
        <li class=""><span class="rowContainer__label">アカウント</span>
            <ul class="u-bgcWhite">
                <li class="">
                    <div class="settingList"><a href="edit-profile.php">
                        <div class="l-flexSide">
                            <span class="settingList__label">プロフィールを編集</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="change-email.php">
                        <div class="l-flexSide">
                            <span class="settingList__label">メールアドレス</span>
                            <div class="settingList__content">
                                <span class="settingList__state">ayumu@co-ltd.link</span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="change-password.php">
                        <div class="l-flexSide">
                            <span class="settingList__label">パスワード</span>
                            <div class="settingList__content">
                                <span class="settingList__state">・・・・・</span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="./accounts-blocked.php">
                        <div class="l-flexSide">
                            <span class="settingList__label">ブロックしたアカウント</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="accounts-muted.php">
                        <div class="l-flexSide">
                            <span class="settingList__label">ミュートしたアカウント</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="#">
                        <div class="l-flexSide">
                            <span class="settingList__label">自分のURLを発行</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="#">
                        <div class="l-flexSide">
                            <span class="settingList__label">ログアウト</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
            </ul>
        </li>
        <li class=""><span class="rowContainer__label">通知設定</span>
            <ul class="u-bgcWhite">
                <li class="">
                    <div class="settingList">
                        <form class="form settingList__form">
                            <label class="settingList__label">フォローを通知</label>
                            <input type="radio" class="form__radio settingList__radio">
                        </form>
                    </div>
                </li>
                <li class="">
                    <div class="settingList">
                        <form class="form settingList__form">
                            <label class="settingList__label">シェアを通知</label>
                            <input type="radio" class="form__radio settingList__radio">
                        </form>
                    </div>
                </li>
                <li class="">
                    <div class="settingList">
                        <form class="form settingList__form">
                            <label class="settingList__label">DMを通知</label>
                            <input type="radio" class="form__radio settingList__radio">
                        </form>
                    </div>
                </li>
            </ul>
        </li>
        <li class=""><span class="rowContainer__label">Linkについて</span>
            <ul class="u-bgcWhite">
                <li class="">
                    <div class="settingList"><a href="#">
                        <div class="l-flexSide">
                            <span class="settingList__label">運営会社</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="#">
                        <div class="l-flexSide">
                            <span class="settingList__label">利用規約</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
                <li class="">
                    <div class="settingList"><a href="#">
                        <div class="l-flexSide">
                            <span class="settingList__label">プライバシーポリシー</span>
                            <div class="settingList__content">
                                <span class="settingList__state"></span>
                                <img src="images/icons/angel-right.png" class="settingList__icon">
                            </div>
                        </div>
                    </a></div>
                </li>
            </ul>
        </li>
    </ul>
</div>

</body>