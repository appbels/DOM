<?php

namespace DOM\Tag;

/**
 * H5 Class.
 *
 * 
 * The HTML <h1>-<h6> elements represent six levels of section headings. <h1> is the highest section level and <h6> is the lowest.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Heading_Elements
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        H5
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class H5 extends \DOM\Element
{

	/**
	 * H5 constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name h5.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'h5';
	}

}

?>