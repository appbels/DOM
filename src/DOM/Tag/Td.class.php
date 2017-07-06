<?php

namespace DOM\Tag;

/**
 * Td Class.
 *
 * 
 * The HTML <td> element defines a cell of a table that contains data. It participates in the table model.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Td
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Td extends \DOM\Element
{

	/**
	 * Td constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name td.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'td';
	}

}

?>