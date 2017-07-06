<?php

namespace DOM\Tag;

/**
 * Sup Class.
 *
 * 
 * The HTML <sup> element defines a span of text that should be displayed, for typographic reasons, higher, and often smaller, than the main span of text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sup
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Sup
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Sup extends \DOM\Element
{

	/**
	 * Sup constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name sup.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'sup';
	}

}

?>