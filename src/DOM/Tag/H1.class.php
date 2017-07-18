<?php

namespace DOM\Tag;

/**
 * H1 Class.
 *
 * 
 * The HTML <h1>-<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        H1
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class H1 extends \DOM\Element
{

	/**
	 * H1 constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name h1.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'h1';
	}

}

?>