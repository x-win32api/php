<?php

namespace Models;


class BaseDbModel
{
    /**
    * @var имя класса = имя таблицы бд, задается в классе наследнике
    */
    protected const TABLE = '';
    
    /**
    * @var id записи
    */
    public $id;

    /**
    *  Вывод всех записей
    * @return array - массив обьектов класса
    */
    public static function getAll() : object
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

    /**
    *  Поиск одной записи
    * @param - (int)ID-записи
    * @return обьект класса / false
    */
    public static function findById(int $id)
    {
        $db = new \Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $result = $db->query($sql, static::class, ['id' => $id]);
        return ($result) ? $result[0] : false;
    }
}
