<?php

namespace DOM\Tag;

/**
 * Article Class.
 *
 * 
 * The HTML <article> element represents a self-contained composition in a document, page, application, or site, which is intended to be independently distributable or reusable (e.g., in syndication). Examples include: a forum post, a magazine or newspaper article, or a blog entry.
 * https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        Article
 * @namespace   DOM\Tag
 * @package		DOM
 * @see			\DOM\Element
 */
class Article extends \DOM\Element
{

	/**
	 * Article constructor.
	 * @access	public
	 * @see		\DOM\Element::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Return tag name article.
	 * @access	public
	 * @see		\DOM\Element::getTagName()
	 *
	 * @return 	string
	 */
	public function getTagName ()
	{
		return 'article';
	}

}

?>