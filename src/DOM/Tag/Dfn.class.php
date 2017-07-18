<?php

namespace DOM\Tag;

/**
 * Dfn Class.
 *
 * 
 * The HTML <dfn> element represents the defining instance of a term.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dfn
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dfn
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Dfn extends \DOM\Element
{

	/**
	 * Dfn constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dfn.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dfn';
	}

}

?>