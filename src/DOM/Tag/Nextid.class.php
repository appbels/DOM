<?php

namespace DOM\Tag;

/**
 * Nextid Class.
 *
 * 
 * <nextid> is an obsolete HTML element that served to enable the NeXT web designing tool to generate automatic NAME labels for its anchors.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nextid
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Nextid
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work. This deprecated API should no longer be used, but will probably still work.
 */
class Nextid extends \DOM\Element
{

	/**
	 * Nextid constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name nextid.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'nextid';
	}

}

?>