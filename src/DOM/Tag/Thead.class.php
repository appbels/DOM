<?php

namespace DOM\Tag;

/**
 * Thead Class.
 *
 * 
 * The HTML <thead> element defines a set of rows defining the head of the columns of the table.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Thead
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Thead extends \DOM\Element
{

	/**
	 * Thead constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name thead.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'thead';
	}

}

?>