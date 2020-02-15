<?php


namespace SimplifiedMagento\Database\Controller\Page;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use SimplifiedMagento\Database\Model\AffiliateMemberFactory;
use SimplifiedMagento\Database\Model\ResourceModel\AffiliateMember;

class Index extends Action
{
    protected $affiliateMemberFactory;
    public function __construct(Context $context, AffiliateMemberFactory $affiliateMemberFactory)
    {
        $this->affiliateMemberFactory = $affiliateMemberFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $affiliateMember=  $this->affiliateMemberFactory->create();
        //$memeber = $affiliateMember->load(1);
        //var_dump($memeber->getData());
        $collection= $affiliateMember->getCollection();
        foreach ($collection as $item){
            print_r($item->getData());
            echo '<br/>';
        }
    }
}