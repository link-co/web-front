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

<div class="l-halfCircle u-myColored">
<div class="profilePanel">
    <div class="u-flexCenter u-mbM">
        <img src="./images/" class="profilePanel__thumb">
        <span class="profilePanel__name"><a href="#">プロフィール写真を更新</a></span>
    </div>
    <form id="editProfileForm" class="form">
        <div class="u-mbM">
            <label class="form__label">名前</label>
            <input class="form__input u-pdG u-bgcWhite" placeholder="Ayumu Kobayashi">
        </div>
        <div class="u-mbM">
            <label class="form__label">ユーザーID</label>
            <input class="form__input u-pdG u-bgcWhite" placeholder="@aymkbyshi">
        </div>
        <div class="u-mbM">
            <label class="form__label">リンク</label>
            <input class="form__input u-pdG u-bgcWhite" placeholder="linktr.ee/aymkbyshi">
        </div>
        <div class="u-mbM">
            <label class="form__label">自己紹介</label>
            <textarea class="form__textarea u-pdG u-bgcWhite"></textarea>
        </div>
        <div class="u-mbM">
            <span class="form__label">マイカラー</span>
            <div class="l-flexSide l-flexSide--space u-bgcWhite u-pdG u-brS">
            <input type="radio" name="myColor" value="linkRed" class="form__radio form__radio--red">
                <label class="form__invisible">赤</label>
            <input type="radio" name="myColor" value="linkPink" class="form__radio form__radio--pink">
                <label class="form__invisible">ピンク</label>
            <input type="radio" name="myColor" value="linkBlue" class="form__radio form__radio--blue">
                <label class="form__invisible">青</label>
            <input type="radio" name="myColor" value="linkGreen" class="form__radio form__radio--green">
                <label class="form__invisible">緑</label>
            <input type="radio" name="myColor" value="linkYellow" class="form__radio form__radio--yellow">
                <label class="form__invisible">黄色</label>
            </div>
        </div>
        <div class="l-flexCenter">
            <button class="form__button containedButton" name="save">変更を保存</button>
        </div>
    </form>
</div>
</div>


</body>