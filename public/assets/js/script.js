$(function(){

    /*===================================================================================*/
    /*  OWL CAROUSEL
    /*===================================================================================*/

    $(document).ready(function () {

        var dragging = true;
        var owlElementID = "#owl-main";

        function fadeInReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").stop().delay(800).animate({ opacity: 0 }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeIn-1, " + owlElementID + " .caption .fadeIn-2, " + owlElementID + " .caption .fadeIn-3").css({ opacity: 0 });
            }
        }

        function fadeInDownReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").stop().delay(800).animate({ opacity: 0, top: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInDown-1, " + owlElementID + " .caption .fadeInDown-2, " + owlElementID + " .caption .fadeInDown-3").css({ opacity: 0, top: "-15px" });
            }
        }

        function fadeInUpReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").stop().delay(800).animate({ opacity: 0, top: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInUp-1, " + owlElementID + " .caption .fadeInUp-2, " + owlElementID + " .caption .fadeInUp-3").css({ opacity: 0, top: "15px" });
            }
        }

        function fadeInLeftReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").stop().delay(800).animate({ opacity: 0, left: "15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInLeft-1, " + owlElementID + " .caption .fadeInLeft-2, " + owlElementID + " .caption .fadeInLeft-3").css({ opacity: 0, left: "15px" });
            }
        }

        function fadeInRightReset() {
            if (!dragging) {
                $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").stop().delay(800).animate({ opacity: 0, left: "-15px" }, { duration: 400, easing: "easeInCubic" });
            }
            else {
                $(owlElementID + " .caption .fadeInRight-1, " + owlElementID + " .caption .fadeInRight-2, " + owlElementID + " .caption .fadeInRight-3").css({ opacity: 0, left: "-15px" });
            }
        }

        function fadeIn() {
            $(owlElementID + " .active .caption .fadeIn-1").stop().delay(500).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeIn-2").stop().delay(700).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeIn-3").stop().delay(1000).animate({ opacity: 1 }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInDown() {
            $(owlElementID + " .active .caption .fadeInDown-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInDown-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInDown-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInUp() {
            $(owlElementID + " .active .caption .fadeInUp-1").stop().delay(500).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInUp-2").stop().delay(700).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInUp-3").stop().delay(1000).animate({ opacity: 1, top: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInLeft() {
            $(owlElementID + " .active .caption .fadeInLeft-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInLeft-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInLeft-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        function fadeInRight() {
            $(owlElementID + " .active .caption .fadeInRight-1").stop().delay(500).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInRight-2").stop().delay(700).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
            $(owlElementID + " .active .caption .fadeInRight-3").stop().delay(1000).animate({ opacity: 1, left: "0" }, { duration: 800, easing: "easeOutCubic" });
        }

        $(owlElementID).owlCarousel({

            autoPlay: 5000,
            stopOnHover: true,
            navigation: true,
            pagination: true,
            singleItem: true,
            items: 1,
            addClassActive: true,
            //transitionStyle: "fade",
            navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],



            afterInit: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterMove: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            afterUpdate: function() {
                fadeIn();
                fadeInDown();
                fadeInUp();
                fadeInLeft();
                fadeInRight();
            },

            startDragging: function() {
                dragging = true;
            },

            afterAction: function() {
                fadeInReset();
                fadeInDownReset();
                fadeInUpReset();
                fadeInLeftReset();
                fadeInRightReset();
                dragging = false;
            }

        });

        if ($(owlElementID).hasClass("owl-one-item")) {
            $(owlElementID + ".owl-one-item").data('owlCarousel').destroy();
        }

        $(owlElementID + ".owl-one-item").owlCarousel({
            items: 1,
            singleItem: true,
            navigation: false,
            pagination: false
        });

        $('#transitionType li a').click(function () {

            $('#transitionType li a').removeClass('active');
            $(this).addClass('active');

            var newValue = $(this).attr('data-transition-type');

            $(owlElementID).data("owlCarousel").transitionTypes(newValue);
            $(owlElementID).trigger("owl.next");

            return false;

        });

        $("#owl-recently-viewed").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 6,
            pagination: false,
            itemsTablet: [768,3]
        });

        $("#owl-recently-viewed-2").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 4,
            pagination: false,
            itemsTablet: [768,3],
            itemsDesktopSmall: [1199,3],
        });

        $("#owl-brands").owlCarousel({
            stopOnHover: true,
            rewindNav: true,
            items: 6,
            pagination: false,
            itemsTablet : [768, 4]
        });

        $('#owl-single-product').owlCarousel({
            items: 1,
            singleItem: true,
            pagination: false
        });

        $('#owl-single-product-thumbnails').owlCarousel({
            items: 6,
            pagination: false,
            rewindNav: true,
            itemsTablet : [768, 4]
        });

        $('#owl-recommended-products').owlCarousel({
            rewindNav: true,
            items: 4,
            pagination: false,
            itemsTablet: [768, 3],
            itemsDesktopSmall: [1199,3],
        });

        $('#best-seller-single-product-slider').owlCarousel({
            items: 1,
            singleItem: true,
            pagination: false
        });

        $(".slider-next").click(function () {
            var owl = $($(this).data('target'));
            owl.trigger( 'next.owl.carousel' );
            return false;
        });

        $(".slider-prev").click(function () {
            var owl = $($(this).data('target'));
            owl.trigger( 'prev.owl.carousel' );
            return false;
        });

        $('.single-product-gallery .horizontal-thumb').click(function(){
            var $this = $(this), owl = $($this.data('target')), slideTo = $this.data('slide');
            owl.trigger('to.owl.carousel', slideTo);
            $this.addClass('active').parent().siblings().find('.active').removeClass('active');
            return false;
        });

    });

    if(typeof maxslider != 'undefined') {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: maxslider,
            values: [ $('#slider0').val(), $('#slider1').val() ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "R$" + ui.values[ 0 ] + " - R$" + ui.values[ 1 ] );
            },
            change: function( event, ui ) {
                $('#slider'+ui.handleIndex).val(ui.value);
                $('.filterarea form').submit();
            }
        }).css('background-color', '#59b210');
    }

    $( "#amount" ).val( "R$" + $( "#slider-range" ).slider( "values", 0 ) + " - R$" + $( "#slider-range" ).slider( "values", 1 ) );


    $('.filterarea').find('input').on('change', function(){
        $('.filterarea form').submit();
    });

    $('.addtocartform button').on('click', function(e){
        e.preventDefault();

        var qt = parseInt($('.addtocart_qt').val());
        var action = $(this).attr('data-action');

        if(action == 'decrease') {
            if(qt-1 >= 1) {
                qt = qt - 1;
            }
        }
        else if(action == 'increase') {
            qt = qt + 1;
        }

        $('.addtocart_qt').val(qt);
        $('input[name=qt_product]').val(qt);

    });

    $('.photo_item').on('click', function(){
        var url = $(this).find('img').attr('src');
        $('.mainphoto').find('img').attr('src', url);
    });















});
