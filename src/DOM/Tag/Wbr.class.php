<?php

namespace DOM\Tag;

/**
 * Wbr Class.
 *
 * 
 * The HTML <wbr> element represents a word break opportunity-a position within text where the browser may optionally break a line, though its line-breaking rules would not otherwise create a break at that location.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/wbr
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Wbr
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Wbr extends \DOM\Element
{

	/**
	 * Wbr constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name wbr.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'wbr';
	}

}

?>