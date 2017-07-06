<?php
namespace Superterran\Blog\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Superterran\Blog\Api\Data\PostInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'superterran_blog_post';

    protected function _construct()
    {
        $this->_init('Superterran\Blog\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
