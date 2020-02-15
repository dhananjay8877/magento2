<?php


namespace SimplifiedMagento\Database\Model;


use SimplifiedMagento\Database\Api\AffiliateMemberRepositoryInterface;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember\CollectionFactory;
class AffiliateMemberRespository implements AffiliateMemberRepositoryInterface
{
   private $collectionFactory;
   public function __construct(CollectionFactory $collectionFactory)
   {
    $this->collectionFactory    =$collectionFactory;
   }

    /**
     * @return \SimplifiedMagento\Database\Api\Data\AffiliateMemberInterface
     */
    public function getList()
    {
      $this->collectionFactory->create()->getItems();
    }
}