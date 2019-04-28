<?php

namespace LeeSwagger\PayfortApi\Controller\Tokenization;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_jsonFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\JsonFactory $jsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory
    ) {
        $this->_jsonFactory = $jsonFactory;
        parent::__construct($context);
    }


    public function execute()
    {
        return $this->_jsonFactory->create()->setData($this->getRequest()->getParams());
    }

}
