<?php

namespace DOM\Tag;

/**
 * Header Class.
 *
 * 
 * The HTML <header> element represents a group of introductory or navigational aids. It may contain some heading elements but also other elements like a logo, a search form, and so on.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Header
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Header extends \DOM\Element
{

	/**
	 * Header constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name header.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'header';
	}

}

?>