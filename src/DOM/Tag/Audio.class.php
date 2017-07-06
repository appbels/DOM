<?php

namespace DOM\Tag;

/**
 * Audio Class.
 *
 * 
 * The HTML <audio> element is used to embed sound content in documents. It may contain one or more audio sources, represented using the src attribute or the <source> element: the browser will choose the most suitable one. It can also be the destination for streamed media, using a MediaStream.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Audio
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Audio extends \DOM\Element
{

	/**
	 * Audio constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name audio.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'audio';
	}

}

?>