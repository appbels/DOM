<?php

namespace DOM\Tag;

/**
 * P Class.
 *
 * 
 * The HTML <p> element represents a paragraph of text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        P
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class P extends \DOM\Element
{

	/**
	 * P constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name p.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'p';
	}

}

?>