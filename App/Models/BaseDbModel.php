<?php

namespace App\Models;


use Db;

class BaseDbModel
{

    protected const TABLE = '';
    public $id;

    public static function getAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
        # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

    public static function findById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $result = $db->query($sql, static::class, ['id' => $id]);
        return ($result) ? $result[0] : false;
    }

    public function insert()
    {
        $params = [];
        $data = [];
        $obj = get_object_vars($this);
        foreach ($obj as $name => $value) {
            if ($name == 'id') {
                continue;
            }
            $params[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT ' . static::TABLE . ' (' . implode(',', $params) . ') VALUES (' . implode(',', array_keys($data)) . ')';
        $dbh = new Db;
        $dbh->execute($sql, $data);
        return $this->id = $dbh->lastId();
    }

    public function update()
    {
        $params = [];
        $data = [];

        foreach (get_object_vars($this) as $name => $value) {
            $data[':' . $name] = $value;
            if ($name == 'id' || $name == 'dbh') {
                continue;
            }
            $params[] = $name . ' = :' . $name;

        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',', $params) . ' WHERE id = :id';

        $dbh = new Db;
        return $dbh->execute($sql, $data);
    }

    public function save()
    {

        if (!isset($this->id)) {

            return $this->insert();

        } else {

            return $this->update();
        }
    }

    public static function delete($id)
    {
        $dbh = new Db;
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = :id';
        return $dbh->execute($sql, ['id' => $id]);
    }
}
