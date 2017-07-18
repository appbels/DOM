<?php

namespace DOM\Tag;

/**
 * Canvas Class.
 *
 * 
 * Use the HTML <canvas> element with the canvas scripting API to draw graphics and animations.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Canvas
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Canvas extends \DOM\Element
{

	/**
	 * Canvas constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name canvas.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'canvas';
	}

}

?>