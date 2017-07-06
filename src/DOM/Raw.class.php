<?php

namespace DOM;

/**
 * Raw Class.
 *
 * Date:        2017-07-03
 * @author      AppBels <app.bels@gmail.com>
 * @final
 * @name        Raw
 * @namespace   DOM
 * @package		DOM
 * @see			\DOM\Interfaces\Element
 */
final class Raw implements \DOM\Interfaces\Element
{

	/**
	 * Raw value.
	 * @access	protected
	 * @var		string
	 */
	protected $value;

	/**
	 * Parent Element.
	 * Parent Element of this Element if has one.
	 * @access	protected
	 * @var		null|\DOM\Element
	 */
	protected $parent;

	/**
	 * Raw constructor.
	 * @access	public
	 * @param 	string	$value	Raw value string.
	 */
	public function __construct ($value)
	{
		$this->value = $value;
	}

	/**
	 * Compile element and return it.
	 * @access	public
	 *
	 * @return 	string
	 */
	public function compile ()
	{
		return $this->value;
	}

	/**
	 * Compile Element.
	 * Magic method of compile method.
	 * @access	public
	 * @see		\DOM\Element::compile()
	 *
	 * @return 	string
	 */
	public function __toString ()
	{
		return $this->compile();
	}

	/**
	 * Return parent Element.
	 * @access	public
	 *
	 * @return 	\DOM\Element|null
	 */
	public function getParent ()
	{
		return $this->parent;
	}

	/**
	 * Set Parent Element.
	 * @access	public
	 * @param 	\DOM\Element 	$parent		Parent Element.
	 *
	 * @return 	\DOM\Element|\DOM\Raw
	 */
	public function setParent (\DOM\Element $parent)
	{
		$this->parent = $parent;

		return $this;
	}

}

?>