<?php

namespace Models;


class BaseDbModel
{

    protected const TABLE = '';
    public $id;

    public static function getAll() 
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

    public static function findById(int $id)
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $result = $db->query($sql, static::class, ['id' => $id]);
        return ($result) ? $result[0] : false;
    }
}
