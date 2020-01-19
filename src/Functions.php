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

namespace DocForge\Framework;

class Functions
{
    public static function isSlug($slug)
    {
        return (boolean) preg_match('/^[a-z][a-z0-9-]+$/i', $slug);
    }

    public static function isGlob($glob)
    {
        return (boolean) preg_match('/\*/', $glob);
    }

    /**
     *
     */
    public static function sanitizeSlug($slug)
    {
        return $slug;
    }

    /**
     * @param $file
     * @return string
     */
    public static function getFileSlug($file)
    {
        return strtr(pathinfo($file, PATHINFO_BASENAME), '.', '-');
    }
}
