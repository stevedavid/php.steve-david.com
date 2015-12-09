<?php
namespace AppBundle\Core;

interface CoreInterface
{
    const YML_CITATIONS    = 'citations';
    const YML_PARCOURS     = 'parcours';
    const YML_COMPETENCES  = 'competences';
    const YML_REALISATIONS = 'realisations';
    const YML_CALENDRIER   = 'calendrier';
    const YML_CONTACT      = 'contact';

    const EMAIL_CONTACT    = 'steve@steve-david.com';

    const BIRTHDATE        = '1988-10-03';

    const YAML_MANAGER     = 'yamlManager';
    const YAML_UNEDITABLE  = [self::YML_CONTACT, self::YML_CALENDRIER];
}