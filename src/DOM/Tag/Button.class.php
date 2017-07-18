<?php

namespace DOM\Tag;

/**
 * Button Class.
 *
 * 
 * The HTML <button> element represents a clickable button.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Button
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Button extends \DOM\Element
{

	/**
	 * Button constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name button.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'button';
	}

}

?>