<footer>
	<section class="container" id="signup">
		<div class="hand animate"><h4 class="dark"><span>DON’T SLEEP ON<br class="mobile"> EXCLUSIVE SHOW UPDATES</span></h4></div>
		<form class="js-cm-form" id="newsletterForm" method="post">
			<div class="newsletter">
				<div class="input"><input placeholder="your email address here" autocomplete="Email" aria-label="Email" class="js-cm-email-input qa-input-email" id="fieldEmail" maxlength="200" name="cm-jkillhy-jkillhy" required="" type="email"></div>
				<div class="submit"><button id="SUBMIT" class="signup dark-button" alt="submit" type="submit">SUBMIT</button></div>
				<input id="cm-privacy-consent-hidden" name="cm-privacy-consent-hidden" type="hidden" value="true">
				<!-- <div class="checkbox flex-break"><input aria-required="" id="cm-privacy-consent" name="cm-privacy-consent" required="" type="checkbox"><label for="cm-privacy-consent">I agree to be emailed</label></div> -->
			</div>
		</form>
	</section>

	<div class="container">
		<div><p style="margin-bottom: .4em;">The Newman Mills Theater<br>at the Robert W. Wilson MCC Theater Space<br>511 W 52nd ST<br>New York, NY 10019</p>
			<div class="flex" style="font-family:'Agenda', sans-serif;font-weight: 700;justify-content: center;gap: 8px; margin-bottom:0;height: 1em;">
				<svg viewBox="0 0 13 18" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" style="height: 1em;"><title>map icon</title><path id="Vector" d="M6.50001 5.40137C5.59303 5.40137 4.86047 6.16094 4.86047 7.10137C4.86047 8.04179 5.59303 8.80137 6.50001 8.80137C7.40699 8.80137 8.13954 8.04179 8.13954 7.10137C8.13954 6.16094 7.40699 5.40137 6.50001 5.40137Z" fill="currentColor"/><path id="Vector_2" d="M6.5 0.699219C3.18605 0.699219 0.5 3.91837 0.5 7.82475C0.5 11.6226 5.80233 17.229 6.01163 17.4822C6.15116 17.6269 6.32558 17.6992 6.5 17.6992C6.67442 17.6992 6.84884 17.6269 6.98837 17.4822C7.19767 17.229 12.5 11.6226 12.5 7.82475C12.5 3.91837 9.81395 0.699219 6.5 0.699219ZM6.5 10.212C4.82558 10.212 3.5 8.80135 3.5 7.10135C3.5 5.40135 4.86047 3.99071 6.5 3.99071C8.13953 3.99071 9.5 5.40135 9.5 7.10135C9.5 8.80135 8.17442 10.212 6.5 10.212Z" fill="currentColor"/></svg>
				<a href="https://maps.app.goo.gl/Y1MHxxFKNFQu1V2E6" target="_blank"><span>MAP IT</span></a>
			</div>
		</div>
		<a href="https://todaytix.com/" target="_blank" class="dark todaytix">POWERED BY<br><img src="images/ttx_logo_horizontal_color 2.svg" alt="TodayTix"></a>
		<div class="end">
			<span>© <?= date('Y') ?>&nbsp;All Nighter.</span>
			<span>All Rights Reserved.</span>
			<a href="/privacy" target="_blank">Privacy Policy</a>
		</div>
	</div>
</footer>

<!-- MODAL -->
<!-- <div id="viewCastBio" class="modal mfp-hide cast-popup-row" role="dialog">
	<div id="castpopup-img-thumb" class="cast-thumb"><img id="cast-popup-img" src="" alt=""></div>
	<div class="cast-popup-content">
		<h3 id="cast-popup-name" class="mfp-name"></h3>
		<span id="cast-popup-role" class="mfp-role"></span><br />
		<div class="divider"></div>
		<p id="cast-popup-about" class="mfp-bio"></p>
	</div>
</div> -->

<!-- CONSENT CONTAINER -->
<div id="consent-container-modal" class="consent-container-modal">
  <div class="consent-form">
    <div>
      <div class="heading">Your experience matters</div>
    </div>
    <div>
      <p>We use cookies to personalise your experience, including improving the quality of your show recommendations. By clicking &quot;accept all&quot;, you consent to our cookie policy.</p>
    </div>
    <div class="flex">
      <a id="consent-btn-reject" href="#" class="consent-button">Reject all</a>
      <a id="consent-btn-accept" href="#" class="consent-button consent-button-primary">Accept all</a>
    </div>
      <a id="consent-btn-options" href="#">More Options</a>
  </div>
</div>
<div id="target-container" class="target-container"></div>

<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="/js/jquery.magnific-popup.min.js"></script>
<script src="/js/scripts.js?v=1.6"></script>
</body>
</html>
