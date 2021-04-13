[["header.php"]]<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<title>[[PAGETITLE]] | [[COMPANY]], inspirational British artist</title>

<meta name="description" content="[[PAGEDESC]]" />
<meta name="keywords" content="[[PAGEKEYS]], art, fine art, modern art, abstract art, contemporary art, original art, art collection, art show, online art, artist, hand painted, artwork, gallery, galleries, online gallery, pictures, sale, buy, purchase, uk, england, britain" />
<meta name="page-topic" content="[[PAGETOPIC]]" />
<meta name="audience" content="all" />
<meta name="distribution" content="global" />
<meta name="author" content="[[COMPANY]]" />
<meta name="publisher" content="[[COMPANY]], http://estherbrunati.co.uk/" />
<meta name="owner" content="[[COMPANY]]" />
<meta name="copyright" content="[[COMPANY]]" />
<meta name="robots" content="index,follow" />
<meta name="revisit-after" content="14 days" />
<meta name="WebsiteSpark" content="ifULYSOwVn" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- stylesheets -->
<link type="text/css" rel="stylesheet" media="all" href="[[root]]styles/screen.css" />

<!-- favicon -->
<link rel="shortcut icon" href="[[root]]favicon.ico" />

</head>
<body>

<!-- header -->
<header><div class="content">

<p><a href="[[root]]"><strong>Esther Brunati</strong> <sub>Inspirational British Art Gallery</sub></a></p>

<nav><ul>
[[<?php
// main menu
foreach ($menu as $m) {
	echo
		'<li', ($m->Key == 'c' ? ' class="last"' : ''), '>',
		$m->CreateLink(),
		"</li>\n";
}
?>]]
</ul></nav>

</div></header>

<!-- article -->
<article[[<?php if (isset($ARTICLECLASS)) echo ' class="', $ARTICLECLASS, '"'; ?>]]><div class="content">
