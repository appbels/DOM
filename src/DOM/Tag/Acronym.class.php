<?php

namespace DOM\Tag;

/**
 * Acronym Class.
 *
 * 
 * The HTML Acronym Element (<acronym>) allows authors to clearly indicate a sequence of characters that compose an acronym or abbreviation for a word. This element has been removed in HTML5. Use <abbr> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/acronym
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Acronym
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Acronym extends \DOM\Element
{

	/**
	 * Acronym constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name acronym.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'acronym';
	}

}

?>