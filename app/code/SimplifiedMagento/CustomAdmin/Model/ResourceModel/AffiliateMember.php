<?php
/**
 * Created by PhpStorm.
 * User: ilyassoladogun
 * Date: 2019-01-14
 * Time: 22:54
 */

namespace SimplifiedMagento\Database\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class AffiliateMember extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */


    protected function _construct()
    {
        $this->_init('affiliate_member', 'entity_id');
    }
}