$('document').ready(function() {
    //--------------Header Dropdown---------------------//
    $(function() {
        // ------------------------------------------------------- //
        // Multi Level dropdowns
        // ------------------------------------------------------ //
        // $("ul.dropdown-menu [data-toggle='dropdown']").mouseover(function(event) {
        //     // event.preventDefault();
        //     // event.stopPropagation();

        //     $(this).siblings().toggleClass("show");


        //     if (!$(this).next().hasClass('show')) {
        //         $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        //     }
        //     $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        //         $('.dropdown-submenu .show').removeClass("show");
        //     });

        // });

        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');

            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });

            return false;
        });


    });

    //-----------------header class addition---------//

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 400) {
            $("header").addClass("white_header");
        } else {
            $("header").removeClass("white_header");
        }
    });

    //---------------Scroll Top Button------------//

    jQuery('section.options_band a.case_study_btn').click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery('section.case_studies').offset().top - 70
        });

    });


    jQuery('section.options_band a.benefits_btn').click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery('section.brief_intro').offset().top - 70
        });

    });

    //--------------- Owl Carousel ----------------//


    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })

    $('#OpenImgUpload').click(function() { $('#imgupload').trigger('click'); });

});