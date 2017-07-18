<?php

namespace DOM\Tag;

/**
 * Main Class.
 *
 * 
 * The HTML <main> element represents the main content of the <body> of a document or application. The main content area consists of content that is directly related to, or expands upon the central topic of, a document or the central functionality of an application.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Main
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Main extends \DOM\Element
{

	/**
	 * Main constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name main.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'main';
	}

}

?>