// ------ Burger Menu -------- //
jQuery(function($) {

    // 3) Adjust the Header Settings so it resets when you shrink back from a larger to smaller screen size

    var windowWidth = $('body').width();
    // console.log(windowWidth);

    /*
    |----------------------------------------
    | Hide/Show Header
    |----------------------------------------
    */
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta) {
          return;
        }

        // If they scrolled down and are past the navbar, add class .header-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('header').removeClass('header-down').addClass('header-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('header-up').addClass('header-down');
            }
        }
        lastScrollTop = st;
    }

    setInterval(function() {
        if(didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    /*
    |-----------------------------------------
    | Navigation (Burger)
    |-----------------------------------------
    */

    // 2) TO PREVENT BURGER MENU FROM STAYING OPENED WHEN USER SCROLLS -> scroll-lock.js. 
    // 'overlay: hidden' is not applicable for iOS devices -> need JS solution

    // 2a) Start with the basics: 
    const targetElement = document.querySelector('.gn');
    bodyScrollLock.disableBodyScroll(targetElement);
    bodyScrollLock.enableBodyScroll(targetElement);


    // 1) need to target the button via the $
    $('.gn-trigger').on('click', function(e){
        e.preventDefault();
        // Act on the event (e) 'on-click'
        // Test on console.log
        // console.log('I have been clicked');
        // Create class for burger

        // $(this).toggleClass('is-active');
        // Adds the 'is-active' class in Inspector when you select it. 
        // Change the styles in CSS for 'is-active' to animate the transition from a burger stack to an X for example.

        // If statement instead: 
        if($(this).hasClass('is-active')) {

            $(this).removeClass('is-active');
            $('.gn').slideUp();
            bodyScrollLock.enableBodyScroll(targetElement);
        // When the burger menu is closed, users are allowed to scroll, ENABLEBODYSCROLL

        } else {

        // 'this' is the 'gn-trigger'
        // If the 'is-active' class is there, remove it (.removeClass)
        // Adding this is for the secondary click when the burger menu is OPENED

            $(this).addClass('is-active');
        // If the 'is-active' class is not there, add it (.addClass)
        // More intuitive than the CSS styles by itself for transition animation

            $('.gn').slideDown();
        // For the .gn, slide it down when the burger menu becomes active (addClass('is-active'))
        // for .slideDown(), the default is 400 when left blank. you can modify it as needed for the # of seconds to animate and release the .gn

            bodyScrollLock.disableBodyScroll(targetElement);
        // When the menu is open and active, we don't want them to scroll anymore -> add the DISABLEBODYSCROLL line
        }
    });

    // 3a) Test and begin adjusting for Hiding/Revealing the Header

    $(window).resize(function() {
        windowWidth = $('body').width();
        // console.log(windowWidth);
        if(windowWidth > 676 && $('.gn-trigger').hasClass('is-active')) {
            // If the screen is greater than 676px wide
            setTimeout(function(){
                $('.gn-trigger').removeClass('is-active');
                $('.gn').slideUp(0);
            }, 200);
            // Added this to provide smoother transition from larger to smaller screen sizes for burger menu closing 
            // $('.gn-trigger').removeClass('is-active')
            // $('.gn').slideUp();
            bodyScrollLock.enableBodyScroll(targetElement);
            // Don't want to repeat this for dryness for JS optimization
        }
    });
});

// ------ Animate On Scroll (AOS) Library -------- //
// https://michalsnik.github.io/aos/
AOS.init({
    duration: 1200
});

// ------ Medium Zoom Library ---------- //
// https://medium-zoom.francoischalifour.com/
mediumZoom('.zoom-forestgreen', {
    background: 'rgba(48, 76, 28, 0.8)',
    margin: 15
});
mediumZoom('.zoom-darkmodelist', {
    background: 'rgba(41, 44, 53, 0.8)',
    margin: 15
});
mediumZoom('.zoom-cafebrown', {
    background: 'rgba(96, 67, 48 0.8)',
    margin: 15
});
