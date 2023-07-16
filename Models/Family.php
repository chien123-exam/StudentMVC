<?php

class Family extends Model
{
    const TABLE = 'families';

    public function __construct()
    {
        parent::__construct();
        $this->setTable(static::TABLE);
    }
}