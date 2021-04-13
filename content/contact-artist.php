<section>
<h1 class="main">Contact me</h1>

[["contact.php"]]

</section>

<?php
if (!$pic) {
	// show random picture
	$k = array_keys($galleryart);
	$pic = $k[rand(0, count($k)-1)];
}
$art = $galleryart[$pic];
echo
	"<ul id=\"gallery\">\n",
	"<li class=\"last\">\n", 
	"<a href=\"${root}gallery/$pic\">",
	'<img src="', $root, $img['thumb'], $pic, '.jpg" width="290" height="344" alt="', $art['name'], '" />', 
	'<strong>', $art['name'], '</strong>',
	'<span></span></a>',
	"</li>\n",
	"</ul>\n";
?>