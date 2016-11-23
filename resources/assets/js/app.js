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
