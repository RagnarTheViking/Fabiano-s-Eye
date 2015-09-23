<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 12:52 PM
     */
    error_reporting(error_reporting() & ~E_NOTICE);
    $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];
    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;', 'root', '', $opts);

    $name = $_GET['name'];
                         //       0,  1,    2,    3,          4,     5,         6,       7,      8,       9,        10,        11,       12,    13,    14
    $query = $db->query("SELECT id, name, rank, namechosen, guild, guildRank, regTime, banned, prodAcc, lastSeen, aliveFame, aliveExp, line1, line2, line3 FROM accounts WHERE name='$name';");
    $_account = $query->fetchAll();
    foreach ($_account as $rupee) {
        $accountid = $rupee[0];
        $name = $rupee[1];
        $guildid = $rupee[4];
        $guildrank = $rupee[5];
        $created = explode(" ", $rupee[6])[0] . "T" . explode(" ", $rupee[6])[1] . "Z";
        $admin = $rupee[2] == 3;
        $_fame = $rupee[10];
        $_exp = $rupee[11];
        $desc1 = $rupee[12];
        $desc2 = $rupee[13];
        $desc3 = $rupee[14];
    }

    if ($guildrank > 0)
        foreach ($db->query("SELECT name FROM guilds WHERE id = $guildid;") as $rupee)
            $guildname = $rupee['name'];
    
    $charactercount = $db->query("SELECT COUNT(*) FROM characters WHERE accId='$accountid' AND dead=0;")->fetchColumn();
    $vaultcount = $db->query("SELECT COUNT(*) FROM vaults WHERE accId='$accountid';")->fetchColumn();
    $deathcount = $db->query("SELECT COUNT(*) FROM death WHERE accId='$accountid';")->fetchColumn();

    foreach ($db->query("SELECT fame, exp FROM characters WHERE accId='$accountid' AND dead=0;") as $rupee)
    {
        $fame += $rupee['fame'];
        $exp += $rupee['exp'];
    }

    $db->query("UPDATE accounts SET aliveFame='$fame', aliveExp='$exp' WHERE id='$accountid';");

    foreach ($db->query("SELECT * FROM characters WHERE accId='$accountid' ORDER BY lastSeen ASC;") as $rupee)
    {
        $lastseen = explode(" ", $rupee['lastSeen'])[0] . "T" . explode(" ", $rupee['lastSeen'])[1] . "Z";
        $lastseenloc = $rupee['lastLocation'];
        $lastseenchar = $rupee['charType'];
    }

    foreach ($db->query("SELECT * FROM classStats WHERE accId='$accountid';") as $rupee)
    {
        if ($rupee['bestFame'] >= 2000) $stars += 5;
        elseif ($rupee['bestFame'] >= 800) $stars += 4;
        elseif ($rupee['bestFame'] >= 400) $stars += 3;
        elseif ($rupee['bestFame'] >= 150) $stars += 2;
        elseif ($rupee['bestFame'] >= 20) $stars += 1;
    }

    foreach ($db->query("SELECT * FROM stats WHERE accId='$accountid';") as $rupee)
        $accountfame += $rupee['fame'];

    function place($e)
    {
        switch (substr($e, -1))
        {
            case 1:
                return "st";
                break;
            case 2:
                return "nd";
                break;
            case 3:
                return "rd";
                break;
            default:
                return "th";
                break;
        }
    }

    function t ($text) {
        return $text != null ? $text : 'N/A';
    }

    function n($number) {
        return $number != null ? $number : 0;
    }

    function d($date) {
        return $date != null ? $date : '1970-01-01T00:00:00Z';
    }
?>
<!DOCTYPE html >
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title>Characters of the RotMG Player: <?= $name ?> | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
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
                    <h1><span class="entity-name"><?= t($name) ?></span>
                    <?php if ($admin) { ?><a class="donate" href="admins.php" id="c"><img src="img/crown.png" data-original-title="" title="This player is an Admin!"></a><?php } ?></h1>
                    <div class="row">
                        <div class="col-md-5">
                            <table class="summary">
                                <tbody>
                                    <tr>
                                        <td>Chars</td>
                                        <td><?= t($charactercount) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Fame</td>
                                        <td><span class="numeric"><?= n($fame) ?></span>
                                            <?php $fplace = $db->query("SELECT id FROM accounts")->rowCount() - $db->query("SELECT id FROM accounts WHERE aliveFame < '$fame' ORDER BY aliveFame DESC, regTime ASC;")->rowCount(); ?>
                                            (<?php if ($fplace < 1001) { ?><a href="top-players-by-fame.php"><?php } ?><?= $fplace . place($fplace) ?></a>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Exp</td>
                                        <td><span class="numeric"><?= n($exp) ?></span>
                                            <?php $eplace = $db->query("SELECT id FROM accounts")->rowCount() - $db->query("SELECT id FROM accounts WHERE aliveExp < '$exp' ORDER BY aliveExp DESC, regTime ASC;")->rowCount(); ?>
                                            (<?php if ($eplace < 1001){ ?><a href="top-players-by-exp.php"><?php } ?><?= $eplace . place($eplace) ?></a>)
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Rank</td>
                                        <td>
                                            <div class="star-container"><?= n($stars) ?><div class="set-star"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Account fame</td>
                                        <td><span class="numeric"><?= n($accountfame) ?></span>
                                            <?php $aplace = $db->query("SELECT accId FROM stats")->rowCount() - $db->query("SELECT accId FROM stats WHERE fame < '$accountfame' ORDER BY fame DESC;")->rowCount(); ?>
                                            (<?php if ($aplace < 1001){ ?><a href="top-players-by-account-fame.php"><?php } ?><?= $aplace . place($aplace) ?></a>)
                                        </td>
                                    </tr>
                                    <?php if ($guildid > 0) {?>
                                    <tr>
                                        <td>Guild</td>
                                        <td><a href="/guild/<?= t($guildname) ?>"><?= t($guildname) ?></a></td>
                                    </tr>
                                    <tr>
                                        <td>Guild Rank</td>
                                        <td class="set-guildrank" guild-rank="<?= $guildrank ?>"></td>
                                    </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>Created</td>
                                        <td><span class="timeago" title="<?= d($created) ?>"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Last seen</td>
                                        <td><span class="timeago" title="<?= d($lastseen) ?>"></span> in <?= t($lastseenloc) ?> as <span class="character-<?= $lastseenchar ?>"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-7">
                            <div class="well description" id="c">
                                <div class="line1 description-line"><?= t($desc1) ?></div>
                                <div class="line2 description-line"><?= t($desc2) ?></div>
                                <div class="line3 description-line"><?= t($desc3) ?></div>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-pills" style="margin-top: 8px">
                        <li class="active"><a href="player.php?name=<?= t($name) ?>">Characters (<?= t($charactercount) ?>)</a></li>
                        <li><a href="vault.php?name=<?= t($name) ?>">Vaults (<?= n($vaultcount) ?>)</a></li>
                        <li><a href="/offers-by/<?= t($name) ?>">Offers (0)</a></li>
                        <li><a href="pets-of.php?name=<?= t($name) ?>">Pet Yard (<?= $db->query("SELECT COUNT(*) FROM pets WHERE accId='$accountid';")->fetchColumn() ?>)</a></li>
                        <li><a href="graveyard-of-player.php?name=<?= t($name) ?>">Graveyard (<?= $deathcount ?>)</a></li>
                        <li><a href="/fame-history-of-player/<?= t($name) ?>">History</a></li>
                        <li><a href="/signature-of-player/<?= t($name) ?>">Signature</a></li>
                    </ul>
                    <div class="table-responsive">
                        <style type="text/css">
                            #d th:nth-child(6), #d td:nth-child(6), #d th:nth-child(7), #d td:nth-child(7), #d th:nth-child(8), #d td:nth-child(8) {
                            text-align: right
                            }
                            #d th:nth-child(1), #d td:nth-child(1) {
                            padding-right: 0px
                            }
                        </style>
                        <table id="d" class="table table-striped tablesorter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="header">Class</th>
                                    <th class="header"><abbr title="Level">L</abbr></th>
                                    <th class="header"><abbr title="Class Quests Completed">CQC</abbr></th>
                                    <th class="header">Fame</th>
                                    <th class="header">Exp</th>
                                    <th class="header"><abbr title="Place">Pl.</abbr></th>
                                    <th>Equipment</th>
                                    <th class="header">Stats</th>
                                    <th class="header">Last seen</th>
                                    <th class="header"><abbr title="Server">Srv.</abbr></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $characterahahh = 0;
                                foreach ($db->query("SELECT * FROM characters WHERE accId='$accountid' AND dead=0 ORDER BY lastSeen DESC;") as $rupee) {
                                    $chartype = $rupee['charType'];
                                    $charexp = $rupee['exp'];
                                    $place = $db->query("SELECT * FROM characters WHERE charType='$chartype' AND dead=0;")->rowCount() - $db->query("SELECT * FROM characters WHERE charType='$chartype' AND exp < '$charexp' AND dead = 0;")->rowCount();
                                    $petid = $rupee['petId']; ?>
                                <tr>
                                    <td>
                                        <?php if ($petid != -1) { ?>
                                        <span class="pet" data-item="<?= $db->query("SELECT objType FROM pets WHERE petId = $petid")->fetch(PDO::FETCH_ASSOC)['objType'] ?>"></span>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a id="<?= str_replace("=", "", base64_encode($characterahahh)) ?>" class="character" data-class="<?= $rupee['charType'] ?>" data-skin="<?= $rupee['skin'] ?>" data-dye1="<?= $rupee['tex1'] ?>" data-dye2="<?= $rupee['tex2'] ?>" data-accessory-dye-id="<?= explode(",", $rupee['texIds'])[1] ?>" data-clothing-dye-id="<?= explode(",", $rupee['texIds'])[0] ?>" data-count="1" data-original-title="" title=""></a>
                                    </td>
                                    <td class="character-<?= $chartype ?>"></td>
                                    <td><?= $rupee['level'] ?></td>
                                    <td class="set-cqc" max-fame="<?= $db->query("SELECT bestFame FROM classstats WHERE accId='$accountid' AND objType='$chartype';")->fetch()[0] ?>"></td>
                                    <td><?= $rupee['fame'] ?></td>
                                    <td><?= $charexp ?> </td>
                                    <td><?php if ($place < 1001) { ?><a class="set-topcharacter" chartype="<?= $chartype ?>"><?= $place ?></a><?php } else { echo $place; } ?></td>
                                    <td>
                                        <span class="item" data-item="<?= explode(",", $rupee['items'])[0] ?>" data-original-title="" title=""></span>
										<span class="item" data-item="<?= str_replace(" ", "", explode(",", $rupee['items'])[1]) ?>" data-original-title="" title=""></span>
										<span class="item" data-item="<?= str_replace(" ", "", explode(",", $rupee['items'])[2]) ?>" data-original-title="" title=""></span>
										<span class="item" data-item="<?= str_replace(" ", "", explode(",", $rupee['items'])[3]) ?>" data-original-title="" title=""></span>
										<?php if ($rupee['hasBackpack'] == 1) { ?><span class="item" data-item="3180" data-original-title="" title=""></span><?php } ?>
                                    </td>
                                    <td>
                                        <span class="player-stats" data-stats="[<?= $rupee['stats'] ?>]" data-bonuses="[0,0,0,0,0,0,0,0]" data-class="<?= $rupee['charType'] ?>" data-level="<?= $rupee['level'] ?>" data-original-title="" title=""><i class="glyphicon glyphicon-info-sign"></i></span>
                                    </td>
                                    <td><span class="timeago" title="<?= explode(" ", $rupee['lastSeen'])[0] . "T" . explode(" ", $rupee['lastSeen'])[1] . "Z" ?>"></span></td>
                                    <td><abbr title="<?= $rupee['lastLocation'] ?> "><?= $rupee['lastLocation'] ?> </abbr></td>
                                </tr>
                            <?php $characterahahh++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <link href="css/select2.css" rel="stylesheet">
        <link href="css/select2-bootstrap.css" rel="stylesheet">
        <link href="css/messages.css" rel="stylesheet">
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
        <script src="js/coolcool.js"></script>
        <script type="text/javascript">
            $(function () {
                initializeSearch("a");
            });
            initializeLoginButton("b");
            addAnchorsInDescription("c", null);
            makeSortable("d", {
            0: {"sorter": false},
            1: {"sorter": false},
            2: {"sorter": "text"},
            3: {"sorter": "digit"},
            4: {"sorter": "text"},
            5: {"sorter": "digit"},
            6: {"sorter": "digit"},
            7: {"sorter": "digit"},
            8: {"sorter": false},
            9: {"sorter": "text"},
            10: {"sorter": "text"},
            11: {"sorter": "text"}
            });
            renderPets("d");
            $(function () {
                drawCharacters();
            });
            $(function () {
                makePortraitPopovers("d");
            });
            renderNumeric("d", 6);
            renderNumeric("d", 7);
            renderNumeric("d", 8);
            renderItems("d");
            renderStats("d");
            bookmarkPlayer($('.entity-name').text());
			$('.set-star').each(function(){$(this).attr('class', 'star star-' + colorForRank(<?= $stars ?>))});
			$('.set-guildrank').each(function(){$(this).text(guildRank($(this).attr('guild-rank')))});
			$('.set-topcharacter').each(function(){ $(this).attr('href', 'top-' + pluralOfClass2($(this).attr('chartype')).toLowerCase() + '.php')});
			$('.set-cqc').each(function(){$(this).text(CQC($(this).attr('max-fame')))});
        </script>
    </body>
</html>