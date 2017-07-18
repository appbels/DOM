<?php

namespace DOM\Tag;

/**
 * Param Class.
 *
 * 
 * The HTML <param> element defines parameters for an <object> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Param
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Param extends \DOM\Element
{

	/**
	 * Param constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name param.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'param';
	}

}

?>