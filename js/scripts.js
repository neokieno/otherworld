// window.cookieconsent.initialise({
//   "palette": {
//     "popup": {
//
//       "background": "#293636",
//       "text": "#f9d162"
//     },
//     "button": {
//
//        "background": "#ffedbf",
//       "text": "#293636"
//     }
//   },
//   "content": {
//     "message": "This website uses cookies and tracking tags. By continuing you are agreeing to our",
//     "link": "privacy policy",
//     "href": "https://WEBSITE.com/privacy"
//   }
// });

// NEWSLETTER
$("#newsletterForm").submit(function(e) {
  e.preventDefault();
  fieldEmail = $( "#fieldEmail" ).val();
  url = "/campaignmonitor/add.php";
  isValid = (/^([\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+\.)*[\w\!\#$\%\&\'\*\+\-\/\=\?\^\`{\|\}\~]+@((((([a-z0-9]{1}[a-z0-9\-]{0,62}[a-z0-9]{1})|[a-z])\.)+[a-z]{2,6})|(\d{1,3}\.){3}\d{1,3}(\:\d{1,5})?)$/i).test(fieldEmail);

  if (isValid === true) {
    // Send the data using post
    $.post( url, { EmailAddress: fieldEmail })

    .done(function( data ) {
      result = jQuery.parseJSON( data );
        if (result.ErrorCode === 201) {
            $( "#fieldEmail" ).val("thank you!");
        } else {
          $( "#fieldEmail" ).val( "sorry, please try again." );
        }
    }, "json");
  } else {
    $( "#fieldEmail" ).val( "invalid email address" );
  }
});


// BIO POPUP
async function loadJSON(url) {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        const data = await response.json();
        return data;
    } catch (error) {
        console.error('Error loading JSON:', error);
    }
}
  (async function() {
    const fetchArray = await loadJSON('/inc/cast-array.json?v=1');
    $('.cast-member').on("click", function () {
      var i = Number($(this).data("index"));
      $.magnificPopup.open({
        key: 'cast-popup',
    		type: 'inline',
        items: fetchArray,
    		closeMarkup: '<button title="%title%" type="button" class="mfp-close"><img src="/images/_icons/close.png" style="width:27px"></button><div class="bottom-fade"></div>',
        closeBtnInside: false,
    		fixedBgPos: true,
    		fixedContentPos: true,
        allowHTMLInTemplate: true,
        inline: {
        // Define markup. Class names should match key names.
        markup:
          '<div id="viewCastBio" class="modal cast-popup-row" role="dialog"><div id="castpopup-img-thumb" class="cast-thumb"><div id="cast-popup-img" class="mfp-headshot"></div></div><div class="cast-popup-content"><h3 id="cast-popup-name" class="mfp-name"></h3><span id="cast-popup-role" class="mfp-role"></span><br /><div class="divider"></div><p id="cast-popup-about" class="mfp-bio"></p></div></div>'
        },
          gallery: {
          enabled: true
        },
        callbacks: {
          markupParse: function(template, values, item) {
            // optionally apply your own logic - modify "template" element based on data in "values"
            console.log('Parsing:', template, values, item);
          }
        }
      },i)
  });
  $('.mfp-wrap').append('<div class="bottom-fade"></div>');
})();

(async function() {
  const fetchArray = await loadJSON('/inc/creative-array.json');
  $('.creative-member').on("click", function () {
    var i = Number($(this).data("index"));
    $.magnificPopup.open({
      key: 'creative-popup',
      type: 'inline',
      items: fetchArray,
      closeMarkup: '<button title="%title%" type="button" class="mfp-close"><img src="/images/_icons/close.png" style="width:27px"></button><div class="bottom-fade"></div>',
      closeBtnInside: false,
      fixedBgPos: true,
      fixedContentPos: true,
      allowHTMLInTemplate: true,
      inline: {
      // Define markup. Class names should match key names.
      markup:
        '<div id="viewCastBio" class="modal cast-popup-row" role="dialog"><div class="cast-popup-content"><h3 id="cast-popup-name" class="mfp-name"></h3><span id="cast-popup-role" class="mfp-role"></span><br /><div class="divider"></div><p id="cast-popup-about" class="mfp-bio"></p></div></div>'
      },
        gallery: {
        enabled: true
      },
      callbacks: {
        markupParse: function(template, values, item) {
          // optionally apply your own logic - modify "template" element based on data in "values"
          console.log('Parsing:', template, values, item);
        }
      }
    },i)
});
$('.mfp-wrap').append('<div class="bottom-fade"></div>');
})();

  // MODAL POPUP
  $('.popup-youtube').magnificPopup({type:'iframe'});
	$('.popup-nav').magnificPopup({
		type: 'inline',
		closeMarkup: '<button title="%title%" type="button" class="mfp-close"><img src="/images/_icons/close.png" style="width:47px"></button>',
		fixedBgPos: true,
		fixedContentPos: true,
		closeOnContentClick: true
	})
	$('.popup-modal').magnificPopup({
		type: 'inline',
		closeMarkup: '<button title="%title%" type="button" class="mfp-close"><img src="/images/_icons/close.png" style="width:47px"></button>',
		fixedBgPos: true,
		fixedContentPos: true
	});

	// $(document).on('click', '.mfp-close', function (e) {
	// 	e.preventDefault();
	// 	// $.magnificPopup.close();  DOING THIS WILL CAUSE PROBLEMS FOR OTHER POPUPS
	// 	$('html').css('overflow', 'auto');
  //   $('.mfp-bg').hide();
  //   $('.mfp-wrap').hide();
  //   // $('.creative-member').css('color', '');
	// })
	$(".popup-modal").on("click", function () {
		// $('body').css('overflow', 'hidden');
	});
  $(".hamburger").on("click", function () {
    $(".hamburger").toggleClass('active');
    $(".mobilenav").toggleClass('open');
    $("html").toggleClass('noscroll');
  })
  $(".mobilenav a").on("click", function () {
    $(".hamburger").toggleClass('active');
    $(".mobilenav").toggleClass('open');
    $("html").toggleClass('noscroll');
  })

$(document).ready(function() {
  $(window).scroll(function() {
      $('.animate').each(function() {
          var offset = 50;
          var elementTop = $(this).offset().top;
          var windowTop = $(window).scrollTop();
          var windowBottom = windowTop + $(window).height();
          if (windowBottom > (elementTop + offset)) {
              $(this).addClass('active');
          } else {
              $(this).removeClass('active');
          }
      });
      $('.load').each(function() {
        var offset = 120;
        var elementTop = $(this).offset().top;
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + $(window).height();
        if (windowBottom > (elementTop + offset)) {
            $(this).addClass('active');
        }
    });
  });
});

/*
 *   TABS
 */
$('.tabcontent').hide();
$('#tabpanel-1').css("display","flex");


function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  $('.tabcontent').hide();

  // Get all elements with class="tablinks" and remove the class "active"
  $('.tablinks').removeClass('active');

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "flex";
  evt.currentTarget.className += " active";
}