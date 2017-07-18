<?php

namespace DOM\Tag;

/**
 * A Class.
 *
 * 
 * The HTML <a> element (or anchor element) creates a hyperlink to other web pages, files, locations within the same page, email addresses, or any other URL.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        A
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class A extends \DOM\Element
{

	/**
	 * A constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name a.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'a';
	}

}

?>