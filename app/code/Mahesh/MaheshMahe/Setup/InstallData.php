<?php


namespace Mahesh\MaheshMahe\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * {@inheritdoc}
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
          $data = [
              ['title' => 'Football', 'content' => 'xyz'],
              ['title' => 'Bass Ball', 'content' => 'abc']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('mageplaza_topic'), $bind);
          }
    }
}

