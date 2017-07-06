<?php

namespace DOM\Tag;

/**
 * Details Class.
 *
 * 
 * The HTML <details> element is used as a disclosure widget from which the user can retrieve additional information.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Details
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Details extends \DOM\Element
{

	/**
	 * Details constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name details.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'details';
	}

}

?>