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

<div class="searchBox">
    <form class="form">
        <div class="form__group u-bgcWhite u-mbS">
            <img src="images/icons/lock.png" class="iconM u-mrIconNText">
            <input class="form__input" placeholder="新規パスワード">
        </div>
        <div class="form__group u-bgcWhite u-mbS">
            <img src="images/icons/lock.png" class="iconM u-mrIconNText">
            <input class="form__input" placeholder="新規パスワード確認">
        </div>
        <div class="l-flexCenter">
            <button class="form__button containedButton">変更を保存</button>
        </div>
    </form>
</div>

</body>