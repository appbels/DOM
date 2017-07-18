<?php

namespace DOM\Tag;

/**
 * Blockquote Class.
 *
 * 
 * The HTML <blockquote> Element (or HTML Block Quotation Element) indicates that the enclosed text is an extended quotation. Usually, this is rendered visually by indentation (see Notes for how to change it). A URL for the source of the quotation may be given using the cite attribute, while a text representation of the source can be given using the <cite> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Blockquote
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Blockquote extends \DOM\Element
{

	/**
	 * Blockquote constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name blockquote.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'blockquote';
	}

}

?>