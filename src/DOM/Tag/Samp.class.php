<?php

namespace DOM\Tag;

/**
 * Samp Class.
 *
 * 
 * The HTML <samp> element is an element intended to identify sample output from a computer program. It is usually displayed in the browser's default monotype font (such as Lucida Console).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/samp
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Samp
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Samp extends \DOM\Element
{

	/**
	 * Samp constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name samp.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'samp';
	}

}

?>