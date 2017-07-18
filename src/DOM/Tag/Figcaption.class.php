<?php

namespace DOM\Tag;

/**
 * Figcaption Class.
 *
 * 
 * The HTML <figcaption> element represents a caption or a legend associated with a figure or an illustration described by the rest of the data of the <figure> element which is its immediate ancestor.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Figcaption
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Figcaption extends \DOM\Element
{

	/**
	 * Figcaption constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name figcaption.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'figcaption';
	}

}

?>