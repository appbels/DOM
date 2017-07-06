<?php

namespace DOM\Tag;

/**
 * Tbody Class.
 *
 * 
 * The HTML <tbody> element groups one or more <tr> elements as the body of a <table> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Tbody
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Tbody extends \DOM\Element
{

	/**
	 * Tbody constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name tbody.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'tbody';
	}

}

?>