<?php 

class Student extends Model
{
    const TABLE = 'students';

    public function __construct()
    {
        parent::__construct();
        $this->setTable(static::TABLE);
    }
}

?>