<?php

namespace DOM\Tag;

/**
 * Marquee Class.
 *
 * 
 * The HTML <marquee> element is used to insert a scrolling area of text. You can control what happens when the text reaches the edges of its content area using its attributes.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/marquee
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Marquee
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Marquee extends \DOM\Element
{

	/**
	 * Marquee constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name marquee.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'marquee';
	}

}

?>