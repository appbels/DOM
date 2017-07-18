<?php

namespace DOM\Tag;

/**
 * Col Class.
 *
 * 
 * The HTML <col> element defines a column within a table and is used for defining common semantics on all common cells. It is generally found within a <colgroup> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Col
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Col extends \DOM\Element
{

	/**
	 * Col constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name col.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'col';
	}

}

?>