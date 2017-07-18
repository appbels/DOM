<?php

namespace DOM\Tag;

/**
 * Bdo Class.
 *
 * 
 * The HTML <bdo> element (bidirectional override) is used to override the current directionality of text. It causes the directionality of the characters to be ignored in favor of the specified directionality.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Bdo
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Bdo extends \DOM\Element
{

	/**
	 * Bdo constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name bdo.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'bdo';
	}

}

?>