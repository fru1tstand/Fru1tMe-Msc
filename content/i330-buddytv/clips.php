<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

$body = <<<HTML
<div class="container">
	<div class="sub-nav">
		<a href="#" class="active">TRENDING</a>
		<a href="#">TOP</a>
		<a href="#">MOST RECENT</a>
	</div>
	
	<div class="cards-list">
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_600100404_1_98_65_0_/-game-of-thrones--se.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="https://www.youtube.com/watch?v=N6sobj8azzQ">'Game of Thrones' Clips Reveal Bad Starts for Sansa, Cersei and Dany</a>
				<div class="sub-paragraph">Game of Thrones is less than two weeks away from debuting season 6, with excitement building every day.</div>
				<a href="https://www.youtube.com/watch?v=N6sobj8azzQ">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505897142_1_90_65_-1_/gameofthrones-jonsno.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="https://www.youtube.com/watch?v=Gfmt5y8jfeQ">Game of Thrones Season 6: Event Promo (HBO)</a>
				<div class="sub-paragraph">Subscribe to the Game of Thrones YouTube: http://itsh.bo/10qIOan</div>
				<a href="https://www.youtube.com/watch?v=Gfmt5y8jfeQ">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505898254_1_90_65_-1_/game-of-thrones-seas.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="https://www.youtube.com/watch?v=EI0ib1NErqg">Game of Thrones Season 6: Trailer #2 (HBO)</a>
				<div class="sub-paragraph">Subscribe to the Game of Thrones YouTube: http://itsh.bo/10qIOan</div>
				<a href="https://www.youtube.com/watch?v=EI0ib1NErqg">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505900049_1_90_65_-1_/gots6threeclips.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="">10 Things You Didn't Knoiw about Game of Thrones</a>
				<div class="sub-paragraph">The sixth season of HBO's smash hit Game of Thrones begins in April 2016, with fans eager for the return of one of the most ...</div>
				<a href="#">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505900052_1_90_65_-1_/tv-20characters-20wh.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Games Of Thrones Season 6 Trailer 2 Breakdown</a>
				<div class="sub-paragraph">Game Of Thrones Season 6 Trailer 2. Sansa Stark vs Ramsay Bolton, Jon Snow Dead Body, Tyrion Lannister vs Daenerys ...</div>
				<a href="#">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Clips")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF THRONES CLIPS")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
		->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 5)
		->render();
