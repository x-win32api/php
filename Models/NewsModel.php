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
    static function findLastNews(int $count): array
    {
        $dbh = new Db;
        $sql = 'SELECT * FROM ' . static::TABLE .' ORDER BY id DESC LIMIT ' . $count;
        $query = $dbh->query($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS, static::class);
        return $query->fetchAll();

    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

}




?>