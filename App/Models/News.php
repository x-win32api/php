<?

namespace App\Models;


use Exceptions\ValidationErrors;

class News extends BaseDbModel
{
    protected const TABLE = 'news';
    public $title;
    public $content;
    public $category;
    public $author_id;

    public function validateTitle($value){
        if (strlen($value) < 2 || strlen($value)>100) {
            throw new ValidationErrors('Текст должен быть больше 2 символов и меньше 100');
        }
        return $value;
    }
    public function validateContent($value){
    if (strlen($value) < 10) {
        throw new ValidationErrors('Текст должен быть не меньше 10 символов');
    }
    return $value;
    } public function validateAuthor_id($value){
    if(!preg_match('/^[0-9]+$/', $value)) {
        throw new ValidationErrors('Проблемы с автором!');
    }
    return $value;
    }

    public function __call($name, $argument){
     //   print 'Нет таких методов: '.$name.' - '.$argument .'<br>';
    }

    public function __get($name)
    {

        if ($name == 'author' && $this->author_id != null) {

            return Author::findById($this->author_id);

        }
    }

    public static function findLastNews(int $count): array
    {
        $dbh = new \Db;
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $count;
        return $dbh->query($sql, static::class);
        # SELECT * FROM users ORDER BY id DESC LIMIT 10
    }




}


?>