<?php

namespace DOM\Tag;

/**
 * B Class.
 *
 * 
 * The HTML <b> element represents a span of text stylistically different from normal text, without conveying any special importance or relevance, and that is typically rendered in boldface.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        B
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class B extends \DOM\Element
{

	/**
	 * B constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name b.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'b';
	}

}

?>