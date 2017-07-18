<?php

namespace DOM\Tag;

/**
 * Span Class.
 *
 * 
 * The HTML <span> element is a generic inline container for phrasing content, which does not inherently represent anything. It can be used to group elements for styling purposes (using the class or id attributes), or because they share attribute values, such as lang.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Span
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Span extends \DOM\Element
{

	/**
	 * Span constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name span.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'span';
	}

}

?>