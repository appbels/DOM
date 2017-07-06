<?php

namespace DOM\Tag;

/**
 * Data Class.
 *
 * 
 * The HTML <data> element links a given content with a machine-readable translation. If the content is time- or date-related, the <time> element must be used.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Data
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Data extends \DOM\Element
{

	/**
	 * Data constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name data.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'data';
	}

}

?>