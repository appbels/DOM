<?php

namespace DOM\Tag;

/**
 * Textarea Class.
 *
 * 
 * The HTML <textarea> element represents a multi-line plain-text editing control.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Textarea
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Textarea extends \DOM\Element
{

	/**
	 * Textarea constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name textarea.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'textarea';
	}

}

?>