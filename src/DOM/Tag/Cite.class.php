<?php

namespace DOM\Tag;

/**
 * Cite Class.
 *
 * 
 * The HTML <cite> element represents a reference to a creative work. It must include the title of a work or a URL reference, which may be in an abbreviated form according to the conventions used for the addition of citation metadata.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Cite
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Cite extends \DOM\Element
{

	/**
	 * Cite constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name cite.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'cite';
	}

}

?>