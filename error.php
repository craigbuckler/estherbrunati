<?php
// redirect URL
$page = strtolower($page);
$url = '';

// redirects
$redir = array(

	'art' => '',
	'home' => '',
	'welcome' => '',
	'about' => 'about-artist',
	'me' => 'about-artist',
	'buy' => 'contact-artist',
	'call' => 'contact-artist',
	'contact' => 'contact-artist',
	'mail' => 'contact-artist',
	'quiry' => 'contact-artist'

);
foreach ($redir as $pold => $pnew) if (strpos($page, $pold) !== false) $url = $root . $pnew;

if ($url !== '') {

	// redirect found
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $url);

}
else {

	// show error page
	$eurl = 'http://' . $host . $root . 'error404';

	$fcont = file_get_contents($eurl);
	if ($fcont !== false) {
		header('HTTP/1.0 404 Not Found');
		echo $fcont;
	}
	else header('Location: ' . $eurl);

}
?>
