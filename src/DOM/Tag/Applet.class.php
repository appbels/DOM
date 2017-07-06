<?php

namespace DOM\Tag;

/**
 * Applet Class.
 *
 * 
 * The HTML Applet Element (<applet>) identifies the inclusion of a Java applet.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/applet
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Applet
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Applet extends \DOM\Element
{

	/**
	 * Applet constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name applet.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'applet';
	}

}

?>