<?php
/**
 * DocForge.
 *
 * PHP version 7
 *
 * @category   Script
 *
 * @author     Francesco Bianco <bianco@javanile.org>
 * @license    https://goo.gl/KPZ2qI  MIT License
 * @copyright  2015-2020 Javanile
 */

namespace DocForge\Framework\Scope;

use DocForge\Framework\Functions;
use DocForge\Framework\Page;
use DocForge\Framework\Page404;

trait PageTrait
{
    /**
     *
     */
    public function buildPage($item, $node, $slug = null)
    {
        $pageClass = $this->getClassName($item);
        if (!class_exists($pageClass)) {
            $pageClass = Page::class;
        }

        return new $pageClass($this, $node, $slug);
    }

    /**
     * @param $array
     * @return mixed
     */
    public static function getFirstPageRecursive($pages, &$slug)
    {
        if (!is_array($pages)) {
            return $pages;
        }

        $pagesReverse = array_reverse($pages);
        $firstValue = array_pop($pagesReverse);
        $firstKey = array_keys($pages)[0];
        $slug = $slug.'/'.$firstKey;

        if (is_array($firstValue)) {
            return static::getFirstPageRecursive($firstValue, $slug);
        }

        return $firstValue;
    }

    /**
     * @param $page
     */
    public function setCurrentPage($page)
    {
        $this->currentPage = $page;
    }

    /**
     * @return mixed
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @param string $slug
     * @return Page404
     */
    public function getPage404($slug  = '404')
    {
        return new Page404($this, $slug);
    }

    /**
     * @param $page
     * @return bool
     */
    public function isCurrentPage($page)
    {
        return $this->currentPage->getSlug() == $page->getSlug()
            || $this->currentPage->getNode() == $page->getNode();
    }

    /**
     * Check if page is parent of current page.
     *
     * @param $page
     * @return bool
     */
    public function isParentOfCurrentPage($page)
    {
        $node = $page->getNode().'/';
        $currentNode = $this->currentPage->getNode();
        $currentNodeCut = substr($currentNode, 0, strlen($node));

        return $node == $currentNodeCut;
    }

    /**
     * @return mixed
     */
    public function getCurrentRootPage()
    {
        foreach ($this->listRootPages() as $page) {
            if ($this->isCurrentPage($page)) {
                return $page;
            }
            if ($this->isParentOfCurrentPage($page)) {
                return $page;
            }
        }

        return new Page404($this, '404');
    }
}
