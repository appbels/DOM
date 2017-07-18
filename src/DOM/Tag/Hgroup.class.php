<?php

namespace DOM\Tag;

/**
 * Hgroup Class.
 *
 * WARNING: This is an experimental API that should not be used in production code.
 * The HTML <hgroup> element represents a multi-level heading for a section of a document. It groups a set of <h1>-<h6> elements.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hgroup
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Hgroup
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Hgroup extends \DOM\Element
{

	/**
	 * Hgroup constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name hgroup.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'hgroup';
	}

}

?>