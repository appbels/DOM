<?php

namespace DOM\Tag;

/**
 * Ul Class.
 *
 * 
 * The HTML <ul> element represents an unordered list of items, typically rendered as a bulleted list.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Ul
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Ul extends \DOM\Element
{

	/**
	 * Ul constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name ul.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'ul';
	}

}

?>