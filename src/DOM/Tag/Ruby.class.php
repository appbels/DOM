<?php

namespace DOM\Tag;

/**
 * Ruby Class.
 *
 * 
 * The HTML <ruby> element represents a ruby annotation. Ruby annotations are for showing pronunciation of East Asian characters.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Ruby
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Ruby extends \DOM\Element
{

	/**
	 * Ruby constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name ruby.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'ruby';
	}

}

?>