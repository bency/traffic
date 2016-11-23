$(document).on('click', ".menu-item", function () {
    $('#app-navbar-collapse').removeClass('in');
});
var updateContersigned = function () {
    $.get('/countersigned').done(function (count) {
        $('.countersigned-count').text(count);
    });
};
$(document).on('ready', function(){
    updateContersigned();
    setInterval(updateContersigned, 10000);
});
$(document).on('click', '*[data-type="ga-click"]', function () {
    var target = $(this).data('target');
    var href = $(this).data('href');
    ga('send', 'event', 'click', target);
    window.location.href = href;
});
