<?php
namespace LeoGalleguillos\Pinterest\Model\Table;

use Exception;
use Generator;
use Zend\Db\Adapter\Adapter;

class AppUser
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }

    public function selectWhereAppId(int $appId): Generator
    {
        $sql = '
            SELECT `app_id`
                 , `user_id`
                 , `access_token`
              FROM `app_user`
             WHERE `app_id` = ?
             ORDER
                BY `user_id` ASC
                 ;
        ';
        foreach ($this->adapter->query($sql)->execute() as $array) {
            yield($array);
        }
    }
}
