[[<?php
// define menu in XML
$menuXML = <<<XML
<?xml version='1.0' standalone='yes'?>
<menu>

	<item id="gallery" text="Gallery" title="online art gallery" key="g" />

	<item id="about-artist" text="About" title="more information about the artist and artwork" key="a" />

	<item id="contact-artist" text="Contact" title="contact the UK artist" key="c" />

</menu>
XML;

$menuItems = new SimpleXMLElement($menuXML);

// define the menus
$menu = array();

// main menu items
foreach ($menuItems->item as $item) {

	// id
	$id = (string) $item['id'];
	
	// define menu item
	$menu[$id] = new Menu(
		$item['text'],
		$root . ($id == 'gallery' ? '' : $id),
		$item['title'],
		$item['key'],
		(strpos($page, $id) !== false || ($id == 'gallery' && strpos($page, '-.php') !== false))
	);

}

// menu item
class Menu
{
	public $Text, $Link, $Title, $Key, $Level, $Active, $Open;

	// define a menu
	public function __construct($text, $link, $title = '', $key = '', $active = false) {
		$this->Text = str_replace('|', '<br />', $text);
		$this->Link = (string) $link;
		$this->Title = (string) $title;
		$this->Key = (string) $key;
		$this->Active = (bool) $active;
	}

	// return an HTML link
	public function CreateLink() {
		$m = "<a href=\"$this->Link\"";
		if ($this->Title != '') $m .= " title=\"$this->Title\"";
		if ($this->Key != '') $m .= " accesskey=\"$this->Key\"";
		if ($this->Active) $m .= ' class="active"';
		$m .= ">$this->Text</a>";
		return $m;
	}

	// echo a standard link
	public function L() {
		echo $this->Link;
	}

}
?>]]