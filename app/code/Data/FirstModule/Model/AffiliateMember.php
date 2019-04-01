<?php


namespace Data\FirstModule\Model;

use Magento\Framework\Model\AbstractModel;
use Data\FirstModule\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;


class AffiliateMember extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(AffiliateMemberResource::class);

    }
}