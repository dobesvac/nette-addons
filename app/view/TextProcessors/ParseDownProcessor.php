<?php

namespace NetteAddons\TextProcessors;


class ParseDownProcessor extends \Nette\Object implements \NetteAddons\ITextProcessor
{

	/** @var  League\CommonMark\CommonMarkConverter*/
	private $converter;


	public function __construct()
	{
		$this->converter = new \Parsedown();
	}


	/**
	 * @param string
	 * @return string[]|array (content => string, toc => string[]|array)
	 */
	public function process($input)
	{
		//$this->converter->parse($input);

		return array(
			'content' => $this->converter->text($input),
			'toc' => array(),
		);
	}

}
