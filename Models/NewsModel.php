<?
namespace Models;

use Classes\Db\Db;

class News extends BaseDbModel
{
    protected const TABLE = 'news';
    public $title;
    public $content;
    public $category;

    /**
    *  Класс для вывода последних новостей
    * @param - количество выводимых записей
    * @return массив обьектов класса
    */
    public static function findLastNews(int $count): array
    {
        $dbh = new \Db;
        $sql = 'SELECT * FROM ' . static::TABLE .' ORDER BY id DESC LIMIT ' . $count;
        return $dbh->query($sql, static::class);
    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

}




?>