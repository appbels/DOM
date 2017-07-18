<?php

namespace DOM\Tag;

/**
 * Style Class.
 *
 * 
 * The HTML <style> element contains style information for a document, or part of a document. By default, the style instructions written inside that element are expected to be CSS.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Style
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Style extends \DOM\Element
{

	/**
	 * Style constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name style.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'style';
	}

}

?>