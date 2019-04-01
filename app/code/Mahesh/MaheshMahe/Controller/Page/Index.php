<?php

namespace Mahesh\MaheshMahe\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Mahesh\MaheshMahe\Model\MagePlazaFactory;
class Index extends Action
{
	public function __contruct(Context $Context,MagePlazaFactory $magePlazaFactory)
	{
		$this->magePlazaFactory = $magePlazaFactory;
		parent::__contruct($context);
	}
	public function execute()
	{
       $MagePlaza = $this->magePlazaFactory->create();
       $member = $MagePlaza->load(1);
       var_dump($member->getData());
	}
}

