<?php
namespace LeoGalleguillos\Pinterest\Model\Table;

use Exception;
use Generator;
use LeoGalleguillos\User\Model\Table as UserTable;
use Zend\Db\Adapter\Adapter;

class User extends UserTable\User
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
    }
}
