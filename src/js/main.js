$(document).ready(function () {

    function fadeIn() {

        //Variables
        var pageTop = $(document).scrollTop();
        var pageBottom = pageTop + $(window).height();
        var tags = $(".fadeIn");

        //Check if item is inside visible area
        for (var i = 0; i < tags.length; i++) {
            var tag = tags[i];

            if ($(tag).position().top < pageBottom - 150) {
                $(tag).addClass("visible");
            } else {
                $(tag).removeClass("visible");
            }
        }
    }

    $(window).scroll(function () {
        fadeIn();
    });

    fadeIn();

});
