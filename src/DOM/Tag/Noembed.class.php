<?php

namespace DOM\Tag;

/**
 * Noembed Class.
 *
 * WARNING: This API has not been standardized.
 * The <noembed> element is a deprecated and non-standard way to provide alternative, or 'fallback', content for browsers that do not support the <embed> element or do not support embedded content an author wishes to use.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noembed
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Noembed
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Noembed extends \DOM\Element
{

	/**
	 * Noembed constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name noembed.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'noembed';
	}

}

?>