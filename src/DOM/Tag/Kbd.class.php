<?php

namespace DOM\Tag;

/**
 * Kbd Class.
 *
 * 
 * The HTML <kbd> element represents user input and produces an inline element displayed in the browser's default monospace font.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/kbd
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Kbd
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Kbd extends \DOM\Element
{

	/**
	 * Kbd constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name kbd.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'kbd';
	}

}

?>