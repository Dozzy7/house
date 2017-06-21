$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 470) {
        nav.addClass('effect');
    } else {
        nav.removeClass('effect');
    }
});

smoothScroll.init({
    speed: 700,
    easing: 'easeInOutQuad',
    updateURL: false,
    offset: 0
});

//Uplaod Picture Code

$(document).ready(function() {
    $('#insert').click(function() {
        var image_name = $('#image').val();
        if (image_name == '') {
            alert("Please Select Image");
            return false;
        } else {
            var extension = $('#image').val().split('.').pop().toLowerCase();
            if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                alert('Invalid Image File');
                $('#image').val('');
                return false;
            }
        }
    });
});