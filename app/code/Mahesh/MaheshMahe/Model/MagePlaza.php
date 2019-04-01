<?php

namespace Mahesh\MaheshMahe\Model;

use Magento\Framework\Model\AbstractModel;
use Mahesh\MaheshMahe\Model\ResourceModel\MagePlaza as MagePlazaResource;

class MagePlaza extends AbstractModel
{
	protected function _contruct()
	{
		$this->_init(MagePlazaResource::class);
	}
}
