window.delay = 750;

var $ = jQuery.noConflict();

$(document).ready(function ($) {

    /*-------------------------------------------------*/
    /* = preload animate
    /*-------------------------------------------------*/

    try {
        var timer;
        window.clearTimeout(timer);
        timer = setTimeout(function () {
            $("#loader-wrapper").slideUp(function() {
                $('body').css('overflow', 'visible');
            });

        }, window.delay);
    } catch (err) {
    }


    /*-------------------------------------------------*/
    /* = menu
    /*-------------------------------------------------*/

    $('.menu li').on("click", function () {
        $('.menu li').removeClass('current');
        $(this).addClass('current');
       });

    // Mobile menu toggle
    var mobile_nav = $(".mini-menu");
    mobile_nav.on("click", function () {
        $("#top").find(".menu").toggle(2000);
    });


    /**
    * Copyright (c) 2007-2012 Ariel Flesler - aflesler(at)gmail(dot)com | http://flesler.blogspot.com
    * Dual licensed under MIT and GPL.
    * @author Ariel Flesler
    * @version 1.4.3
    */
    ; (function ($) { var h = $.scrollTo = function (a, b, c) { $(window).scrollTo(a, b, c) }; h.defaults = { axis: 'xy', duration: parseFloat($.fn.jquery) >= 1.3 ? 0 : 1, limit: true }; h.window = function (a) { return $(window)._scrollable() }; $.fn._scrollable = function () { return this.map(function () { var a = this, isWin = !a.nodeName || $.inArray(a.nodeName.toLowerCase(), ['iframe', '#document', 'html', 'body']) != -1; if (!isWin) return a; var b = (a.contentWindow || a).document || a.ownerDocument || a; return /webkit/i.test(navigator.userAgent) || b.compatMode == 'BackCompat' ? b.body : b.documentElement }) }; $.fn.scrollTo = function (e, f, g) { if (typeof f == 'object') { g = f; f = 0 } if (typeof g == 'function') g = { onAfter: g }; if (e == 'max') e = 9e9; g = $.extend({}, h.defaults, g); f = f || g.duration; g.queue = g.queue && g.axis.length > 1; if (g.queue) f /= 2; g.offset = both(g.offset); g.over = both(g.over); return this._scrollable().each(function () { if (!e) return; var d = this, $elem = $(d), targ = e, toff, attr = {}, win = $elem.is('html,body'); switch (typeof targ) { case 'number': case 'string': if (/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(targ)) { targ = both(targ); break } targ = $(targ, this); if (!targ.length) return; case 'object': if (targ.is || targ.style) toff = (targ = $(targ)).offset() } $.each(g.axis.split(''), function (i, a) { var b = a == 'x' ? 'Left' : 'Top', pos = b.toLowerCase(), key = 'scroll' + b, old = d[key], max = h.max(d, a); if (toff) { attr[key] = toff[pos] + (win ? 0 : old - $elem.offset()[pos]); if (g.margin) { attr[key] -= parseInt(targ.css('margin' + b)) || 0; attr[key] -= parseInt(targ.css('border' + b + 'Width')) || 0 } attr[key] += g.offset[pos] || 0; if (g.over[pos]) attr[key] += targ[a == 'x' ? 'width' : 'height']() * g.over[pos] } else { var c = targ[pos]; attr[key] = c.slice && c.slice(-1) == '%' ? parseFloat(c) / 100 * max : c } if (g.limit && /^\d+$/.test(attr[key])) attr[key] = attr[key] <= 0 ? 0 : Math.min(attr[key], max); if (!i && g.queue) { if (old != attr[key]) animate(g.onAfterFirst); delete attr[key] } }); animate(g.onAfter); function animate(a) { $elem.animate(attr, f, g.easing, a && function () { a.call(this, e, g) }) } }).end() }; h.max = function (a, b) { var c = b == 'x' ? 'Width' : 'Height', scroll = 'scroll' + c; if (!$(a).is('html,body')) return a[scroll] - $(a)[c.toLowerCase()](); var d = 'client' + c, html = a.ownerDocument.documentElement, body = a.ownerDocument.body; return Math.max(html[scroll], body[scroll]) - Math.min(html[d], body[d]) }; function both(a) { return typeof a == 'object' ? a : { top: a, left: a} } })(jQuery);

        $(document).on("scroll", onScroll);

        //smoothscroll
        $('nav li.cl-effect-11 a').on('click', function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            $(document).off("scroll");

            $('a').each(function () {
                $(this).removeClass('active');
            })
            $(this).addClass('active');

            var target = $(this).data('anchor'),
            href = $(this).attr('href'),
            menu = target;
            $target = $(target);
            $('html, body').stop().animate({
                'scrollTop': $target.offset().top
            }, 500, 'swing', function () {
                //window.location.hash = target;
                $(document).on("scroll", onScroll);
            });
                window.history.pushState({},"", href);

        });


    function onScroll(event) {
        try {
            var scrollPos = $(document).scrollTop();
            $('.nav a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top - 100 <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                    $('nav ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else {
                    currLink.removeClass("active");
                }
                if ($(window).scrollTop() + $(window).height() > $('#about').offset().top) {
                    $('.infotop').addClass('visible animated fadeInDown');
                }
                if ($(window).scrollTop() + $(window).height() > $('#services').offset().top) {
                    $('.effectservic').addClass('visible animated fadeInDown');
                    setTimeout((function () { $('.effectservic-sec').addClass('visible animated fadeInDown'); }), 1000);
                }

            });
        } catch (err) {

        }
    }

    /*-------------------------------------------------*/
    /* = skills animate
    /*-------------------------------------------------*/

    try {

        var skillBar = $('.skills-progress');
        skillBar.appear(function () {

            var animateElement = $(".meter > p");
            animateElement.each(function () {
                $(this)
					.data("origWidth", $(this).width())
					.width(0)
					.animate({
					    width: $(this).data("origWidth")
					}, 1200);
            });

        });
    } catch (err) {
}

    /********************************************
    PORTFOLIO
    ********************************************/

    $(window).load(function () {
        var $container = $('.albumContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            getSortData: {
                identifiant: function($elem) {
                    console.log(parseInt($elem.attr('data-order')));
                    return parseInt($elem.attr('data-order'));
                }
            },
            //sortBy: 'identifiant',
            sortAscending: false
        });

        $('.albumFilter li').on("click", function () {
            $('.albumFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    });
    /********************************************
    OPEN PAGE DETAILS
    ********************************************/
    // $(document).ready(function () {
    //     $(".smooth-redirect").on("click", function (event) {
    //         event.preventDefault();
    //         linkLocation = this.href;
    //         $("body").fadeOut(1000, redirectPage);
    //     });
    //     function redirectPage() {
    //         window.location = linkLocation;
    //     }
    // });

    /********************************************
    CAROUSEL
    ********************************************/
    $("#owl-demo").owlCarousel({

        navigation: true, // Show next and prev buttons
        slideSpeed: 1,
        paginationSpeed: 400,
        singleItem: true,
        autoPlay: 7500,
        stopOnHover: true

        // "singleItem:true" is a shortcut for:
        // items : 1, 
        // itemsDesktop : false,
        // itemsDesktopSmall : false,
        // itemsTablet: false,
        // itemsMobile : false

    });


});


    /********************************************
    EMAIL CONTROL
    ********************************************/

//$(function () {
//    "use strict";
//    $('#contact_form').submit(function (e) {
//        e.preventDefault();
//        var form = $(this);
//        var name = $("#name").val();
//        var email = $("#email").val();
//        var text = $("#message").val();
//        var dataString = 'name=' + name + '&email=' + email + '&message=' + text;
//        var proceed = true;
//        if (name == "") {
//            $('input[name=name]').css('border-color', '#e41919');
//            proceed = false;
//        }
//        if (email == "") {
//            $('input[name=email]').css('border-color', '#e41919');
//            proceed = false;
//        }
//
//        if (text == "") {
//            $('textarea[name=message]').css('border-color', '#e41919');
//            proceed = false;
//        }
//
//            function isValidEmail(emailAddress) {
//                var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
//                return pattern.test(emailAddress);
//            };
//            if (isValidEmail(email) && proceed) {
////            if (isValidEmail(email) && (text.length > 20) && (name.length > 1)) {
//                $.ajax({
//                    type: 'POST',
//                    url: "contact_form/contact_process.php",
//                    data: dataString,
//                    success: function () {
//                        $('.success').fadeIn(1000);
//                        $("#name").val("");
//                        $("#email").val("");
//                        $("#message").val("");
//                    }
//                });
//            } else {
//                $('.error').fadeIn(1000);
//            }
//
//    });
//    });




    /********************************************
    GOOGLE MAPS
    ********************************************/

// The following example creates a marker in Stockholm, Sweden
// using a DROP animation. Clicking on the marker will toggle
// the animation between a BOUNCE animation and no animation.
$(document).ready(function ($) {
    "use strict";
    var stockholm = new google.maps.LatLng(48.830690, 2.346402    );
    var parliament = new google.maps.LatLng(48.830690, 2.346402);
    var image = 'images/marker.png';
    var marker;
    var map;

    $(".cover-map").on("click", function () {
        $(this).toggleClass("map-active");
        $(this).find(".mm-open").toggle();
        $(this).find(".mm-close").toggle();
    });

    function initialize() {
        var styleArray = [
        {
            featureType: 'all',
            stylers: [
            { saturation: -1000 }
            ]
        }, {
            featureType: 'road.arterial',
            elementType: 'geometry',
            stylers: [
            { hue: '#00ffee' },
            { saturation: -100 },
            { "lightness": -8 },
            { "gamma": 1.18 }
            ]
        }
        ];
        var mapOptions = {
            zoom: 12,
            styles: styleArray,
            center: stockholm
        };

        map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            icon: image,
            position: parliament
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
    }

    function toggleBounce() {

        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }

    google.maps.event.addDomListener(window, 'load', initialize);

});


/***BUTTON ANCHOR TOP****/
$(function () {
    "use strict";
    $().UItoTop({
        scrollSpeed: 500,
        easingType: 'linear'
    });
});

/************************************************************************************/

var loadRea = function(html) {
    $('body').css('overflow', 'hidden');
    $(html).modal('show');
    var head = document.getElementsByTagName('head').item(0);
    var script = document.createElement('script');
    script.setAttribute('type', 'text/javascript');
    script.setAttribute('src', 'js/ajax/realisation.js');
    head.appendChild(script);

};

var animateOnScroll = function(moving_point, element, delay, animation_duration, offset) {
    var mp, el, d, ad, o;
    mp = moving_point;
    el = element;
    d = delay;
    ad = animation_duration;
    o = offset;




    $(mp).waypoint(function() {
        console.log(mp);
        if(mp == '#scroll-realisations') {
            $($(el).get().reverse()).each(function() {
                $(this).delay(d).animate({opacity: 1}, ad);
                d += ad;
            });
            window.setTimeout(function() {
                var $container = $('.albumContainer');
                $container.isotope({sortBy: 'identifiant'});
            }, d);
        } else {
            $(el).each(function() {
                $(this).delay(d).animate({opacity: 1}, ad);
                d += ad;
            });
        }
    }, {
        offset: o+'%',
        triggerOnce: true
    });

    //console.log(mp);

};

var activeMenu = function(moving_point, element, position) {
    var mp, el, p, l; window.o;
    mp = moving_point;
    el = element;
    p = position;



    if(p == 5) window.o = '60%';
    $(mp).waypoint(function(d) {
        // window.o = (d == 'up' ? '60%' : (el == '#contactLink' ? '100%' : '25%'));
        if(p == 1) {
            window.o = (d == 'up' ? '0%' : '100%');
        } else if(p == 2) {
            window.o = (d == 'up ' ? '50%' : '0%');
        } else {
            window.o = (d == 'up ' ? '99%' : '0%');
        }
        switch(mp)
        {
            case '#scroll-parcours': l = 'parcours/';
                break;
            default:
            case '#section1': l = 'presentation/';
                break;
            case '#scroll-competences': l = 'competences/';
                break;
            case '#scroll-realisations': l = 'realisations/';
                break;
            case '#section4': l = 'contact/';
                break;
        }
        //l = 'app_dev.php/' + l;
        $('.cl-effect-11').removeClass('current');
        window.history.pushState({},"", l);
        $(el).addClass('current');
    }, {offset: window.o, triggerOnce: false});
}

var scrollOnLoad = function() {
    setTimeout(function() {

        window.scrollTo(0, 0);
        var link, doNot;
        var url = document.URL;
        var split = url.split('/');
        split.pop();
        var anchor = split.pop();
        switch(anchor)
        {
            case 'parcours': link = 'scroll-parcours';
                break;
            case 'presentation': link = 'section1';
                break;
            case 'competences': link = 'scroll-competences';
                break;
            case 'realisations': link = 'scroll-realisations';
                break;
            case 'contact': link = 'section4';
                break;
            default: doNot = true;
                break;
        }
        if(!doNot) {
            var offsetTop = $('#' + link).offset().top;
            $('html, body').animate({scrollTop: offsetTop}, 1500);
        }
    }, window.delay);
};

jQuery(function($) {

    // (function() {
    //        var url = document.URL;
    //        var split = url.split('#')
    //        var anchor = split.pop();
    //    window.setTimeout(function() {
    //        $('[data-rea='+anchor+']').trigger('click');
    //    }, 4500)
    // })();

    scrollOnLoad();



    // window.onpopstate = function(e){
    //     if(e.state){
    //         scrollOnLoad();
    //     }
    // };


    $('[rel=tooltip]').tooltip();

    $('.easy-pie').each(function() {
        $(this).easyPieChart({
            barColor: '#616265',
            lineWidth: 2,
            size: 100,
            animate: false,
            scaleColor: false,
            lineCap: 'square'
        });
    });

    $('#scroll-competences').waypoint(function() {
        (function myLoop(i) {
            setTimeout(function() {
                $('#ep'+i).each(function() {
                    $(this).data('easyPieChart').enableAnimation(1000).update($(this).data('value'));
                });
                if(++i < 100) myLoop(i);
            }, 62.5);
        })(1);
    }, { offset: '50%', triggerOnce: true });

    animateOnScroll('#scroll-realisations', 'figure', 250, 250, 65);
    animateOnScroll('#scroll-parcours', '.list-experiences', 250, 500, 50);
    animateOnScroll('#section4', '.c-info', 500, 500, 75);
    animateOnScroll('#section5', '.content-map', 0, 500, 75);

    activeMenu('#section1 h1', '#prezLink', 1);
    activeMenu('#scroll-parcours', '#parcoursLink', 2);
    activeMenu('#scroll-competences', '#compLink', 3);
    activeMenu('#scroll-realisations', '#reaLink', 4);
    activeMenu('#section4', '#contactLink', 5);

    $('.active[href=#section1]').trigger('click');





    $('input').on('focus', function() {
        if(!$(this).parents('.has-feedback').hasClass('has-error'))
            $(this).next('.input-group-addon').addClass('active');
    }).on('blur', function() {
        $(this).next('.input-group-addon').removeClass('active');
    });

    $('#competences-chart').css('height', '300px');

    Morris.Donut({
        element: 'competences-chart',
        data: [
            {label: 'Intégration', value: 25},
            {label: 'Administration', value: 15},
            {label: 'Développement', value: 70}
        ],
        colors: ['#020908', '#010901', '#091001']
    });


    function responsive() {
        var width = $(window).outerWidth();
        if(width < 1200) {
            var $exp = $('.list-experiences');
            $exp.each(function() {
                var $data = $(this).find('.data');
                var $clone = $data.clone(true);
                console.log($clone);
                $data.remove();
                $(this).append($clone).find('.data').wrap('<h3>').css('text-transform', 'uppercase');

            });
        }
    };

    $(window).on('resize', responsive);
    $(window).load(responsive);
});