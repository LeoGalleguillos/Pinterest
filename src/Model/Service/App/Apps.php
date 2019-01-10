<?php
namespace LeoGalleguillos\Pinterest\Model\Service\App;

use Generator;
use LeoGalleguillos\Pinterest\Model\Factory as PinterestFactory;
use LeoGalleguillos\Pinterest\Model\Table as PinterestTable;

class Apps
{
    public function __construct(
        PinterestFactory\App $appFactory,
        PinterestTable\App $appTable
    ) {
        $this->appFactory = $appFactory;
        $this->appTable   = $appTable;
    }

    public function getApps(): Generator
    {
        foreach ($this->appTable->select() as $array) {
            yield $this->appFactory->buildFromArray($array);
        }
    }
}
