<?php

namespace DOM\Tag;

/**
 * Section Class.
 *
 * 
 * The HTML <section> element represents a standalone section of functionality contained within an HTML document, typically with a heading, which doesn't have a more specific semantic element to represent it.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Section
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Section extends \DOM\Element
{

	/**
	 * Section constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name section.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'section';
	}

}

?>