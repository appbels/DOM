<?php

namespace DOM\Tag;

/**
 * Map Class.
 *
 * 
 * The HTML <map> element is used with <area> elements to define an image map (a clickable link area).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Map
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Map extends \DOM\Element
{

	/**
	 * Map constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name map.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'map';
	}

}

?>