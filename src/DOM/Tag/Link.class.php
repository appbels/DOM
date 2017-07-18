<?php

namespace DOM\Tag;

/**
 * Link Class.
 *
 * 
 * The HTML <link> element specifies relationships between the current document and an external resource. Possible uses for this element include defining a relational framework for navigation. This element is most used to link to style sheets.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Link
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Link extends \DOM\Element
{

	/**
	 * Link constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name link.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'link';
	}

}

?>