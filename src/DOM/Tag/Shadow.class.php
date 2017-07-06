<?php

namespace DOM\Tag;

/**
 * Shadow Class.
 *
 * 
 * The HTML <shadow> element-an obsolete part of the Web Components technology suite-was intended to be used as a shadow DOM insertion point. You might have used it if you have created multiple shadow roots under a shadow host. It is not useful in ordinary HTML.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/Shadow
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Shadow
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Shadow extends \DOM\Element
{

	/**
	 * Shadow constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name shadow.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'shadow';
	}

}

?>