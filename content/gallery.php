[[<?php
// gallery pages
// individual item or index page
$out = '';

if ($ispage) {

	// index page
	$p = explode(',', $gallerypages[$gindex]);
	$d = '';
	for($i = 0, $il = min(count($p), 3); $i < $il; $i++) {
		$art = $galleryart[$p[$i]];
		$d .= 
			'<li' . ($i == 2 ? ' class="last"' : '') . ">\n" . 
			"<a href=\"${root}gallery/${p[$i]}\">" . 
			'<img src="' . $root . $img['thumb'] . $p[$i] . '.jpg" width="290" height="344" alt="' . $art['name'] . '" />' . 
			'<strong>' . $art['name'] . '</strong>' . 
			'<span></span></a>' . 
			"</li>\n";
	}
	
	if ($d != '') $out .= "<ul id=\"gallery\">\n$d</ul>\n";
	
	// title
	$out .= "<h1 class=\"page\">$PAGETITLE</h1>\n";

	// page back
	$backurl = $gindex-1;
	if ($backurl == 1) $backurl = $root;
	else {
		if ($backurl == 0) $backurl = count($gallerypages);
		$backurl = $root . 'gallery/' . $backurl;
	}
	
	// page next
	$nexturl = $gindex+1;
	if ($nexturl > count($gallerypages)) $nexturl = $root;
	else $nexturl = $root . 'gallery/' . $nexturl;

}
else {

	// artwork
	$out .= 
		"<h1>&#8220;${art['name']}&#8221;</h1>\n";
		
	// main image
	$fn = $img['full']	. $INDEX . '.jpg';
	if (file_exists("../../$fn")) {
		list($w, $h) = getimagesize("../../$fn");
		$out .=
			'<p class="fullimage"><a href="' . $menu['contact-artist']->Link . '?'. $INDEX . '">' . 
			"<img src=\"$root$fn\" width=\"$w\" height=\"$h\" alt=\"$PAGETOPIC\" />" . 
			"</a></p>\n";
	}
	
	// details
	$d = "<dt>name:</dt><dd>${art['name']}</dd>\n";
	if ($art['year']) $d .= "<dt>year:</dt><dd>${art['year']}</dd>\n";
	$d .= "<dt>media:</dt><dd>${art['media']}</dd>\n";
	if ($art['width'] > 0 && $art['height'] > 0) {
		$d .= '<dt>width:</dt><dd>' . $art['width'] . ' inches / ' . round($art['width']*2.54) . "cm</dd>\n";
		$d .= '<dt>height:</dt><dd>' . $art['height'] . ' inches / ' . round($art['height']*2.54) . "cm</dd>\n";
	}
	if ($art['desc']) $d .= "<dt>details:</dt><dd>${art['desc']}</dd>\n";
	
	$p = $art['price'];
	$d .= 
		"<dt>price:</dt><dd>" . 
		($p < 0 ? '<p>Sorry, this original artwork has been sold, but please contact me to enquire about similar works.</p>' : ($p == 0 ? 'Please contact me about availability and pricing.' : '&pound;' .  number_format($p, 0))) .
		"</dd>\n";
	
	$out .= "<dl>\n$d</dl>\n";
	
	// enquire
	$out .= '<p><a href="' . $menu['contact-artist']->Link . '?'. $INDEX . '" class="button">Enquire</a></p>' . "\n";
	
	// footer text
	$FOOTER1 = 
		"<h2>About my art</h2>\n" . 
		"<p>&#8220;${art['name']}&#8221; is one of many original ${art['media']} works I have created. Several are shown in my gallery on this website, but you can also commission art customised to your preferred size, styles, colours and tastes. Please contact me for further details.</p>";
	
	$n = array_keys($galleryart);
	$k = array_search($INDEX, $n);
	
	// art back
	$backurl = $k-1;
	if ($backurl < 0) $backurl = count($n)-1;
	$backurl = $root . 'gallery/' . $n[$backurl];
	
	// art next
	$nexturl = $k+1;
	if ($nexturl >= count($n)) $nexturl = 0;
	$nexturl = $root . 'gallery/' . $n[$nexturl];
}


// output content and pagination buttons
echo
	$out,
	'<ul id="pagination">', "\n",
	'<li><a href="', $backurl, '">back</a></li>', "\n",
	'<li><a href="', $nexturl, '" class="next">next</a></li>',
	"</ul>\n";
?>]]

