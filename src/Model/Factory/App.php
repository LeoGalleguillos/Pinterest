<?php
namespace LeoGalleguillos\Pinterest\Model\Factory;

use LeoGalleguillos\Pinterest\Model\Entity as PinterestEntity;
use LeoGalleguillos\Pinterest\Model\Table as PinterestTable;

class App
{
    public function __construct(
        PinterestTable\App $appTable
    ) {
        $this->appTable = $appTable;
    }

    public function buildFromAppId(int $appId): PinterestEntity\App
    {
        return $this->buildFromArray(
            $this->appTable->selectWhereAppId($appId)
        );
    }

    public function buildFromArray(array $array): PinterestEntity\App
    {
        $appEntity = new PinterestEntity\App();

        return $appEntity
            ->setAppId($array['app_id'])
            ->setAppSecret($array['app_secret'])
            ->setName($array['name']);
    }
}
