<?php

namespace DOM\Interfaces;

/**
 * Element Class.
 *
 * Date:        2017-07-01
 * @author      AppBels <app.bels@gmail.com>
 * @name        Element
 * @namespace   DOM\Interfaces
 */
interface Element
{

	/**
	 * Compile element and return it.
	 * @access	public
	 *
	 * @return 	string
	 */
	public function compile ();

	/**
	 * Return parent Element.
	 * @access	public
	 *
	 * @return 	\DOM\Element|null
	 */
	public function getParent ();

	/**
	 * Set Parent Element.
	 * @access	public
	 * @param 	\DOM\Element 	$parent		Parent Element.
	 *
	 * @return 	\DOM\Element|\DOM\Raw
	 */
	public function setParent (\DOM\Element $parent);

}

?>