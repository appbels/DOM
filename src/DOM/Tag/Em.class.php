<?php

namespace DOM\Tag;

/**
 * Em Class.
 *
 * 
 * The HTML <em> element marks text that has stress emphasis. The <em> element can be nested, with each level of nesting indicating a greater degree of emphasis.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Em
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Em extends \DOM\Element
{

	/**
	 * Em constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name em.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'em';
	}

}

?>