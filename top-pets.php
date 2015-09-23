<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:44 PM
     */

    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');

    function rarity($rarity = 0)
    {
        switch ($rarity)
        {
            case 4:
                return "Divine";
                break;
            case 3:
                return "Legendary";
                break;
            case 2:
                return "Rare";
                break;
            case 1:
                return "Uncommon";
                break;
            case 0:
                return "Common";
                break;
        }

        return "Unknown";
    }

    function name($id)
    {
        $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        return $db->query("SELECT name FROM accounts WHERE id=$id;")->fetch(PDO::FETCH_ASSOC)['name'];
    }

    function ability($ability = 407)
    {
        switch ($ability)
        {
            case 402:
                return "Attack Close";
                break;
            case 404:
                return "Attack Mid";
                break;
            case 405:
                return "Attack Far";
                break;
            case 406:
                return "Electric";
                break;
            case 407:
                return "Heal";
                break;
            case 408:
                return "Magic Heal";
                break;
            case 409:
                return "Savage";
                break;
            case 410:
                return "Decoy";
                break;
            case 411:
                return "Rising Fury";
                break;
        }

        return "Unknown";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Pets in RotMG 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-pets">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,top pets">
    <meta name="description" content="Top Pets 1-100 in Realm of the Mad God the free online MMO RPG game.">
    <link href="css/re.css" rel="stylesheet">
</head>
<body>
<?php require_once('banana/navbar.php') ?>
<div class="container">
    <noscript>
        <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
            extensively, so expect a much degraded experience!
        </div>
    </noscript>
    <div class="row">
        <div class="col-md-12"><h1>Top Pets</h1><p>This is a list of the top 1000 pets by the sum of their ability
                levels, seen in the past two weeks in RotMG.</p><p>&nbsp;</p>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-pets">1 - 100</a></li>
                    <li><a href="/top-pets/101">101 - 200</a></li>
                    <li><a href="/top-pets/201">201 - 300</a></li>
                    <li><a href="/top-pets/301">301 - 400</a></li>
                    <li><a href="/top-pets/401">401 - 500</a></li>
                    <li><a href="/top-pets/501">501 - 600</a></li>
                    <li><a href="/top-pets/601">601 - 700</a></li>
                    <li><a href="/top-pets/701">701 - 800</a></li>
                    <li><a href="/top-pets/801">801 - 900</a></li>
                    <li><a href="/top-pets/901">901 - 1000</a></li>
                </ul>
            </nav>
            <div class="table-responsive">
                <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(12), #c td:nth-child(12) {
                        text-align: right
                    }

                    #c th:nth-child(2), #c td:nth-child(2) {
                        padding-right: 0px
                    }</style>
                <table id="c" class="table table-striped tablesorter">
                    <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Family</th>
                        <th>Ability 1</th>
                        <th><abbr title="Level of Ability 1">Lvl</abbr></th>
                        <th>Ability 2</th>
                        <th><abbr title="Level of Ability 2">Lvl</abbr></th>
                        <th>Ability 3</th>
                        <th><abbr title="Level of Ability 3">Lvl</abbr></th>
                        <th><abbr title="Max Level">ML</abbr></th>
                        <th>Owner</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $petcount = 1;
                        require_once('banana/kurk.php');
                        foreach ($db->query("SELECT * FROM pets ORDER BY maxLevel DESC, levels ASC, xp ASC LIMIT 100") as $rupee) { ?>
                    <tr>
                        <td><?= $petcount ?>.</td>
                        <td><span class="pet" data-item="<?= $rupee['objType'] ?>"></span></td>
                        <td><?= str_replace("Skin}", "", str_replace("_", " ", str_replace("{pets.", "", $rupee['skinName']))) ?></td>
                        <td><?= rarity($rupee['rarity']) ?></td>
                        <td><?= $rupee['family'] ?></td>
                        <?php for ($i = 0; $i < 3; $i++)
                        { ?>
                            <td>
                                <span><?= ability(explode(",", $rupee['abilities'])[$i]) ?></span>
                            </td>
                            <td>
                                <span class="pet-ability <?= explode(",", $rupee['levels'])[$i] == $rupee['maxLevel'] ? " pet-ability-maxed" : "" ?>" data-pet-ability="[&quot;<?= ability(explode(",", $rupee['abilities'])[$i]) ?>&quot;,<?= explode(",", $rupee['levels'])[$i] ?>,<?= $rupee['maxLevel'] ?>,<?= explode(",", $rupee['xp'])[$i] ?>,0,0]"></span>
                            </td>
                        <?php } ?>
                        <td><?= $rupee['maxLevel'] ?></td>
                        <td><a href="pets-of.php?name=<?= name($rupee['accId']) ?>"><?= name($rupee['accId']) ?></a></td>
                    </tr>
                        <?php $petcount++; } ?>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-pets">1 - 100</a></li>
                    <li><a href="/top-pets/101">101 - 200</a></li>
                    <li><a href="/top-pets/201">201 - 300</a></li>
                    <li><a href="/top-pets/301">301 - 400</a></li>
                    <li><a href="/top-pets/401">401 - 500</a></li>
                    <li><a href="/top-pets/501">501 - 600</a></li>
                    <li><a href="/top-pets/601">601 - 700</a></li>
                    <li><a href="/top-pets/701">701 - 800</a></li>
                    <li><a href="/top-pets/801">801 - 900</a></li>
                    <li><a href="/top-pets/901">901 - 1000</a></li>
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
        1: {"sorter": false},
        2: {"sorter": "text"},
        3: {"sorter": "petRarity"},
        4: {"sorter": "text"},
        5: {"sorter": "text"},
        6: {"sorter": "text"},
        7: {"sorter": "text"},
        8: {"sorter": "text"},
        9: {"sorter": "text"},
        10: {"sorter": "text"},
        11: {"sorter": "digit"},
        12: {"sorter": "text"}
    });
    renderNumeric("c", 1);
    renderPets("c");
    renderPetAbilityPopover("c", 7, 1);
    renderPetAbilityPopover("c", 9, 2);
    renderPetAbilityPopover("c", 11, 3);
    renderNumeric("c", 12);
</script>
</body>
</html>
