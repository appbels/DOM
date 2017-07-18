<?php

namespace DOM\Tag;

/**
 * Del Class.
 *
 * 
 * The HTML <del> element represents a range of text that has been deleted from a document. This element is often (but need not be) rendered with strike-through text.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Del
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Del extends \DOM\Element
{

	/**
	 * Del constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name del.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'del';
	}

}

?>