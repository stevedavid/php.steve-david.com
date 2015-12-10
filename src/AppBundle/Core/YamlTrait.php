<?php
namespace AppBundle\Core;

use AppBundle\Core\CoreInterface as Core;

trait YamlTrait
{
    protected $ymlFiles = [];

    public function __construct()
    {
        foreach((new \ReflectionClass('AppBundle\Core\CoreInterface'))->getConstants() as $key => $file) {
            if (substr($key, 0, 4) == 'YML_') {
                $this->ymlFiles[strtolower(substr($key, 4))] = $file;
            }
        }
    }
}