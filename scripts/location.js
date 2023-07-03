    function getLocation() {
        $('.ui.dimmer').dimmer('show');
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position) {
        var dataString = 'longitude=' + position.coords.longitude + '&latitude=' + position.coords.latitude;
        $.ajax({
            type: 'POST',
            url: 'api/location',
            data: dataString,
            dataType: 'json',
            cache: false,
            beforeSend: function () {
            },
            success: function (data) {
                if (data.response == 'located') {
                    window.location.replace("homepage");
                }
                else if (data.response == 'failed') {

                }
            },
            error: function () {
                alert("failure");
            }
        });
    }
