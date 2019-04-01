<?php

namespace Data\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Data\FirstModule\Model\AffiliateMemberFactory;
use Data\FirstModule\Model\ResourceModel\AffiliateMember;
class Index extends Action
{
    protected $affiliateMemberFactory;

    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
         $this->affiliateMemberFactory = $affiliateMemberFactory;
         parent::__construct($context);
    }
    public function execute()
    {
        $affilicateMember = $this->affiliateMemberFactory->create();
        $member = $affilicateMember->load(1);
        var_dump($member->getData);
    }
}