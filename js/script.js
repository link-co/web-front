$(document).ready(function() {
    
    //実装：#newPostをクリックすると#postModalに.openを付与
    $("#newPost").click(function() {
        $("#postModal").addClass("open");
    });
    
    //実装：#closeButtonをクリックすると#postModalから.openを削除
    $("#closePostModal").click(function() {
        $("#postModal").removeClass("open");
    });
    
    //実装：.extraButtonをクリックすると#extraMenuに.openを付与
    $('.extraButton').click(function() {
        $('#extraMenu').addClass('open');
    });
    
    //実装：#closeExtraMenuをクリックすると#extraMenuから.openを削除
    $('.extraMenu__item--colored').click(function() {
        $('#extraMenu').removeClass('open');
    });
    
    /*
    $('#nav ul li div a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
            $(this).parent('div').addClass('current');
        } else {
            $(this).parent('div').removeClass('current');
        }
    });
    */
    
    $('#editProfileForm [name=myColor]').click(function() {
        var resetColor = $('.u-myColored');
        resetColor.each(function() {
            $(this).removeClass('linkRed linkPink linkBlue linkGreen linkYellow');
        });
        var myColor = $('#editProfileForm [name=myColor]:checked').val();
        $('.u-myColored').addClass(myColor);
    });
});