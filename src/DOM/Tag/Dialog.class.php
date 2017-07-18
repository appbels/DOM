<?php

namespace DOM\Tag;

/**
 * Dialog Class.
 *
 * WARNING: This is an experimental API that should not be used in production code.
 * The HTML <dialog> element represents a dialog box or other interactive component, such as an inspector or window.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dialog
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Dialog extends \DOM\Element
{

	/**
	 * Dialog constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dialog.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dialog';
	}

}

?>