<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 9/4/2015
     * Time: 7:02 PM
     */

    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
    $name = $db->quote($_GET['name']);
    $fame = 0;
    $exp = 0;
    $stars = 0;
    $accountfame = 0;

    foreach ($db->query("SELECT * FROM accounts WHERE name = $name;") as $rupee)
    {
        $accountid = $rupee['id'];
        $name = $rupee['name'];
        $guildid = $rupee['guild'];
        $guildrank = $rupee['guildRank'];
        $created = explode(" ", $rupee['regTime'])[0] . "T" . explode(" ", $rupee['regTime'])[1] . "Z";
        $admin = $rupee['rank'] == 3;
        $_fame = $rupee['aliveFame'];
        $_exp = $rupee['aliveFame'];
		$desc1 = $rupee['line1'];
        $desc2 = $rupee['line2'];
        $desc3 = $rupee['line3'];
    }

    if ($guildrank > 0)
        foreach ($db->query("SELECT name FROM guilds WHERE id = $guildid;") as $rupee)
            $guildname = $rupee['name'];
    
    $charactercount = $db->query("SELECT id FROM characters WHERE accId = $accountid and dead = 0;")->rowCount();
    $vaultcount = $db->query("SELECT chestId FROM vaults WHERE accId = $accountid")->rowCount();
    $deathcount = $db->query("SELECT chrId FROM death WHERE accId = $accountid;")->rowCount();

    foreach ($db->query("SELECT * FROM characters WHERE accId = $accountid and dead = 0;") as $rupee)
    {
        $fame += $rupee['fame'];
        $exp += $rupee['exp'];
    }

    if ($_fame == 0 || $_exp == 0)
        $db->query("UPDATE accounts SET aliveFame = $fame, aliveExp = $exp WHERE id = $accountid");

    foreach ($db->query("SELECT * FROM characters WHERE accId = $accountid ORDER BY lastSeen ASC;") as $rupee)
    {
        $lastseen = explode(" ", $rupee['lastSeen'])[0] . "T" . explode(" ", $rupee['lastSeen'])[1] . "Z";
        $lastseenloc = $rupee['lastLocation'];
        $lastseenchar = $rupee['charType'];
    }

    foreach ($db->query("SELECT * FROM classStats WHERE accId = $accountid;") as $rupee)
    {
        if ($rupee['bestFame'] >= 2000) $stars += 5;
        elseif ($rupee['bestFame'] >= 800) $stars += 4;
        elseif ($rupee['bestFame'] >= 400) $stars += 3;
        elseif ($rupee['bestFame'] >= 150) $stars += 2;
        elseif ($rupee['bestFame'] >= 20) $stars += 1;
    }

    foreach ($db->query("SELECT * FROM stats WHERE accId = $accountid;") as $rupee)
    {
        $accountfame += $rupee['fame'];
    }

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

    function chartypetoclass($chartype = 782)
    {
        switch ($chartype)
        {
            case 768:
                return "Rogue";
                break;
            case 775:
                return "Archer";
                break;
            case 782:
                return "Wizard";
                break;
            case 784:
                return "Priest";
                break;
            case 797:
                return "Warrior";
                break;
            case 798:
                return "Knight";
                break;
            case 799:
                return "Paladin";
                break;
            case 800:
                return "Assasin";
                break;
            case 801:
                return "Necromancer";
                break;
            case 802:
                return "Huntress";
                break;
            case 803:
                return "Mystic";
                break;
            case 804:
                return "Trickster";
                break;
            case 805:
                return "Sorcerer";
                break;
            case 806:
                return "Ninja";
                break;
        }

        return "Unknown";
    }

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Pets of the RotMG Player: <?= $name ?> | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
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
        <div class="col-md-12"><h1><span class="entity-name"><?= $name ?></span>
                <?php if ($admin) { ?><a class="donate" href="admins.php" id="c"><img src="img/crown.png" data-original-title="" title="This player is an Admin!"></a><?php } ?></h1>
            <div class="row">
                <div class="col-md-5">
                    <table class="summary">
                        <tr>
                            <td>Chars</td>
                            <td><?= $charactercount ?></td>
                        </tr>
                        <tr>
                            <td>Fame</td>
                            <td><span class="numeric"><?= $fame ?></span>
                                <?php $fplace = $db->query("SELECT id FROM accounts")->rowCount() - $db->query("SELECT id FROM accounts WHERE aliveFame < $fame ORDER BY aliveFame DESC, regTime ASC;")->rowCount(); ?>
                                (<?php if ($fplace < 1001)
                                    { ?><a href="top-players-by-fame.php"><?php } ?><?= $fplace . place($fplace) ?></a>)

                            </td>
                        </tr>
                        <tr>
                            <td>Exp</td>
                            <td><span class="numeric"><?= $exp ?></span>
                                <?php $eplace = $db->query("SELECT id FROM accounts")->rowCount() - $db->query("SELECT id FROM accounts WHERE aliveExp < $exp ORDER BY aliveExp DESC, regTime ASC;")->rowCount(); ?>
                                (<?php if ($eplace < 1001)
                                    { ?><a href="top-players-by-exp.php"><?php } ?><?= $eplace . place($eplace) ?></a>)
                            </td>
                        </tr>
                        <tr>
                            <td>Rank</td>
                            <td>
                                <div class="star-container"><?= $stars ?>
                                    <div class="star star-<?= $stars < 14 ? 'light-blue' : $stars < 28 ? 'blue' : $stars < 43 ? 'red' : $stars < 57 ? 'orange' : $stars < 70 ? 'yellow' : 'white' ?>"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Account fame</td>
                            <td><span class="numeric"><?= $accountfame ?></span>
                                <?php $aplace = $db->query("SELECT accId FROM stats")->rowCount() - $db->query("SELECT accId FROM stats WHERE fame < $accountfame ORDER BY fame DESC;")->rowCount(); ?>
                                (<?php if ($aplace < 1001)
                                    { ?>
                                <a href="top-players-by-account-fame.php"><?php } ?><?= $aplace . place($aplace) ?></a>)
                            </td>
                        </tr>
                        <?php if ($guildid > 0)
                        { ?>
                            <tr>
                                <td>Guild</td>
                                <td><a href="/guild/<?= $guildname ?>"><?= $guildname ?></a></td>
                            </tr>
                            <tr>
                                <td>Guild Rank</td>
                                <td><?= $guildrank == 0 ? "Initiate" : $guildrank == 10 ? "Member" : $guildrank == 20 ? "Officer" : $guildrank == 30 ? "Leader" : "Founder" ?></td>
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>Created</td>
                            <td><span class="timeago" title="<?= $created ?>"></span></td>
                        </tr>
                        <tr>
                            <td>Last seen</td>
                            <td><span class="timeago" title="<?= $lastseen ?>"></span> in <?= $lastseenloc ?>
                                as <?= chartypetoclass($lastseenchar) ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-7">
                    <div class="well description" id="c">
                        <div class="line1 description-line"><?= $desc1 ?></div>
                        <div class="line2 description-line"><?= $desc2 ?></div>
                        <div class="line3 description-line"><?= $desc3 ?></div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills" style="margin-top: 8px">
                <li><a href="player.php?name=<?= $name ?>">Characters (<?= $charactercount ?>)</a></li>
                <li><a href="vault.php?name=<?= $name ?>">Vaults (<?= $vaultcount ?>)</a></li>
                <li><a href="/offers-by/<?= $name ?>">Offers (0)</a></li>
                <li class="active"><a href="pets-of.php?name=<?= $name ?>">Pet Yard (<?= $db->query("SELECT * FROM pets WHERE accId = $accountid")->rowCount() ?>)</a></li>
                <li><a href="graveyard-of-player.php?name=<?= $name ?>">Graveyard (<?= $deathcount ?>)</a></li>
                <li><a href="/fame-history-of-player/<?= $name ?>">History</a></li>
                <li><a href="/signature-of-player/<?= $name ?>">Signature</a></li>
            </ul>
            <p>The pets <?= $name ?> was seen with in the Nexus in RotMG.</p>
            <div class="table-responsive">
                <style type="text/css">#d th:nth-child(12), #d td:nth-child(12) {
                        text-align: right
                    }

                    #d th:nth-child(1), #d td:nth-child(1) {
                        padding-right: 0px
                    }

                    #d th:nth-child(5), #d td:nth-child(5) {
                        text-align: right;
                        text-align: right
                    }</style>
                <table id="d" class="table table-striped tablesorter">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Rarity</th>
                        <th>Family</th>
                        <th>Place</th>
                        <th>Ability 1</th>
                        <th><abbr title="Level of Ability 1">Lvl</abbr></th>
                        <th>Ability 2</th>
                        <th><abbr title="Level of Ability 2">Lvl</abbr></th>
                        <th>Ability 3</th>
                        <th><abbr title="Level of Ability 3">Lvl</abbr></th>
                        <th><abbr title="Max Level">ML</abbr></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($db->query("SELECT * FROM pets WHERE accId = $accountid ORDER BY xp DESC;") as $rupee) {

                    ?>
                    <tr>
                        <td><span class="pet" data-item="<?= $rupee['objType'] ?>"></span></td>
                        <td><?= str_replace("Skin}", "", str_replace("_", " ", str_replace("{pets.", "", $rupee['skinName']))) ?></td>
                        <td><?= rarity($rupee['rarity']) ?></td>
                        <td><?= $rupee['family'] ?></td>
                        <td>1133<sup>rd</sup></td>
                        <?php for ($i = 0; $i < 3; $i++) { ?>
                        <td>
                            <span><?= ability(explode(",", $rupee['abilities'])[$i]) ?></span>
                        </td>
                        <td>
                            <span class="pet-ability <?= explode(",", $rupee['levels'])[$i] == $rupee['maxLevel'] ? " pet-ability-maxed" : "" ?>" data-pet-ability="[&quot;<?= ability(explode(",", $rupee['abilities'])[$i]) ?>&quot;,<?= explode(",", $rupee['levels'])[$i] ?>,<?= $rupee['maxLevel'] ?>,<?= explode(",", $rupee['xp'])[$i] ?>,0,0]"></span>
                        </td>
                        <?php } ?>
                        <td><?= $rupee['maxLevel'] ?></td>
                    </tr>
                    <?php } ?>
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
<script type="text/javascript">
    $(function () {
        //initializeSearch("a");
    });
    initializeLoginButton("b");
    addAnchorsInDescription("c", null);
    makeSortable("d", {
        0: {"sorter": false},
        1: {"sorter": "text"},
        2: {"sorter": "petRarity"},
        3: {"sorter": "text"},
        4: {"sorter": "digit"},
        5: {"sorter": "text"},
        6: {"sorter": "text"},
        7: {"sorter": "text"},
        8: {"sorter": "text"},
        9: {"sorter": "text"},
        10: {"sorter": "text"},
        11: {"sorter": "digit"}
    });
    renderPets("d");
    renderNumeric("d", 5);
    renderPetAbilityPopover("d", 7, 1);
    renderPetAbilityPopover("d", 9, 2);
    renderPetAbilityPopover("d", 11, 3);
    renderNumeric("d", 12);
</script>
</body>
</html>
