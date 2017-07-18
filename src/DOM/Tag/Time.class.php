<?php

namespace DOM\Tag;

/**
 * Time Class.
 *
 * 
 * The HTML <time> element represents either a time on a 24-hour clock or a precise date in the Gregorian calendar (with optional time and timezone information).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Time
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Time extends \DOM\Element
{

	/**
	 * Time constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name time.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'time';
	}

}

?>