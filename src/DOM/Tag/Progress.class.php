<?php

namespace DOM\Tag;

/**
 * Progress Class.
 *
 * 
 * The HTML <progress> element represents the completion progress of a task, typically displayed as a progress bar.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Progress
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Progress extends \DOM\Element
{

	/**
	 * Progress constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name progress.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'progress';
	}

}

?>