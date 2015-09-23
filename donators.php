<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:50 PM
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Donators | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/donators">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,donators">
    <meta name="description" content="RotMG Players who donated to RealmEye.com.">
    <link href="css/re.css" rel="stylesheet">
</head>
<body>
<?php require_once('banana/template/navbar.php') ?>
<div class="container">
    <noscript>
        <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
            extensively, so expect a much degraded experience!
        </div>
    </noscript>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-2 col-md-8"><h3>Donators</h3><p>Thanks to you all, who helped to start
                        RealmEye.com!</p>
                    <div class="table-responsive">
                        <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(4), #c td:nth-child(4) {
                                text-align: right
                            }</style>
                        <table id="c" class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Donator</th>
                                <th>Time of first donation</th>
                                <th>Times</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $plis = 1;
                                $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
                                foreach ($db->query("SELECT * FROM accounts WHERE rank > 0 AND rank < 3 AND banned=0 ORDER BY id;") as $rupee)
                                { ?>
                                    <tr>
                                        <td><?= $plis ?>.</td>
                                        <td><a href="player.php?name=<?= $rupee['name'] ?>"><?= $rupee['name'] ?></a></td>
                                        <td><span class="timeago" title="<?= explode(" ", $rupee['regTime'])[0] . "T" . explode(" ", $rupee['regTime'])[1] . "Z" ?>"></span></td>
                                        <td>1</td>
                                    </tr>
                                    <?php $plis++;
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
<script type="text/javascript">$(function () {
        initializeSearch("a");
    });
    initializeLoginButton("b");</script>
</body>
</html>
