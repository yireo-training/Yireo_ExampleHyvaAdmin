<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Controller\Adminhtml\Index;

class Items extends AbstractGridController
{
    const ADMIN_RESOURCE = 'Yireo_ExampleHyvaAdmin::items';

    protected function getPageTitle(): string
    {
        return 'Example items';
    }
}
