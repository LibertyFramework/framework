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

trait TemplatesTrait
{
    public function getTemplateFile($name)
    {
        return $this->templatesDir . '/' . $name;
    }
}



