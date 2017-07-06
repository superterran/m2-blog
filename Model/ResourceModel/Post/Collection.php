<?php
namespace Superterran\Blog\Model\ResourceModel\Post;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Superterran\Blog\Model\Post','Superterran\Blog\Model\ResourceModel\Post');
    }
}
