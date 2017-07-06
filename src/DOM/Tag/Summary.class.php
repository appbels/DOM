<?php

namespace DOM\Tag;

/**
 * Summary Class.
 *
 * 
 * The HTML <summary> element is used as a summary, caption, or legend for the content of a <details> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Summary
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Summary extends \DOM\Element
{

	/**
	 * Summary constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name summary.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'summary';
	}

}

?>