<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-3.less', 'css/type-3.css');
        ?>
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="type-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-caret-square-o-right"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="new-sign-up">
                            <div class="icon">
                                <i class="fa fa-check-square-o"></i>
                            </div>
                            <div class="count">179
                            </div>
                            <h3>New Sign ups</h3>
                            <p>Lorem ipsum psdea itgum rixt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>