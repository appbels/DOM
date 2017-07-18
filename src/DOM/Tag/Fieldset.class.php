<?php

namespace DOM\Tag;

/**
 * Fieldset Class.
 *
 * 
 * The HTML <fieldset> element is used to group several controls as well as labels (<label>) within a web form.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Fieldset
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Fieldset extends \DOM\Element
{

	/**
	 * Fieldset constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name fieldset.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'fieldset';
	}

}

?>