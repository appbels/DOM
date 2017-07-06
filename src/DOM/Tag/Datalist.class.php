<?php

namespace DOM\Tag;

/**
 * Datalist Class.
 *
 * 
 * The HTML <datalist> element contains a set of <option> elements that represent the values available for other controls.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Datalist
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Datalist extends \DOM\Element
{

	/**
	 * Datalist constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name datalist.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'datalist';
	}

}

?>