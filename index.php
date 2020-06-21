<?
require_once __DIR__.'/autoload.php';

use App\Models\Config;
use App\Models\News;

# получаем последние новости 
$lastNews = News::findLastNews(3);

# подключим шаблон
require_once(__DIR__ . '/App/Views/v_index.php');






/* Save()
$news = new News();
$news->title = 'Новый заголовок 4';
$news->content = 'dfghdfg dgdfg d fjhghjgh jghjghjgf fbdfgf bfgb fbfgb fgggb fgb fgb fbd dgty hdnmhmbvnmbn bvmn bvmbvnm';
$news->category = '1';
$news->Save();

*/


/*
$news->findById(3);
var_dump($news);
$news->title = $news->title.' !!!!!';
$news->insert();
*/

// insert
/*
$news = new News();
$news->title = 'Test insert News';
$news->content = 'Text news test Text news test Text news test Text news test Text news test Text news test';
$news->category = 1;
print $news->insert();
*/


/* Различные вариации
//var_dump($Product->getAll());
var_dump(News::findById(10));
var_dump(News::findLastNews(3));

var_dump(Product::getAll());
var_dump(News::getAll());
*/