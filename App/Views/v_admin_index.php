<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вывод новостей</title>
</head>
<>
<p><a href="./add.php">Добавить новость</a></p>
    <?php if(!empty($lastNews)): ?>

        <? foreach ($lastNews as $news) : ?>
            <a href='./edit.php?id=<?=$news->id?>'><h2><?=$news->title;?></h2></a>
            <p><?=$news->content;?></p>
            <p><a href="./delete.php?id=<?=$news->id?>">Удалить</a></p>
            <p><?=$news->author->name?></p>
        <? endforeach; ?>

    <? else: ?>    
        <h2>Нет новостей.</h2>
    <? endif; ?>   

</body>
</html>