<?php

namespace Mahesh\MaheshMahe\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{

	public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context){
		$setup->startSetup();
         if(version_compare($context->getVersion(), '1.0.1','<')){
          $setup->getConnection()->addColumn(
			  $setup->getTable('mageplaza_topic'),
			  'phone_number',
			  ['nullable' => false, 'type'=>\Magento\Framework\DB\Ddl\Table::TYPE_TEXT, 'comment' => 'phone number of a member']
		  );
		}
        $setup->endSetup();
	}
}	
