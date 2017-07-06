<?php

namespace DOM\Tag;

/**
 * Iframe Class.
 *
 * 
 * The HTML <iframe> element represents a nested browsing context, effectively embedding another HTML page into the current page. In HTML 4.01, a document may contain a head and a body or a head and a frameset, but not both a body and a frameset. However, an <iframe> can be used within a normal document body. Each browsing context has its own session history and active document. The browsing context that contains the embedded content is called the parent browsing context. The top-level browsing context (which has no parent) is typically the browser window.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Iframe
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Iframe extends \DOM\Element
{

	/**
	 * Iframe constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name iframe.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'iframe';
	}

}

?>