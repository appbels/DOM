<?php

namespace DOM\Tag;

/**
 * Slot Class.
 *
 * 
 * The HTML <slot> element-part of the Web Components technology suite-is a placeholder inside a web component that you can fill with your own markup, which lets you create separate DOM trees and present them together.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Slot
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Slot extends \DOM\Element
{

	/**
	 * Slot constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name slot.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'slot';
	}

}

?>