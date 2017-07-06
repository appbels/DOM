<?php

namespace DOM\Tag;

/**
 * Area Class.
 *
 * 
 * The HTML <area> element defines a hot-spot region on an image, and optionally associates it with a hypertext link. This element is used only within a <map> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Area
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Area extends \DOM\Element
{

	/**
	 * Area constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name area.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'area';
	}

}

?>