<?php

namespace DOM\Tag;

/**
 * Picture Class.
 *
 * WARNING: This is an experimental API that should not be used in production code.
 * The HTML <picture> element is a container used to specify multiple <source> elements for a specific <img> contained in it. The browser will choose the most suitable source according to the current layout of the page (the constraints of the box the image will appear in) and the device it will be displayed on (e.g. a normal or hiDPI device.)
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Picture
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Picture extends \DOM\Element
{

	/**
	 * Picture constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name picture.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'picture';
	}

}

?>