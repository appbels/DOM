<?php

namespace DOM\Tag;

/**
 * Nav Class.
 *
 * 
 * The HTML <nav> element represents a section of a page whose purpose is to provide navigation links, either within the current document or to other documents. Common examples of navigation sections are menus, tables of contents, and indexes.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Nav
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Nav extends \DOM\Element
{

	/**
	 * Nav constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name nav.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'nav';
	}

}

?>