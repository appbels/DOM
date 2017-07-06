<?php

namespace DOM\Tag;

/**
 * Menu Class.
 *
 * WARNING: This is an experimental API that should not be used in production code.
 * The HTML <menu> element represents a group of commands that a user can perform or activate. This includes both list menus, which might appear across the top of a screen, as well as context menus, such as those that might appear underneath a button after it has been clicked.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menu
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Menu
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Menu extends \DOM\Element
{

	/**
	 * Menu constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name menu.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'menu';
	}

}

?>