<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 11/16/2015
     * Time: 9:09 PM
     */
        include 'core/database.php';
        include 'core/engine.php';
        include 'core/functions.php';
    
        session_start();
    
        if (isset($_GET['name']))
            $Account = $db->multipleQuery("SELECT accounts.id, accounts.name, rank, namechosen, verified, guild, guildRank, regTime, banned, lastSeen, accTex1, accTex2, IF(guild=0, '', guilds.name) FROM accounts, guilds WHERE accounts.name=? AND IF(guild=0, TRUE, guilds.id=accounts.guild);", [$_GET['name']]);
        if (count($Account) > 0){
            $Characters = $db->multipleQuery("SELECT charType, level, exp, fame, items, hp, mp, stats, tex1, tex2, texIds, petId, hasBackpack, skin, lastSeen, lastLocation FROM characters WHERE accId=? AND dead=0 ORDER BY lastSeen DESC;", [$Account[0][0]]);
            $Descriptions = $db->multipleQuery('SELECT line1, line2, line3 FROM accounts WHERE id=?;', [$Account[0][0]]);
            $CharacterCount = count($Characters);
            $AliveFame = $db->multipleQuery('SELECT SUM(fame) FROM characters WHERE accId=? AND dead=0;', [$Account[0][0]]);
            $AliveExperience = $db->multipleQuery('SELECT SUM(exp) FROM characters WHERE accId=? AND dead=0;', [$Account[0][0]]);
            $Stars = $db->multipleQuery('SELECT SUM(IF(bestFame >= 2000, 5, IF(bestFame >= 800, 4, IF(bestFame >= 400, 3, IF(bestFame >= 150, 2, IF (bestFame >= 20, 1, 0)))))) FROM classstats WHERE accId=?;', [$Account[0][0]]);
            $AccountFame = $db->multipleQuery('SELECT fame FROM stats WHERE accId=?;', [$Account[0][0]]);
            $PetCount = $db->multipleQuery('SELECT COUNT(*) FROM pets WHERE accId=?;', [$Account[0][0]]);
            $GraveyardCount = $db->multipleQuery('SELECT COUNT(*) FROM characters WHERE accId=? AND dead=1;', [$Account[0][0]]);
        }
        else
            header('Location: /404'); // You might want to change this.
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Characters of the RotMG Player: <?= $Account[0][1] ?></title>
        <link rel="icon" href="/img/favicon.ico">
        <link href="/css/realmeye.css" rel="stylesheet">
    </head>
    <body>
        <?php include '../banana/template/navbar.php'; ?>
        <div class="container">
            <noscript>
                <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it extensively, so expect a much degraded experience!</div>
            </noscript>
            <div class="row">
                <div class="col-md-12">
                    <h1><span class="entity-name"><?= $Account[0][1] ?></span></h1>
                    <div class="row">
                        <div class="col-md-5">
                            <table class="summary">
                                <tr>
                                    <td>Chars</td>
                                    <td><?= $CharacterCount ?></td>
                                </tr>
                                <tr>
                                    <td>Fame</td>
                                    <td><span class="numeric"><?= $AliveFame[0][0] ?></span> (<a href="/top-players-by-fame">4<sup>th</sup></a>)</td>
                                    <!-- TODO: Fix place -->
                                </tr>
                                <tr>
                                    <td>Exp</td>
                                    <td><span class="numeric"><?= $AliveExperience[0][0] ?></span> (<a href="/top-players-by-exp">4<sup>th</sup></a>)</td>
                                    <!-- TODO: Fix place -->
                                </tr>
                                <tr>
                                    <td>Rank</td>
                                    <td>
                                        <div class="star-container">
                                            <?= $Stars[0][0] ?>
                                            <div class="set-star"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Account fame</td>
                                    <td><span class="numeric"><?= $AccountFame[0][0] ?></span> (<a href="/top-players-by-account-fame">8<sup>th</sup></a>)</td>
                                    <!-- TODO: Fix place -->
                                </tr>
                                <?php if ($Account[0][12] != '') { ?>
                                <tr>
                                    <td>Guild</td>
                                    <td><a href="/guild/<?= $Account[0][12] ?>"><?= $Account[0][12] ?></a></td>
                                </tr>
                                <tr>
                                    <td>Guild Rank</td>
                                    <td class="set-guild-rank" rank="<?= $Account[0][6] ?>"></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td>Created</td>
                                    <td><span class="timeago" title="<?= set_time($Account[0][7]) ?>"></span></td>
                                </tr>
                                <tr>
                                    <td>Last seen</td>
                                    <td><span class="timeago" title="<?= set_time($Characters[0][14]) ?>"></span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-7">
                            <div class="well description" id="c">
                                <div class="line1 description-line"><?= $Descriptions[0][0] ?></div>
                                <div class="line2 description-line"><?= $Descriptions[0][0] ?></div>
                                <div class="line3 description-line"><?= $Descriptions[0][0] ?></div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills" style="margin-top: 8px">
                        <li class="active"><a href="/realmeye/player3.php?name=<?= $Account[0][1] ?>">Characters (<?= $CharacterCount ?>)</a></li>
                        <li><a href="/pets-of/<?= $Account[0][1] ?>">Pet Yard (<?= $PetCount[0][0] ?>)</a></li>
                        <li><a href="/graveyard-of-player/<?= $Account[0][1] ?>">Graveyard (<?= $GraveyardCount[0][0] ?>)</a></li>
                    </ul>
                    <div class="table-responsive">
                        <style type="text/css">#d th:nth-child(6),#d td:nth-child(6),#d th:nth-child(7),#d td:nth-child(7),#d th:nth-child(8),#d td:nth-child(8){text-align: right}#d th:nth-child(1),#d td:nth-child(1){padding-right: 0px}</style>
                        <table id="d" class="table table-striped tablesorter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th>Class</th>
                                    <th><abbr title="Level">L</abbr></th>
                                    <th><abbr title="Class Quests Completed">CQC</abbr></th>
                                    <th>Fame</th>
                                    <th>Exp</th>
                                    <th><abbr title="Place">Pl.</abbr></th>
                                    <th>Equipment</th>
                                    <th>Stats</th>
                                    <th>Last seen</th>
                                    <th><abbr title="Server">Srv.</abbr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- select ((select count(*) from characters where charType=800 and dead=0) - (select count(*) from characters where chartype=800 and exp < 20060 and dead=0));
                                    SELECT charType, level, exp, fame, items, hp, mp, stats, tex1, tex2, texIds, petId, hasBackpack, skin, lastSeen, lastLocation FROM characters WHERE characters.accId=? AND dead=0 ORDER BY lastSeen DESC; -->
                                <?php for ($i = 0; $i < $CharacterCount; $i++) {
                                    $place = $db->multipleQuery('SELECT ((SELECT COUNT(*) FROM characters WHERE charType=? AND dead=0) - (SELECT COUNT(*) FROM characters WHERE chartype=? AND exp < ? AND dead=0));', [$Characters[$i][0],$Characters[$i][0],$Characters[$i][2]]); ?>
                                <tr>
                                    <td><?php if ($Characters[$i][11] != 1) { ?><span class="pet" data-item=""></span><?php } ?></td>
                                    <td><a id="<?= str_replace('=', '', base64_encode($i * pi())) ?>" class="character" href="/realmeye/top-characters-with-outfit/<?= $Characters[$i][0] ?>/<?= $Characters[$i][13] ?>/4608/4895" data-class="<?= $Characters[$i][0] ?>" data-skin="<?= $Characters[$i][13] ?>" data-dye1="<?= $Characters[$i][8] ?>" data-dye2="<?= $Characters[$i][9] ?>" data-clothing-dye-id="<?= explode(",", $Characters[$i][10])[0] ?>" data-accessory-dye-id="<?= explode(",", $Characters[$i][10])[1] ?>" data-count="1"></a></td>
                                    <td class="character-<?= $Characters[$i][0] ?>"></td>
                                    <td><?= $Characters[$i][1] ?></td>
                                    <td class="set-cqc" max-fame="<?= $db->multipleQuery('SELECT bestFame FROM classstats WHERE accId=? AND objType=?;', [$Account[0][0], $Characters[0][0]])[0][0] ?>"></td>
                                    <td><?= $Characters[$i][3] ?></td>
                                    <td><?= $Characters[$i][2] ?></td>
                                    <td><?php if ($place[0][0] < 1001) { ?><a class="set-topcharacter" chartype="<?= $Characters[$i][0] ?>"><?= $place[0][0] ?></a><?php } else { echo $place[0][0]; } ?></td>
                                    <td><?php for ($j = 0; $j < 4; $j++) { ?><span class="item" data-item="<?= str_replace(' ', '', explode(",", $Characters[$i][4])[$j]) ?>"></span><?php } if ($Characters[$i][12] == 1) { ?><span class="item" data-item="3180"></span><?php } ?></td>
                                    <td><span class="player-stats" data-stats="[<?= $Characters[$i][7] ?>]" data-bonuses="[0,0,0,0,0,0,0,0]" data-class="<?= $Characters[$i][0] ?>" data-level="<?= $Characters[$i][1] ?>"></span></td>
                                    <td><span class="timeago" title="<?= set_time($Characters[$i][14]) ?>"></span></td>
                                    <td></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <link href="/css/select2.css" rel="stylesheet">
        <link href="/css/select2-bootstrap.css" rel="stylesheet">
        <link href="/css/realmeye.messages.css" rel="stylesheet">
        <script src="/js/jquery-1.11.2.min.js"></script>
        <script src="/js/typeahead.bundle.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.timeago.js"></script>
        <script src="/js/jquery.timeago.en-short.js"></script>
        <script src="/js/realmeye.definition.js"></script>
        <script src="/js/jquery.tablesorter.js"></script>
        <script src="/js/realmeye.js"></script>
        <script src="/js/underscore-min.js"></script>
        <script src="/js/realmeye.sheet.js"></script>
        <script src="/js/realmeye.characters.js"></script>
        <script src="/js/Utils.js"></script>
        <script type="text/javascript">
            $(function() {
                initializeSearch("a");
            });
            initializeLoginButton("b");
            addAnchorsInDescription("c", null);
            makeSortable("d", {
                0: { "sorter": false },
                1: { "sorter": false },
                2: { "sorter": "text" },
                3: { "sorter": "digit" },
                4: { "sorter": "text" },
                5: { "sorter": "digit" },
                6: { "sorter": "digit" },
                7: { "sorter": "digit" },
                8: { "sorter": false },
                9: { "sorter": "text" },
                10: { "sorter": "text" },
                11: { "sorter": "text" }
            });
            renderPets("d");
            $(function() {
                drawCharacters();
            });
            $(function() {
                makePortraitPopovers("d");
            });
            renderNumeric("d", 6);
            renderNumeric("d", 7);
            renderNumeric("d", 8);
            renderItems("d");
            renderStats("d");
            bookmarkPlayer("<?= $Account[0][1] ?>");
        </script>
        <script type="text/javascript">
            <?php if (!$_SESSION['logged']) { ?>
			initializeLogin('loginz', {
                'type': 'POST',
                'url': '/realmeye/core/login.php',
                'data': {'password': null, 'username': null, 'bindToIp': null}
            });<?php } else { ?>
			initializeClickHandlerWithAction("logoutz", {"type": "POST", "url": "core/logout.php", "data": {}});<?php } ?>
        </script>
        <?php require '../banana/template/googleanalytics.php'; ?>
    </body>
</html>