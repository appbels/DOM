<?php

namespace DOM\Tag;

/**
 * Dir Class.
 *
 * 
 * The HTML directory element (<dir>) represents a directory, namely a collection of filenames.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dir
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dir
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Dir extends \DOM\Element
{

	/**
	 * Dir constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dir.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dir';
	}

}

?>