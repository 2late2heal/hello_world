<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Мой бложенька</title>
    <link rel="stylesheet" href="./css/css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
     <div class="container">
        <h1>Это бложек</h1>
         <div>
                <?php foreach($articles as $a): ?>
                <article>
                    <h3><a href="article.pp?id=<?$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано: <?=$a['date']?></em>
                    <p><?=$a['content']?></p>
                </article>
                <?php endforeach ?>
         </div>
     </div>
<footer>
    <p>Бложенька <br>Copyright &copy; 2015</p>
</footer>
</body>
</html>