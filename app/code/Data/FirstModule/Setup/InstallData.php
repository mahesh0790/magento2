<?php


namespace Data\FirstModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

/**
 * @codeCoverageIgnore
 */
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
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name' => 'ade', 'address' => 'No 10, dubai', 'status'=> true]
    );
	$setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name' => 'Alex', 'address' => 'No 11, dubai']
        );
        $setup->endSetup();
    }
       
}

