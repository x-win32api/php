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
    *  Удаление записи
    * @param - (int)ID-записи
    */
    static function delete(int $id): bool
    {
        $dbh = new Db;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        return $dbh->execute($sql, ['id' => $id]);

    # DELETE FROM articles WHERE id = :id; 
    # ['id' => $id];
    }

    /**
    *  Поиск одной записи
    * @param - (int)ID-записи
    * @return обьект класса
    */
    static function findById($id)
    {
        $dbh = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $sth = $dbh->query($sql, ['id' => $id]);
        $sth->setFetchMode(\PDO::FETCH_CLASS, static::class);
        return $sth->fetch();

    # $sql = "SELECT * FROM messages WHERE id_message=:id";
    # $arg = ['id' => $id];
    }
}
