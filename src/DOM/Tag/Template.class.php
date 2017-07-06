<?php

namespace DOM\Tag;

/**
 * Template Class.
 *
 * 
 * The HTML <template> element is a mechanism for holding client-side content that is not to be rendered when a page is loaded but may subsequently be instantiated during runtime using JavaScript.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Template
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Template extends \DOM\Element
{

	/**
	 * Template constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name template.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'template';
	}

}

?>