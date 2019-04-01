<?php

namespace Mahesh\MaheshMahe\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class MagePlaza extends AbstractDb
{
	protected function _construct()
	{
		$this->_init('mageplaza_topic','topic_id');
	}
}
