<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:36 PM
     */
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
        <title>Top RotMG Players by Fame 1-101 | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="msapplication-config" content="none">
        <link rel="canonical" href="/top-players-by-fame">
        <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,top players,by fame">
        <meta name="description" content="Top Players in Realm of the Mad God by fame 1-101.">
        <link href="css/re.css" rel="stylesheet">
    </head>
    <body>
        <header class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button button-default" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="brand navbar-brand" href="/" tabindex="-1"><img class="realm-eye" alt="eye" title="eye" src="img/eye.png"><span style="color: #333">Realm</span><span style="color: #08C">Eye</span></a>
                </div>
                <nav id="navbar" class="collapse navbar-collapse">
                    <div class="navbar-right navbar-form">
                        <div class="form-group player-search" id="a">
                            <span class="twitter-typeahead" style="position: relative; display: inline-block; direction: ltr;">
                                <input type="text" class="form-control tt-hint" readonly="" autocomplete="off" spellcheck="false" tabindex="-1" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; opacity: 1; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);"><input type="text" class="form-control tt-input" placeholder="Search" autocomplete="off" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;">
                                <pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre>
                                <span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none; right: auto;">
                                    <div class="tt-dataset-0"></div>
                                </span>
                            </span>
                            <div class="player-guild-toggle-panel">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default active"><input type="radio" name="player-guild-search-toggle" autocomplete="off">Player</label><label class="btn btn-default"><input type="radio" name="player-guild-search-toggle" autocomplete="off">Guild</label>
                                </div>
                            </div>
                        </div>
                        <div class="auth-panel"><a id="b" href="https://www.realmeye.com/log-in" class="btn btn-default">Log
                            In</a>
                        </div>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guilds<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/top-guilds-by-fame">Top Guilds by Fame</a></li>
                                <li><a href="/top-guilds-by-exp">Top Guilds by Exp</a></li>
                                <li><a href="/servers-by-active-guilds">Servers by active Guilds</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Players<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top
                                    Players</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/top-players-by-fame">by Fame</a></li>
                                        <li><a href="/top-players-by-exp">by Exp</a></li>
                                        <li><a href="/top-players-by-account-fame">by Account Fame</a></li>
                                        <li><a href="/top-graveyards-by/oryx-kills">by Graveyard</a></li>
                                        <li><a href="/top-players-with-no-guild">with no Guild</a></li>
                                    </ul>
                                </li>
                                <li><a href="/top-oldest-active-players">Top Oldest Active Players</a></li>
                                <li><a href="/recently-seen-unnamed-players">Recently seen Unnamed Players</a></li>
                                <li><a href="/number-of-players-by-rank">Number of Players by Rank</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Characters<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/top-characters">Top Characters</a></li>
                                <li><a href="/top-archers">Top Characters by Class</a></li>
                                <li><a href="/top-characters-with-outfit">Top Characters with Outfit</a></li>
                                <li><a href="/top-dead-characters-by/oryx-kills">Top Dead Characters</a></li>
                                <li><a href="/items/dye-statistics">Dye statistics</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pets<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/top-pets">Top Pets</a></li>
                                <li><a href="/top-pets-by-ability-heal">Top Pets by Ability</a></li>
                                <li><a href="/feed-power-of-items">Feed Power of Items</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/items/mystery-boxes">Mystery Boxes</a></li>
                                <li><a href="/items/keys">Nexus Shop Items</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trading<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/current-offers">Current offers</a></li>
                                <li><a href="/recent-offers">Recent offers</a></li>
                                <li><a href="/trading-help">Help</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/q-and-a">Q &amp; A</a></li>
                                <li><a href="/recent-changes">Recent changes</a></li>
                                <li><a href="/mreyeball">Mr. Eyeball</a></li>
                                <li><a href="/user-help">For Users</a></li>
                                <li><a href="/signature-help">User Signatures</a></li>
                                <li><a href="/donators">Donators</a></li>
                                <li><a href="/feedback">Feedback</a></li>
                                <li><a href="/privacy-policy">Privacy policy</a></li>
                            </ul>
                        </li>
                        <li><a href="/wiki/realm-of-the-mad-god" title="RotMG Wiki">Wiki</a></li>
                    </ul>
                </nav>
            </div>
        </header>
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
                                require_once('banana/kurk.php');
                                $playercount = 1;
                                $accounts = get_accounts_limit(100);
                                while ($rupee = $accounts->fetch_assoc())
                                {
                                    $name = $rupee['name'];
                                    $guild = $rupee['guild'];
                                    $guildname = get_guildname_from_guildid($guild);
                                    $alivefame = get_alivefame_from_id($rupee['id']);
                                    $aliveexp = get_aliveexp_from_id($rupee['id']);
                                    $characters = get_alivechars_from_id($rupee['id']);
                                    $stars = get_stars_from_id($rupee['id']);
                                    ?>
                                    <tr>
                                        <td><?= $playercount ?>.</td>
                                        <td>
                                            <div class="star-container">
                                                <a href="player.php?name=<?= $name ?>"><?= $name ?></a>
                                                <div class="star star-<?= $stars < 14 ? 'light-blue' : $stars < 28 ? 'blue' : $stars < 43 ? 'red' : $stars < 57 ? 'orange' : $stars < 70 ? 'yellow' : 'white' ?>"></div>
                                            </div>
                                        </td>
                                        <td><?php if ($guild) { ?><a href="/guild/<?= $guildname ?>"><?= $guildname ?></a><?php } ?></td>
                                        <td><a href="fame-history-of-player.php?<?= $name ?>"><?= $alivefame ?></a></td>
                                        <td><?= $aliveexp ?></td>
                                        <td><?= $stars ?></td>
                                        <td><?= $characters ?></td>
                                        <td><?= round($alivefame / $characters) ?></td>
                                        <td><?= round($aliveexp / $characters) ?></td>
                                        <td><span class="timeago" title="<?= $rupee['lastSeen'] ?>"></span></td>
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