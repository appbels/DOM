<?php

namespace DOM\Tag;

/**
 * Content Class.
 *
 * 
 * The HTML <content> element-an obsolete part of the Web Components suite of technologies-was used inside of Shadow DOM as an insertion point, and wasn't meant to be used in ordinary HTML It has now been replaced by the <slot> element, which creates a point in the DOM at which a shadow DOM can be inserted.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/content
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Content
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Content extends \DOM\Element
{

	/**
	 * Content constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name content.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'content';
	}

}

?>