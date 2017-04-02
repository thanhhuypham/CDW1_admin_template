<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/daterangepicker.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-11.less', 'css/type-11.css');
        ?>
        <link href="css/type-11.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.flot.js" type="text/javascript"></script>
        <script src="js/date.js" type="text/javascript"></script>
        <script src="js/moment.min.js" type="text/javascript"></script>
        <script src="js/daterangepicker.js" type="text/javascript"></script>
        <script src="js/custom-script.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-11">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h2>
                                    Network Activities 
                                    <small>Graph title sub-title</small>
                                </h2>
                                <div class="filter-time">
                                    <div id="reportrange">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                        <span>January 31, 2017 - March 1, 2017</span>
                                        <i class="fa fa-caret-down"></i>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <div id="chart_plot_03" class="demo-placeholder" style="width: 1110px;"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>

</html>