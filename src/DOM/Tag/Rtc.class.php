<?php

namespace DOM\Tag;

/**
 * Rtc Class.
 *
 * 
 * The HTML <rtc> element embraces semantic annotations of characters presented in a ruby of <rb> elements used inside of <ruby> element. <rb> elements can have both pronunciation (<rt>) and semantic (<rtc>) annotations.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rtc
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Rtc
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Rtc extends \DOM\Element
{

	/**
	 * Rtc constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name rtc.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'rtc';
	}

}

?>