[["header.php"]]<?php 
header('Content-type: text/xml'); 
echo '<', '?xml version="1.0" encoding="UTF-8"?', ">\n";
?>[[<?php
include('art-config.php');

// sitemap XML head
echo 
	'<rss version ="2.0" xmlns:g="http://base.google.com/ns/1.0">', "\n",
	"<channel>\n",
	"<title>Esther Brunati</title>\n",
	"<description>Esther Brunati is an inspirational British artist selling original artwork from her online art gallery.</description>\n",
	"<link>http://$host$root</link>\n";

// gallery pictures
foreach ($galleryart as $id => $art) {
	if ($art['price'] > 0) echo XMLinfo($id, $art);
}
	
// XML end
echo
	"</channel>\n",
	"</rss>\n";

	
function XMLinfo($id, $art) {

	global $host, $root, $img;
	
	$name = XMLclean(
		$art['name'] . ' -' . 
		($art['year'] > 0 ? ' ' . $art['year'] : '') .
		($art['media'] ? ' ' . $art['media'] : '') .
		' original painting'
	);
	
	$desc = XMLclean(
		($art['desc'] ? $art['desc'] . ' ' : '') . 
		($art['media'] ? ucfirst($art['media']) . ' original artwork. ' : '') .
		($art['width'] > 0 && $art['height'] > 0 ? 'Width ' . $art['width'] . ' inches / ' . round($art['width']*2.54) . 'cm x Height ' . $art['height'] . ' inches / ' . round($art['height']*2.54) . 'cm.' : '')
	);
	
	return 
		"<item>\n" .
		"<title>$name</title>\n" .
		"<link>http://$host${root}gallery/$id</link>\n" .
		"<g:id>$id</g:id>\n" . 
		"<g:brand>Esther Brunati</g:brand>\n" .
		"<g:price>" . number_format($art['price'], 2, '.', '') . " GBP</g:price>\n" . 
		"<g:condition>new</g:condition>\n" .
		"<description>$desc</description>\n" . 
		"<g:image_link>http://$host$root${img['full']}$id.jpg</g:image_link>\n" .
		"<g:product_type>Arts &amp; Entertainment &gt; Artwork &gt; Paintings</g:product_type>\n" . 
		"<g:availability>in stock</g:availability>\n" .
		"</item>\n";
}


function XMLclean($t) {
	$t = str_replace(array("\r","\n",'&hellip;','&ndash;','!','&'), array('',' ','-','-','.','&amp;'), strip_tags(trim($t)));
	$t = preg_replace('/\s+/', ' ', $t);
	return $t;
}
?>]]