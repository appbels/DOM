<?php

namespace DOM\Tag;

/**
 * Nobr Class.
 *
 * WARNING: This API has not been standardized.
 * The HTML <nobr> element prevents a text from breaking into a new line automatically, so it is displayed on one long line and scrolling might be necessary. This tag is not standard HTML and should not be used.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nobr
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Nobr
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Nobr extends \DOM\Element
{

	/**
	 * Nobr constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name nobr.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'nobr';
	}

}

?>