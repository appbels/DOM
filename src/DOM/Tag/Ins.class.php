<?php

namespace DOM\Tag;

/**
 * Ins Class.
 *
 * 
 * The HTML <ins> element represents a range of text that has been added to a document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Ins
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Ins extends \DOM\Element
{

	/**
	 * Ins constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name ins.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'ins';
	}

}

?>