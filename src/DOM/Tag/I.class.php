<?php

namespace DOM\Tag;

/**
 * I Class.
 *
 * 
 * The HTML <i> element represents a range of text that is set off from the normal text for some reason, for example, technical terms, foreign language phrases, or fictional character thoughts. It is typically displayed in italic type.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        I
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class I extends \DOM\Element
{

	/**
	 * I constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name i.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'i';
	}

}

?>