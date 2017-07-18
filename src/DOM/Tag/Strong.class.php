<?php

namespace DOM\Tag;

/**
 * Strong Class.
 *
 * 
 * The HTML <strong> element gives text strong importance, and is typically displayed in bold.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Strong
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Strong extends \DOM\Element
{

	/**
	 * Strong constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name strong.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'strong';
	}

}

?>