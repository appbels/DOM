<?php

namespace DOM\Tag;

/**
 * Form Class.
 *
 * 
 * The HTML <form> element represents a document section that contains interactive controls to submit information to a web server.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Form
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Form extends \DOM\Element
{

	/**
	 * Form constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name form.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'form';
	}

}

?>