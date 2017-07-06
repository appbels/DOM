<?php

namespace DOM\Tag;

/**
 * Var Class.
 *
 * 
 * The HTML <var> element represents a variable in a mathematical expression or a programming context.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/var
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Var
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Var extends \DOM\Element
{

	/**
	 * Var constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name var.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'var';
	}

}

?>