<?php

namespace DOM\Tag;

/**
 * Footer Class.
 *
 * 
 * The HTML <footer> element represents a footer for its nearest sectioning content or sectioning root element. A footer typically contains information about the author of the section, copyright data or links to related documents.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Footer
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Footer extends \DOM\Element
{

	/**
	 * Footer constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name footer.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'footer';
	}

}

?>