<?php

namespace DOM\Tag;

/**
 * Dl Class.
 *
 * 
 * The HTML <dl> element represents a description list. The element encloses a list of groups of terms and descriptions. Common uses for this element are to implement a glossary or to display metadata (a list of key-value pairs).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dl
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Dl extends \DOM\Element
{

	/**
	 * Dl constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dl.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dl';
	}

}

?>