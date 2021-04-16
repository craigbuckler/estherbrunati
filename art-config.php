<?php
// artwork
// prices: 0 = unknown, -1 = sold
global $galleryart;
$galleryart = array(

	'new-beginnings-1' => array(
		'name' => 'New Beginnings 1',
		'year' => 2021,
		'media' => 'acrylic on canvas',
		'width' => 18,
		'height' => 48,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'new-beginnings-2' => array(
		'name' => 'New Beginnings 2',
		'year' => 2021,
		'media' => 'acrylic on canvas',
		'width' => 18,
		'height' => 48,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'conception' => array(
		'name' => 'Conception',
		'year' => 2005,
		'media' => 'acrylic mixed media',
		'width' => 56,
		'height' => 44,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'fireworks-1' => array(
		'name' => 'Fireworks One',
		'year' => 2006,
		'media' => 'acrylic mixed media',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'fireworks-2' => array(
		'name' => 'Fireworks Two',
		'year' => 2006,
		'media' => 'acrylic mixed media',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'fireworks-3' => array(
		'name' => 'Fireworks Three',
		'year' => 2007,
		'media' => 'acrylic mixed media',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'fireworks-4' => array(
		'name' => 'Fireworks Four',
		'year' => 2007,
		'media' => 'acrylic mixed media',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'flight' => array(
		'name' => 'Flight',
		'year' => 2004,
		'media' => 'acrylic mixed media',
		'width' => 23,
		'height' => 12,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'flow' => array(
		'name' => 'Flow',
		'year' => 2008,
		'media' => 'acrylic mixed media',
		'width' => 23,
		'height' => 12,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'growth' => array(
		'name' => 'Growth',
		'year' => 2009,
		'media' => 'mixed media',
		'width' => 56,
		'height' => 44,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'mirage' => array(
		'name' => 'Mirage',
		'year' => 2010,
		'media' => 'acrylic',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'pandora' => array(
		'name' => 'Pandora',
		'year' => 2010,
		'media' => 'acrylic on canvas',
		'width' => 70,
		'height' => 30,
		'desc' => '',
		'price' => 0,
		'active' => false
	),

	'phase' => array(
		'name' => 'Phase',
		'year' => 2010,
		'media' => 'acrylic',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'phlox' => array(
		'name' => 'Phlox',
		'year' => 2008,
		'media' => 'acrylic mixed media on canvas',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'rhythm-1' => array(
		'name' => 'Rhythm One',
		'year' => 2009,
		'media' => 'acrylic on canvas',
		'width' => 12,
		'height' => 12,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'rhythm-2' => array(
		'name' => 'Rhythm Two',
		'year' => 2010,
		'media' => 'acrylic on canvas',
		'width' => 12,
		'height' => 12,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'separation' => array(
		'name' => 'Separation',
		'year' => 2006,
		'media' => 'acrylic mixed media',
		'width' => 70,
		'height' => 30,
		'desc' => '',
		'price' => -1,
		'active' => false
	),

	'slalom' => array(
		'name' => 'Slalom',
		'year' => 2009,
		'media' => 'acrylic',
		'width' => 40,
		'height' => 40,
		'desc' => '',
		'price' => 0,
		'active' => false
	)

);


// pages of artwork
global $gallerypages;
$gallerypages = array(

	1 => 'new-beginnings-1,fireworks-3,new-beginnings-2',
	2 => 'slalom,growth,fireworks-1',
	3 => 'rhythm-1,separation,fireworks-4',
	4 => 'fireworks-2,flight,rhythm-2',
	5 => 'conception,flow,mirage',
	6 => 'phase,pandora,phlox'

);


// image locations
global $img;
$img = array(
	'full' => 'images/art/full/',
	'thumb' => 'images/art/'
);

// cookie
global $cookie;
$cookie = array(
	'name' => 'ebc',
	'expire' => 2419200
);
