<?php

namespace DOM\Tag;

/**
 * Q Class.
 *
 * 
 * The HTML <q> element  indicates that the enclosed text is a short inline quotation. This element is intended for short quotations that don't require paragraph breaks; for long quotations use the <blockquote> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Q
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Q extends \DOM\Element
{

	/**
	 * Q constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name q.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'q';
	}

}

?>