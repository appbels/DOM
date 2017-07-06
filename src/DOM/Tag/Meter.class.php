<?php

namespace DOM\Tag;

/**
 * Meter Class.
 *
 * 
 * The HTML <meter> element represents either a scalar value within a known range or a fractional value.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Meter
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Meter extends \DOM\Element
{

	/**
	 * Meter constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name meter.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'meter';
	}

}

?>