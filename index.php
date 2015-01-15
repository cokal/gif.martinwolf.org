<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Martin Wolf">
    <meta name="description" content="Collection of gifs">

    <title>gif.martinwolf.org</title>

    <script>
        WebFontConfig = {
            google: { families: [ 'Lato:400,900:latin' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <style>
            *,::after,::before{margin:0;padding:0;box-sizing:border-box}html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}img{border:0}textarea{overflow:auto}table{border-collapse:collapse;border-spacing:0}body{padding:4rem 2rem;border-top:4px solid #bb11e5;border-bottom:4px solid #bb11e5}img{display:block;margin-bottom:1rem;max-width:100%;height:auto}.site-header{margin-bottom:4rem}.site-footer{text-align:center}.site-footer a{color:#3c3c3c}.site-footer a:focus,.site-footer a:hover{text-decoration:none}html{font-size:10px}body{color:#3c3c3c;font-family:Lato,Arial,sans-serif;font-size:1.4rem;line-height:1.7}h1{text-align:center;font-weight:900}h2{text-align:center;font-weight:400}.list{margin:0 auto;max-width:900px;list-style:none;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between}.list__item{max-width:30%;margin-bottom:5rem;padding:2rem 1rem}@media (max-width:740px){.list__item{max-width:50%;padding:1rem 2rem}}@media (max-width:440px){.list__item{max-width:100%;padding:0}}.path{width:100%;padding:1rem;font-family:Lato,Arial;font-size:1.3rem;border:1px solid #ccc}.path:focus{border-color:#3c3c3c}
    </style>
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
        <?php
            /**
             * getimagesize returns an array, which 4th key value consists of
             * the HTML for width and height
             */
            $image_dimensions = getimagesize($image)[3];
        ?>
        <li class="list__item">
            <img
                src="<?php echo $image ?>"
                <?php echo $image_dimensions ?>
                alt="<?php echo $image ?>">

            <input
                onFocus="this.select()"
                class="path"
                readonly
                type="text"
                value="http://<?php echo $_SERVER['HTTP_HOST'].'/'.$image ?>">
        </li>
    <?php } ?>
</ul>

<footer class="site-footer">
    <a href="http://martinwolf.org">A site by Martin Wolf</a>
</footer>

</body>
</html>
