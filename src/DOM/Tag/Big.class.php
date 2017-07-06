<?php

namespace DOM\Tag;

/**
 * Big Class.
 *
 * 
 * The HTML Big Element (<big>) makes the text font size one size bigger (for example, from small to medium, or from large to x-large) up to the browser's maximum font size.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/big
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Big
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Big extends \DOM\Element
{

	/**
	 * Big constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name big.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'big';
	}

}

?>