<?php

namespace DOM\Tag;

/**
 * Mark Class.
 *
 * 
 * The HTML <mark> element represents highlighted text, i.e., a run of text marked for reference purpose, due to its relevance in a particular context.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Mark
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Mark extends \DOM\Element
{

	/**
	 * Mark constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name mark.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'mark';
	}

}

?>