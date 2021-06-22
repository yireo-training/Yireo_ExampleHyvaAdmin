<?php declare(strict_types=1);

namespace Yireo\ExampleHyvaAdmin\Model;

use Magento\Framework\Model\AbstractModel;
use Yireo\ExampleHyvaAdmin\Model\ResourceModel\Item as ItemResourceModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ItemResourceModel::class);
    }
}
