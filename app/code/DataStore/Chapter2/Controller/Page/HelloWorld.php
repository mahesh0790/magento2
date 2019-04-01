<?php
namespace DataStore\Chapter2\Controller\Page;


use Magento\Framework\App\ResponseInerface;
use DataStore\Chapter2\NotMagento\PencilInterface;
class HelloWorld extends \Magento\Framework\App\Action\Action
{
    protected $pencilInterface;
 public function __construct(Context $context, PencilInterface $pencilInterface)
{
    $this->pencilInterface = $pencilInterface;
    parent::__construct($context);
}
public function execute()
{
echo $this->pencilInterface->getPencilType();
}
}