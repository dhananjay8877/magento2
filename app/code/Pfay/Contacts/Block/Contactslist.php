<?php
/*namespace Pfay\Contacts\Block;
use Magento\Framework\View\Element\Template;

class Contactslist extends \Magento\Framework\View\Element\Template
{
    public function __construct(Template\Context $context, array $data = array())
    {
        parent::__construct($context, $data);
        $this->setData('contacts',array());
    }

    public function addContacts($count)
    {
        $_contacts = $this->getData('contacts');
        $actualNumber = count($_contacts);
        $names = array();
        for($i=$actualNumber;$i<($actualNumber+$count);$i++) {
            $_contacts[] = 'nom '.($i+1);
        }
        $this->setData('contacts',$_contacts);
    }
}*/

namespace Pfay\Contacts\Block;
use Magento\Framework\View\Element\Template;

class Contactslist extends \Magento\Framework\View\Element\Template
{
    private $_contact;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Pfay\Contacts\Model\Contact $contact,
        \Magento\Framework\App\ResourceConnection $resource,
        array $data = []
    ) {
        $this->_contact = $contact;
        $this->_resource = $resource;

        parent::__construct(
            $context,
            $data
        );
    }

    public function getContacts()
    {
        $collection = $this->_contact->getCollection();
        return $collection;
    }
}
