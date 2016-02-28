<?php
namespace AppBundle\Service;

class CvDownloadCounter
{
    const COUNTER_FILENAME      = 'counter_download_cv.txt';
    const COUNTER_FOLDER        = __DIR__ . '/../Resources/data';

    private function getFullPath()
    {
        return sprintf(
            '%s/%s',
            self::COUNTER_FOLDER,
            self::COUNTER_FILENAME
        );
    }

    public function getUsableArray()
    {
        $array = [];
        foreach (file($this->getFullPath(), FILE_IGNORE_NEW_LINES) as $line) {
            $ligne = explode(':', $line);
            $array[$ligne[0]] = $ligne[1];
        }

        return $array;
    }

    public function incrementsToday()
    {
        $array = $this->getUsableArray();
        $date = (new \DateTime)->format('d/m/Y');
        if (array_key_exists($date, $array)) {
            $array[$date]++;
        } else {
            $array[$date] = '1';
        }

        return $array;
    }

    public function save(array $array = [])
    {
        $downloads = array_map(function($count, $date) {
            return sprintf('%s:%s', $date, $count);
        }, $array, array_keys($array));

        file_put_contents($this->getFullPath(), implode("\n",$downloads));
    }
}