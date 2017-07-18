<?php

namespace DOM\Tag;

/**
 * Sub Class.
 *
 * 
 * The HTML <sub> element defines a span of text that should be displayed, for typographic reasons, lower, and often smaller, than the main span of text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sub
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Sub
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Sub extends \DOM\Element
{

	/**
	 * Sub constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name sub.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'sub';
	}

}

?>