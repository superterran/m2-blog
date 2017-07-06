<?php
namespace Superterran\Blog\Api;

use Superterran\Blog\Api\Data\PostInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface 
{
    public function save(PostInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(PostInterface $page);

    public function deleteById($id);
}
