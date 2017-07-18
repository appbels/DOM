<?php

namespace DOM\Tag;

/**
 * Keygen Class.
 *
 * 
 * The HTML <keygen> element exists to facilitate generation of key material, and submission of the public key as part of an HTML form. This mechanism is designed for use with Web-based certificate management systems. It is expected that the <keygen> element will be used in an HTML form along with other information needed to construct a certificate request, and that the result of the process will be a signed certificate.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/keygen
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Keygen
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This deprecated API should no longer be used, but will probably still work.
 */
class Keygen extends \DOM\Element
{

	/**
	 * Keygen constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
		$this->autoclose = true;
	}

	/**
	 * Return tag name keygen.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'keygen';
	}

}

?>