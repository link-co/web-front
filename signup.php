<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
require 'head.php';
?>

<body class="#">

<?php
    //require 'header.php';
    require 'header-anonymous.php';
?>

<div class="l-fullWindow u-bgcLink">
    <div class="l-dispCenter l-dispCenter--apparent u-dispNone--sp">
        <div class="centerPanel">
            <div class="l-flexChild">
                <div class="pageHead">
                    <div class="pageHead__logo"><img src="images/logos/logo-letters.png" class="u-fullImage"></div>
                    <h1 class="pageHead__title u-taCenter u-mbS">新規登録</h1>
                    <p class="pageHead__body u-taCenter">新規登録のために右の情報を入力してください！</p>
                </div>
            </div>
            <div class="l-flexChild">
                <form action="#" method="post" class="form">
                    <div class="form__group u-mbM">
                        <label class="u-dispNone">氏名</label>
                        <img src="images/icons/user.png" class="iconM u-mrIconNText">
                        <input type="text" class="form__input" placeholder="氏名">
                    </div>
                    <div class="form__group u-mbM">
                        <label class="u-dispNone">ユーザーID</label>
                        <img src="images/icons/id-card.png" class="iconM u-mrIconNText">
                        <input type="text" class="form__input" placeholder="ユーザーID">
                    </div>
                    <div class="form__group u-mbM">
                        <label class="u-dispNone">メールアドレス</label>
                        <img src="images/icons/mail.png" class="iconM u-mrIconNText">
                        <input type="email" class="form__input" placeholder="メールアドレス">
                    </div>
                    <div class="form__group u-mbM">
                        <label class="u-dispNone">パスワード</label>
                        <img src="images/icons/lock.png" class="iconM u-mrIconNText">
                        <input type="password" class="form__input" placeholder="パスワード">
                    </div>
                    <div class="form__group u-mbM">
                        <label class="u-dispNone">パスワード再入力</label>
                        <img src="images/icons/lock.png" class="iconM u-mrIconNText">
                        <input type="password" class="form__input" placeholder="パスワード再入力">
                    </div>
                    <div class="">
                        <button class="form__button containedButton">これで登録！</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <!--------------------------------
    Contents below are only displayed on the screen of smartphones
    -------------------------------->
        
    <div class="l-container--sp u-dispNone--pc l-escapeHeader--sp">
        <div class="textbox">
            <div class="l-flex u-mbS">
                <img src="images/logos/logo-white.png" class="iconM u-mrIconNText">
                <h1 class="textbox__head">新規登録</h1>
            </div>
            <p class="textbox__body">新規登録のために以下の情報を入力してください</p>
        </div>
        <form action="#" method="post" class="form">
            <div class="form__group u-mbS u-bgcWhite">
                <img src="images/icons/user.png" class="iconM u-mrIconNText">
                <input class="form__input" type="text" name="name" placeholder="氏名">
            </div>
            <div class="form__group u-mbS u-bgcWhite">
                <img src="images/icons/id-card.png" class="iconM u-mrIconNText">
                <input class="form__input" type="text" name="userID" placeholder="ユーザーID">
            </div>
            <div class="form__group u-mbS u-bgcWhite">
                <img src="images/icons/mail.png" class="iconM u-mrIconNText">
                <input class="form__input" type="text" name="email" placeholder="メールアドレス">
            </div>
            <div class="form__group u-mbS u-bgcWhite">
                <img src="images/icons/lock.png" class="iconM u-mrIconNText">
                <input class="form__input" type="text" name="password" placeholder="パスワード">
            </div>
            <div class="form__group u-mbS u-bgcWhite">
                <img src="images/icons/lock.png" class="iconM u-mrIconNText">
                <input class="form__input" type="text" name="password" placeholder="パスワード再入力">
            </div>
            <div class="l-flexCenter">
                <button class="form__button containedButton containedButton--reverse" type="submit" value="submit">これで登録！</button>
            </div>
        </form>
    </div>
</div>

</body>