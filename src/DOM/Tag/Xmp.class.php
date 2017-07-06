<?php

namespace DOM\Tag;

/**
 * Xmp Class.
 *
 * 
 * The HTML Example Element (<xmp>) renders text between the start and end tags without interpreting the HTML in between and using a monospaced font. The HTML2 specification recommended that it should be rendered wide enough to allow 80 characters per line.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/xmp
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Xmp
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Xmp extends \DOM\Element
{

	/**
	 * Xmp constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name xmp.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'xmp';
	}

}

?>