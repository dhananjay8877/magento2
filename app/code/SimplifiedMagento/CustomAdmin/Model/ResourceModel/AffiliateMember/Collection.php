<?php
/**
 * Created by PhpStorm.
 * User: ilyassoladogun
 * Date: 2019-01-15
 * Time: 04:48
 */

namespace SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use SimplifiedMagento\Database\Model\AffiliateMember;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember as AffiliateMemberResource;
class Collection extends AbstractCollection
{

    protected $_idFieldName = 'entity_id';
    protected function _construct()
    {
        parent::_construct();
        $this->_init(AffiliateMember::class, AffiliateMemberResource::class);
    }

}