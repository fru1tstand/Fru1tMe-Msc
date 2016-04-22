<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

/**
 * forum.php
 */
$body = <<<HTML
<div class="container">
	<div class="sub-nav">
		<a href="#" class="active">MOST RECENT</a>
		<a href="#">MOST COMMENTED</a>
	</div>
	
	<div class="cards-list">
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505905143_1_90_65_-1_/gotseason7renewal.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="/i330-buddytv/forum/predicting-the-9-biggest-moments-of-game-of-thrones-season-6">Predicting the 9 biggest Moments of Game of Thrones Season 6</a>
				<div class="sub-line">[2 minutes ago] Calling it now - Dany will not be leaving Essos in Season 6. There's not not enough time. Dany needs to be wiser - I think that that's where the new Dothraki plot line is headed. She needs to learn that ruling is more than dictating your wants.</div>
				<div class="sub-line">[2 minutes ago] Here's my prediction: Sansa's pregnant.</div>
				<div class="sub-line">[3 minutes ago] I like this list! Lots of cool ideas! What do you guys think of this? 1 Jon Snow's Funeral. Savos, Mel and Jon's loyal friend are all gonna talk some sense</div>
				<div class="sub-line">[5 minutes ago] "All the plot threads (yes, even the boring Greyjoy ones)" - What did he mean by this?</div>
				<a href="/i330-buddytv/forum/predicting-the-9-biggest-moments-of-game-of-thrones-season-6">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505896585_1_90_65_-1_/gots6premieresynoips.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="#">Did Prince Rhaegar know...</a>
				<div class="sub-line">[2 minutes ago] <a href="/i330-buddytv/games/game-of-draw">Come play Game of Draw with me!</a></div>
				<div class="sub-line">[4 minutes ago] Who else do you think would make a similar King? Someone who believes in the Others. Someone who's met them. Someone who's beat one of them. I wonder if such a guy is still alive.</div>
				<div class="sub-line">[10 minutes ago] I like the implications of that theory. He may not have done it willingly but let by one of his dragon dreams/visions. And it could also be a hint why jon snow is going to survive. Maybe the Jon Snow theory is not at all only wishful thinking.</div>
				<div class="sub-line">[13 minutes ago] It's said that rhaegar was really into prophecy so this wouldn't be surprising if he had this planned all along</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		<div class="card">
			<div class="image">
				<img src="http://images.buddytv.com/btv_2_505890374_1_90_65_-1_/kelly-rutherford-gg-.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="#">[NO SPOILERS] Game of Thrones intro done entirely with paper</a>
				<div class="sub-line">[2 minutes ago] Shouldn't the towers be going up instead of collapsing?</div>
				<div class="sub-line">[5 minutes ago] Definitely saw plenty of wood, foam core board, and glue in that making-of. So "entirely with paper" is giving them too much credit.</div>
				<div class="sub-line">[5 minutes ago] Every time I see something like this I wonder how the hell people have time to do all this. And even if you have time, how can you not find other things more worthwhile or fun? :P</div>
				<div class="sub-line">[6 minutes ago] GIFV link // FAQ</div>
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
				<img src="http://images.buddytv.com/btv_2_505874713_1_90_65_-1_/ironfist.jpg" />
				<div class="type">FORUM</div>
			</div>
			<div class="content">
				<a class="title" href="#">I'm trying to compile a list of references to a certain dead character</a>
				<div class="sub-line">[3 minutes ago] One thing I noticed from my commentary-watch (not this, somehow) is that sometimes the episodes are rearranged in editing and scenes are moved from one episode to another. It's possible that the missing references were written for the episodes you listed, but moved to another for whatever reason.</div>
				<div class="sub-line">[5 minutes ago] This post has a limited show scope, which means comments about any events inside the posted limit do not need spoiler tags. Major theories are not covered and should be tagged green.</div>
				<div class="sub-line">[5 minutes ago] Interesting. It seems that in the four episodes you mentioned were all pretty important and jam packed with content.</div>
				<div class="sub-line">[6 minutes ago] Might've just been a bit of an exaggeration. Still 46 of 50 episodes is pretty damn close.</div>
				<a href="#">Read more <i class="fa fa-angle-double-right"></i></a>
			</div>
		</div>
		
	</div>
</div>
HTML;


\fmmsc\template\i330\BuddyTvTemplate::createContent()
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Forum")
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
	->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "GAME OF THRONES FORUM")
	->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 2)
	->render();
