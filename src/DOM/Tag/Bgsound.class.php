<?php

namespace DOM\Tag;

/**
 * Bgsound Class.
 *
 * WARNING: This API has not been standardized.
 * The HTML Background Sound Element () is an Internet Explorer element associating a background sound with a page.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bgsound
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Bgsound
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Bgsound extends \DOM\Element
{

	/**
	 * Bgsound constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name bgsound.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'bgsound';
	}

}

?>