<section>
<h1 class="main">Page not found</h1>

<p>Sorry, but the page you are looking for cannot be found. My artwork can sell quickly, so it may have been removed from my website.</p>

<p>Please <a href="[[<?php echo $menu['contact-artist']->Link; ?>]]">contact me</a> if you would like to discuss commissioning a similar piece. My original art can be customised to your preferred size, styles, colours and tastes.</p>

<p>Please <a href="[[root]]">browse my gallery</a>. The original art currently shown on my site includes:</p>

[[<?php
include('art-config.php');

$out = '';
$ex = '';
foreach ($galleryart as $id => $art) {
	$out .= "<li><a href=\"${root}gallery/$id\">&#8220;${art['name']}&#8221;</a></li>\n";
	if (!$ex) $ex = $id;
}

if ($out) echo "\n<ul>\n$out</ul>";
?>]]

</section>

[[<?php
$art = $galleryart[$ex];
echo
	"<ul id=\"gallery\">\n",
	"<li class=\"last\">\n", 
	"<a href=\"${root}gallery/$ex\">",
	'<img src="', $root, $img['thumb'], $ex, '.jpg" width="290" height="344" alt="', $art['name'], '" />', 
	'<strong>', $art['name'], '</strong>',
	'<span></span></a>',
	"</li>\n",
	"</ul>\n";
?>]]