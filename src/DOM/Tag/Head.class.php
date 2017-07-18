<?php

namespace DOM\Tag;

/**
 * Head Class.
 *
 * 
 * The HTML <head> element provides general information (metadata) about the document, including its title and links to its scripts and style sheets.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Head
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Head extends \DOM\Element
{

	/**
	 * Head constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name head.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'head';
	}

}

?>