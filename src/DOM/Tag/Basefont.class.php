<?php

namespace DOM\Tag;

/**
 * Basefont Class.
 *
 * 
 * The HTML basefont element (<basefont>) establishes a default font size for a document. Font size then can be varied relative to the base font size using the <font> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/basefont
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Basefont
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Basefont extends \DOM\Element
{

	/**
	 * Basefont constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name basefont.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'basefont';
	}

}

?>