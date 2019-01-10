<?php
namespace LeoGalleguillos\Pinterest\Model\Table;

use Exception;
use Generator;
use Zend\Db\Adapter\Adapter;

class App
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function select(): Generator
    {
        $sql = '
            SELECT `app_id`
                 , `app_secret`
                 , `name`
              FROM `app`
             ORDER
                BY `name` ASC
                 ;
        ';
        foreach ($this->adapter->query($sql)->execute() as $array) {
            yield($array);
        }
    }
}
