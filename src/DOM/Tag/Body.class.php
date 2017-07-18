<?php

namespace DOM\Tag;

/**
 * Body Class.
 *
 * 
 * The HTML <body> Element represents the content of an HTML document. There can be only one <body> element in a document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Body
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Body extends \DOM\Element
{

	/**
	 * Body constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name body.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'body';
	}

}

?>