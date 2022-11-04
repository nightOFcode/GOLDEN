var dis = $("#sidebar").is(':visible')
// alert(dis);

$(document).ready(function () {
    var sidebar = $('#sidebar');
    var sidebar_button = $('#sidebar-button');
    var categories = $('#categories');
    var home_category = $('#home-category-list-holder');
    var sign_holder = $('#sign-content-holder');
    var login_holder = $('#login-content-holder');
    //selectors//

    $(sidebar_button).click(function () {
        if ($(sidebar).css('display') === 'none') {
            // $('#sidebar').css('display', 'block');
            $(sidebar).slideToggle(500);
            $(sidebar_button).css('left', '230px');
        } else {
            // $('#sidebar').css('display', 'none');
            $(sidebar).slideToggle(500);
            $(sidebar_button).css('left', '10px');
        }

        if (dis === 'false') {
            $(categories).show();
        } else {
            $(categories).hide();
        }
    });

    $('#category-btn').click(function () {

        if ($(categories).css('display') === 'none') {
            $(categories).slideToggle(500);
        } else
            $(categories).slideToggle(500);
    });

    $('#list-categories').click(function () {
        if ($(home_category).css('display') === 'none') {
            $(home_category).fadeToggle(500);
        } else {
            $(home_category).fadeToggle(500);
        }
    });

    $('#login-button').click(function () {
        if ($(sign_holder).css('display') === 'block') {

            $(sign_holder).hide(500);
            $(login_holder).slideToggle(500);
        } else {
            $(login_holder).slideToggle(500);
        }
    });

    $('#sign-button').click(function () {
        if ($(login_holder).css('display') === 'block') {
            $(login_holder).hide(500);
            $(sign_holder).slideToggle(500);
        } else {
            $(sign_holder).slideToggle(500);
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
