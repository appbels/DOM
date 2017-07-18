<?php

namespace DOM\Tag;

/**
 * Noframes Class.
 *
 * 
 * <noframes> is an HTML element which is used to support browsers which are not able to support <frame> elements or configured to do so.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noframes
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Noframes
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Noframes extends \DOM\Element
{

	/**
	 * Noframes constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name noframes.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'noframes';
	}

}

?>