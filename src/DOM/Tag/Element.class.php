<?php

namespace DOM\Tag;

/**
 * Element Class.
 *
 * 
 * The HTML <element> element was part of Web Components; this element was intended to be used to define new custom DOM elements. It was removed in favor of a JavaScript-driven methodology for creating new custom elements; however, that technology is not mature and no browers fully implement it.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/element
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Element
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Element extends \DOM\Element
{

	/**
	 * Element constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name element.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'element';
	}

}

?>