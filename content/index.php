<?php
require_once PHP_ROOT . '/fmmsc/Setup.php';
use fmmsc\template\Page;

$body = <<<HTML
Err.. Hi.
HTML;

Page::createContent()
		->with(Page::FIELD_TITLE, "Home")
		->with(Page::FIELD_BODY, $body)
		->render();
