<?php

namespace DOM\Tag;

/**
 * Caption Class.
 *
 * 
 * The HTML <caption> element represents the title of a table. Though it is always the first descendant of a <table>, its styling, using CSS, may place it elsewhere, relative to the table.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Caption
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Caption extends \DOM\Element
{

	/**
	 * Caption constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name caption.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'caption';
	}

}

?>