<?php

namespace DOM\Tag;

/**
 * Colgroup Class.
 *
 * 
 * The HTML <colgroup> element defines a group of columns within a table.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Colgroup
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Colgroup extends \DOM\Element
{

	/**
	 * Colgroup constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name colgroup.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'colgroup';
	}

}

?>