<?php

namespace DOM\Tag;

/**
 * Tt Class.
 *
 * 
 * The HTML Teletype Text Element (<tt>) produces an inline element displayed in the browser's default monotype font. This element was intended to style text as it would display on a fixed width display, such as a teletype. It probably is more common to display fixed width type using the <code> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tt
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Tt
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Tt extends \DOM\Element
{

	/**
	 * Tt constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name tt.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'tt';
	}

}

?>