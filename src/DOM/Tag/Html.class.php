<?php

namespace DOM\Tag;

/**
 * Html Class.
 *
 * 
 * The HTML <html> element represents the root (top-level element) of an HTML document, so it is also referred to as the root element. All other elements must be descendants of this element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Html
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Html extends \DOM\Element
{

	/**
	 * Html constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name html.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'html';
	}

}

?>