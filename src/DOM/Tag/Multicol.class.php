<?php

namespace DOM\Tag;

/**
 * Multicol Class.
 *
 * WARNING: This API has not been standardized. This is an experimental API that should not be used in production code.
 * The HTML <multicol> element was an experimental element designed to allow multi-column layouts. It never got any significant traction and is not implemented in any major browsers.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/multicol
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Multicol
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Multicol extends \DOM\Element
{

	/**
	 * Multicol constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name multicol.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'multicol';
	}

}

?>