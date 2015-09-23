<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:47 PM
     */
    error_reporting(error_reporting() & ~E_NOTICE);
    $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];
    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;', 'root', '', $opts);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mystery Boxes | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="canonical" href="/items/mystery-boxes">
        <link href="css/re.css" rel="stylesheet">
        <link href="css/trades.css" rel="stylesheet">
    </head>
    <body>
        <?php require_once('banana/template/navbar.php') ?>
        <div class="container">
            <noscript>
                <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
                    extensively, so expect a much degraded experience!
                </div>
            </noscript>
            <div class="row" id="d">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1>Mystery Boxes</h1>
                            <p>These are the latest Mystery Boxes in
                                RotMG.
                            </p>
                        </div>
                    </div>
                    <?php
                        foreach ($db->query("SELECT * FROM mysteryboxes WHERE boxEnd >= now();")->fetchAll() as $ruby) {

                    ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 well">
                            <h3><a href="<?= $ruby[7] ?>"><?= $ruby[1] ?></a><span style="float: right"><?= $ruby[5] ?><span class="<?= $ruby[6] == 1 ? 'fame' : 'gold' ?>-container"><span class="<?= $ruby[6] == 1 ? 'fame' : 'gold' ?>" style="top: -1px"></span></span></span></h3>
                            <?php for($i = 0; $i < count(explode(',', $ruby[4])); $i++) { ?>
                            <span><span class="item-wrapper"><span class="item" data-item="<?= hexdec(explode(',', $ruby[4])[$i]) ?>"></span></span></span>&nbsp;
                            <?php } ?>
                        </div>
                    </div>
                        <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <script src="js/jquery-1.11.2.min.js"></script>
        <script src="js/typeahead.bundle.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.timeago.js"></script>
        <script src="js/jquery.timeago.en-short.js"></script>
        <script src="js/definition.js"></script>
        <script src="js/jquery.tablesorter.js"></script>
        <script src="js/realmeye.js"></script>
        <script src="js/sheet.js"></script>
        <script type="text/javascript">$(function () {
            initializeSearch("a");
            });
            initializeLoginButton("b");
            renderItems("d");
        </script>
    </body>
</html>
