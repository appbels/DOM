<?php

namespace DOM\Tag;

/**
 * Command Class.
 *
 * 
 * The command element represents a command which the user can invoke.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/command
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Command
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 * @depreacted	This is an obsolete API and is no longer guaranteed to work.
 */
class Command extends \DOM\Element
{

	/**
	 * Command constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name command.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'command';
	}

}

?>