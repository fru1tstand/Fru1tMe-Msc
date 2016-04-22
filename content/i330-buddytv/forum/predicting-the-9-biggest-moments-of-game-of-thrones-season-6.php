<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';

$body = <<<HTML
<div class="container">
	<a href="/i330-buddytv/forum" class="back-to-forum"><i class="fa fa-angle-left"></i> Back to Forums</a>
	
	<div class="thread-post">
		<div class="side">
			<img src="http://images.buddytv.com/btv_2_505905143_1_90_65_-1_/gotseason7renewal.jpg" />
			<div class="date">Posted 3 hours ago</div>
		</div>
		<div class="content">
			<p>Calling it now - Dany will not be leaving Essos in Season 6. There's just not enough time.</p>
			<p>Dany needs to be wiser - I think that that's where the new Dothraki plot line is headed. She needs to learn that ruling is more than dictating your wants. She could have learned this lesson with Tyrion, as he's less of a sycophant than the others in her court (he's not blindly in love with her/what she represents, nor is he afraid of her).</p>
			<p>Once Dany learns to be a better ruler, then she can be set up to return to Westeros. But that takes planning. Jorah noted that the Westerosi lords will side with whoever they think will win. We need to wait for the conditions in Westeros to deteriorate further - a falling out between the Lannisters and Tyrells is a good start.</p>
			<p>For another thing, I know that Dany's storyline seems to stagnate in the shows, and so people are eager to leave Essos behind, but the continent is so damned interesting. Guess what, Dany? All of the Free Cities (bar Braavos) practice slavery. How's about you liberate them and give us more of taste of Essos?</p>
			<p>Long story short, Dany won't be leaving Essos this season. At best, we'll see her beginning preparations to retake the Iron Throne. But hey, who knows who's coming across the Narrow Sea to find her (hint hint Iron Born)....</p>
		</div>
		<div class="report-label-container"><label class="report-label" for="report-form-controller">Report</label></div>
	</div>
	
	<input class="controller" type="checkbox" id="report-form-controller" />
	<div class="report-form">
		<div class="report-form-title">Report this Thread</div>
		<div class="left">
			<div>Please check all that apply</div>
			<div><input type="checkbox" id="asdf-1" /> <label for="asdf-1">Abusive Content</label></div>
			<div><input type="checkbox" id="asdf-2" /> <label for="asdf-2">Rule Breaking Content</label></div>
			<div><input type="checkbox" id="asdf-3" /> <label for="asdf-3">Incorrectly Marked Content (Spoilers)</label></div>
			<div><input type="checkbox" id="asdf-4" /> <label for="asdf-4">Other</label></div>
		</div>
		<div class="right">
			<textarea placeholder="Describe the issue..."></textarea>
		</div>
		<div class="righter">
			<label for="report-form-controller">Cancel</label>
			<a href="/i330-buddytv/forum">Report</a>
		</div>
	</div>
	
	<div class="reply-thread">
		<textarea placeholder="Reply to Thread..."></textarea>
		<button type="button">Reply</button>
	</div>
	<div class="cards-list thread-responses">
		<div class="card">
			<div class="username">importantgoat</div>
			<div class="content">I have a feeling there's a chance she gets the Dothraki on her side this season? And maybe they help her in Westeros later on (like her original plan with Khal Drogo)?</div>
			
			<div class="card">
				<div class="username">ProssiblyNot</div>
				<div class="content">
					<p>It's possible, but it'd be hard to pull off. The Dothraki have their rules about what happens to khaleesis who become widowed. They are supposed to return to Vaes Dothrak and live out their lives as wise women, counseling and guiding the Dothraki.</p>
					<p>Dany has shown generally shown little regard for customs that disagree with her own. This is one source of frustration for some fans. It's like pulling teeth to get her to reconsider some of her decisions (i.e. Allowing former slaves to enter a contract with former masters, reopening the fighting pits, allowing the crucified masters to be humanely buried).</p>
					<p>If Dany gets control of a new khalasar, it'll be more of her frustrating behavior, overturning traditions that aren't agreeable. I think that the best way to handle her predicament is to somehow get the Dothraki to agree to let her go - maybe introduce something like a Trial By Combat to this highly combative people. Jorah or Daario could be her champion. So</p>
				</div>
				
				<div class="card">
					<div class="username">I_AM_DB_Cooper__AMA</div>
					<div class="content">Let that big-ass dragon be her champion.</div>
					
					<div class="card">
						<div class="username">ProssiblyNot</div>
						<div class="content">That would be like Aerys declaring fire to be his champion when Rickard Stark demanded a trial by combat.</div>
					</div>
					
				</div>
				
				<div class="card">
					<div class="username">importantgoat</div>
					<div class="content">I agree completely. I feel that dragons are possibly the convincing factor since literally NONE of them have seen them before. (Reminiscent of when her remaining Khalasar in season 1/book 1&2 stayed with her because they saw her emerge from the flames). Dragons tend to make the masses forget about logic or her leadership skills and... Dare I say bend the knee??</div>
				</div>
			</div>
			
			<div class="card">
				<div class="username">ZeroTheCat</div>
				<div class="content">
					<p>I completely agree on Dany. Having her in Westeros for probably a few episodes this season, would dull the impact I think, of finally see her in the iconic locations of the West in a final season. Unless they end it with her on her way across the sea, riding her dragons with some other company.</p>
					<p>I really do hope they resolve some of the political conflict in the show as far as Essos is concerned, but also don't water it down as much as they have. Part of the reason I find that storyline so compelling is because of how out of depth she is. In the show it just seems like most things are out of her control. The books show HOW MUCH her politics get her in the trouble she's in, and is a brilliant complex look at various power dynamics in play, in a clash of cultures essentially.</p>
				</div>
			</div>
		</div>
		
		<div class="card">
			<div class="username">Cheimon</div>
			<div class="content">Here's my prediction: Sansa's pregnant.</div>
			
			<div class="card">
				<div class="username">Cheimon</div>
				<div class="content">That would be an amazing development.</div>
			</div>
		</div>
	</div>
</div>
HTML;

\fmmsc\template\i330\BuddyTvTemplate::createContent()
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_TITLE, "Forum")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_SUB_TITLE, "Predicting The 9 Biggest Moments of Game of Thrones Season 6")
		->with(\fmmsc\template\i330\BuddyTvTemplate::FIELD_BODY, $body)
		->with(\fmmsc\template\i330\BuddyTvTemplate::OPTION_TAB, 2)
		->render();
