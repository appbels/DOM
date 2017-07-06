<?php

namespace DOM\Tag;

/**
 * Script Class.
 *
 * 
 * The HTML <script> element is used to embed or reference an executable script.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Script
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Script extends \DOM\Element
{

	/**
	 * Script constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name script.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'script';
	}

}

?>