<?php

namespace DOM\Tag;

/**
 * Track Class.
 *
 * 
 * The HTML <track> element is used as a child of the media elements <audio> and <video>. It lets you specify timed text tracks (or time-based data), for example to automatically handle subtitles. The tracks are formatted in WebVTT format (.vtt files) - Web Video Text Tracks.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Track
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Track extends \DOM\Element
{

	/**
	 * Track constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name track.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'track';
	}

}

?>