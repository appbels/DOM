<?php

namespace DOM\Tag;

/**
 * Hr Class.
 *
 * 
 * The HTML <hr> element represents a thematic break between paragraph-level elements (for example, a change of scene in a story, or a shift of topic with a section). In previous versions of HTML, it represented a horizontal rule. It may still be displayed as a horizontal rule in visual browsers, but is now defined in semantic terms, rather than presentational terms.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Hr
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Hr extends \DOM\Element
{

	/**
	 * Hr constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name hr.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'hr';
	}

}

?>