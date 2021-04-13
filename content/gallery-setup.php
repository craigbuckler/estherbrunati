[[<?php
include('art-config.php');

$gindex = intval($INDEX);
if (isset($gallerypages[$gindex])) {

	// gallery page
	$ispage = true;
	$PAGETITLE = 'Original art gallery, page ' . $gindex . ' of ' . count($gallerypages);
	$PAGEDESC = 'A selection of original artwork for sale from ' . $COMPANY . ', a leading UK artist. This is page ' . $gindex . ' of ' . count($gallerypages) . '.';
	$PAGEKEYS = 'selection, browse, look, view, see';
	$PAGETOPIC = 'online art gallery, page ' . $gindex;
	
}
else if (isset($galleryart[$INDEX])) {

	// artwork page
	$ispage = false;
	$art = $galleryart[$INDEX];
	$PAGETITLE = '"' . $art['name'] . '", original ' . $art['media'] . ' artwork';
	$PAGEDESC = $art['name'] . ' is original ' . $art['media'] . ' art sold by ' . $COMPANY . '. ' . $art['desc'];
	$PAGEKEYS = $art['name'] . ', ' . $art['media'];
	$PAGETOPIC = $art['name'] . ', ' . $art['media'] . ' art';
	
}
?>]]