<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-7.less', 'css/type-7.css');
        ?>
        <link href="css/type-7.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-7">
            <div class="container">
                <footer>
                    Gentelella - Bootstrap Admin Template by
                    <a href="#"> Colorlib</a>
                </footer>
            </div>
        </div>
    </body>

</html>