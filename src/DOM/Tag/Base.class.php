<?php

namespace DOM\Tag;

/**
 * Base Class.
 *
 * 
 * The HTML <base> element specifies the base URL to use for all relative URLs contained within a document. There can be only one <base> element in a document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Base
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Base extends \DOM\Element
{

	/**
	 * Base constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name base.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'base';
	}

}

?>