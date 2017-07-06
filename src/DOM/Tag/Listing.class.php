<?php

namespace DOM\Tag;

/**
 * Listing Class.
 *
 * 
 * The HTML Listing Element (<listing>) renders text between the start and end tags without interpreting the HTML in between and using a monospaced font. The HTML 2 standard recommended that lines shouldn't be broken when not greater than 132 characters.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/listing
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Listing
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Listing extends \DOM\Element
{

	/**
	 * Listing constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name listing.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'listing';
	}

}

?>