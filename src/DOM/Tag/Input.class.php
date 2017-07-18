<?php

namespace DOM\Tag;

/**
 * Input Class.
 *
 * 
 * The HTML <input> element is used to create interactive controls for web-based forms in order to accept data from the user.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Input
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Input extends \DOM\Element
{

	/**
	 * Input constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name input.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'input';
	}

}

?>