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
				<img src="http://images.buddytv.com/btv_2_505905143_1_90_65_-1_/gotseason7renewal.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="#">Predicting the 9 biggest Moments of Game of Thrones Season 6</a>
				<div class="sub-line">[2 minutes ago] Calling it now - Dany will not be leaving Essos in Season 6. There's not not enough time. Dany needs to be wiser - I think that that's where the new Dothraki plot line is headed. She needs to learn that ruling is more than dictating your wants.</div>
				<div class="sub-line">[2 minutes ago] Here's my prediction: Sansa's pregnant.</div>
				<div class="sub-line">[3 minutes ago] I like this list! Lots of cool ideas! What do you guys think of this? 1 Jon Snow's Funeral. Savos, Mel and Jon's loyal friend are all gonna talk some sense</div>
				<div class="sub-line">[5 minutes ago] "All the plot threads (yes, even the boring Greyjoy ones)" - What did he mean by this?</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505900757_1_90_65_-1_/obama-20kerry-20wash.jpg" />
				<div class="type">GAMES</div>
			</div>
			<div class="content">
				<a class="title" href="#">Game of Draw</a>
				<div class="sub-line"><a href="#">Duncan Andrew</a> Achieved rank 30!</div>
				<div class="sub-line"><a href="#">Duncan Andrew</a> beat <a href="#">Kodlee Yin</a> by 415 points last round.</div>
				<div class="sub-line"><a href="#">Kodlee Yin</a> bought 450 energy and is ready to keep playing.</div>
				<a href="#">Play now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
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
				<img src="http://images.buddytv.com/btv_2_505900049_1_90_65_-1_/gots6threeclips.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="#">8 Low-Key characters You Should Be Crushing On</a>
				<div class="sub-line">[2 minutes ago] Calling it now - Dany will not be leaving Essos in Season 6. There's not not enough time. Dany needs to be wiser - I think that that's where the new Dothraki plot line is headed. She needs to learn that ruling is more than dictating your wants.</div>
				<div class="sub-line">[2 minutes ago] Here's my prediction: Sansa's pregnant.</div>
				<div class="sub-line">[3 minutes ago] I like this list! Lots of cool ideas! What do you guys think of this? 1 Jon Snow's Funeral. Savos, Mel and Jon's loyal friend are all gonna talk some sense</div>
				<div class="sub-line">[5 minutes ago] "All the plot threads (yes, even the boring Greyjoy ones)" - What did he mean by this?</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_600100404_1_98_65_0_/-game-of-thrones--se.jpg" />
				<div class="type">CLIPS</div>
			</div>
			<div class="content">
				<a class="title" href="#">'Game of Thrones' Clips Reveal Bad Starts for Sansa, Cersei and Dany</a>
				<div class="sub-paragraph">Game of Thrones is less than two weeks away from debuting season 6, with excitement building every day.</div>
				<a href="#">Watch Now <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Home")
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF THRONES OVERVIEW")
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
	->render();
