/**
 * Created by Karthik on 12/07/2015.
 */
$(document).ready(function() {
    $('.ui.left.sidebar').sidebar('attach events', '.content.icon');
});
/*if (document.referrer != "undefined") {
    $('#mainmenu').removeClass('content icon');
    $('#mainmenu').addClass('chevron left icon');
}
if((window.location.href == "http://20percents.com/frontend/") || (window.location.href == "http://20percents.com/frontend/homepage")) {
    $('#mainmenu').removeClass('chevron left icon');
    $('#mainmenu').addClass('content icon');
}*/
$(".chevron.left.icon").click(function() {
    history.back();
});