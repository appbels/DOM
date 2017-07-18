<?php

namespace DOM\Tag;

/**
 * Abbr Class.
 *
 * 
 * The HTML <abbr> element represents an abbreviation and optionally provides a full description for it. If present, the title attribute must contain this full description and nothing else.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Abbr
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Abbr extends \DOM\Element
{

	/**
	 * Abbr constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name abbr.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'abbr';
	}

}

?>