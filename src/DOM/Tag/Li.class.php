<?php

namespace DOM\Tag;

/**
 * Li Class.
 *
 * 
 * The HTML <li> element is used to represent an item in a list. It must be contained in a parent element: an ordered list (<ol>), an unordered list (<ul>), or a menu (<menu>). In menus and unordered lists, list items are usually displayed using bullet points. In ordered lists, they are usually displayed with an ascending counter on the left, such as a number or letter.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Li
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Li extends \DOM\Element
{

	/**
	 * Li constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name li.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'li';
	}

}

?>