<?php

namespace DOM\Tag;

/**
 * Embed Class.
 *
 * 
 * The HTML <embed> element represents an integration point for an external application or interactive content (in other words, a plug-in).
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Embed
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Embed extends \DOM\Element
{

	/**
	 * Embed constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name embed.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'embed';
	}

}

?>