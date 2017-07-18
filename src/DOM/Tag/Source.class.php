<?php

namespace DOM\Tag;

/**
 * Source Class.
 *
 * 
 * The HTML <source> element specifies multiple media resources for either the <picture>, the <audio> or the <video> element. It is an empty element. It is commonly used to serve the same media content in multiple formats supported by different browsers.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Source
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Source extends \DOM\Element
{

	/**
	 * Source constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name source.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'source';
	}

}

?>