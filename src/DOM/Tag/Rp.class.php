<?php

namespace DOM\Tag;

/**
 * Rp Class.
 *
 * 
 * The HTML <rp> element is used to provide fall-back parentheses for browsers that do not support display of ruby annotations using the <ruby> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Rp
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Rp extends \DOM\Element
{

	/**
	 * Rp constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name rp.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'rp';
	}

}

?>