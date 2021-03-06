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
        $less->compileFile('less/type-18.less', 'css/type-18.css');
        ?>
        <link href="css/type-18.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom-script.js" type="text/javascript"></script>
        <script src="js/check-all.js" type="text/javascript"></script>

    </head>

    <body>
        <div class="type-18">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-panel">
                            <div class="admin-title">
                                <h3>
                                    Table design
                                    <small>Custom design</small>
                                </h3>
                                <ul class="items">
                                    <li>
                                        <a class="collapse-link">
                                            <i class="fa fa-chevron-up"></i>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-wrench"></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Settings 1</a></li>
                                            <li><a href="#">Settings 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="close-link">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="admin-content">
                                <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>
                                <div class="info-table">
                                    <table class="table data-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <input type="checkbox" class="checkbox" onclick="checkAll('item', this)">
                                                </th>
                                                <th>Invoice </th>
                                                <th>Invoice Date </th>
                                                <th>Order </th>
                                                <th>Bill to Name </th>
                                                <th>Status </th>
                                                <th>Amount </th>
                                                <th class="last"><span>Action</span>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="item" name="id[]">
                                                </td>
                                                <td>121000040</td>
                                                <td>May 23, 2014 11:47:56 PM </td>
                                                <td>121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                                <td>John Blank L</td>
                                                <td>Paid</td>
                                                <td>$7.45</td>
                                                <td class="last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="item" name="id[]">
                                                </td>
                                                <td>121000037</td>
                                                <td>May 26, 2014 10:52:44 PM</td>
                                                <td>121000204</td>
                                                <td>Mike Smith</td>
                                                <td>Paid</td>
                                                <td>$333.21</td>
                                                <td class="last"><a href="#">View</a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="item" name="id[]">
                                                </td>
                                                <td>121000040</td>
                                                <td>May 27, 2014 11:47:56 PM </td>
                                                <td>121000210</td>
                                                <td>John Blank L</td>
                                                <td>Paid</td>
                                                <td>$7.45</td>
                                                <td class="last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="checkbox" class="item" name="id[]">
                                                </td>
                                                <td>121000039</td>
                                                <td>May 28, 2014 11:30:12 PM</td>
                                                <td>121000208</td>
                                                <td>John Blank L</td>
                                                <td>Paid</td>
                                                <td>$741.20</td>
                                                <td class="last"><a href="#">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>