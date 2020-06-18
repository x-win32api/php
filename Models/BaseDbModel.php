<?php

namespace Models;

use Classes\Db\Db;

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
    public static function getAll(): array
    {
        $dbh = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE;
        $query = $dbh->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS, static::class);
        return $query->fetchAll();

    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

    /**
    *  Поиск одной записи
    * @param - (int)ID-записи
    * @return обьект класса
    */
    public static function findById(int $id)
    {
        $dbh = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $sth = $dbh->query($sql, ['id' => $id]);
        $sth->setFetchMode(\PDO::FETCH_CLASS, static::class);
        return $sth->fetch();

    }
}
