<?php
/**
 * File description.
 *
 * PHP version 5
 *
 * @category -
 *
 * @author    -
 * @copyright -
 * @license   -
 */

namespace DocForge\Framework\Scope;

trait TemplatesTrait
{
    public function getTemplateFile($name)
    {
        return $this->templatesDir . '/' . $name;
    }
}



