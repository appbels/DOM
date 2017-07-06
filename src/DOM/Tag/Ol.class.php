<?php

namespace DOM\Tag;

/**
 * Ol Class.
 *
 * 
 * The HTML <ol> element represents an ordered list of items, typically rendered as a numbered list.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Ol
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Ol extends \DOM\Element
{

	/**
	 * Ol constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name ol.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'ol';
	}

}

?>