<?php
namespace AppBundle\Twig\Extension;

class ofExtension extends \Twig_Extension
{
    public function of($var, $test = null)
    {
        switch($test)
        {
            case 'array':
                return is_array($var);
                break;
            case 'bool':
                return is_bool($var) || $var === 'true' || $var === 'false';
                break;
            case 'float':
                return is_float($var);
                break;
            case 'int':
                return is_int($var);
                break;
            case 'numeric':
                return is_numeric($var);
                break;
            case 'object':
                return is_object($var);
                break;
            case 'scalar':
                return is_scalar($var);
                break;
            case 'string':
                return is_string($var);
                break;
            case 'datetime':
                return $var instanceof \DateTime;
                break;
            default:
                throw new \Exception('Test is empty');
                break;
        }
    }

    public function getTests()
    {
        return [
            'of' => new \Twig_Function_Method($this, 'of')
        ];
    }

    public function getName()
    {
        return 'ofExtension';
    }
}