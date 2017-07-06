<?php

namespace DOM\Tag;

/**
 * Legend Class.
 *
 * 
 * The HTML <legend> element represents a caption for the content of its parent <fieldset>.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Legend
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Legend extends \DOM\Element
{

	/**
	 * Legend constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name legend.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'legend';
	}

}

?>