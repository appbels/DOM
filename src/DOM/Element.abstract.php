<?php

namespace DOM;

/**
 * Element Class.
 *
 * Date:        2017-07-01
 * @author      AppBels <app.bels@gmail.com>
 * @name        Element
 * @namespace   DOM
 * @package		DOM
 * @see			\DOM\Interfaces\Element
 * @see			\Iterator
 * @see			\Countable
 * @see			\ArrayAccess
 */
abstract class Element implements \DOM\Interfaces\Element, \Iterator, \Countable, \ArrayAccess
{

	/**
	 * Flag autoclose.
	 * If true the Element doesn't have any child inside tag
	 * and no end tag will added. Otherwise will insert all added
	 * children and end tag.
	 * @access	protected
	 * @var 	bool
	 */
	protected $autoclose;

	/**
	 * Parent Element.
	 * Parent Element of this Element if has one.
	 * @access	protected
	 * @var		null|\DOM\Element
	 */
	protected $parent;

	/**
	 * Element attributes.
	 * An array with all attributes of Element.
	 * @access	protected
	 * @var 	array
	 */
	protected $attributes;

	/**
	 * Element children.
	 * An array with all children inside of Element.
	 * @access	protected
	 * @var 	array
	 */
	protected $children;

	/**
	 * Index counter.
	 * Counter for \Iterator.
	 * @access	protected
	 * @var 	int
	 */
	protected $index;

	/**
	 * Element constructor.
	 * @access	public
	 */
	public function __construct ()
	{
		$this->autoclose = false;
		$this->attributes = array();
		$this->children = array();
		$this->index = 0;
	}

	/**
	 * Return tag name.
	 * @abstract
	 * @access	public
	 *
	 * @return 	string
	 */
	abstract public function getTagName ();

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
	 * @return 	\DOM\Element
	 */
	public function setParent (\DOM\Element $parent)
	{
		$this->parent = $parent;

		return $this;
	}

	/**
	 * Add attribute.
	 * @access	public
	 * @param	array|string	$name
	 * @param 	null|string		$value
	 *
	 * @return	\DOM\Element
	 */
	public function addAttribute ($name, $value = null)
	{
		if (is_string($name)){
			$this->attributes[$name] = $value;
		}else if (is_array($name)){
			foreach ($name as $attr => $value){
				$this->attributes[$attr] = $value;
			}
		}

		return $this;
	}

	/**
	 * Return an attribute value.
	 * If attribute exists return the value of attribute, otherwise
	 * return $default value.
	 * @access	public
	 * @param	string		$name		Attribute name,
	 * @param 	mixed|null 	$default	Default value returned if attribute not exists.
	 *
	 * @return 	mixed|null
	 */
	public function getAttribute ($name, $default = null)
	{
		return ($this->hasAttribute($name)) ? $this->attributes[$name] : $default;
	}

	/**
	 * Check if Element has an attribute.
	 * Return true if Element has an attribute, false otherwise.
	 * @access	public
	 * @param 	string	$name	Name of attribute.
	 *
	 * @return 	bool
	 */
	public function hasAttribute ($name)
	{
		return isset($this->attributes[$name]);
	}

	/**
	 * Remove an attribute from Element.
	 * @access	public
	 * @param 	string	$name	Attribute name.
	 *
	 * @return 	\DOM\Element
	 */
	public function removeAttribute ($name)
	{
		if ($this->hasAttribute($name)){
			unset($this->attributes[$name]);
		}

		return $this;
	}

	/**
	 * Add a child Element.
	 * @access	public
	 * @param 	\DOM\Interfaces\Element $child	Child Element.
	 *
	 * @return 	\DOM\Element
	 */
	public function addChild (\DOM\Interfaces\Element $child)
	{
		$child->setParent($this);
		$this->children[] = $child;

		return $this;
	}

	/**
	 * Return all children Element of this Element.
	 * @access	public
	 *
	 * @return 	array
	 */
	public function getChildren ()
	{
		return $this->children;
	}

	/**
	 * Find all children with specific tagname.
	 * @access	public
	 * @param 	string	$tagname	Tagname.
	 *
	 * @return 	array
	 */
	public function getElementsByTagName ($tagname)
	{
		$children = array();

		/**
		 * @var	$child	\DOM\Element|\DOM\Raw
		 */
		foreach ($this as $child){
			if (!($child instanceof \DOM\Element)){
				continue;
			}

			if ($child->getTagName() == $tagname){
				$children[] = $child;
			}

			$recursive = $child->getElementsByTagName($tagname);

			if (!empty($recursive)){
				$children = array_merge($children, $recursive);
			}

		}

		return $children;
	}

	/**
	 * Find all children with specific attribute.
	 * It's possible filter children by attribute value.
	 * value param could be a regex.
	 * @access	public
	 * @param	string		$attribute	Attribute that must be present in child element.
	 * @param 	null|string	$value		Value that attribute must be contain. Could be a valid
	 *                             		regex. Default is null. [Optional]
	 *
	 * @return 	array
	 */
	public function getElementsByAttribute ($attribute, $value = null)
	{
		$children = array();

		/**
		 * @var	$child	\DOM\Element|\DOM\Raw
		 */
		foreach ($this as $child){
			if (!($child instanceof \DOM\Element)){
				continue;
			}

			if ($child->hasAttribute($attribute) && (!isset($value) || (isset($value) && $child->getAttribute($attribute) == $value) || (isset($value) && @preg_match($value, $child->getAttribute($attribute)) === 1))){
				$children[] = $child;
			}

			$recursive = $child->getElementsByAttribute($attribute, $value);

			if (!empty($recursive)){
				$children = array_merge($children, $recursive);
			}

		}

		return $children;
	}

	/**
	 * Compile object to string and return it.
	 * @access	public
	 *
	 * @return 	string
	 */
	public function compile ()
	{
		$string = "<{$this->getTagName()}";

		foreach ($this->attributes as $attribute => $value){
			$string .= (!isset($value)) ? " {$attribute}" : " {$attribute}=\"" . htmlspecialchars($value, ENT_COMPAT). "\"";
		}

		if ($this->autoclose){
			$string .= " />";
			return $string;
		}

		$string .= ">";

		/**
		 * @var	$child	\DOM\Interfaces\Element
		 */
		foreach ($this->children as $child){
			$string .= $child->compile();
		}

		$string .= "</{$this->getTagName()}>";

		return $string;
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
	 * Count elements of an object
	 * @link http://php.net/manual/en/countable.count.php
	 * @return int The custom count as an integer.
	 * </p>
	 * <p>
	 * The return value is cast to an integer.
	 * @since 5.1.0
	 */
	public function count ()
	{
		return count($this->children);
	}

	/**
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 * @since 5.0.0
	 */
	public function current ()
	{
		return $this->children[$this->index];
	}

	/**
	 * Move forward to next element
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 * @since 5.0.0
	 */
	public function next ()
	{
		$this->index++;
	}

	/**
	 * Return the key of the current element
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return mixed scalar on success, or null on failure.
	 * @since 5.0.0
	 */
	public function key ()
	{
		return $this->index;
	}

	/**
	 * Checks if current position is valid
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 * @since 5.0.0
	 */
	public function valid ()
	{
		return isset($this->children[$this->index]);
	}

	/**
	 * Rewind the Iterator to the first element
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 * @since 5.0.0
	 */
	public function rewind ()
	{
		$this->index = 0;
	}

	/**
	 * Whether a offset exists
	 * @link http://php.net/manual/en/arrayaccess.offsetexists.php
	 * @param mixed $offset <p>
	 * An offset to check for.
	 * </p>
	 * @return boolean true on success or false on failure.
	 * </p>
	 * <p>
	 * The return value will be casted to boolean if non-boolean was returned.
	 * @since 5.0.0
	 */
	public function offsetExists ($offset)
	{
		return $this->hasAttribute($offset);
	}

	/**
	 * Offset to retrieve
	 * @link http://php.net/manual/en/arrayaccess.offsetget.php
	 * @param mixed $offset <p>
	 * The offset to retrieve.
	 * </p>
	 * @return mixed Can return all value types.
	 * @since 5.0.0
	 */
	public function offsetGet ($offset)
	{
		return $this->getAttribute($offset);
	}

	/**
	 * Offset to set
	 * @link http://php.net/manual/en/arrayaccess.offsetset.php
	 * @param mixed $offset <p>
	 * The offset to assign the value to.
	 * </p>
	 * @param mixed $value <p>
	 * The value to set.
	 * </p>
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetSet ($offset, $value = null)
	{
		$this->addAttribute($offset, $value);
	}

	/**
	 * Offset to unset
	 * @link http://php.net/manual/en/arrayaccess.offsetunset.php
	 * @param mixed $offset <p>
	 * The offset to unset.
	 * </p>
	 * @return void
	 * @since 5.0.0
	 */
	public function offsetUnset ($offset)
	{
		$this->removeAttribute($offset);
	}

}

?>