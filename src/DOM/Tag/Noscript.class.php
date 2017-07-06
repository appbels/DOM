<?php

namespace DOM\Tag;

/**
 * Noscript Class.
 *
 * 
 * The HTML <noscript> element defines a section of HTML to be inserted if a script type on the page is unsupported or if scripting is currently turned off in the browser.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Noscript
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Noscript extends \DOM\Element
{

	/**
	 * Noscript constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name noscript.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'noscript';
	}

}

?>