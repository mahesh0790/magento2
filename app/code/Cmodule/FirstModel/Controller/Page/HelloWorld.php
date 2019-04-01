<?php

namespace Cmodule\FirstModel\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInerface;
use Cmodule\FirstModel\NotMagento\PencilInterface;


class HelloWorld extends \Magento\Framework\App\Action\Action
{
	protected $pencilInterface;
	public function __construct(Context $context, PencilInterface $pencilInterface){
		$this->pencilInterface = $pencilInterface;
		parent::__construct($context);
	}
	public function execute(){
		echo $this->pencilInterface->getPencilType();

	}
}
