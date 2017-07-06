<?php

namespace DOM\Tag;

/**
 * Center Class.
 *
 * 
 * The HTML Center Element (<center>) is a block-level element that can contain paragraphs and other block-level and inline elements. The entire content of this element is centered horizontally within its containing element (typically, the <body>).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/center
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Center
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Center extends \DOM\Element
{

	/**
	 * Center constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name center.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'center';
	}

}

?>