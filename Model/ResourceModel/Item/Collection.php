<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Model\ResourceModel\Item;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Yireo\ExampleHyvaAdmin\Model\Item as Model;
use Yireo\ExampleHyvaAdmin\Model\ResourceModel\Item as ResourceModel;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(
            Model::class,
            ResourceModel::class
        );
    }
}
