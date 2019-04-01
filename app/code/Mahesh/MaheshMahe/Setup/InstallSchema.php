<?php
namespace Mahesh\MaheshMahe\Setup;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;

class InstallSchema implements \Magento\Framework\Setup\InstallSchemaInterface
{
public function install(SchemaSetupInterface $setup,ModuleContextInterface $context)
{
$installer = $setup;
$installer->startSetup();
$table = $installer->getConnection()->newTable(
	$installer->getTable('mageplaza_topic')
)->addColumn(
'topic_id',
\Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
null,
['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' =>
true],
'Topic ID'
)->addColumn(
'title',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
255,
['nullable' => false],
'Topic Title'
)->addColumn(
'content',
\Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
'2M',
[],
'Topic Content'
)->addColumn(
'creation_time',
\Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
null,
['nullable' => false, 'default' =>
\Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
'Topic Creation Time'
)->setComment(
'Mageplaza Topic Table'
);
$installer->getConnection()->createTable($table);
$installer->endSetup();
}
}
