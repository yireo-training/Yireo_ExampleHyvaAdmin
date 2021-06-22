<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Controller\Adminhtml\Index;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

abstract class AbstractGridController extends Action
{
    /**
     * @var PageFactory
     */
    public $resultPageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        /** @var Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Yireo_ExampleHyvaAdmin::index');;
        $resultPage->getConfig()->getTitle()->prepend(__($this->getPageTitle()));
        return $resultPage;
    }

    abstract protected function getPageTitle(): string;
}
