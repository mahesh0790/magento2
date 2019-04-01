<?php

namespace Cmodule\HelloWorld\Block;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
	public function getHelloWorld()
	{
		return "This is our custom Block";
	}
public function helloArray() {
	$array = [
	"good",
 	'very good',
        'excellent'
];
	return $array;
}
}

