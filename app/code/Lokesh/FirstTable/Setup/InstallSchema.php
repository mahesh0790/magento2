<?php

namespace Cmodule\Database\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements InstallSchemaInterface
{

    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
            $installer = $setup;
	    $installer->startSetup();
	    $table = $installer->getConnection()->newTable(
		    $installer->getTable('afflicate_member')
	    )->addColumn(
		    'entity_id',
		    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
		    null,
		    ['identity'=>true , 'nullable'=>false , 'primary'=>true],
		    'MEMBERID'
	    )->addColumn(
		    'name',
		    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
		    255,
		    ['nullable'=>true],
		    'NUMBER OF MEMBER'
	    )->addColumn(
		    'address',
		    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
		    255,
		    ['nullable'=>false],
		    'ADDRESS OF MEMBER'
	    )->addColumn(
		    'status',
		     \Magento\Framework\DB\Ddl\Table::TYPE_BOOLEAN,
                    10,
                    ['nullable'=>false,'default'=>false],
		            'STATUS'
	    )->addColumn(
                    'created_at',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable'=>false,'default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                    'TIME CREATED'
	    )->addColumn(
                    'updated_at',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                    null,
                    ['nullable'=>false,'default'=>\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                    'TIME FOR UPDATE'
	    )->setComment(
		    'Affliated Member Table'
	    );
	    $installer->getConnection()->createtable($table);
	    $installer->endSetup();

    }
}
