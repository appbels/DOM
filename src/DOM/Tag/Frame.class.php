<?php

namespace DOM\Tag;

/**
 * Frame Class.
 *
 * 
 * <frame> is an HTML element which defines a particular area in which another HTML document can be displayed. A frame should be used within a <frameset>.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frame
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Frame
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Frame extends \DOM\Element
{

	/**
	 * Frame constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name frame.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'frame';
	}

}

?>