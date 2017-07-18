<?php

namespace DOM\Tag;

/**
 * Title Class.
 *
 * 
 * The HTML <title> element defines the title of the document, shown in a browser's title bar or on the page's tab. It can only contain text, and any contained tags are ignored.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Title
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Title extends \DOM\Element
{

	/**
	 * Title constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name title.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'title';
	}

}

?>