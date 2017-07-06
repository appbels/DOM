<?php

namespace DOM\Tag;

/**
 * Frameset Class.
 *
 * 
 * <frameset> is an HTML element which is used to contain <frame> elements.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frameset
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Frameset
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Frameset extends \DOM\Element
{

	/**
	 * Frameset constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name frameset.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'frameset';
	}

}

?>