$(document).ready(function () {

    var Bookshop = (function () {

        var heroSlider = function () {
            $(window).load(function() {
                $('.flexslider').flexslider({
                    directionNav: false
                });
            });
        };



        return {
            init: function () {
                //heroSlider();

            }
        }

    })();

    Bookshop.init();

});