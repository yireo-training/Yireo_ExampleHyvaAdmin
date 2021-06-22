<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('example_items', 'id');
    }
}
