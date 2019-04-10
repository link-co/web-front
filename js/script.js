$(document).ready(function() {
    
    //実装：#newPostをクリックすると#postModalに.openを付与
    $("#newPost").click(function () {
        $("#postModal").addClass("open");
    });
    
    //実装：#closeButtonをクリックすると#postModalから.openを削除
    $("#closeButton").click(function () {
        $("#postModal").removeClass("open");
    });
    
    
    ('#nav ul li div a').each(function(){
        var $href = $(this).attr('href');
        if(location.href.match($href)) {
            $(this).parent('div').addClass('active');
        } else {
            $(this).parent('div').removeClass('active');
        }
    });
});