<?php require_once('inc/header.php'); ?>
<div class="alert-bar">
	<span>TICKETS ON SALE! PERFORMANCES <br class="mobile">BEGIN FEBRUARY 25, 2025</span>
</div>
<main>
	<section class="logo-container">
		<div class="mobile"><img src="/images/head_keyart_sm.jpg" alt=""></div>
		<div class="keyart"><img src="/images/head_keyart_lg.jpg" alt=""></div>
	</section>

	<section id="tickets">
		<h2 class="squiggle load fade-up">TICKET INFO</h2>
		<h4 class="subhead load fade-up">
			<span>TICKETS ON SALE NOW! PERFORMANCES BEGIN <span class="pink">FEBRUARY&nbsp;25,&nbsp;2025</span></span>
		</h4>
		<a href="https://tickets.allnighterplay.com/booking/calendar/43523/2025-02" target="_blank"><button class="pink-button load fade-up">GET TICKETS</button></a>
		<div class="container flex vertical tix-info load fade-up">
			<div>
        		<h3>Groups 8+</h3>
				<span>For group tickets, <a href="https://www.broadwayplus.com/shows/all-nighter" target="_blank">click here</a> <br class="tablet">or email <a href="mailto:groupsales@broadwayplus.com">groupsales@broadwayplus.com</a>.</span><br>
				<a href="https://www.broadwayplus.com/shows/all-nighter" target="_blank"><img src="/images/_icons/broadwayplus.png" alt="Broadway Plus" style="width:108px;margin-top:16px;"></a>
			</div>
			<div>
				<h3>
					<svg viewBox="0 0 13 18" height="100%" xmlns="http://www.w3.org/2000/svg" role="img"><title>map icon</title><path id="Vector" d="M6.50001 5.40137C5.59303 5.40137 4.86047 6.16094 4.86047 7.10137C4.86047 8.04179 5.59303 8.80137 6.50001 8.80137C7.40699 8.80137 8.13954 8.04179 8.13954 7.10137C8.13954 6.16094 7.40699 5.40137 6.50001 5.40137Z" fill="currentColor"/><path id="Vector_2" d="M6.5 0.699219C3.18605 0.699219 0.5 3.91837 0.5 7.82475C0.5 11.6226 5.80233 17.229 6.01163 17.4822C6.15116 17.6269 6.32558 17.6992 6.5 17.6992C6.67442 17.6992 6.84884 17.6269 6.98837 17.4822C7.19767 17.229 12.5 11.6226 12.5 7.82475C12.5 3.91837 9.81395 0.699219 6.5 0.699219ZM6.5 10.212C4.82558 10.212 3.5 8.80135 3.5 7.10135C3.5 5.40135 4.86047 3.99071 6.5 3.99071C8.13953 3.99071 9.5 5.40135 9.5 7.10135C9.5 8.80135 8.17442 10.212 6.5 10.212Z" fill="currentColor"/></svg>
					Location</h3>
				<span>THE NEWMAN MILLS THEATER <br class="mobile">AT THE ROBERT W. WILSON MCC&nbsp;THEATER&nbsp;SPACE<br>511 W 52ND ST NEW YORK, NY 10019</span>
			</div>
			<div>
        		<h3>Box office</h3>
				<span>Hours: Monday-Friday 12PM–6PM</span>
				<p>Beginning February 25, the Box Office will be open from 12PM until the start of each performance, every day there is a show.</p>
			</div>
		</div>
	</section>

	<section id="cast" class="container">
		<h2 class="load fade-up"><a class="tablinks active" onclick="openCity(event, 'tabpanel-1')" role="tab" aria-selected="true" aria-controls="tabpanel-1">CAST</a> / 
			<a class="tablinks" onclick="openCity(event, 'tabpanel-2')" role="tab" aria-selected="false" aria-controls="tabpanel-2" tabindex="-1">CREATIVE</a>
		</h2>
		<div class="load fade-up" role="tablist" aria-labelledby="tablist-1">
			<?php
			// Get JSON cast file
			$jsonA = file_get_contents('inc/cast-array.json');
			$cast = json_decode($jsonA,true);
			$jsonB = file_get_contents('inc/creative-array.json');
			$creative = json_decode($jsonB,true);
			?>
			<div class="cast-row tabcontent" id="tabpanel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1">
				<?php $i = 0; foreach ($cast as $member) {
					if ($member["role"] == "Understudy") break;
				?>
					<div class="cast-member" tabindex="0" data-index="<?=$i?>">
				<?php if ($member["headshot_img"]) { ?><div class="cast-thumb"><img src="/<?=$member["headshot_img"]?>" alt="<?=$member["name"]?>’s headshot"></div><?php } ?>
					<span class="cast-name"> <?=$member["name"]?></span>
				</div>
				<?php
				$i++;
				} ?>
				<h3 class="load fade-up flex-break" style="margin-top:.5em;margin-bottom:.8em;">UNDERSTUDIES</h3>
				<?php $i = 0;
					foreach ($cast as $member) {
					if ($member["role"] == "Understudy") {
					?>
					<div class="cast-member" tabindex="0" data-index="<?=$i?>">
						<?php if ($member["headshot_img"]) { ?><div class="cast-thumb"><img src="/<?=$member["headshot_img"]?>" alt="<?=$member["name"]?>’s headshot"></div><?php } ?>
						<span class="cast-name"> <?=$member["name"]?></span>
					</div>
				<?php
				}
				$i++;
				} ?>
			</div>
			<div class="cast-row tabcontent" id="tabpanel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2">
				<?php $i = 0; foreach ($creative as $member) {?>
					<div class="creative-member" tabindex="0" data-index="<?=$i?>">
				<?php if ($member["headshot_img"]) { ?><div class="cast-thumb"><img src="/<?=$member["headshot_img"]?>" alt="<?=$member["name"]?>’s headshot"></div><?php } ?>
				<span class="cast-role"> <?=$member["role"]?></span><br><span class="cast-name"> <?=$member["name"]?></span>
				</div>
				<?php
				if ($i ==1) {
					echo "<div class='flex-break'></div>";
				};
				$i++;
				} ?>
			</div>
		</div>
	</section>

	<section id="about">
		<h2 class="squiggle load fade-up">ABOUT THE SHOW</h2>
		<div class="intro load fade-up">
			<p>It’s finals week at a small liberal arts college in rural Pennsylvania. A tight-knit group of roommates pull one last all-nighter to complete their final assignments. Holed up in an old ballroom, the hours pass, the pressure mounts, the Adderall flows, and the truths that have always bound this group together are put to the test. What will be left when the sun rises?</p>
			<p>recommended for audience members 12+.</p>
		</div>
	</section>
</main>

<?php require_once('inc/footer.php'); ?>
