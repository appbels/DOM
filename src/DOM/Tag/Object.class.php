<?php

namespace DOM\Tag;

/**
 * Object Class.
 *
 * 
 * The HTML <object> element represents an external resource, which can be treated as an image, a nested browsing context, or a resource to be handled by a plugin.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Object
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Object extends \DOM\Element
{

	/**
	 * Object constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name object.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'object';
	}

}

?>