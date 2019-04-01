<?php


namespace DataStore\Chapter2\Setup;

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
              ['sport_name' => 'Football'],
              ['sport_name' => 'Bass Ball']
          ];
          foreach ($data as $bind) {
              $setup->getConnection()
                ->insertForce($setup->getTable('sports'), $bind);
          }
    }
}
