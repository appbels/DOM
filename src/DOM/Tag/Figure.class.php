<?php

namespace DOM\Tag;

/**
 * Figure Class.
 *
 * 
 * The HTML <figure> element represents self-contained content, frequently with a caption (<figcaption>), and is typically referenced as a single unit.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Figure
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Figure extends \DOM\Element
{

	/**
	 * Figure constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name figure.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'figure';
	}

}

?>