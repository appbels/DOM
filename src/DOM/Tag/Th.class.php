<?php

namespace DOM\Tag;

/**
 * Th Class.
 *
 * 
 * The HTML <th> element defines a cell as header of a group of table cells. The exact nature of this group is defined by the scope and headers attributes.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Th
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Th extends \DOM\Element
{

	/**
	 * Th constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name th.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'th';
	}

}

?>