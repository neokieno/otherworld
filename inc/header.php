<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />

	<title>ALL NIGHTER | OFF-BROADWAY | Official Site</title>
  <meta name="description" content="Don't miss this star-studded dark comedy. Performances begin Off-Broadway February 25, 2025. Get tickets."/>
  <meta name="keywords" content="all nighter, kristine froseth, kathryn gallagher, julia lester, havana rose liu, alyah chanelle scott, natalie margolin, jaki bradley, mcc theater, newman mills theatre, nyc, broadway, off-broadway, play, plays, NYC, new york city, new york, tickets"/>

	<meta property="og:url" content="https://allnighterplay.com/" />
  <meta property="og:title" content="ALL NIGHTER | Official Website" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="/images/AN_FB_Share.jpg"/>
  <meta property="og:site_name" content="ALL NIGHTER | Official Website"/>
  <meta property="og:description" content="Don't miss this star-studded dark comedy. Performances begin Off-Broadway February 25, 2025. Get tickets." />
  <meta name="facebook-domain-verification" content="gc098ek5ggo1241cef1cxya768scop" />

	<link rel="icon" type="image/png" href="/images/_icons/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/images/_icons/favicon.svg" />
  <link rel="shortcut icon" href="/images/_icons/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/images/_icons/apple-touch-icon.png" />
  <link rel="manifest" href="/images/_icons/site.webmanifest" />

	<!-- Agenda Adobe Font -->
	<link rel="stylesheet" href="https://use.typekit.net/bfi7vbf.css">

	<!-- CSS -->
	<link rel="stylesheet" href="/css/global.css?v=1.3" />
	<link rel="stylesheet" href="/css/magnific-popup.css?v=1" />
	<link rel="stylesheet" href="/css/main.css?v=1.5" />
	<link rel="stylesheet" href="/css/cast.css?v=1.3" />
  <link rel="stylesheet" href="/css/animations.css?v=1.2" />
	<link rel="stylesheet" href="/css/consent.css?v=1" />

	<!-- Segment Snippet -->
  <script>
    !function(){var i="analytics",analytics=window[i]=window[i]||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","screen","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware","register"];analytics.factory=function(e){return function(){if(window[i].initialized)return window[i][e].apply(window[i],arguments);var n=Array.prototype.slice.call(arguments);if(["track","screen","alias","group","page","identify"].indexOf(e)>-1){var c=document.querySelector("link[rel='canonical']");n.push({__t:"bpc",c:c&&c.getAttribute("href")||void 0,p:location.pathname,u:location.href,s:location.search,t:document.title,r:document.referrer})}n.unshift(e);analytics.push(n);return analytics}};for(var n=0;n<analytics.methods.length;n++){var key=analytics.methods[n];analytics[key]=analytics.factory(key)}analytics.load=function(key,n){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.setAttribute("data-global-segment-analytics-key",i);t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var r=document.getElementsByTagName("script")[0];r.parentNode.insertBefore(t,r);analytics._loadOptions=n};analytics._writeKey="4wryWtAE16J55r77EwEIYpAx15Grjuv0";;analytics.SNIPPET_VERSION="5.2.0";
    analytics.load("4wryWtAE16J55r77EwEIYpAx15Grjuv0");
    analytics.page();
    }}();
  </script>

<!-- Consent Manager -->
<script>
window.consentManagerConfig = function (exports) {
  var React = exports.React;
  var inEU = exports.inEU;
  // Define custom categories
  var categories = {
    Marketing: {
      title: 'Marketing',
      integrations: [
        'Google Analytics 4 Web',
        'Indicative',
        'Iterable',
        'Hotjar',
      ],
      purpose:
        'To understand user behavior in order to provide you with a more relevant browsing experience or personalize the content on our site.\n' +
        'For example, we collect information about which pages you visit to help us present more relevant information.',
    },
    Advertising: {
      title: 'Advertising',
      integrations: [
        'Google Tag Manager',
        'Facebook Pixel',
        'Personas Facebook Custom Audiences',
      ],
      purpose:
        'To personalize and measure the effectiveness of advertising on our site and other websites. For example, we may serve you a personalized ad based on the pages you visit on our site.',
    },
  };
  var cancelDialogContent =
    'Your preferences have not been saved. By continuing to use our website, you՚re agreeing to our Website Data Collection Policy.';
  function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/;domain=.allnighterplay.com";
  }
  function getCookie(name) {
    // Create a regular expression to find the cookie
    var nameEQ = name + '=';
    var ca = document.cookie.split(';'); // Split the cookie string into individual cookies
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) === ' ') c = c.substring(1, c.length); // Trim leading whitespace
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length); // Extract and return the cookie value
    }
    return null; // Return null if the cookie is not found
  }
  const stripCookiePrefix = (cookieValue) => {
    if (cookieValue) {
      const firstPeriodIndex = cookieValue.indexOf('.');
      const secondPeriodIndex = cookieValue.indexOf('.', firstPeriodIndex + 1);
      return cookieValue.substring(secondPeriodIndex + 1);
    }
    return '';
  };
  var currentCookieValue = getCookie('tracking-preferences');
  if (inEU.isInEUTimezone() && !currentCookieValue) {
    var rejecAlltButton = document.getElementById('consent-btn-reject');
    var acceptAlltButton = document.getElementById('consent-btn-accept');
    var optionsButton = document.getElementById('consent-btn-options')
    var modal = document.getElementById('consent-container-modal');
    if (rejecAlltButton) {
      rejecAlltButton.addEventListener('click', function () {
      const rejectedConsentOject = {
            destinationPreferences: { 'Google Tag Manager': false, Indicative: false, 'Google Analytics 4 Web': false },
            customPreferences: { Marketing: false, Advertising: false, Essential: true },
          };
          window.consentManager.preferences.savePreferences(rejectedConsentOject);
        modal.style.display = 'none';
        location.reload();
      });
    } else {
      console.error('Reject button not found!');
    }
    if (acceptAlltButton) {
      acceptAlltButton.addEventListener('click', function () {
        const cookieAllValue = "{%22version%22:1%2C%22destinations%22:{%22Google%20Analytics%204%20Web%22:true%2C%22Indicative%22:true}%2C%22custom%22:{%22Marketing%22:true%2C%22Advertising%22:true%2C%Essential%22:true}}"
        const aceptedConsentOject = {
  destinationPreferences: { 'Google Tag Manager': true, Indicative: true, 'Google Analytics 4 Web': true },
  customPreferences: { Marketing: true, Advertising: true, Essential: true },
};
        setCookie('tracking-preferences', cookieAllValue, 1000);
        window.consentManager.preferences.savePreferences(aceptedConsentOject);
        modal.style.display = 'none';
        location.reload();
      });
    } else {
      console.error('Accept button not found!');
    }
    if (optionsButton) {
      optionsButton.addEventListener('click', function () {
        window.consentManager.openConsentManager();
        window.consentManager.preferences.onPreferencesSaved(() => {
          location.reload();
        });
      });
    } else {
      console.error('optionsButton not found');
    }
   modal.style.display = 'flex';
  }
 if(currentCookieValue && analytics) {
     const decodedTrackingCookie = decodeURIComponent(currentCookieValue);
     const trackingCookieObject = JSON.parse(decodedTrackingCookie);
     const advertisingConsentValue = trackingCookieObject?.custom?.Advertising;
     const marketingConsentValue = trackingCookieObject?.custom?.Marketing;
     const ad_personalization = advertisingConsentValue === true ? 'granted' : 'denied';
      analytics.page('Consent Update', {
        ad_personalization,
        ad_storage: ad_personalization,
        ad_user_data: ad_personalization,
        analytics_storage: marketingConsentValue === true ? 'granted' : 'denied',
        ga: stripCookiePrefix(getCookie('_ga')) ?? '',
      });
 }
   // if user is not in EU timezone consent update should be sent
   if (!inEU.isInEUTimezone()) {
      analytics.page('Consent Update', {
          ad_personalization:'granted',
          ad_storage: 'granted',
          ad_user_data: 'granted',
          analytics_storage: 'granted',
          ga: stripCookiePrefix(getCookie('_ga')) ?? '',
      });
   }
  return {
    container: '#target-container',
    writeKey: '8bdA6hVvq6bg1Sv8T6FQmvRYUUUgdR9s',
    shouldRequireConsent: inEU,
    bannerContent: 'Your Preferences',
    preferencesDialogTitle: 'Your Preferences',
    preferencesDialogContent: 'We track your data to improve your experience',
    cancelDialogContent: cancelDialogContent,
    customCategories: categories
  };
};
</script>
<script src="https://unpkg.com/@segment/consent-manager@5.3.0/standalone/consent-manager.js" defer=""></script>
<!-- End Consent Manager -->

</head>
<body>
<header>
	<div class="navbar">
		<div class="hamburger">
			<span class="top"></span>
			<span class="middle"></span>
			<span class="bottom"></span>
		</div>
		<!-- <nav>
		</nav> -->
    <div class="social">
      <a href="https://www.instagram.com/allnighterplay/" target="_blank"><div class="ig"></div></a>
      <a href="https://www.tiktok.com/@allnighterplay" target="_blank"><div class="tt"></div></a>
      <a href="https://x.com/allnighterplay" target="_blank"><div class="tw"></div></a>
      <a href="https://www.facebook.com/profile.php?id=61570039037608" target="_blank"><div class="fb"></div></a>
    </div>
		<a href="https://tickets.allnighterplay.com/booking/calendar/43523/2025-02" target="_blank"><button class="gettickets">GET TICKETS</button></a>
	</div>
	<div class="mobilenav">
    <nav>
		<div class="social">
      <a href="https://www.instagram.com/allnighterplay/" target="_blank"><div class="ig"></div></a>
      <a href="https://www.tiktok.com/@allnighterplay" target="_blank"><div class="tt"></div></a>
      <a href="https://x.com/allnighterplay" target="_blank"><div class="tw"></div></a>
      <a href="https://www.facebook.com/profile.php?id=61570039037608" target="_blank"><div class="fb"></div></a>
    </div>
    <a href="https://tickets.allnighterplay.com/booking/calendar/43523/2025-02" target="_blank"><button class="">GET TICKETS</button></a>
  </nav>
	</div>
</header>
