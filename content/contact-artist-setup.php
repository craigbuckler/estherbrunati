[[PAGETITLE = 'Contact me about original art in my online gallery']]

[[PAGEDESC = 'Please contact me to purchase any work available in my online art gallery or to discuss commissioning a new piece.']]

[[PAGEKEYS = 'contact, call, telephone, phone, email, e-mail, fax, facsimile, reserve, buy, purchase, commisson']]

[[PAGETOPIC = 'contact artist']]

[[ARTICLECLASS = 'cols']]

<?php
// save cookie
include('art-config.php');

// passed image ($pic)
$pic = $_SERVER['QUERY_STRING'];
if ($pic != '' && !isset($galleryart[$pic])) $pic = '';

// saved in cookie
$cdata = (isset($_COOKIE[$cookie['name']]) ? $_COOKIE[$cookie['name']] : serialize([]));

$cdata = array_merge(
	array('name' => '', 'telephone' => '', 'email' => '', 'query' => '', 'chosen' => array()),
	unserialize($cdata)
);

$chosen = explode(',', $chosen);
$newchosen = array();

// determine active artwork
$posted = isset($_POST['submit']);
$art = post('art');
if (!$art) $art = array();
foreach ($galleryart as $id => $item) {

	$galleryart[$id]['active'] = ($id == $pic) || ($posted && in_array($id, $art)) || (!$posted && in_array($id, $cdata['chosen']));

	if ($galleryart[$id]['active']) $newchosen[] = $id;

}

// update cookie
if ($posted) {
	$name = $cdata['name'] = post('name', '', 80);
	$telephone = $cdata['telephone'] = post('telephone', '', 80);
	$email = $cdata['email'] = emailcheck(post('email', '', 80));
	$query = $cdata['query'] = post('query', '', 1000);
}
else {
	$name = $cdata['name'];
	$name = $cdata['name'];
	$telephone = $cdata['telephone'];
	$email = emailcheck($cdata['email']);
	$query = $cdata['query'];
}

$cdata['chosen'] = $newchosen;

setcookie($cookie['name'], serialize($cdata), time() + $cookie['expire']);
?>
