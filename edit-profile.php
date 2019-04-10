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

<div class="profilePanel">
    <div class="u-flexCenter u-mbM">
        <img src="./images/" class="profilePanel__thumb">
        <span class="profilePanel__name">プロフィール写真を更新</span>
    </div>
    <form class="form">
        <div class="u-mbM">
            <label class="form__label">名前</label>
            <input class="form__input u-pdG u-bgcGrey" placeholder="Ayumu Kobayashi">
        </div>
        <div class="u-mbM">
            <label class="form__label">ユーザーID</label>
            <input class="form__input u-pdG u-bgcGrey" placeholder="@aymkbyshi">
        </div>
        <div class="u-mbM">
            <label class="form__label">リンク</label>
            <input class="form__input u-pdG u-bgcGrey" placeholder="linktr.ee/aymkbyshi">
        </div>
        <div class="u-mbM">
            <label class="form__label">自己紹介</label>
            <textarea class="form__textarea u-pdG u-bgcGrey"></textarea>
        </div>
        <div class="u-mbM">
            <span class="form__label">マイカラー</span>
            <div class="l-flexSide">
            <input type="radio" name="color" class="form__radio form__radio--red">
                <label class="form__invisible">赤</label>
            <input type="radio" name="color" class="form__radio form__radio--pink">
                <label class="form__invisible">ピンク</label>
            <input type="radio" name="color" class="form__radio form__radio--blue">
                <label class="form__invisible">青</label>
            <input type="radio" name="color" class="form__radio form__radio--green">
                <label class="form__invisible">緑</label>
            <input type="radio" name="color" class="form__radio form__radio--yellow">
                <label class="form__invisible">黄色</label>
            </div>
        </div>
        <div class="l-flexCenter">
            <button class="form__button floatingButton">変更を保存</button>
        </div>
    </form>
</div>


</body>