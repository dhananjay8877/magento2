<?php
namespace SimplifiedMagento\FirstModule\Controller\Page;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use function PHPSTORM_META\type;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\App\Request\Http;
use SimplifiedMagento\FirstModule\Model\HeavyServices;
class HelloWorld extends \Magento\Framework\App\Action\Action
{
    //protected $pencilInterface;
    //protected $productFactory;
    //protected $_eventManager;
    protected  $http;
    protected $heavyService;
    public function __construct(Context $context,
                                HeavyServices $heavyService,
                                //ManagerInterface $_eventManager,
                                Http $http)
    {
        //$this->pencilInterface = $pencilInterface;
        //$this->productFactory = $productFactory;
        //$this->_eventManager = $_eventManager;
        $this->http= $http;
        $this->heavyService = $heavyService;
        parent::__construct($context);
    }

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface|void
     */
    public function execute()
    {
      /*$message = new \Magento\Framework\DataObject(array("greeting"=>"Good afternoon"));
        $this->_eventManager->dispatch('custom_event',['greeting'=>$message]);
       echo $message->getGreeting();*/
       $id =$this->http->getParam('id',0);
       if($id ==1){
           $this->heavyService->printHeavyServiceMessage();
       }else{
           echo "Heavy services not Used";
       }

    }
}
