<?php
namespace Biz\User\Dao\Impl;

use Biz\User\Dao\UserDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class UserDaoImpl extends GeneralDaoImpl implements UserDao
{
    protected $table = 'user';

    public function getByUsername($username)
    {
        return $this->getByFields(array('username' => $username));
    }

    public function declares()
    {
        return array(
            'timestamps' => array('created', 'updated'),
            'serializes' => array('roles' => 'delimiter'),
            'conditions' => array(
                'username = :username',
            ),
        );
    }
}
