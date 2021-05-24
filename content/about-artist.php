<h1 class="main">[[PAGETITLE]]</h1>

<section>
<p>I was born in 1968 in Islington, London, and spent part of my childhood growing up in the idyllic village of Lynton in North Devon. This has been my favourite place to visit and a source of inspiration ever since.</p>

<p>Having always been an ardent artist, I knew I wanted to take art seriously after leaving school. I studied for 3 years at Exeter College with my final 2 years studying under the sculptor Peter Thursby who gave me great encouragement to continue.</p>

<p>Having built a successful business, I have now been able to return to my true passion: <em>art!</em></p>

<p>My paintings are acrylic and mixed media on large canvasses and are of a spontaneous nature. A perfuse mixture of colour and movement which draw the eye in and lighten the spirit.</p>

<p>The original artwork shown in <a href="[[<?php echo $menu['gallery']->Link; ?>]]">my online gallery</a> includes:</p>

[[<?php
include('art-config.php');

$out = '';
foreach ($galleryart as $id => $art) {
	$out .=
		"<li>" .
		"<a href=\"${root}gallery/$id\">&#8220;${art['name']}&#8221;</a> &ndash; " .
		($art['year'] ? $art['year'] . ', ' : '') .
		$art['media'] .
		($art['price'] < 0 ? ' (sold)' : '') .
		"</li>\n";
}

if ($out) echo "\n<ul>\n$out</ul>";
?>]]

</section>

<!-- <p class="fullimage"><img src="[[root]]images/esther-brunati.jpg" width="290" height="300" alt="Esther Brunati, UK artist" /></p> -->
