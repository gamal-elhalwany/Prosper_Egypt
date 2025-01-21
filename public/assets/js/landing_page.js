$(function () {

  // Playing Main Slider Videos Function.
  const items = $('.slider-item, .separator');
  let currentIndex = 0;

  function playNext() {
    const currentItem = items.eq(currentIndex);

    // Hide the previous item and show the current item
    items.hide();
    currentItem.show();

    if (currentItem.is('video')) {
      const video = currentItem[0]; // Access the video DOM element
      video.play();

      // Move to the next item when the video ends
      video.onended = () => {
        currentIndex = (currentIndex + 1) % items.length;
        playNext();
      };
    } else {
      // If it's not a video (e.g., separator), use a timeout to move to the next item
      setTimeout(() => {
        currentIndex = (currentIndex + 1) % items.length;
        playNext();
      }, 300); // 3 mil-second for the separator.
    }
  }

  // Start the slider
  playNext();

  // Change the navbar display status of home page.
  $(window).on('scroll', function () {
    if ($(this).scrollTop() >= 100) {
      $('body.home .navbar').css({
        'position': 'fixed',
        'top': '0',
        'left': '0',
        'width': '100%',
        'background-color': '#fff',
        'box-shadow': '15px 0px 25px rgba(0, 0, 0, 0.5)',
        'z-index': 99999999999999999n,
      });

      $('.logo-title > p:first-child').css('color', 'black');
      $('.logo-title > p:last-child').css('color', 'black');
      $('body.home .navbar .navbar-nav .nav-item a').css('color', 'black');
    } else {
      $('body.home .navbar').css('position', 'absolute').css('background-color', 'transparent')
        .css('box-shadow', '0 0 0 rgba(0, 0, 0, 0)');
      $('body.home .logo-title > p:first-child').css('color', 'white');
      $('body.home .logo-title > p:last-child').css('color', 'white');
      $('body.home .navbar .navbar-nav .nav-item a.nav-link').css('color', 'white');

      $('body.home .navbar').on('mouseenter', function () {
        $(this).css({
          'background-color': '#fff',
          'box-shadow': '15px 0px 25px rgba(0, 0, 0, 0.5)',
        });

        $('body.home .navbar .navbar-nav .nav-item a').css('color', 'black');

        $('body.home .logo-title > p:first-child').css('color', '#000');
        $('body.home .logo-title > p:last-child').css('color', '#000');
        $('body.home .navbar .navbar-nav .nav-item a.nav-link').css('color', '#000');
      });

      $('body.home .navbar').on('mouseleave', function () {
        $(this).css({
          'background-color': 'transparent',
          'box-shadow': '0 0 0 rgba(0, 0, 0, 0)',
        });

        $('body.home .navbar .navbar-nav .nav-item a').css('color', 'black');

        $('body.home .logo-title > p:first-child').css('color', '#FFF');
        $('body.home .logo-title > p:last-child').css('color', '#FFF');
        $('body.home .navbar .navbar-nav .nav-item a.nav-link').css('color', '#FFF');
      });
    }
  });

  $('footer .navigation-list > li').hover(
    function () {
      $(this).children('span')
        .css({ left: 0, display: 'inline-block' })
        .css({ color: '#03846E' })
        .animate({ left: 20 }, 200);
      $(this).children('a').css({ color: '#03846E' });
    },
    function () {
      $(this).children('span')
        .animate({ left: 0 }, 400, function () {
          $(this).hide();
        });
      $(this).children('a').css({ color: '#959595' });
    }
  );

});
