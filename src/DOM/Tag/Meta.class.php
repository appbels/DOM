<?php

namespace DOM\Tag;

/**
 * Meta Class.
 *
 * 
 * The HTML <meta> element represents metadata that cannot be represented by other HTML meta-related elements, like <base>, <link>, <script>, <style> or <title>.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Meta
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * 
 */
class Meta extends \DOM\Element
{

	/**
	 * Meta constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name meta.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'meta';
	}

}

?>