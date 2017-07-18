<?php

namespace DOM\Tag;

/**
 * Image Class.
 *
 * WARNING: This API has not been standardized.
 * The HTML <image> element was an experimental element designed to display pictures. It never was implemented and the standard <img> element must be used.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/image
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Image
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Image extends \DOM\Element
{

	/**
	 * Image constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name image.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'image';
	}

}

?>