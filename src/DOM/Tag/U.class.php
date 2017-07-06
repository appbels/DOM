<?php

namespace DOM\Tag;

/**
 * U Class.
 *
 * 
 * The HTML <u> element renders text with an underline, a line under the baseline of its content. In HTML5, this element represents a span of text with an unarticulated, though explicitly rendered, non-textual annotation, such as labeling the text as being a proper name in Chinese text (a Chinese proper name mark), or labeling the text as being misspelled.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/u
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        U
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class U extends \DOM\Element
{

	/**
	 * U constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name u.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'u';
	}

}

?>