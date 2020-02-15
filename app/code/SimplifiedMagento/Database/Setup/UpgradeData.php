<?php


namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if(version_compare($context->getVersion(), '0.0.6','<')){
            $setup->getConnection()->insert(
                $setup->getTable('affiliate_member'),
                ['name' =>'Rajesh', 'status' =>true, 'address' =>'H-22 Badarpur', 'phone_number' =>'8269930916' ]
            );
        }
        $setup->endSetup();
    }
}