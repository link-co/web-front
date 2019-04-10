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

<div class="searchBox">
    <form class="form">
        <div class="form__group u-bgcGrey">
            <img src="images/icons/search.png" class="iconM u-mrIconNText">
            <input class="form__input" placeholder="フォローする人を探してみよう">
        </div>
    </form>
</div>



</body>