<?php

namespace DOM\Tag;

/**
 * Blink Class.
 *
 * 
 * The HTML Blink Element (<blink>) is a non-standard element causing the enclosed text to flash slowly.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blink
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Blink
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Blink extends \DOM\Element
{

	/**
	 * Blink constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name blink.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'blink';
	}

}

?>