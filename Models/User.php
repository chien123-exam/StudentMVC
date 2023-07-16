<?php

class User extends Model
{
    const TABLE = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->setTable(static::TABLE);
    }
}