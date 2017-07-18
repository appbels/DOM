<?php

namespace DOM\Tag;

/**
 * Output Class.
 *
 * 
 * The HTML <output> element represents the result of a calculation or user action.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Output
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Output extends \DOM\Element
{

	/**
	 * Output constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name output.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'output';
	}

}

?>