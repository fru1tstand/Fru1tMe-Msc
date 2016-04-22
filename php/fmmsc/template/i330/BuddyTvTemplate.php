<?php
namespace fmmsc\template\i330;
use common\template\component\ContentField;
use common\template\component\TemplateField;
use common\template\Content;

require_once PHP_ROOT . '/fmmsc/Setup.php';

/**
 * Class BuddyTvTemplate
 */
class BuddyTvTemplate extends Content {
	const FIELD_BODY = "body";
	const FIELD_TITLE = "title";
	const FIELD_SUB_TITLE = "sub-title";
	const OPTION_TAB = "tab";

	/**
	 * Produces the complete HTML string for this content page given content fields for this page.
	 *
	 * @param ContentField[] $fields An associative array mapping fields to ContentField objects.
	 * @return string
	 */
	public static function getTemplateRenderContents(array $fields): string {
		$mainClass = ($fields[self::OPTION_TAB] == "1") ? "active" : "";
		$forumClass = ($fields[self::OPTION_TAB] == "2") ? "active" : "";
		$newsClass = ($fields[self::OPTION_TAB] == "3") ? "active" : "";
		$gamesClass = ($fields[self::OPTION_TAB] == "4") ? "active" : "";
		$clipsClass = ($fields[self::OPTION_TAB] == "5") ? "active" : "";

		return <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
	<title>{$fields[self::FIELD_TITLE]}</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="https://s3.amazonaws.com/ks_web/fru1t.me/favicon.ico" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" />
	<link rel="stylesheet" href="/styles/i330-buddytv.css" />
</head>
<body>
	<div class="global-nav">
		<div class="container">
			<a class="brand" href="http://www.buddytv.com/"><div class="global-brand"></div></a>
			<a class="text" href="http://www.buddytv.com/tvshows.aspx">TV SHOWS</a>
			<a class="text" href="http://www.buddytv.com/movies.aspx">MOVIES</a>
			<a class="text" href="http://affiliate.zap2it.com/tvlistings/ZCGrid.do?aid=buddytv">LISTINGS</a>
			<a class="text" href="#">ACTORS</a>
			<a class="text" href="#">NEWS <i class="fa fa-caret-down"></i></a>
			<a class="text" href="#">PHOTOS <i class="fa fa-caret-down"></i></a>
			<a class="text" href="#">GAMES <i class="fa fa-caret-down"></i></a>
			<a class="applink" href="#"></a>
			<div class="search-container">
				<input class="search" type="text" placeholder="Search BuddyTV" /><div class="search-glass"></div>
			</div>
		</div>
	</div>
	<div class="global-content container">
		<div class="show-nav">
			<div class="title">GAME OF THRONES</div>
			<div class="nav">
				<a href="/i330-buddytv/" class="$mainClass">MAIN</a>
				<a href="/i330-buddytv/forum" class="$forumClass">FORUM</a>
				<a href="/i330-buddytv/news" class="$newsClass">NEWS</a>
				<a href="/i330-buddytv/games" class="$gamesClass">GAMES</a>
				<a href="/i330-buddytv/clips" class="$clipsClass">CLIPS</a>
			</div>
		</div>
		<div class="show-filter">
			<div>Content Filter <span class="help">?</span></div>
			<select>
				<option>Season 1</option>
				<option>Season 2</option>
				<option selected="selected">Season 3</option>
			</select>
			<select>
				<option>Episode 1</option>
				<option>Episode 2</option>
				<option>Episode 3</option>
				<option>Episode 4</option>
				<option>Episode 5</option>
				<option>Episode 6</option>
				<option>Episode 7</option>
				<option>Episode 8</option>
				<option selected="selected">Episode 9</option>
				<option>Episode 10</option>
				<option>Episode 11</option>
				<option>Episode 12</option>
			</select>
		</div>
	</div>
	<div class="container">
		<div class="show-sub-title">{$fields[self::FIELD_SUB_TITLE]}</div>
	</div>

	{$fields[self::FIELD_BODY]}
</body>
</html>
HTML;
	}

	/**
	 * <p>Use [TemplateName]::getTemplateFields. This is an internal method.
	 * <p>Returns the TemplateField objects associated to this content page. These are the fields
	 * that are used within the template rendering method. This method is wrapped around
	 * Content::getTemplateFields for memoization.
	 *
	 * @return TemplateField[]
	 * @internal
	 */
	static function getTemplateFields_Internal(): array {
		return [
				TemplateField::newBuilder()->called(self::FIELD_BODY)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::FIELD_TITLE)->asRequired()->build(),
				TemplateField::newBuilder()->called(self::OPTION_TAB)->asNotRequired()->defaultingTo("1")->build(),
				TemplateField::newBuilder()->called(self::FIELD_SUB_TITLE)->asRequired()->build()
		];
	}
}
