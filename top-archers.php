<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:38 PM
     */
    error_reporting(error_reporting() & ~E_NOTICE);
    $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];
    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;', 'root', '', $opts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Archers 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Archers">
    <meta name="description" content="Top Archers 1-100 in Realm of the Mad God - the free online mmo rpg game.">
    <link href="css/re.css" rel="stylesheet">
    <link href="css/top-characters-by-class.css" rel="stylesheet">
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
        <div class="col-md-12"><h1>Top Archers</h1><p>This is a list of the top 1000 archers by Exp seen in the past two
                weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
            <div class="text-center">
                <div class="btn-group">
                    <a class="btn btn-default list-selector-item disabled" title="Top Archers" href="top-archers.php"><span class="private-character" style="background-position: 0px -58px"></span>
                        <div class="list-selector-item-label">Archers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Assassins" href="/top-assassins.php"><span class="private-character" style="background-position: 0px -358px"></span>
                        <div class="list-selector-item-label">Assassins</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Huntresses" href="/top-huntresses.php"><span class="private-character" style="background-position: 0px -458px"></span>
                        <div class="list-selector-item-label">Huntresses</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Knights" href="/top-knights.php"><span class="private-character" style="background-position: 0px -258px"></span>
                        <div class="list-selector-item-label">Knights</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Mystics" href="/top-mystics.php"><span class="private-character" style="background-position: 0px -508px"></span>
                        <div class="list-selector-item-label">Mystics</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Necromancers" href="/top-necromancers.php"><span class="private-character" style="background-position: 0px -408px"></span>
                        <div class="list-selector-item-label">Necromancers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Ninjas" href="/top-ninjas.php"><span class="private-character" style="background-position: 0px -658px"></span>
                        <div class="list-selector-item-label">Ninjas</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Paladins" href="/top-paladins.php"><span class="private-character" style="background-position: 0px -308px"></span>
                        <div class="list-selector-item-label">Paladins</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Priests" href="/top-priests.php"><span class="private-character" style="background-position: 0px -158px"></span>
                        <div class="list-selector-item-label">Priests</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Rogues" href="/top-rogues.php"><span class="private-character" style="background-position: 0px -8px"></span>
                        <div class="list-selector-item-label">Rogues</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Sorcerers" href="/top-sorcerers.php"><span class="private-character" style="background-position: 0px -608px"></span>
                        <div class="list-selector-item-label">Sorcerers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Tricksters" href="/top-tricksters.php"><span class="private-character" style="background-position: 0px -558px"></span>
                        <div class="list-selector-item-label">Tricksters</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Warriors" href="/top-warriors.php"><span class="private-character" style="background-position: 0px -208px"></span>
                        <div class="list-selector-item-label">Warriors</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards.php"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-archers.php">1 - 100</a></li>
                    <li><a href="/top-archers/101">101 - 200</a></li>
                    <li><a href="/top-archers/201">201 - 300</a></li>
                    <li><a href="/top-archers/301">301 - 400</a></li>
                    <li><a href="/top-archers/401">401 - 500</a></li>
                    <li><a href="/top-archers/501">501 - 600</a></li>
                    <li><a href="/top-archers/601">601 - 700</a></li>
                    <li><a href="/top-archers/701">701 - 800</a></li>
                    <li><a href="/top-archers/801">801 - 900</a></li>
                    <li><a href="/top-archers/901">901 - 1000</a></li>
                </ul>
            </nav>
            <div class="table-responsive">
                <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(4), #c td:nth-child(4), #c th:nth-child(5), #c td:nth-child(5) {
                        text-align: right
                    }</style>
                <table id="c" class="table table-striped tablesorter">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Name</th>
                        <th>Fame</th>
                        <th>Exp</th>
                        <th>Equipment</th>
                        <th>Stats</th>
                        <th>Last seen</th>
                        <th><abbr title="Server">Srv.</abbr></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $characters = 1;
                        foreach ($db->query("SELECT * FROM characters WHERE charType=775 AND dead=0 ORDER BY exp DESC;")->fetchAll() as $ruby)
                        {
                            $accid = $ruby[1];
                            $name = $db->query("SELECT name FROM accounts WHERE id='$accid';")->fetch()[0];
                        ?>
                    <tr>
                        <td><?= $characters ?>.</td>
                        <td>
                            <a id="<?= str_replace("=", "", base64_encode($characters)) ?>" class="character" href="/top-characters-with-outfit/775/<?= $ruby['skin'] ?>/<?= explode(',', $ruby['texIds'])[0] ?>/<?= explode(',', $ruby['texIds'])[1]?>" data-class="775" data-skin="<?= $ruby['skin'] ?>" data-dye1="<?= $ruby['tex1'] ?>" data-dye2="<?= $ruby['tex2'] ?>" data-accessory-dye-id="<?= explode(',', $ruby['texIds'])[1] ?>" data-clothing-dye-id="<?= explode(',', $ruby['texIds'])[0] ?>" data-count="1"></a>
                        </td>
                        <td><a href="player.php?name=<?= $name ?>"><?= $name ?></a></td>
                        <td><?= $ruby['fame'] ?></td>
                        <td><?= $ruby['exp'] ?></td>
                        <td><?php for($i = 0; $i < 4; $i++){ ?><span class="item" data-item="<?= str_replace(" ", "", explode(",", $ruby['items'])[$i]) ?>"></span><?php } ?></td>
                        <td>
                            <span class="player-stats" data-stats="[<?= $ruby['stats'] ?>]" data-bonuses="[0,0,0,0,0,0,0,0]" data-class="775" data-level="<?= $ruby['level'] ?>"></span>
                        </td>
                        <td><span class="timeago" title="<?= explode(" ", $ruby['lastSeen'])[0] . "T" . explode(" ", $ruby['lastSeen'])[1] . "Z" ?>"></span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <?php $characters++; } ?>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-archers">1 - 100</a></li>
                    <li><a href="/top-archers/101">101 - 200</a></li>
                    <li><a href="/top-archers/201">201 - 300</a></li>
                    <li><a href="/top-archers/301">301 - 400</a></li>
                    <li><a href="/top-archers/401">401 - 500</a></li>
                    <li><a href="/top-archers/501">501 - 600</a></li>
                    <li><a href="/top-archers/601">601 - 700</a></li>
                    <li><a href="/top-archers/701">701 - 800</a></li>
                    <li><a href="/top-archers/801">801 - 900</a></li>
                    <li><a href="/top-archers/901">901 - 1000</a></li>
                </ul>
            </nav>
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
<script src="js/underscore-min.js"></script>
<script src="js/sheet.js"></script>
<script src="js/characters.js"></script>
<script type="text/javascript">$(function () {
        initializeSearch("a");
    });
    initializeLoginButton("b");
    makeSortable("c", {
        0: {"sorter": "digit"},
        1: {"sorter": false},
        2: {"sorter": "text"},
        3: {"sorter": "digit"},
        4: {"sorter": "digit"},
        5: {"sorter": false},
        6: {"sorter": "text"},
        7: {"sorter": "text"},
        8: {"sorter": "text"}
    });
    renderNumeric("c", 1);
    $(function () {
        drawCharacters();
    });
    $(function () {
        makePortraitPopovers("c");
    });
    renderNumeric("c", 4);
    renderNumeric("c", 5);
    renderItems("c");
    renderStats("c");
</script>
</body>
</html>