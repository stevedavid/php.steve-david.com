<?php
namespace AppBundle\Service;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

class YamlManager
{
    public function loadData($file)
    {
        return (new Parser)
                ->parse(file_get_contents($this->locateFile($file)))
        ;
    }

    public function locateFile($file)
    {
        return (new FileLocator([__DIR__.'/../Resources/data']))
            ->locate($file . '.yml', null, true)
        ;
    }

    public function saveData($file, $content)
    {
        if(file_put_contents($file, (new Dumper)->dump($content, 3))) {
            return true;
        }

        return false;
    }
}