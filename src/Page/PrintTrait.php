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

namespace DocForge\Framework\Page;

trait PrintTrait
{
    public function printClass($class)
    {
        if (!class_exists($class)) {
            echo '<pre><code class="php">';
            echo "Class '{$class}' not found.";
            echo '</code></pre>';
            return;
        }

        $reflector = new \ReflectionClass($class);
        $file = $reflector->getFileName();
        $code = file_get_contents($file);

        echo '<pre><code class="php">';
        echo htmlentities(trim(str_replace('<?php', '', $code)));
        echo '</code></pre>';
    }

    public function printCodeBlock($file, $block)
    {
        $code = file_get_contents($file);

        if (preg_match('#//@block:start\('.$block.'\)(.*)//@block:end#is', $code, $matchs)) {
            echo '<pre><code class="php">';
            echo htmlentities(trim($matchs[1]));
            echo '</code></pre>';
        }
    }

    /**
     * @param $file
     */
    public function renderMarkdown($file)
    {
        $text = file_get_contents($this->getScope()->getWorkingDir($file));

        $parse = new \Parsedown();

        echo $parse->text($text);
    }
}
