<?php
namespace LeoGalleguillos\Pinterest\Model\Factory;

use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;

class App
{
    public function buildFromArray(array $array) : PinterestEntity\App
    {
        $appEntity = new PinterestEntity\App();

        return $appEntity
            ->setAppId($array['app_id'])
            ->setAppSecret($array['app_secret'])
            ->setName($array['name']);
    }
}
