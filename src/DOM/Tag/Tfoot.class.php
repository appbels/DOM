<?php

namespace DOM\Tag;

/**
 * Tfoot Class.
 *
 * 
 * The HTML <tfoot> element defines a set of rows summarizing the columns of the table.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Tfoot
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Tfoot extends \DOM\Element
{

	/**
	 * Tfoot constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name tfoot.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'tfoot';
	}

}

?>