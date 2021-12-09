var dis = $("#sidebar").is(':visible')
// alert(dis);

$(document).ready(function () {
    $('#sidebar-button').click(function () {
        if ($('#sidebar').css('display') === 'none') {
            // $('#sidebar').css('display', 'block');
            $('#sidebar').slideToggle(1000);
            $('#sidebar-button').css('left', '230px');
        } else {
            // $('#sidebar').css('display', 'none');
            $('#sidebar').slideToggle(500);
            $('#sidebar-button').css('left', '10px');
        }

        if (dis === 'false') {
            $('#categories').show();
        } else {
            $('#categories').hide();
        }
    });

    $('#category-btn').click(function () {
        if ($('#categories').css('display') === 'none') {
            $('#categories').slideToggle(500);
        } else
            $('#categories').slideToggle(500);
    });

    $('#list-categories').click(function () {
        if ($('#home-category-list-holder').css('display') === 'none') {
            $('#home-category-list-holder').fadeToggle(500);
        } else {
            $('#home-category-list-holder').fadeToggle(500);
        }
    });

    $('#login-button').click(function () {
        if ($('#sign-content-holder').css('display') === 'block') {

            $('#sign-content-holder').hide(500);
            $('#login-content-holder').slideToggle(500);
        } else {
            $('#login-content-holder').slideToggle(500);
        }
    });

    $('#sign-button').click(function () {
        if ($("#login-content-holder").css('display') === 'block') {
            $('#login-content-holder').hide(500);
            $('#sign-content-holder').slideToggle(500);
        } else {
            $('#sign-content-holder').slideToggle(1000);
        }
    });
});

var timeoutID;

$(document).ready(function () {
    // start hiding the message after 2 seconds
    timeoutID = window.setTimeout(hideMessage, 2000);
});

function hideMessage() {
    $('#loading-holder').animate({
        opacity: 0
    }, 800, function () {
        $('#loading-holder ').css({
            display: 'none'
        });
    });
}
