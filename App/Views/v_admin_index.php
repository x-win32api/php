<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод новостей</title>
</head>

<p><a href="./index.php?ctrl=add">Добавить новость</a></p>
    <?php if(!empty($lastNews)): ?>

        <? foreach ($lastNews as $news) : ?>
            <a href='./index.php?ctrl=edit&id=<?=$news->id?>'><h2><?=$news->title;?></h2></a>
            <p><?=$news->content;?></p>
            <p><a href="./index.php?ctrl=delete&id=<?=$news->id?>">Удалить</a></p>
            <p><?=$news->author->name?></p>
        <? endforeach; ?>

    <? else: ?>    
        <h2>Нет новостей.</h2>
    <? endif; ?>   

</body>
</html>