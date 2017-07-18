<?php

namespace DOM\Tag;

/**
 * S Class.
 *
 * 
 * The HTML <s> element renders text with a strikethrough, or a line through it. Use the <s> element to represent things that are no longer relevant or no longer accurate. However, <s> is not appropriate when indicating document edits; for that, use the <del> and <ins> elements, as appropriate.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/s
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        S
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class S extends \DOM\Element
{

	/**
	 * S constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name s.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 's';
	}

}

?>