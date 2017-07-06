<?php

namespace DOM\Tag;

/**
 * Br Class.
 *
 * 
 * The HTML <br> element produces a line break in text (carriage-return). It is useful for writing a poem or an address, where the division of lines is significant.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Br
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Br extends \DOM\Element
{

	/**
	 * Br constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name br.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'br';
	}

}

?>