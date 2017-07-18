<?php

namespace DOM\Tag;

/**
 * Pre Class.
 *
 * 
 * The HTML <pre> element represents preformatted text. Text within this element is typically displayed in a non-proportional ('monospace') font exactly as it is laid out in the file. Whitespace inside this element is displayed as typed.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Pre
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Pre extends \DOM\Element
{

	/**
	 * Pre constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name pre.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'pre';
	}

}

?>