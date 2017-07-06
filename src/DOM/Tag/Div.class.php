<?php

namespace DOM\Tag;

/**
 * Div Class.
 *
 * 
 * The HTML <div> element is the generic container for flow content and does not inherently represent anything. Use it to group elements for purposes such as styling (using the class or id attributes), marking a section of a document in a different language (using the lang attribute), and so on.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Div
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Div extends \DOM\Element
{

	/**
	 * Div constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name div.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'div';
	}

}

?>