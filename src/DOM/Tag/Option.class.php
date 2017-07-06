<?php

namespace DOM\Tag;

/**
 * Option Class.
 *
 * 
 * The HTML <option> element is used to define an item contained in a <select>, an <optgroup>, or a <datalist> element. As such, <option> can represent menu items in popups and other lists of items in an HTML document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Option
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Option extends \DOM\Element
{

	/**
	 * Option constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name option.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'option';
	}

}

?>