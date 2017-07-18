<?php

namespace DOM\Tag;

/**
 * Video Class.
 *
 * 
 * Use the HTML <video> element to embed video content in a document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Video
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Video extends \DOM\Element
{

	/**
	 * Video constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name video.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'video';
	}

}

?>