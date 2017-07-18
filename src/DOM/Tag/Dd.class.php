<?php

namespace DOM\Tag;

/**
 * Dd Class.
 *
 * 
 * The HTML <dd> element indicates the description of a term in a description list (<dl>).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dd
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Dd extends \DOM\Element
{

	/**
	 * Dd constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dd.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dd';
	}

}

?>