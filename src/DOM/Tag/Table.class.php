<?php

namespace DOM\Tag;

/**
 * Table Class.
 *
 * 
 * The HTML <table> element represents tabular data - that is, information expressed via a two-dimensional data table.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Table
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Table extends \DOM\Element
{

	/**
	 * Table constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name table.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'table';
	}

}

?>