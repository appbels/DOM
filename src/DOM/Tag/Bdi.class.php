<?php

namespace DOM\Tag;

/**
 * Bdi Class.
 *
 * 
 * The HTML <bdi> element (bidirectional isolation) isolates a span of text that might be formatted in a different direction from other text outside it.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Bdi
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Bdi extends \DOM\Element
{

	/**
	 * Bdi constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name bdi.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'bdi';
	}

}

?>