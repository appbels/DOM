<?php

namespace DOM\Tag;

/**
 * Font Class.
 *
 * 
 * The HTML Font Element (<font>) defines the font size, color and face for its content.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/font
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Font
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Font extends \DOM\Element
{

	/**
	 * Font constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name font.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'font';
	}

}

?>