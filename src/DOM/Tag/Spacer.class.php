<?php

namespace DOM\Tag;

/**
 * Spacer Class.
 *
 * 
 * <spacer> is an obsolete HTML element which allowed insertion of empty spaces on pages. It was devised by Netscape to accomplish the same effect as a single-pixel layout image, which was something web designers used to use to add white spaces to web pages without actually using an image. However, <spacer> no longer supported by any major browser and the same effects can now be achieved using simple CSS. 
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/spacer
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Spacer
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Spacer extends \DOM\Element
{

	/**
	 * Spacer constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name spacer.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'spacer';
	}

}

?>