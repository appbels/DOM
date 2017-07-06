<?php

namespace DOM\Tag;

/**
 * Menuitem Class.
 *
 * WARNING: This is an experimental API that should not be used in production code.
 * The HTML <menuitem> element represents a command that a user is able to invoke through a popup menu. This includes context menus, as well as menus that might be attached to a menu button.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menuitem
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Menuitem
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Menuitem extends \DOM\Element
{

	/**
	 * Menuitem constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name menuitem.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'menuitem';
	}

}

?>