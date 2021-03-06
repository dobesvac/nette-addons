<?php

namespace NetteAddons\TextProcessors;

use League\CommonMark\CommonMarkConverter;

class CommonMarkProcessor extends \Nette\Object implements \NetteAddons\ITextProcessor
{

	/** @var  League\CommonMark\CommonMarkConverter*/
	private $converter;


	public function __construct()
	{
		$this->converter = new CommonMarkConverter();
	}


	/**
	 * @param string
	 * @return string[]|array (content => string, toc => string[]|array)
	 */
	public function process($input)
	{
		//$this->converter->parse($input);

		return array(
			'content' => $this->converter->convertToHtml($input),
			'toc' => array(),
		);
	}

}
