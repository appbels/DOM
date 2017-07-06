<?php

namespace DOM\Tag;

/**
 * Plaintext Class.
 *
 * 
 * The HTML Plaintext Element (<plaintext>) renders everything following the start tag as raw text, without interpreting any HTML. There is no closing tag, since everything after it is considered raw text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/plaintext
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Plaintext
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Plaintext extends \DOM\Element
{

	/**
	 * Plaintext constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name plaintext.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'plaintext';
	}

}

?>