<?
namespace App\Models;


class News extends BaseDbModel
{
    protected const TABLE = 'news';
    public $title;
    public $content;
    public $category;

    public static function findLastNews(int $count): array
    {
        $dbh = new \Db;
        $sql = 'SELECT * FROM ' . static::TABLE .' ORDER BY id DESC LIMIT ' . $count;
        return $dbh->query($sql, static::class);
    # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }

    public function Test(){
        print 'lol';
    }
}




?>