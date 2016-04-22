<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

$body = <<<HTML
<div class="container">
	<div class="sub-nav">
		<a href="#" class="active">TRENDING</a>
		<a href="#">MOST RECENT</a>
	</div>
	
	<div class="cards-list">
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505898254_1_90_65_-1_/game-of-thrones-seas.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">HBO Renews 'Game of Thrones', 'Veep', and 'Silicon Valley' for 2017</a>
				<div class="sub-paragraph">Three days before HBO is premiering the new seasons of Game of Thrones, Veep and Silicon Valley, the network has renewed all three shows for additional seasons.</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505871946_1_90_65_-1_/rs-600x400-160219055.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Game of Thrones' Maisie Williams: 'It's not all fun and games'</a>
				<div class="sub-paragraph">All Maisie Williams wanted out of Game of Thrones was enough money to get a new laptop. Seven years on, she’s a fixture on the world’s biggest TV show – but it’s far from being her dream job</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_800080429_1_98_65_0_/the-13-most-eligible.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Game of Thrones’ fantasy cartographer also hates it when the TV show strays from the book</a>
				<div class="sub-paragraph">When the sixth season of Game of Thrones premieres on HBO this Sunday (April 24), one of the first thing fans will see is a camera panning across a map of Westeros, the fictional continent where the story begins. (Some may have already seen the opening credits sequence in 360-degree video.)</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505894496_1_90_65_-1_/caitlyn-jenner-s-i-a.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Why Game of Thrones' Jon Snow is probably coming back from the dead</a>
				<div class="sub-paragraph">With the sixth season of Game of Thrones premiering on Sunday, fans of both the show and the related book series are likely to soon learn the answer to a hugely important mystery — is Jon Snow, who was apparently stabbed to death at the very end of season five, really gone for good?</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_800081673_1_98_65_0_/2016-oscars--red-car.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Op-Ed 'Game of Thrones'? More like waste of time</a>
				<div class="sub-paragraph">For those who must live and work among them, the next couple of months will be a challenge. Beginning this Sunday, these loyal subjects will return to Muggleshire, or Rivenmoore or wherever it is that HBO's "Game of Thrones" is supposed to take place. Prepare yourself for loved ones and co-workers shocked, outraged and generally agitated by the imaginary things that happen in this magical land that never existed.</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505897142_1_90_65_-1_/gameofthrones-jonsno.jpg" />
				<div class="type">NEWS</div>
			</div>
			<div class="content">
				<a class="title" href="#">Game of Thrones: A Guide to Recognizing the Hunky Dothraki of Season 6</a>
				<div class="sub-paragraph">Between the heavy beards, wigs, and blinding abs, it might be a challenge differentiating these handsome new Dothraki.</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "News")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF THRONES NEWS")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
		->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 3)
		->render();
