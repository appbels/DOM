<?php

namespace DOM\Tag;

/**
 * Address Class.
 *
 * 
 * The HTML <address> element supplies contact information for its nearest <article> or <body> ancestor; in the latter case, it applies to the whole document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Address
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Address extends \DOM\Element
{

	/**
	 * Address constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name address.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'address';
	}

}

?>