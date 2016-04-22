<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

$body = <<<HTML
<div class="container">
	<div class="sub-nav">
		<a href="#" class="active">TRENDING</a>
		<a href="#">TOP</a>
		<a href="#">MOST RECENT</a>
	</div>
	
	<div class="games-list">
		<a class="game" href="/i330-buddytv/games/game-of-draw">
			<img src="http://images.buddytv.com/btv_2_505898254_1_90_65_-1_/game-of-thrones-seas.jpg" />
			<div class="title">Game of Draw</div>
		</a>
		<a class="game" href="#">
			<img src="http://images.buddytv.com/btv_2_505900052_1_90_65_-1_/tv-20characters-20wh.jpg" />
			<div class="title">Jeopardy</div>
		</a>
		<a class="game" href="#">
			<img src="http://images.buddytv.com/btv_2_505900049_1_90_65_-1_/gots6threeclips.jpg" />
			<div class="title">Wheel of Thrones</div>
		</a>
		<a class="game" href="#">
			<img src="http://images.buddytv.com/btv_2_505897142_1_90_65_-1_/gameofthrones-jonsno.jpg" />
			<div class="title">Jeopardy</div>
		</a>
		
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Games")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF THRONES GAMES")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
		->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 4)
		->render();
