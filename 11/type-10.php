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
        $less->compileFile('less/type-10.less', 'css/type-10.css');
        ?>
        <link href="css/type-10.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="js/custom-script.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline_three" style="height: 60px;"></span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="total-chart">
                            <span>Total Sessions</span>
                            <h3>231,809</h3>
                            <span class="sparkline11" style="height: 60px;"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>