<?php

namespace DOM\Tag;

/**
 * Tr Class.
 *
 * 
 * The HTML <tr> element defines a row of cells in a table. Those can be a mix of <td> and <th> elements.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Tr
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Tr extends \DOM\Element
{

	/**
	 * Tr constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name tr.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'tr';
	}

}

?>