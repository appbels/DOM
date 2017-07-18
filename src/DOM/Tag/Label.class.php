<?php

namespace DOM\Tag;

/**
 * Label Class.
 *
 * 
 * The HTML <label> element represents a caption for an item in a user interface.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Label
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Label extends \DOM\Element
{

	/**
	 * Label constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name label.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'label';
	}

}

?>