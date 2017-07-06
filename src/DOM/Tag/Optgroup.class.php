<?php

namespace DOM\Tag;

/**
 * Optgroup Class.
 *
 * 
 * The HTML <optgroup> element creates a grouping of options within a <select> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Optgroup
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Optgroup extends \DOM\Element
{

	/**
	 * Optgroup constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name optgroup.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'optgroup';
	}

}

?>