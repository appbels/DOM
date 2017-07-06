<?php

namespace DOM\Tag;

/**
 * Rt Class.
 *
 * 
 * The HTML <rt> element embraces pronunciation of characters presented in a ruby annotations, which are used to describe the pronunciation of East Asian characters. This element is always used inside a <ruby> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Rt
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Rt extends \DOM\Element
{

	/**
	 * Rt constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name rt.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'rt';
	}

}

?>