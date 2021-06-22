<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Controller\Adminhtml\Index;

class LogFiles extends AbstractGridController
{
    const ADMIN_RESOURCE = 'Yireo_ExampleHyvaAdmin::logfiles';

    protected function getPageTitle(): string
    {
        return 'Logfiles listing';
    }
}
