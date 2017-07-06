<?php
namespace Superterran\Blog\Model\ResourceModel;
class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('superterran_blog_post','superterran_blog_post_id');
    }
}
