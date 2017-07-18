<?php

namespace DOM\Tag;

/**
 * Select Class.
 *
 * 
 * The HTML <select> element represents a control that provides a menu of options:
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Select
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Select extends \DOM\Element
{

	/**
	 * Select constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name select.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'select';
	}

}

?>