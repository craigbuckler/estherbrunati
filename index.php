<?php
// Esther Brunati controller
$cset = 'UTF-8';
mb_internal_encoding($cset);
mb_http_output($cset);
date_default_timezone_set('UTC');
@ini_set('output_buffering', 1);

$host = $_SERVER['HTTP_HOST'];
$page = str_replace('?' . $_SERVER['QUERY_STRING'], '', $_SERVER['REQUEST_URI']);
$url = 'http://' . $host . $page;
$local = (strpos($host , '.co') === false);
$root = '/';

// debug
define('DEBUG', $local);

// error handling
@error_reporting(DEBUG ? -1 : 0);
@ini_set('display_errors', DEBUG);

// find content
$cpage = $page;
$cpage = str_replace('/', '_', preg_replace('/^\/+|\/+$/', '', $cpage));
if ($cpage == '') $cpage = 'gallery_1';
preg_match('/^gallery_(.+)$/i', $cpage, $ri);
if (count($ri) == 2) {
	$index = $ri[1];
	$cpage = str_replace('_' . $ri[1], '', $cpage);
}
else $index = 0;

// check gallery page exists
if ($cpage == 'gallery') {
	include('art-config.php');
	if (!isset($gallerypages[intval($index)]) && !isset($galleryart[$index])) $cpage = 'unknown';
}

// delete cached file
if (DEBUG && count($_GET) == 0 && count($_POST) == 0) {
	clearstatcache();
	$cachefile = 'tacs/cache/c' . preg_replace(array('/\?.*$/', '/[\/]+/', '/[\.]+/'), array('', '-', '-'), $page) . '.php';
	if (file_exists($cachefile) && time() > filemtime($cachefile)+3) unlink($cachefile);
}

// content found?
$ipage = "content/$cpage";
if (file_exists("$ipage.php")) {

	include('tacs/tacs.php');
	echo
		'[', "[\"header-render.php\"]", ']',
		'[', "[INDEX = '$index']", ']',
		'[', "[\"$ipage-setup.php\"]", ']',
		'[', "[\"pagebegin.php\"]", ']',
		'[', "[\"$ipage.php\"]", ']',
		'[', "[\"pageend.php\"]", ']';

}
else if ($cpage == 'sitemap.xml') {

	// sitemap
	include('tacs/tacs.php');
	echo
		'[', "[\"header-render.php\"]", ']',
		'[', "[\"sitemap-xml.php\"]", ']';

}
else if ($cpage == 'products.xml') {

	// product feed
	include('tacs/tacs.php');
	echo
		'[', "[\"header-render.php\"]", ']',
		'[', "[\"products-xml.php\"]", ']';

}
else {

	// page not found
	include('error.php');

}
