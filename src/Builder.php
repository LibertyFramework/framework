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

use Gajus\Dindent\Indenter;

class Builder extends Scope
{
    /**
     *
     */
    protected $buildDir;

    /**
     *
     */
    protected $assets = [
        'css' => ['css', 'map'],
        'fonts' => [],
        'js' => ['js', 'map'],
    ];

    /**
     * Constructor.
     *
     * @param $configFile
     */
    public function __construct($config, $theme)
    {
        $this->config = $config;
        $this->publicDir = $theme . '/public';
        $this->templatesDir = $theme . '/templates';
        $this->buildDir = isset($this->config['output']) ? $this->config['output'] : 'build';
    }

    /**
     *
     */
    public function run()
    {
        $indenter = new Indenter(['indentation_character' => '  ']);

        // Build HTML files
        foreach ($this->listAllPages() as $page) {
            $this->setCurrentPage($page);
            $pageFile = $this->getBuildPath($page->getFileName());
            if (!is_dir(dirname($pageFile))) {
                mkdir(dirname($pageFile), 0777, true);
            }
            $html = $page->renderize();
            $html = $indenter->indent($html);

            file_put_contents($pageFile, $html);
        }

        // Copy Assests
        foreach ($this->assets as $assetDir => $extensions) {
            static::assetCopy(
                $this->publicDir.'/'.$assetDir,
                $this->buildDir.'/'.$assetDir,
                $extensions
            );
        }
    }

    /**
     * @param string $file
     * @return string
     */
    public function getBuildPath($file = '')
    {
        $cwd = getcwd();

        return $cwd.'/'.$this->buildDir.'/'.$file;
    }

    /**
     * @param $src
     * @param $dst
     */
    public static function assetCopy($source, $target, $extensions)
    {
        $dir = opendir($source);

        if (!is_dir($target)) {
            mkdir($target, 0777, true);
        }

        while (($file = readdir($dir))) {
            if (($file != '.') && ($file != '..')) {
                if (is_dir($source . '/' . $file)) {
                    self::assetCopy($source .'/'. $file, $target .'/'. $file, $extensions);
                } else {
                    copy($source .'/'. $file, $target .'/'. $file);
                }
            }
        }

        closedir($dir);
    }
}
