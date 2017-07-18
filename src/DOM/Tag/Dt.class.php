<?php

namespace DOM\Tag;

/**
 * Dt Class.
 *
 * 
 * The HTML <dt> element identifies a term in a description list. This element can occur only as a child element of a <dl>. It is usually followed by a <dd> element; however, multiple <dt> elements in a row indicate several terms that are all defined by the immediate next <dd> element.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dt
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Dt extends \DOM\Element
{

	/**
	 * Dt constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name dt.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'dt';
	}

}

?>