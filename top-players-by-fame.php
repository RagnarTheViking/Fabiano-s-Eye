<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:36 PM
     */

    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');

    function guildname($gid)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        foreach ($db->query("SELECT name FROM guilds WHERE id = $gid;") as $rupee)
            return $rupee['name'];
    }

    function alivefame($id)
    {
        $fame = 0;
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        foreach ($db->query("SELECT fame FROM characters WHERE accId = $id and dead = 0;") as $rupee)
            $fame += $rupee['fame'];
        return $fame;
    }

    function aliveexp($id)
    {
        $exp = 0;
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        foreach ($db->query("SELECT exp FROM characters WHERE accId = $id and dead = 0;") as $rupee)
            $exp += $rupee['exp'];
        return $exp;
    }

    function alivechars($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        return $db->query("SELECT * FROM characters WHERE accId = $id and dead = 0;")->rowCount();
    }

    function name($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        return $db->query("SELECT name FROM accounts WHERE id=$id;")->fetch(PDO::FETCH_ASSOC)['name'];
    }

    function guild($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        return $db->query("SELECT guild FROM accounts WHERE id=$id;")->fetch(PDO::FETCH_ASSOC)['guild'];
    }

    function lastseen($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        return $db->query("SELECT lastSeen FROM accounts WHERE id=$id;")->fetch(PDO::FETCH_ASSOC)['lastSeen'];
    }

    function stars($id)
    {
        $stars = 0;
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        foreach ($db->query("SELECT * FROM classStats WHERE accId = $id;") as $rupee)
        {
            if ($rupee['bestFame'] >= 2000) $stars += 5;
            elseif ($rupee['bestFame'] >= 800) $stars += 4;
            elseif ($rupee['bestFame'] >= 400) $stars += 3;
            elseif ($rupee['bestFame'] >= 150) $stars += 2;
            elseif ($rupee['bestFame'] >= 20) $stars += 1;
        }
        return $stars;
    }
	
	function star($s)
	{
	    if ($s > 0 && $s < 14)
		    return "light-blue";
		elseif ($s > 13 && $s < 28)
		    return "blue";
		elseif ($s > 27 && $s < 42)
		    return "red";
		elseif ($s > 41 && $s < 56)
		    return "orange";
		elseif ($s > 55 && $s < 70)
		    return "yellow";
		elseif ($s == 70)
		    return "white";
	}
	
	function update($i)
	{
	    $_fame = 0; $_exp = 0;
	    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
		foreach ($db->query("SELECT * FROM characters WHERE accId=$i and dead=0;") as $rupee)
        {
            $_fame += $rupee['fame'];
            $_exp += $rupee['exp'];
        }
        $db->query("UPDATE accounts SET aliveFame=$_fame, aliveExp=$_exp WHERE id =$i");
	}
	
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Top RotMG Players by Fame 1-101 | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">

        <link rel="canonical" href="/top-players-by-fame">
        <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,top players,by fame">
        <meta name="description" content="Top Players in Realm of the Mad God by fame 1-101.">
        <link href="css/re.css" rel="stylesheet">
    </head>
    <body>
    <?php require_once('banana/template/navbar.php') ?>
        <div class="container">
            <noscript>&lt;div class="help-block alert alert-info"&gt;It seems like you have disabled javascript. The site uses
                it extensively, so expect a much degraded experience!&lt;/div&gt;
            </noscript>
            <div class="row">
                <div class="col-md-12">
                    <h1>Top Players by Fame</h1>
                    <p>This is a list of the top 1000 players by Fame seen in the
                        past two weeks in RotMG.
                    </p>
                    <p>&nbsp;</p>
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="active"><a href="/top-players-by-fame">1 - 100</a></li>
                            <li><a href="/top-players-by-fame/101">101 - 200</a></li>
                            <li><a href="/top-players-by-fame/201">201 - 300</a></li>
                            <li><a href="/top-players-by-fame/301">301 - 400</a></li>
                            <li><a href="/top-players-by-fame/401">401 - 500</a></li>
                            <li><a href="/top-players-by-fame/501">501 - 600</a></li>
                            <li><a href="/top-players-by-fame/601">601 - 700</a></li>
                            <li><a href="/top-players-by-fame/701">701 - 800</a></li>
                            <li><a href="/top-players-by-fame/801">801 - 900</a></li>
                            <li><a href="/top-players-by-fame/901">901 - 1000</a></li>
                        </ul>
                    </nav>
                    <div class="table-responsive">
                        <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(4), #c td:nth-child(4), #c th:nth-child(5), #c td:nth-child(5), #c th:nth-child(6), #c td:nth-child(6), #c th:nth-child(7), #c td:nth-child(7), #c th:nth-child(8), #c td:nth-child(8), #c th:nth-child(9), #c td:nth-child(9) {
                            text-align: right
                            }
                        </style>
                        <table id="c" class="table table-striped tablesorter">
                            <thead>
                                <tr>
                                    <th class="header"></th>
                                    <th class="header">Name</th>
                                    <th class="header">Guild</th>
                                    <th class="header">Fame</th>
                                    <th class="header">Exp</th>
                                    <th class="header"><abbr title="Rank">R</abbr></th>
                                    <th class="header"><abbr title="Chars">C</abbr></th>
                                    <th class="header"><abbr title="Avg. Fame / Char">AF/C</abbr></th>
                                    <th class="header"><abbr title="Avg. Exp / Char">AE/C</abbr></th>
                                    <th class="header">Last seen</th>
                                    <th class="header"><abbr title="Server">Srv.</abbr></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $playercount = 1;
                                foreach ($db->query("SELECT * FROM accounts ORDER BY aliveFame DESC LIMIT 100;") as $rupee) {
								    update($rupee['id']);
                                    $name = $rupee['name'];
                                    $guild = guild($rupee['id']);
                                    $guildname = guildname($guild);
                                    $alivefame = alivefame($rupee['id']);
                                    $aliveexp = aliveexp($rupee['id']);
                                    $characters = alivechars($rupee['id']);
                                    $stars = stars($rupee['id']);
                                    $lastseen = lastseen($rupee['id']);
                                    ?>
                                    <tr>
                                        <td><?= $playercount ?>.</td>
                                        <td>
                                            <div class="star-container">
                                                <a href="player.php?name=<?= $name ?>"><?= $name ?></a>
                                                <div class="star star-<?= star($stars) ?>"></div>
                                            </div>
                                        </td>
                                        <td><?php if ($guild > 0) { ?><a href="/guild/<?= $guildname ?>"><?= $guildname ?></a><?php } ?></td>
                                        <td><a href="fame-history-of-player.php?<?= $name ?>"><?= $alivefame ?></a></td>
                                        <td><?= $aliveexp ?></td>
                                        <td><?= $stars ?></td>
                                        <td><?= $characters ?></td>
                                        <td><?= round($alivefame / $characters) ?></td>
                                        <td><?= round($aliveexp / $characters) ?></td>
                                        <td><span class="timeago" title="<?= explode(" ", $lastseen)[0] . "T" . explode(" ", $lastseen)[1] . "Z" ?>"></span></td>
                                        <td>Localhost</td>
                                    </tr>
                                    <?php $playercount++; } ?>
                            </tbody>
                        </table>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="active"><a href="/top-players-by-fame">1 - 100</a></li>
                            <li><a href="/top-players-by-fame/101">101 - 200</a></li>
                            <li><a href="/top-players-by-fame/201">201 - 300</a></li>
                            <li><a href="/top-players-by-fame/301">301 - 400</a></li>
                            <li><a href="/top-players-by-fame/401">401 - 500</a></li>
                            <li><a href="/top-players-by-fame/501">501 - 600</a></li>
                            <li><a href="/top-players-by-fame/601">601 - 700</a></li>
                            <li><a href="/top-players-by-fame/701">701 - 800</a></li>
                            <li><a href="/top-players-by-fame/801">801 - 900</a></li>
                            <li><a href="/top-players-by-fame/901">901 - 1000</a></li>
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
        <script type="text/javascript">
            $(function () {
                //initializeSearch("a");
            });
            initializeLoginButton("b");
            makeSortable("c", {
            0: {"sorter": "digit"},
            1: {"sorter": "text"},
            2: {"sorter": "text"},
            3: {"sorter": "digit"},
            4: {"sorter": "digit"},
            5: {"sorter": "digit"},
            6: {"sorter": "digit"},
            7: {"sorter": "digit"},
            8: {"sorter": "digit"},
            9: {"sorter": "text"},
            10: {"sorter": "text"}
            });
            renderNumeric("c", 1);
            renderNumeric("c", 4);
            renderNumeric("c", 5);
            renderNumeric("c", 6);
            renderNumeric("c", 7);
            renderNumeric("c", 8);
            renderNumeric("c", 9);
        </script>
    </body>
</html>