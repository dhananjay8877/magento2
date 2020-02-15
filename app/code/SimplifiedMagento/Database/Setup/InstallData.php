<?php


namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{

    /**
     * Installs data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
       $setup->startSetup();
       $setup->getConnection()->insert(
           $setup->getTable('affiliate_member'),
           ['name' =>'Anik Biswas', 'address' =>'Wz-3428 2nd floor rajapark New Delhi', 'status' =>true]
       );
        $setup->getConnection()->insert(
            $setup->getTable('affiliate_member'),
            ['name' =>'Vishnu Nair', 'address' =>'Nz-12 Huddacity, Gurugram']
        );
       $setup->endSetup();
    }
}