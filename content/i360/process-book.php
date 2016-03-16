<?php
class Images {
	private static $imgPath = "https://s3-us-west-1.amazonaws.com/fm-msc/i360/";

	public static function createCarousel(string $currentSectionId,
			string $currentSectionTitle,
			string $nextSectionId,
			string $nextSectionText,
			string... $handles) {
		$imagesHtml = "";
		foreach ($handles as $handle) {
			$url = self::$imgPath . $handle . '.gif';
			$imagesHtml .= "<a href='$url' target='_blank'><img src='$url' alt='$handle' /></a>";
		}
		echo <<<HTML
<section id="$currentSectionId">
	<div class="container">
		<h1>$currentSectionTitle</h1>
		<div class="hint">Scroll through the images to continue or click on an image to open it in a new tab.</div>
	</div>
	<div class='carousel'>
		<div class='padding'></div>
		$imagesHtml
		<div class='next-section-container'>
			<div class='aligner'></div>
			<a class='next-link' href='#$nextSectionId'>Continue To: $nextSectionText</a>
		</div>
		<div class='padding'></div>
	</div>
	<div class='container'>
		<a class='next-link' href='#$nextSectionId'>$nextSectionText</a>
	</div>
</section>

HTML;
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>INFO 360: Process Book</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!--	<link rel="stylesheet" href="/styles/cache/raleway.css" />-->

	<link rel="shortcut icon" href="https://s3.amazonaws.com/ks_web/fru1t.me/favicon.ico" />
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway:400,600'>
	<link rel="stylesheet" href="/styles/global.css" />
	<link rel="stylesheet" href="/styles/i360.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="/script/jq_easing.js"></script>

	<script>
		$(function() {
			$('a[href^="#"]').on('click',function (e) {
				e.preventDefault();

				var target = this.hash;
				var $target = $(target);

				$('html, body').stop().animate({
					'scrollTop': $target.offset().top
				}, 900, 'easeInOutQuint', function () {
					window.location.hash = target;
				});
			});
		});
	</script>
</head>
<body>
	<div class="spacer"></div>
	<div class="container">
		<h1 class="page-header">MajorTom</h1>
		<div class="hint">
			An Interactive Process Book Web Page by Kodlee Yin<br />
			INFO 360 C Winter 2015
		</div>
		<a class="next-link" href="#sec-introduction">Start the Journey</a>
	</div>

	<section id="sec-introduction" class="container">
		<h1>Introduction</h1>
		<p>This is the story of MajorTom; a website that promises more than just a college
			degree.</p>
		<p class="padded">MajorTom was built off the premise of the confusing time transitioning
			from high school to college. That wonder of doubt that arises from unknowing what lies
			ahead and what decisions should be made for the future.</p>
		<p class="padded">This document describes the process that Kodlee Yin, Duncan Andrew,
			and Jonathan Li took, starting from nothing, to a solidified final prototype, ready
			to be created.</p>
		<a class="next-link" href="#sec-setting-up">Setting Up</a>
	</section>

	<section id="sec-setting-up" class="container">
		<h1>Setting Up</h1>
		<p>The first order of business was to establish a means for communication. A way for the
			team to talk, share documents, and keep up to date with statuses and deadlines.</p>
		<p class="padded">Of course, with the given technology, the team chose Facebook and
			Google Drive.</p>
		<a class="next-link" href="#sec-setting-up-images">The Team</a>
	</section>

	<?php Images::createCarousel('sec-setting-up-images',
			'Take Your Protein Pills and Put Your Helmet On',
			'sec-brainstorming',
			'The Problem',
			'team-pic', 'team-facebook', 'team-drive'); ?>

	<section id="sec-brainstorming" class="container">
		<h1>The Problem</h1>
		<p>With a path for communication open, we were free to complain about our lives and
			the issues we've faced in the past. A common theme among us was the issue of
			selecting a major. We reasoned that: sure, while some students already know their
			path for higher education, the majority of incoming freshmen don't. The process of
			learning about new majors and courses is very troublesome. And so our problem
			was selected.</p>
		<p class="padded">But what about international students, and transfer students, and students who
			just want to change majors? We needed to model how users would end up in this
			situation, and construct examples to better understand our problem scope.</p>
		<a href="#sec-use-paths" class="next-link">Personas and Use Paths</a>
	</section>

	<?php Images::createCarousel('sec-use-paths',
			'Personas and Use Paths',
			'sec-forty-ideas',
			'40 Ideas',
			'use-path', 'use-persona'); ?>

	<section id="sec-forty-ideas" class="container">
		<h1>40 Ideas</h1>
		<p>With the knowledge of causal relationships and user examples, production was right around
			the corner. but before settling on any single idea, a large quantity of solutions were
			developed, in hopes of cherry picking the strengths of all components to later
			consolidate into a single "best version".</p>
		<a href="#sec-forty-ideas-images" class="next-link">The 40 Ideas</a>
	</section>

	<?php Images::createCarousel('sec-forty-ideas-images',
			'Commencing Countdown, Engines On',
			'sec-low-fidel-proto',
			'Low Fidelity Prototyping',
			'40-ideas-1', '40-ideas-2'); ?>

	<section id="sec-low-fidel-proto" class="container">
		<h1>Low Fidelity Prototyping</h1>
		<p>At this stage, it was fairly clear what features the application required. Namely, a
			highly accessible interface, a well organized and consistent layout, departmental
			links and resources, and personalization. So work was set on designing a look and
			feel for the application.</p>
		<a href="#sec-low-fidel-proto-images" class="next-link">Paper Prototype</a>
	</section>

	<?php Images::createCarousel('sec-low-fidel-proto-images',
			'The Papers Want To Know Whose Shirts You Wear',
			'sec-single-feedback',
			'Prototype Feedback',
			'lo-fidel-proto-1', 'lo-fidel-proto-2', 'lo-fidel-proto-3', 'lo-fidel-proto-4',
					'lo-fidel-proto-5', 'lo-fidel-proto-6', 'lo-fidel-proto-7'); ?>

	<section id="sec-single-feedback" class="container">
		<h1>Prototype Feedback</h1>
		<p>The feature rich design was created, but it still needed constructive criticism from
			outside the author's perspective. Each prototype was taken through a multitude of
			user test studies to find out what worked, what didn't, what features were missing,
			or if there were too many features to begin with. The majority of responses came back
			positive with several pointers summarized:</p>
		<ul class="padded">
			<li>The clean design is good for readability/trustworthiness of the site</li>
			<li>Carding/Spacing is important for layout so it's easier to read and consume information</li>
			<li>Due to Google and other web search sites, users are conditioned to type higher quality
				search queries into the search bar</li>
			<li>Certain symbols have material intention already associated to them and must be placed
				carefully to correspond to their respective meanings</li>
			<li>Concise summary information is crucial for high level overviews until a user explicitly
				actions to "learn more"</li>
			<li>Users like graphical representations of information as they are easier to understand</li>
			<li>Different generations of users explore and learn in different styles</li>
			<li>Branding is a large portion of how trustworthy a site is to a user</li>
		</ul>
		<a href="#sec-single-feedback-images" class="next-link">User Studies Part 1</a>
	</section>

	<?php Images::createCarousel('sec-single-feedback-images',
			'Now It\'s Time To Leave The Capsule If You Dare',
			'sec-low-fidel-group',
			'Consolidated Prototype',
			'review-ena', 'review-paul', 'review-single-1', 'review-single-2', 'review-single-3',
			'review-single-4'); ?>

	<section id="sec-low-fidel-group" class="container">
		<h1>Consolidated Prototype</h1>
		<p>Armed with feedback and potential, a new prototype was built with higher resolution.
			HTML and CSS were employed to produce a medium-low fidelity version that was
			interactive; however, a focus was kept on the holistic view of the application,
			instead of implementation details like animation and transitions. This approach
			introduced a fast and effective way to ideate and iterate through versions of the
			design, which in turn allowed for more user feedback:</p>
		<ul class="padded">
			<li>Locations of object implty a lot about its functionality like what it's associated
				to on a page</li>
			<li>Icons are a great way of replacing text that would otherwise look bulky</li>
			<li>The home page is a critical factor for first impressions and expressing the
				application's functionality is key in this area</li>
			<li>Visual representation of data, while great, must be executed properly in order
				not to confuse the user further</li>
		</ul>
		<a href="#sec-low-fidel-group-review" class="next-link">User Studies Part 2</a>
	</section>

	<?php Images::createCarousel('sec-low-fidel-group-review',
			'I\'m Stepping Through The Door',
			'sec-design-spec',
			'Design Specification',
			'notes-interview', 'review-bryce', 'review-review-bryce', 'review-john',
			'review-group-1', 'review-group-2', 'review-group-3', 'review-group-4',
			'review-group-5'); ?>

	<section id="sec-design-spec" class="container">
		<h1>Design Specification</h1>
		<p>Before continuing any more work on the application, its functionalities, use cases,
			persona examples, and process flows, needed to be documented. Here, every little
			detail about what was included within MajorTom's scope was doled out and explained
			alongside reasoning for items that fell short of the application's scope. Entire
			usage scenarios were laid out and mapped to qualify intended features. The process
			paths were explored to display coherent flow within the site. And finally, a detailed
			overview of key characteristics of MajorTom were listed with reasoning behind each
			design decision.</p>
		<a href="#sec-design-spec-images" class="next-link">Documentation</a>
	</section>

	<?php Images::createCarousel('sec-design-spec-images',
			'Documentation',
			'sec-final-proto',
			'Final Prototype',
			'design-spec-1', 'design-spec-2', 'design-spec-3', 'design-spec-4'); ?>

	<section id="sec-final-proto" class="container">
		<h1>Final Prototype</h1>
		<p>Finally, with the nitty gritty details of the application ironed out, it was time
			to create the final prototype. Here the use of templating frameworks alongside
			processed language tools such as SASS helped the development of this proto. The past
			HTML and CSS languages were employed along with the dynamic web language PHP to produce
			repeatable snippets and layouts. To further aid in distributed development, Git was
			used as a collaboration tool.</p>
		<p class="padded">The main takeaway from this final prototyped stayed consistent
			with past prototypes. While the build was of higher quality and more
			thorough, focus was kept on the features and display instead of the eye candy that
			follows (animations and transitions). This, again, allowed for a faster development
			time and quicker feedback from teammates in the development process.</p>
		<a href="#sec-final-proto-images" class="next-link">Final Prototype Development</a>
	</section>

	<?php Images::createCarousel('sec-final-proto-images',
			'Final Prototype Development',
			'sec-storyboarding',
			'Storyboarding',
			'web-dev-ide', 'web-dev-git', 'final-proto-1', 'final-proto-2', 'final-proto-3'); ?>

	<section id="sec-storyboarding" class="container">
		<h1>Storyboarding</h1>
		<p>As the development process comes to a close in the design phase, one last hurrah is
			given to the application in order to scrounge for potential investors in the form of an
			advertisement. A vision for MajorTom was to re-assure its users that they're in the
			right hands by using the product. To encapsulate this feeling, the video needed to
			traverse through the hero's journey.</p>
		<p class="padded">The first iteration of the storyboard sat the main focus to the University of Washington.
			This symbolized a very specific time and place with a main character unknowing of
			what their future holds. The scenes progressively get more and more broad in scope
			zooming out to the greater Seattle area, Puget Sound, The Cascade Mountains, up
			to space using Red Bull Stratos footage of Felix Baumgartner. At the climax of the
			music (around the midway mark of the video), the view would become increasingly
			specific, opposite to that of the buildup. Scenes from the buildup would include vague
			footage that could be interpreted a multitude of ways. Very low action shots like
			preparation for work. On the other hand, scenes from the falling half of the video
			would be of high action, "in the moment" shots like those of workers working their
			jobs. This rise and fall of action would, in the end, relate to the main character's
			imagination of what he wants to be when he grows up.</p>
		<a href="#sec-storyboarding-images" class="next-link">Storyboard 1</a>
	</section>

	<?php Images::createCarousel('sec-storyboarding-images',
			'Storyboard 1',
			'sec-storyboarding-2',
			'Storyboard Revising',
			'story-board-mountain-binder'); ?>

	<section id="sec-storyboarding-2" class="container">
		<h1>Storyboard Revising</h1>
		<p>While great, a review of the requirements brought the storyboard back into focus. The
			video needed to cover the features of the product, and so the first storyboard was
			scrapped. In its place, a new story arose that followed a main character in the
			depths of confusion, wondering what classes to take, what major to sign up for, and
			where to make friends.</p>
		<p class="padded">The video opens up with the main character sitting next to a friend, staring blankly
			at the screen in front of him. As the story progresses, we are revealed more and more
			things about the main character. His passion for studies, computers, electronics.
			Overlayed are the search terms the main character uses utilizing MajorTom. As the
			video's song switches from verse to more powerful chorus, a faster pace is picked up
			and the features switch over from classes and majors, to the finer details like
			activities, services, and clubs. The video climaxes at the point when the main
			character is introduced to the "meet a mentor" feature and shakes hands with his
			point of contact. The falling action and sudden drop in music is accompanied by the
			main character, asleep at his computer, with a successful registration prompt on
			the monitor.</p>
		<a href="#sec-storyboard-2-images" class="next-link">Storyboard 2</a>
	</section>

	<?php Images::createCarousel('sec-storyboard-2-images',
			'Storyboard 2',
			'sec-filming',
			'Filming',
			'story-board-binder', 'story-board-final-pure-1', 'story-board-final-pure-2',
			'story-board-final-pure-3', 'story-board-final-pure-4'); ?>

	<section id="sec-filming" class="container">
		<h1>Filming</h1>
		<p>Once the storyboard was complete and satisfactory, work started on the filming. Due to
			the complexity of the video, the filming process was broken down into several
			sections:</p>
		<ul class="padded">
			<li>No actor moving &amp; still shots</li>
			<li>With actor moving &amp; still shots</li>
			<li>Weather dependent shots</li>
			<li>Classroom &amp; lecture shots</li>
		</ul>
		<a href="#sec-filming-images" class="next-link">The Filming Process</a>
	</section>

	<?php Images::createCarousel('sec-filming-images',
			'The Filming Process',
			'sec-editing-images',
			'Editing',
			'film-locations-rough-draft', 'film-locations-final-1', 'film-locations-final-2',
			'story-board-final-1', 'story-board-final-2', 'story-board-final-3'); ?>

	<?php Images::createCarousel('sec-editing-images',
			'The Editing Process',
			'sec-final-product',
			'Final Product',
			'editing-audio', 'editing-video', 'editing-sources', 'editing-ss'); ?>

	<section id="sec-final-product" class="container">
		<h1>Final Product</h1>
		<p>In coming to terms with having to leave out wanted features due to poor user feedback
			or gaining ideas from the same sessions, the journey taken through weeks of iteration,
			documentation, and presentation brought together our group of 3 to create a
			masterpiece of design.</p>
		<p class="padded"><iframe width="853" height="480" src="https://www.youtube.com/embed/gUplD3ZOSjQ?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe></p>
		<p class="padded"><a href="http://i360.fru1t.me/">Live Prototype</a></p>
		<a href="#sec-closing-thoughts" class="next-link">Closing Thoughts</a>
	</section>

	<section id="sec-closing-thoughts" class="container">
		<h1>Closing Thoughts</h1>
		<p>I wish design could be read from a book, or was a set of colors I can choose from that will
			automatically grant me 100%, or even just a simple layout that is timeless and
			without question. But design is so much more than a single set of colors, or the
			positioning of a button. I would say what design is right here, but it changes so
			fast, who knows by this time.</p>
		<p class="padded">If anything, design is iterative and ever evolving. Ideas come and go,
			but you have to choose your battles wisely, and not focus on the tiny details.</p>
		<div class="spacer"></div>
		<p>Kodlee Yin</p>
	</section>
</html>
</body>
