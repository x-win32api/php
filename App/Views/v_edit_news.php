<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=($content->title) ? $content->title : '' ;?></title>
</head>
<body>

    <h1>Редактор новости</h1>
    <form action="" method="POST">
    <p><input type="text" name="title" class="form-control mb-2" value="<?=($content->title) ? $content->title : '';?>"></p>
    <p><textarea rows="10" cols="45" name="content"><?=($content->content) ? $content->content : '';?></textarea></p>
    <input type="hidden" name="form_control" value="1">
        <select class="form-control" name="author_id">
        <?php foreach ($author as $item) : ?>

        <?php if($content->author_id == $item->id) : ?>
                <option selected='selected' value="<?=$item->id?>"><?=$item->name?></option>
        <?php else: ?>
                <option value="<?=$item->id?>"><?=$item->name?></option>
        <?php endif;?>
        <?php endforeach; ?>
        </select>
    <p><input type="submit" value="Сохранить"></p>
    <p><a href="./index.php">Все статьи</a> | <a href="./index.php?ctrl=delete&id=<?=$content->id;?>">Удалить статью</a></p>
    </form>
</body>
</html>