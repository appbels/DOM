<?php

namespace DOM\Tag;

/**
 * Code Class.
 *
 * 
 * The HTML <code> element represents a fragment of computer code. By default, it is displayed in the browser's default monospace font.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/code
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Code
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Code extends \DOM\Element
{

	/**
	 * Code constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name code.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'code';
	}

}

?>