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

<h1>gif.martinwolf.org</h1>
<h2>A collection of gifs</h2>

<?php
    $images = glob("img/*.gif");
?>

<ul class="gif-container">
    <?php foreach($images as $image) { ?>
        <li>
            <img
                src="<?php echo $image ?>"
                alt="<?php echo $image ?>">

            <input
                class="auto-select"
                readonly
                type="text"
                value="http://gif.martinwolf.org/<?php echo $image ?>">
        </li>
    <?php } ?>
</ul>

</body>
</html>
