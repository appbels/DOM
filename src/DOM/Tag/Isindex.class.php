<?php

namespace DOM\Tag;

/**
 * Isindex Class.
 *
 * 
 * <isindex> is an obsolete HTML element that puts a text field in a page for querying the document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/isindex
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Isindex
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Isindex extends \DOM\Element
{

	/**
	 * Isindex constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name isindex.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'isindex';
	}

}

?>