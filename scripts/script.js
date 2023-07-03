$(document).ready(function() {
    $('.ui.dropdown').dropdown();
    $('.ui.accordion').accordion();
    $('.menu .item').tab();
    $('.ui.checkbox').checkbox();
    $('.showdeleteconfirmation').click(function() {
        $('#storeid').val($(this).attr('id'));
        $('.small.modal').modal('show');
    });
    $("#dodeletebtn").click(function() {
        $("#dodeletestore").click();
        return false;
    });
    var url = window.location.href;
    var lastSegment = url.split('/').pop();
    $('.menu a.item').each(function(){
        if($(this).attr('href') == lastSegment) {
            $(this).addClass('active');
        }
        else if($(this).attr('href') == url) {
            $(this).addClass('active');
        }
    });
    $('.slickimageslider').slick({
        autoplay: true,
        autoplaySpeed: 2000
    });
});