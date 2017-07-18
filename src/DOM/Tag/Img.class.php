<?php

namespace DOM\Tag;

/**
 * Img Class.
 *
 * 
 * The HTML <img> element represents an image in the document.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Img
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Img extends \DOM\Element
{

	/**
	 * Img constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name img.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'img';
	}

}

?>