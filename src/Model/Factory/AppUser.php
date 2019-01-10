<?php
namespace LeoGalleguillos\Pinterest\Model\Factory;

use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;

class AppUser
{
    public function buildFromArray(array $array) : PinterestEntity\AppUser
    {
        $appEntity = new PinterestEntity\AppUser();

        return $appEntity
            ->setAccessToken($array['access_token'])
            ->setAppId($array['app_id'])
            ->setUserId($array['user_id']);
    }
}
