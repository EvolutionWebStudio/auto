
$(document).foundation();

$('.social-share').click(function(e){
    e.preventDefault();

    var windowWidth = '600', windowHeight = '400', shareUrl, leftPosition, topPosition;

    shareUrl = $(this).attr('href');

    leftPosition = (window.screen.width / 2) - ((windowWidth / 2) + 10);
    topPosition = (window.screen.height / 2) - ((windowHeight / 2) + 50);
    var windowFeatures = "status=no,height=" + windowHeight + ",width=" + windowWidth + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";

    window.open(shareUrl,'Share', windowFeatures);

    return false;
});

$('.toggle-mobile-menu').click(function(e){
    e.preventDefault();
    $('.mobile-menu').slideToggle('slow');
});

$('.video-popup').magnificPopup({
    type: 'iframe'
});
