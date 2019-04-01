<?php

namespace Data\FirstModule\Model\ResourceModel;

use Magento\Framework\Model\ResourseModel\Db\AbstractDb;


class AffiliateMember extends AbstractDb
{


    protected function construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}