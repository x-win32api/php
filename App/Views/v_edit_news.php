<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=($news->title) ? $news->title : '' ;?></title>
</head>
<body>
    <h1>Редактор новости</h1>
    <form action="" method="POST">
    <p><input type="text" name="title" class="form-control mb-2" value="<?=($news->title) ? $news->title : '';?>"></p>
    <p><textarea rows="10" cols="45" name="content"><?=($news->content) ? $news->content : '';?></textarea></p>
    <input type="hidden" name="form_control" value="1">
    <p><input type="submit" value="Сохранить"></p>
    <p><a href="./index.php">На главную</a></p>
    </form>
</body>
</html>