[["header.php"]]<?php 
header('Content-type: text/xml'); 
echo '<', '?xml version="1.0" encoding="UTF-8"?', ">\n";
?>[[<?php
include('art-config.php');
$ct = filemtime('../../art-config.php');

// sitemap XML head
echo '<urlset xmlns="http://www.google.com/schemas/sitemap/0.84">', "\n";

// home page
echo XMLinfo();

// gallery index
for ($i = 2, $il = count($gallerypages); $i <= $il; $i++) {
	echo XMLinfo("gallery/$i", 1, $ct);
}

// gallery pictures
foreach ($galleryart as $id => $art) {
	echo XMLinfo("gallery/$id", 1, $ct);
}

// pages
foreach (glob('../../content/*.php') as $c) {
	$t = filemtime($c);
	$c = str_replace(array('../../content/', '.php'), '', $c);
	if (strpos($c, '-setup') == false && !in_array($c, array('gallery','error404'))) echo XMLinfo($c, 0.9, $t);
}
	
// XML end
echo
	"</urlset>\n";

// show page node
function XMLinfo($url = '', $priority = 1, $date = null, $change = 'weekly') {

	global $host, $root;
	if (is_null($date)) $date = time();

	return 
		"<url>\n" .
		"<loc>http://$host$root$url</loc>\n" . 
		"<lastmod>" . date('Y-m-d', $date) . "</lastmod>\n" .
		"<changefreq>$change</changefreq>\n" .
		"<priority>" . number_format($priority, 1, '.', '') ."</priority>\n" . 
		"</url>\n";

}
?>]]