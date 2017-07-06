<?php

namespace DOM\Tag;

/**
 * Aside Class.
 *
 * 
 * The HTML <aside> element represents a section of a document with content connected tangentially to the main content of the document (often presented as a sidebar).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Aside
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Aside extends \DOM\Element
{

	/**
	 * Aside constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name aside.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'aside';
	}

}

?>