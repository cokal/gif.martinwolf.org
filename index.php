<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Martin Wolf">
    <meta name="description" content="Collection of gifs">

    <title>gif.martinwolf.org</title>

    <link rel="stylesheet" href="dist/css/style.min.css">
</head>

<body>

<header class="site-header">
    <h1>gif.martinwolf.org</h1>
    <h2>A collection of gifs</h2>
</header>

<?php
    $images = glob("img/*.gif");
?>

<ul class="list">
    <?php foreach($images as $image) { ?>
        <li class="list__item">
            <img
                src="<?php echo $image ?>"
                alt="<?php echo $image ?>">

            <input
                onFocus="this.select()"
                class="path"
                readonly
                type="text"
                value="<?php echo $_SERVER['HTTP_HOST'].'/'.$image ?>">
        </li>
    <?php } ?>
</ul>

<footer class="site-footer">
    <a href="http://martinwolf.org">A site by Martin Wolf</a>
</footer>

</body>
</html>
