<?php

namespace DOM\Tag;

/**
 * Small Class.
 *
 * 
 * The HTML <small> element makes the text font size one size smaller (for example, from large to medium, or from small to x-small) down to the browser's minimum font size.  In HTML5, this element is repurposed to represent side-comments and small print, including copyright and legal text, independent of its styled presentation.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/small
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Small
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Small extends \DOM\Element
{

	/**
	 * Small constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name small.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'small';
	}

}

?>