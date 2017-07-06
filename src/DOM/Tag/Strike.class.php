<?php

namespace DOM\Tag;

/**
 * Strike Class.
 *
 * 
 * The HTML <strike> element (or HTML Strikethrough Element) places a strikethrough (horizontal line) over text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strike
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Strike
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Strike extends \DOM\Element
{

	/**
	 * Strike constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name strike.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'strike';
	}

}

?>