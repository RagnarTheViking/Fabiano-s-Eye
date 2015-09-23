<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:34 PM
     */
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
        <title>Top RotMG Guilds by Exp 1-100 | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="msapplication-config" content="none">
        <link rel="canonical" href="/top-guilds-by-exp">
        <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,top guilds,by exp">
        <meta name="description" content="Top Guilds by Experience Points1-100 in Realm of the Mad God - the free online MMO RPG game.">
        <link href="css/re.css" rel="stylesheet">
    </head>
    <body>
        <header class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button button-default" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="brand navbar-brand" href="/" tabIndex="-1"><img class="realm-eye" alt="eye" title="eye" src="img/eye.png"><span style="color: #333">Realm</span><span style="color: #08C">Eye</span></a>
                </div>
                <nav id="navbar" class="collapse navbar-collapse">
                    <div class="navbar-right navbar-form">
                        <div class="form-group player-search" id="a">
                            <input type="text" class="form-control" placeholder="Search">
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
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top Players</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/top-players-by-fame">by Fame</a></li>
                                        <li><a href="/top-players-by-exp">by Exp</a></li>
                                        <li><a href="/top-players-by-account-fame">by Account Fame</a></li>
                                        <li><a href="/top-graveyards-by/oryx-kills">by Graveyard</a></li>
                                        <li><a href="/top-players-with-no-guild">with no Guild</a></li>
                                    </ul>
                                </li>
                                <li><a href="top-oldest-active-players.php">Top Oldest Active Players</a></li>
                                <li><a href="recently-seen-unnamed-players.php">Recently seen Unnamed Players</a></li>
                                <li><a href="number-of-players-by-rank.php">Number of Players by Rank</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Characters<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="top-characters.php">Top Characters</a></li>
                                <li><a href="top-archers.php">Top Characters by Class</a></li>
                                <li><a href="top-characters-with-outfit.php">Top Characters with Outfit</a></li>
                                <li><a href="/top-dead-characters-by/oryx-kills">Top Dead Characters</a></li>
                                <li><a href="/items/dye-statistics">Dye statistics</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pets<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="top-pets.php">Top Pets</a></li>
                                <li><a href="top-pets-by-ability-heal.php">Top Pets by Ability</a></li>
                                <li><a href="feed-power-of-items.php">Feed Power of Items</a></li>
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
                                <li><a href="q-and-a.php">Q &amp; A</a></li>
                                <li><a href="recent-changes.php">Recent changes</a></li>
                                <li><a href="mreyeball.php">Mr. Eyeball</a></li>
                                <li><a href="user-help.php">For Users</a></li>
                                <li><a href="signature-help.php">User Signatures</a></li>
                                <li><a href="donators.php">Donators</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="privacy-policy.php">Privacy policy</a></li>
                            </ul>
                        </li>
                        <li><a href="/wiki/realm-of-the-mad-god" title="RotMG Wiki">Wiki</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="container">
            <noscript>
                <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
                    extensively, so expect a much degraded experience!
                </div>
            </noscript>
            <div class="row">
                <div class="col-md-12">
                    <h1>Top RotMG Guilds by Exp</h1>
                    <p>This is a list of the top 1000 guilds by Exp in RotMG.</p>
                    <p>&nbsp;</p>
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="active"><a href="/top-guilds-by-exp">1 - 100</a></li>
                            <li><a href="/top-guilds-by-exp/101">101 - 200</a></li>
                            <li><a href="/top-guilds-by-exp/201">201 - 300</a></li>
                            <li><a href="/top-guilds-by-exp/301">301 - 400</a></li>
                            <li><a href="/top-guilds-by-exp/401">401 - 500</a></li>
                            <li><a href="/top-guilds-by-exp/501">501 - 600</a></li>
                            <li><a href="/top-guilds-by-exp/601">601 - 700</a></li>
                            <li><a href="/top-guilds-by-exp/701">701 - 800</a></li>
                            <li><a href="/top-guilds-by-exp/801">801 - 900</a></li>
                            <li><a href="/top-guilds-by-exp/901">901 - 1000</a></li>
                        </ul>
                    </nav>
                    <div class="table-responsive">
                        <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(3), #c td:nth-child(3), #c th:nth-child(4), #c td:nth-child(4), #c th:nth-child(6), #c td:nth-child(6), #c th:nth-child(7), #c td:nth-child(7), #c th:nth-child(8), #c td:nth-child(8), #c th:nth-child(9), #c td:nth-child(9), #c th:nth-child(10), #c td:nth-child(10) {
                            text-align: right
                            }
                        </style>
                        <table id="c" class="table table-striped tablesorter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Guild</th>
                                    <th>Fame</th>
                                    <th>Exp</th>
                                    <th>Stars</th>
                                    <th><abbr title="Members">M</abbr></th>
                                    <th><abbr title="Chars">C</abbr></th>
                                    <th><abbr title="Characters / Member">C/M</abbr></th>
                                    <th><abbr title="Avg. Exp / Member">AE/M</abbr></th>
                                    <th><abbr title="Avg. Exp / Char">AE/C</abbr></th>
                                    <th><abbr title="The server this guild is the most active on.">Srv.</abbr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td><a href="/guild/Oryx%20Brotherhood">Oryx Brotherhood</a></td>
                                    <td><a href="/fame-history-of-guild/Oryx%20Brotherhood">805211</a></td>
                                    <td>1454342810</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="192407000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 24px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 7px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>423</td>
                                    <td>8.5</td>
                                    <td>29086856</td>
                                    <td>3438162</td>
                                    <td><a href="/server-activity-of-guild/Oryx%20Brotherhood">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><a href="/guild/SquareEnix">SquareEnix</a></td>
                                    <td><a href="/fame-history-of-guild/SquareEnix">684468</a></td>
                                    <td>1223266281</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="241806000100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 24px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>409</td>
                                    <td>8.3</td>
                                    <td>24964617</td>
                                    <td>2990871</td>
                                    <td><a href="/server-activity-of-guild/SquareEnix">USSW</a></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><a href="/guild/Dirkheads">Dirkheads</a></td>
                                    <td><a href="/fame-history-of-guild/Dirkheads">600182</a></td>
                                    <td>1084375576</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="192704000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 27px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>310</td>
                                    <td>6.2</td>
                                    <td>21687511</td>
                                    <td>3497985</td>
                                    <td><a href="/server-activity-of-guild/Dirkheads">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><a href="/guild/Merikuh">Merikuh</a></td>
                                    <td><a href="/fame-history-of-guild/Merikuh">495530</a></td>
                                    <td>958809163</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="070100010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>9</td>
                                    <td>85</td>
                                    <td>9.4</td>
                                    <td>106534351</td>
                                    <td>11280107</td>
                                    <td><a href="/server-activity-of-guild/Merikuh">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td><a href="/guild/Night%20Owls">Night Owls</a></td>
                                    <td><a href="/fame-history-of-guild/Night%20Owls">485239</a></td>
                                    <td>891775514</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="161201020001">
                                            <div class="guild-star-count" style="background-color: #fff; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>32</td>
                                    <td>209</td>
                                    <td>6.5</td>
                                    <td>27867984</td>
                                    <td>4266868</td>
                                    <td><a href="/server-activity-of-guild/Night%20Owls">USNW</a></td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td><a href="/guild/Amnesy%20II">Amnesy II</a></td>
                                    <td><a href="/fame-history-of-guild/Amnesy%20II">478553</a></td>
                                    <td>825008164</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="112708020100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 27px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>382</td>
                                    <td>7.8</td>
                                    <td>16836901</td>
                                    <td>2159707</td>
                                    <td><a href="/server-activity-of-guild/Amnesy%20II">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td><a href="/guild/La%20Renaissance">La Renaissance</a></td>
                                    <td><a href="/fame-history-of-guild/La%20Renaissance">452555</a></td>
                                    <td>792049447</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="112204010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 22px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>38</td>
                                    <td>310</td>
                                    <td>8.2</td>
                                    <td>20843406</td>
                                    <td>2554998</td>
                                    <td><a href="/server-activity-of-guild/La%20Renaissance">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td><a href="/guild/Audacity">Audacity</a></td>
                                    <td><a href="/fame-history-of-guild/Audacity">393227</a></td>
                                    <td>657722092</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="102212010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 22px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>374</td>
                                    <td>8.3</td>
                                    <td>14616046</td>
                                    <td>1758615</td>
                                    <td><a href="/server-activity-of-guild/Audacity">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td><a href="/guild/Switch">Switch</a></td>
                                    <td><a href="/fame-history-of-guild/Switch">303082</a></td>
                                    <td>525254497</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="101206000101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>30</td>
                                    <td>224</td>
                                    <td>7.5</td>
                                    <td>17508483</td>
                                    <td>2344886</td>
                                    <td><a href="/server-activity-of-guild/Switch">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td><a href="/guild/Garden">Garden</a></td>
                                    <td><a href="/fame-history-of-guild/Garden">321567</a></td>
                                    <td>521670140</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="132113010002">
                                            <div class="guild-star-count" style="background-color: #fff; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 21px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>354</td>
                                    <td>7.1</td>
                                    <td>10433402</td>
                                    <td>1473644</td>
                                    <td><a href="/server-activity-of-guild/Garden">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td><a href="/guild/Usual%20Suspects">Usual Suspects</a></td>
                                    <td><a href="/fame-history-of-guild/Usual%20Suspects">297184</a></td>
                                    <td>508585375</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="172306010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 23px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>232</td>
                                    <td>4.9</td>
                                    <td>10820965</td>
                                    <td>2192178</td>
                                    <td><a href="/server-activity-of-guild/Usual%20Suspects">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td><a href="/guild/KKND">KKND</a></td>
                                    <td><a href="/fame-history-of-guild/KKND">288985</a></td>
                                    <td>506356017</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="131511030102">
                                            <div class="guild-star-count" style="background-color: #fff; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>198</td>
                                    <td>4.4</td>
                                    <td>11252355</td>
                                    <td>2557353</td>
                                    <td><a href="/server-activity-of-guild/KKND">EUE</a></td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td><a href="/guild/Metronome">Metronome</a></td>
                                    <td><a href="/fame-history-of-guild/Metronome">305680</a></td>
                                    <td>502701756</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="132212000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 22px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 12px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>310</td>
                                    <td>6.6</td>
                                    <td>10695782</td>
                                    <td>1621618</td>
                                    <td><a href="/server-activity-of-guild/Metronome">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td><a href="/guild/MAFIA">MAFIA</a></td>
                                    <td><a href="/fame-history-of-guild/MAFIA">281007</a></td>
                                    <td>494975264</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="171808010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>44</td>
                                    <td>199</td>
                                    <td>4.5</td>
                                    <td>11249437</td>
                                    <td>2487312</td>
                                    <td><a href="/server-activity-of-guild/MAFIA">USE</a></td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td><a href="/guild/Terrestrial">Terrestrial</a></td>
                                    <td><a href="/fame-history-of-guild/Terrestrial">266096</a></td>
                                    <td>449341937</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041520020300">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>44</td>
                                    <td>230</td>
                                    <td>5.2</td>
                                    <td>10212316</td>
                                    <td>1953660</td>
                                    <td><a href="/server-activity-of-guild/Terrestrial">USW2</a></td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td><a href="/guild/Knuckle%20Draggers">Knuckle Draggers</a></td>
                                    <td><a href="/fame-history-of-guild/Knuckle%20Draggers">259785</a></td>
                                    <td>430043703</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="091915030000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>46</td>
                                    <td>266</td>
                                    <td>5.8</td>
                                    <td>9348776</td>
                                    <td>1616705</td>
                                    <td><a href="/server-activity-of-guild/Knuckle%20Draggers">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td><a href="/guild/Shadow%20Crusaders">Shadow Crusaders</a></td>
                                    <td><a href="/fame-history-of-guild/Shadow%20Crusaders">249806</a></td>
                                    <td>408352997</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051817070100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>48</td>
                                    <td>265</td>
                                    <td>5.5</td>
                                    <td>8507354</td>
                                    <td>1540954</td>
                                    <td><a href="/server-activity-of-guild/Shadow%20Crusaders">USE</a></td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td><a href="/guild/Yeet">Yeet</a></td>
                                    <td><a href="/fame-history-of-guild/Yeet">253849</a></td>
                                    <td>402373738</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="061320060100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>46</td>
                                    <td>320</td>
                                    <td>7.0</td>
                                    <td>8747255</td>
                                    <td>1257417</td>
                                    <td><a href="/server-activity-of-guild/Yeet">USE</a></td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td><a href="/guild/Logical%20Nonsense">Logical Nonsense</a></td>
                                    <td><a href="/fame-history-of-guild/Logical%20Nonsense">213651</a></td>
                                    <td>383540602</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="111616030101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>48</td>
                                    <td>122</td>
                                    <td>2.5</td>
                                    <td>7990429</td>
                                    <td>3143775</td>
                                    <td><a href="/server-activity-of-guild/Logical%20Nonsense">EUW2</a></td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td><a href="/guild/La%20Revolution">La Revolution</a></td>
                                    <td><a href="/fame-history-of-guild/La%20Revolution">175132</a></td>
                                    <td>337475815</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040202010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>9</td>
                                    <td>36</td>
                                    <td>4.0</td>
                                    <td>37497312</td>
                                    <td>9374328</td>
                                    <td><a href="/server-activity-of-guild/La%20Revolution">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td><a href="/guild/BriansAndDanes">BriansAndDanes</a></td>
                                    <td><a href="/fame-history-of-guild/BriansAndDanes">170572</a></td>
                                    <td>323958104</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030300000108">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 8px"></div>
                                        </div>
                                    </td>
                                    <td>15</td>
                                    <td>47</td>
                                    <td>3.1</td>
                                    <td>21597206</td>
                                    <td>6892725</td>
                                    <td><a href="/server-activity-of-guild/BriansAndDanes">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>22.</td>
                                    <td><a href="/guild/Shadow%20Lotus">Shadow Lotus</a></td>
                                    <td><a href="/fame-history-of-guild/Shadow%20Lotus">196329</a></td>
                                    <td>322090690</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041612010101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>35</td>
                                    <td>204</td>
                                    <td>5.8</td>
                                    <td>9202591</td>
                                    <td>1578875</td>
                                    <td><a href="/server-activity-of-guild/Shadow%20Lotus">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>23.</td>
                                    <td><a href="/guild/Derivation">Derivation</a></td>
                                    <td><a href="/fame-history-of-guild/Derivation">177010</a></td>
                                    <td>279347169</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051807010100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>32</td>
                                    <td>205</td>
                                    <td>6.4</td>
                                    <td>8729599</td>
                                    <td>1362669</td>
                                    <td><a href="/server-activity-of-guild/Derivation">USNW</a></td>
                                </tr>
                                <tr>
                                    <td>24.</td>
                                    <td><a href="/guild/Unhealthy%20Addiction">Unhealthy Addiction</a></td>
                                    <td><a href="/fame-history-of-guild/Unhealthy%20Addiction">180681</a></td>
                                    <td>277109659</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="071715030302">
                                            <div class="guild-star-count" style="background-color: #fff; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>264</td>
                                    <td>5.6</td>
                                    <td>5895950</td>
                                    <td>1049657</td>
                                    <td><a href="/server-activity-of-guild/Unhealthy%20Addiction">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>25.</td>
                                    <td><a href="/guild/Reckless%20Savages">Reckless Savages</a></td>
                                    <td><a href="/fame-history-of-guild/Reckless%20Savages">177305</a></td>
                                    <td>274226947</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051718060100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>230</td>
                                    <td>4.9</td>
                                    <td>5834615</td>
                                    <td>1192291</td>
                                    <td><a href="/server-activity-of-guild/Reckless%20Savages">USS</a></td>
                                </tr>
                                <tr>
                                    <td>26.</td>
                                    <td><a href="/guild/Qc%20Pedobear">Qc Pedobear</a></td>
                                    <td><a href="/fame-history-of-guild/Qc%20Pedobear">145759</a></td>
                                    <td>269527765</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030406030000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>16</td>
                                    <td>65</td>
                                    <td>4.1</td>
                                    <td>16845485</td>
                                    <td>4146581</td>
                                    <td><a href="/server-activity-of-guild/Qc%20Pedobear">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>27.</td>
                                    <td><a href="/guild/BRWOOOOOOOOOOOOOOWR">BRWOOOOOOOOOOOOOOWR</a></td>
                                    <td><a href="/fame-history-of-guild/BRWOOOOOOOOOOOOOOWR">155832</a></td>
                                    <td>256990642</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040217110601">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>41</td>
                                    <td>192</td>
                                    <td>4.7</td>
                                    <td>6268064</td>
                                    <td>1338492</td>
                                    <td><a href="/server-activity-of-guild/BRWOOOOOOOOOOOOOOWR">USW2</a></td>
                                </tr>
                                <tr>
                                    <td>28.</td>
                                    <td><a href="/guild/TwinStars">TwinStars</a></td>
                                    <td><a href="/fame-history-of-guild/TwinStars">144916</a></td>
                                    <td>248048543</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="111416020101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>128</td>
                                    <td>2.8</td>
                                    <td>5512189</td>
                                    <td>1937879</td>
                                    <td><a href="/server-activity-of-guild/TwinStars">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>29.</td>
                                    <td><a href="/guild/jyapapa%20family">jyapapa family</a></td>
                                    <td><a href="/fame-history-of-guild/jyapapa%20family">142283</a></td>
                                    <td>247836827</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="060805060401">
                                            <div class="guild-star-count" style="background-color: #fff; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>30</td>
                                    <td>135</td>
                                    <td>4.5</td>
                                    <td>8261227</td>
                                    <td>1835828</td>
                                    <td><a href="/server-activity-of-guild/jyapapa%20family">AE</a></td>
                                </tr>
                                <tr>
                                    <td>30.</td>
                                    <td><a href="/guild/Wild%20Side">Wild Side</a></td>
                                    <td><a href="/fame-history-of-guild/Wild%20Side">142835</a></td>
                                    <td>241747681</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041208020000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>26</td>
                                    <td>131</td>
                                    <td>5.0</td>
                                    <td>9297987</td>
                                    <td>1845402</td>
                                    <td><a href="/server-activity-of-guild/Wild%20Side">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>31.</td>
                                    <td><a href="/guild/PARALYSIS">PARALYSIS</a></td>
                                    <td><a href="/fame-history-of-guild/PARALYSIS">148559</a></td>
                                    <td>236134143</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051317030000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>38</td>
                                    <td>182</td>
                                    <td>4.8</td>
                                    <td>6214056</td>
                                    <td>1297440</td>
                                    <td><a href="/server-activity-of-guild/PARALYSIS">USW2</a></td>
                                </tr>
                                <tr>
                                    <td>32.</td>
                                    <td><a href="/guild/Nobodies">Nobodies</a></td>
                                    <td><a href="/fame-history-of-guild/Nobodies">154005</a></td>
                                    <td>234983694</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="021115080101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>38</td>
                                    <td>219</td>
                                    <td>5.8</td>
                                    <td>6183781</td>
                                    <td>1072984</td>
                                    <td><a href="/server-activity-of-guild/Nobodies">USMW</a></td>
                                </tr>
                                <tr>
                                    <td>33.</td>
                                    <td><a href="/guild/Ride%20the%20Lightning">Ride the Lightning</a></td>
                                    <td><a href="/fame-history-of-guild/Ride%20the%20Lightning">121668</a></td>
                                    <td>229110797</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040002010002">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>9</td>
                                    <td>41</td>
                                    <td>4.6</td>
                                    <td>25456755</td>
                                    <td>5588068</td>
                                    <td><a href="/server-activity-of-guild/Ride%20the%20Lightning">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>34.</td>
                                    <td><a href="/guild/Fluffy">Fluffy</a></td>
                                    <td><a href="/fame-history-of-guild/Fluffy">122454</a></td>
                                    <td>225441134</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="100601000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>17</td>
                                    <td>56</td>
                                    <td>3.3</td>
                                    <td>13261243</td>
                                    <td>4025734</td>
                                    <td><a href="/server-activity-of-guild/Fluffy">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>35.</td>
                                    <td><a href="/guild/Ready">Ready</a></td>
                                    <td><a href="/fame-history-of-guild/Ready">114709</a></td>
                                    <td>221450864</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020000000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>26</td>
                                    <td>13.0</td>
                                    <td>110725432</td>
                                    <td>8517340</td>
                                    <td><a href="/server-activity-of-guild/Ready">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>36.</td>
                                    <td><a href="/guild/Gold">Gold</a></td>
                                    <td><a href="/fame-history-of-guild/Gold">145910</a></td>
                                    <td>220446225</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="052316040101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 23px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>226</td>
                                    <td>4.5</td>
                                    <td>4408924</td>
                                    <td>975425</td>
                                    <td><a href="/server-activity-of-guild/Gold">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>37.</td>
                                    <td><a href="/guild/Twilight%20Ogre">Twilight Ogre</a></td>
                                    <td><a href="/fame-history-of-guild/Twilight%20Ogre">138392</a></td>
                                    <td>220372402</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="061218050501">
                                            <div class="guild-star-count" style="background-color: #fff; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>185</td>
                                    <td>3.9</td>
                                    <td>4688774</td>
                                    <td>1191202</td>
                                    <td><a href="/server-activity-of-guild/Twilight%20Ogre">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>38.</td>
                                    <td><a href="/guild/CLARlTY">CLARlTY</a></td>
                                    <td><a href="/fame-history-of-guild/CLARlTY">142083</a></td>
                                    <td>220006149</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="001021090200">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 21px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>42</td>
                                    <td>207</td>
                                    <td>4.9</td>
                                    <td>5238241</td>
                                    <td>1062831</td>
                                    <td><a href="/server-activity-of-guild/CLARlTY">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>39.</td>
                                    <td><a href="/guild/WuTang%20Clan">WuTang Clan</a></td>
                                    <td><a href="/fame-history-of-guild/WuTang%20Clan">130874</a></td>
                                    <td>212547276</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041416030200">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>39</td>
                                    <td>155</td>
                                    <td>4.0</td>
                                    <td>5449930</td>
                                    <td>1371272</td>
                                    <td><a href="/server-activity-of-guild/WuTang%20Clan">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>40.</td>
                                    <td><a href="/guild/The%20Diviners">The Diviners</a></td>
                                    <td><a href="/fame-history-of-guild/The%20Diviners">133938</a></td>
                                    <td>210105161</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030917060100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>36</td>
                                    <td>172</td>
                                    <td>4.8</td>
                                    <td>5836254</td>
                                    <td>1221541</td>
                                    <td><a href="/server-activity-of-guild/The%20Diviners">USS</a></td>
                                </tr>
                                <tr>
                                    <td>41.</td>
                                    <td><a href="/guild/Konoyaro">Konoyaro</a></td>
                                    <td><a href="/fame-history-of-guild/Konoyaro">124236</a></td>
                                    <td>208902025</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041310060000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                        </div>
                                    </td>
                                    <td>33</td>
                                    <td>111</td>
                                    <td>3.4</td>
                                    <td>6330364</td>
                                    <td>1882000</td>
                                    <td><a href="/server-activity-of-guild/Konoyaro">USSW</a></td>
                                </tr>
                                <tr>
                                    <td>42.</td>
                                    <td><a href="/guild/Stella">Stella</a></td>
                                    <td><a href="/fame-history-of-guild/Stella">124338</a></td>
                                    <td>205548029</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030805110508">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 8px"></div>
                                        </div>
                                    </td>
                                    <td>40</td>
                                    <td>133</td>
                                    <td>3.3</td>
                                    <td>5138700</td>
                                    <td>1545473</td>
                                    <td><a href="/server-activity-of-guild/Stella">AE</a></td>
                                </tr>
                                <tr>
                                    <td>43.</td>
                                    <td><a href="/guild/Forninho%20is%20Down">Forninho is Down</a></td>
                                    <td><a href="/fame-history-of-guild/Forninho%20is%20Down">113988</a></td>
                                    <td>201987495</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030807020101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>22</td>
                                    <td>77</td>
                                    <td>3.5</td>
                                    <td>9181249</td>
                                    <td>2623214</td>
                                    <td><a href="/server-activity-of-guild/Forninho%20is%20Down">USS3</a></td>
                                </tr>
                                <tr>
                                    <td>44.</td>
                                    <td><a href="/guild/Old%20Times">Old Times</a></td>
                                    <td><a href="/fame-history-of-guild/Old%20Times">119780</a></td>
                                    <td>196357346</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="021115020101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>32</td>
                                    <td>141</td>
                                    <td>4.4</td>
                                    <td>6136167</td>
                                    <td>1392605</td>
                                    <td><a href="/server-activity-of-guild/Old%20Times">USSW</a></td>
                                </tr>
                                <tr>
                                    <td>45.</td>
                                    <td><a href="/guild/Porsche">Porsche</a></td>
                                    <td><a href="/fame-history-of-guild/Porsche">125000</a></td>
                                    <td>194967498</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010624090501">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 24px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>46</td>
                                    <td>192</td>
                                    <td>4.2</td>
                                    <td>4238423</td>
                                    <td>1015455</td>
                                    <td><a href="/server-activity-of-guild/Porsche">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>46.</td>
                                    <td><a href="/guild/F%20S%20U">F S U</a></td>
                                    <td><a href="/fame-history-of-guild/F%20S%20U">116850</a></td>
                                    <td>186132753</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041316080100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>42</td>
                                    <td>172</td>
                                    <td>4.1</td>
                                    <td>4431732</td>
                                    <td>1082167</td>
                                    <td><a href="/server-activity-of-guild/F%20S%20U">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>47.</td>
                                    <td><a href="/guild/Pee%20On%20Your%20Grave">Pee On Your Grave</a></td>
                                    <td><a href="/fame-history-of-guild/Pee%20On%20Your%20Grave">112543</a></td>
                                    <td>185387741</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040911030000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>27</td>
                                    <td>122</td>
                                    <td>4.5</td>
                                    <td>6866212</td>
                                    <td>1519571</td>
                                    <td><a href="/server-activity-of-guild/Pee%20On%20Your%20Grave">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>48.</td>
                                    <td><a href="/guild/Fishh">Fishh</a></td>
                                    <td><a href="/fame-history-of-guild/Fishh">110753</a></td>
                                    <td>183458730</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="031324090100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 24px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>133</td>
                                    <td>2.7</td>
                                    <td>3669174</td>
                                    <td>1379388</td>
                                    <td><a href="/server-activity-of-guild/Fishh">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>49.</td>
                                    <td><a href="/guild/Happy%20Horse">Happy Horse</a></td>
                                    <td><a href="/fame-history-of-guild/Happy%20Horse">104891</a></td>
                                    <td>177301727</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010613210702">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 21px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>122</td>
                                    <td>2.4</td>
                                    <td>3546034</td>
                                    <td>1453292</td>
                                    <td><a href="/server-activity-of-guild/Happy%20Horse">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>50.</td>
                                    <td><a href="/guild/Trusted">Trusted</a></td>
                                    <td><a href="/fame-history-of-guild/Trusted">104121</a></td>
                                    <td>176217390</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051117020002">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>37</td>
                                    <td>96</td>
                                    <td>2.6</td>
                                    <td>4762632</td>
                                    <td>1835597</td>
                                    <td><a href="/server-activity-of-guild/Trusted">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>51.</td>
                                    <td><a href="/guild/Sync">Sync</a></td>
                                    <td><a href="/fame-history-of-guild/Sync">112736</a></td>
                                    <td>173589197</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="031109020001">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>26</td>
                                    <td>162</td>
                                    <td>6.2</td>
                                    <td>6676507</td>
                                    <td>1071538</td>
                                    <td><a href="/server-activity-of-guild/Sync">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>52.</td>
                                    <td><a href="/guild/Mighty">Mighty</a></td>
                                    <td><a href="/fame-history-of-guild/Mighty">104630</a></td>
                                    <td>161157113</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041203010101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>22</td>
                                    <td>135</td>
                                    <td>6.1</td>
                                    <td>7325323</td>
                                    <td>1193756</td>
                                    <td><a href="/server-activity-of-guild/Mighty">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>53.</td>
                                    <td><a href="/guild/Presidential">Presidential</a></td>
                                    <td><a href="/fame-history-of-guild/Presidential">90570</a></td>
                                    <td>160289063</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="081708020201">
                                            <div class="guild-star-count" style="background-color: #fff; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>38</td>
                                    <td>58</td>
                                    <td>1.5</td>
                                    <td>4218133</td>
                                    <td>2763604</td>
                                    <td><a href="/server-activity-of-guild/Presidential">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>54.</td>
                                    <td><a href="/guild/GlowStream">GlowStream</a></td>
                                    <td><a href="/fame-history-of-guild/GlowStream">95559</a></td>
                                    <td>158595477</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="071912040001">
                                            <div class="guild-star-count" style="background-color: #fff; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>43</td>
                                    <td>98</td>
                                    <td>2.3</td>
                                    <td>3688266</td>
                                    <td>1618321</td>
                                    <td><a href="/server-activity-of-guild/GlowStream">USS3</a></td>
                                </tr>
                                <tr>
                                    <td>55.</td>
                                    <td><a href="/guild/Sanguine%20Sanctuary">Sanguine Sanctuary</a></td>
                                    <td><a href="/fame-history-of-guild/Sanguine%20Sanctuary">103114</a></td>
                                    <td>155988560</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="051818030100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>152</td>
                                    <td>3.4</td>
                                    <td>3466412</td>
                                    <td>1026240</td>
                                    <td><a href="/server-activity-of-guild/Sanguine%20Sanctuary">USE</a></td>
                                </tr>
                                <tr>
                                    <td>56.</td>
                                    <td><a href="/guild/HumitasKawaiis">HumitasKawaiis</a></td>
                                    <td><a href="/fame-history-of-guild/HumitasKawaiis">95243</a></td>
                                    <td>153331929</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="021409170402">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>48</td>
                                    <td>131</td>
                                    <td>2.7</td>
                                    <td>3194415</td>
                                    <td>1170472</td>
                                    <td><a href="/server-activity-of-guild/HumitasKawaiis">USS3</a></td>
                                </tr>
                                <tr>
                                    <td>57.</td>
                                    <td><a href="/guild/POPO%20CLUB">POPO CLUB</a></td>
                                    <td><a href="/fame-history-of-guild/POPO%20CLUB">98995</a></td>
                                    <td>153218661</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010919170301">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>50</td>
                                    <td>160</td>
                                    <td>3.2</td>
                                    <td>3064373</td>
                                    <td>957616</td>
                                    <td><a href="/server-activity-of-guild/POPO%20CLUB">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>58.</td>
                                    <td><a href="/guild/Nightingale">Nightingale</a></td>
                                    <td><a href="/fame-history-of-guild/Nightingale">88620</a></td>
                                    <td>151505169</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="091106020000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>28</td>
                                    <td>71</td>
                                    <td>2.5</td>
                                    <td>5410898</td>
                                    <td>2133875</td>
                                    <td><a href="/server-activity-of-guild/Nightingale">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>59.</td>
                                    <td><a href="/guild/NIN%20GUILD">NIN GUILD</a></td>
                                    <td><a href="/fame-history-of-guild/NIN%20GUILD">82467</a></td>
                                    <td>150373156</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="120512040300">
                                            <div class="guild-star-count" style="background-color: #fff; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>36</td>
                                    <td>44</td>
                                    <td>1.2</td>
                                    <td>4177032</td>
                                    <td>3417571</td>
                                    <td><a href="/server-activity-of-guild/NIN%20GUILD">AE</a></td>
                                </tr>
                                <tr>
                                    <td>60.</td>
                                    <td><a href="/guild/Foot%20Clan">Foot Clan</a></td>
                                    <td><a href="/fame-history-of-guild/Foot%20Clan">89802</a></td>
                                    <td>149238495</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000706070400">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>24</td>
                                    <td>101</td>
                                    <td>4.2</td>
                                    <td>6218270</td>
                                    <td>1477608</td>
                                    <td><a href="/server-activity-of-guild/Foot%20Clan">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>61.</td>
                                    <td><a href="/guild/Red%20Hot%20Chili%20Bakers">Red Hot Chili Bakers</a></td>
                                    <td><a href="/fame-history-of-guild/Red%20Hot%20Chili%20Bakers">89983</a></td>
                                    <td>149016649</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020605010101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>16</td>
                                    <td>90</td>
                                    <td>5.6</td>
                                    <td>9313540</td>
                                    <td>1655740</td>
                                    <td><a href="/server-activity-of-guild/Red%20Hot%20Chili%20Bakers">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>62.</td>
                                    <td><a href="/guild/Corsair">Corsair</a></td>
                                    <td><a href="/fame-history-of-guild/Corsair">86440</a></td>
                                    <td>148357339</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040604010100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>16</td>
                                    <td>75</td>
                                    <td>4.7</td>
                                    <td>9272333</td>
                                    <td>1978097</td>
                                    <td><a href="/server-activity-of-guild/Corsair">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>63.</td>
                                    <td><a href="/guild/Pleb">Pleb</a></td>
                                    <td><a href="/fame-history-of-guild/Pleb">98480</a></td>
                                    <td>147546504</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="041817010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>40</td>
                                    <td>168</td>
                                    <td>4.2</td>
                                    <td>3688662</td>
                                    <td>878253</td>
                                    <td><a href="/server-activity-of-guild/Pleb">USW2</a></td>
                                </tr>
                                <tr>
                                    <td>64.</td>
                                    <td><a href="/guild/GoT">GoT</a></td>
                                    <td><a href="/fame-history-of-guild/GoT">92271</a></td>
                                    <td>147413966</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="052014070300">
                                            <div class="guild-star-count" style="background-color: #fff; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>124</td>
                                    <td>2.5</td>
                                    <td>3008448</td>
                                    <td>1188822</td>
                                    <td><a href="/server-activity-of-guild/GoT">USS2</a></td>
                                </tr>
                                <tr>
                                    <td>65.</td>
                                    <td><a href="/guild/Pingerz">Pingerz</a></td>
                                    <td><a href="/fame-history-of-guild/Pingerz">102424</a></td>
                                    <td>143226517</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000620120600">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 6px"></div>
                                        </div>
                                    </td>
                                    <td>44</td>
                                    <td>198</td>
                                    <td>4.5</td>
                                    <td>3255148</td>
                                    <td>723366</td>
                                    <td><a href="/server-activity-of-guild/Pingerz">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>66.</td>
                                    <td><a href="/guild/Neutrals">Neutrals</a></td>
                                    <td><a href="/fame-history-of-guild/Neutrals">87514</a></td>
                                    <td>142074719</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="031117120204">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 12px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>109</td>
                                    <td>2.2</td>
                                    <td>2899484</td>
                                    <td>1303437</td>
                                    <td><a href="/server-activity-of-guild/Neutrals">EUSW</a></td>
                                </tr>
                                <tr>
                                    <td>67.</td>
                                    <td><a href="/guild/Mister">Mister</a></td>
                                    <td><a href="/fame-history-of-guild/Mister">101325</a></td>
                                    <td>139785381</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010929050401">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 29px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>208</td>
                                    <td>4.2</td>
                                    <td>2852762</td>
                                    <td>672045</td>
                                    <td><a href="/server-activity-of-guild/Mister">USMW</a></td>
                                </tr>
                                <tr>
                                    <td>68.</td>
                                    <td><a href="/guild/Peace%20is%20Plenty">Peace is Plenty</a></td>
                                    <td><a href="/fame-history-of-guild/Peace%20is%20Plenty">87427</a></td>
                                    <td>130090065</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="011018110102">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>43</td>
                                    <td>163</td>
                                    <td>3.8</td>
                                    <td>3025350</td>
                                    <td>798098</td>
                                    <td><a href="/server-activity-of-guild/Peace%20is%20Plenty">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>69.</td>
                                    <td><a href="/guild/Divine%20Faggots">Divine Faggots</a></td>
                                    <td><a href="/fame-history-of-guild/Divine%20Faggots">75144</a></td>
                                    <td>129878626</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010402010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>8</td>
                                    <td>57</td>
                                    <td>7.1</td>
                                    <td>16234828</td>
                                    <td>2278572</td>
                                    <td><a href="/server-activity-of-guild/Divine%20Faggots">EUS</a></td>
                                </tr>
                                <tr>
                                    <td>70.</td>
                                    <td><a href="/guild/V%20A%20R%20I%20A">V A R I A</a></td>
                                    <td><a href="/fame-history-of-guild/V%20A%20R%20I%20A">86538</a></td>
                                    <td>127176251</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010913090102">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>35</td>
                                    <td>147</td>
                                    <td>4.2</td>
                                    <td>3633607</td>
                                    <td>865144</td>
                                    <td><a href="/server-activity-of-guild/V%20A%20R%20I%20A">USS</a></td>
                                </tr>
                                <tr>
                                    <td>71.</td>
                                    <td><a href="/guild/CockandBalls">CockandBalls</a></td>
                                    <td><a href="/fame-history-of-guild/CockandBalls">80650</a></td>
                                    <td>127146194</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000908030000">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>20</td>
                                    <td>113</td>
                                    <td>5.7</td>
                                    <td>6357309</td>
                                    <td>1125187</td>
                                    <td><a href="/server-activity-of-guild/CockandBalls">USW</a></td>
                                </tr>
                                <tr>
                                    <td>72.</td>
                                    <td><a href="/guild/Rock%20Out">Rock Out</a></td>
                                    <td><a href="/fame-history-of-guild/Rock%20Out">78630</a></td>
                                    <td>126287914</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010713130803">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>114</td>
                                    <td>2.5</td>
                                    <td>2806398</td>
                                    <td>1107788</td>
                                    <td><a href="/server-activity-of-guild/Rock%20Out">USSW</a></td>
                                </tr>
                                <tr>
                                    <td>73.</td>
                                    <td><a href="/guild/United%20States">United States</a></td>
                                    <td><a href="/fame-history-of-guild/United%20States">78293</a></td>
                                    <td>122706225</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020624080100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 24px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>41</td>
                                    <td>113</td>
                                    <td>2.8</td>
                                    <td>2992834</td>
                                    <td>1085895</td>
                                    <td><a href="/server-activity-of-guild/United%20States">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>74.</td>
                                    <td><a href="/guild/NightEagles">NightEagles</a></td>
                                    <td><a href="/fame-history-of-guild/NightEagles">71708</a></td>
                                    <td>121366078</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010314030000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>21</td>
                                    <td>76</td>
                                    <td>3.6</td>
                                    <td>5779337</td>
                                    <td>1596922</td>
                                    <td><a href="/server-activity-of-guild/NightEagles">USNW</a></td>
                                </tr>
                                <tr>
                                    <td>75.</td>
                                    <td><a href="/guild/Horribly%20Racist">Horribly Racist</a></td>
                                    <td><a href="/fame-history-of-guild/Horribly%20Racist">69778</a></td>
                                    <td>120103628</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="030509100100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>28</td>
                                    <td>68</td>
                                    <td>2.4</td>
                                    <td>4289415</td>
                                    <td>1766229</td>
                                    <td><a href="/server-activity-of-guild/Horribly%20Racist">USE</a></td>
                                </tr>
                                <tr>
                                    <td>76.</td>
                                    <td><a href="/guild/BirdHouse">BirdHouse</a></td>
                                    <td><a href="/fame-history-of-guild/BirdHouse">61336</a></td>
                                    <td>118552542</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000103010600">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 6px"></div>
                                        </div>
                                    </td>
                                    <td>11</td>
                                    <td>16</td>
                                    <td>1.5</td>
                                    <td>10777503</td>
                                    <td>7409533</td>
                                    <td><a href="/server-activity-of-guild/BirdHouse">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>77.</td>
                                    <td><a href="/guild/from%20PrOLAND">from PrOLAND</a></td>
                                    <td><a href="/fame-history-of-guild/from%20PrOLAND">64593</a></td>
                                    <td>116340722</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="070807060000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                        </div>
                                    </td>
                                    <td>28</td>
                                    <td>37</td>
                                    <td>1.3</td>
                                    <td>4155025</td>
                                    <td>3144343</td>
                                    <td><a href="/server-activity-of-guild/from%20PrOLAND">EUE</a></td>
                                </tr>
                                <tr>
                                    <td>78.</td>
                                    <td><a href="/guild/Dank%20Flannel">Dank Flannel</a></td>
                                    <td><a href="/fame-history-of-guild/Dank%20Flannel">84205</a></td>
                                    <td>113709749</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="001022110302">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 22px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>48</td>
                                    <td>202</td>
                                    <td>4.2</td>
                                    <td>2368953</td>
                                    <td>562919</td>
                                    <td><a href="/server-activity-of-guild/Dank%20Flannel">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>79.</td>
                                    <td><a href="/guild/Beef%20Jerky">Beef Jerky</a></td>
                                    <td><a href="/fame-history-of-guild/Beef%20Jerky">67333</a></td>
                                    <td>112550058</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="061413060104">
                                            <div class="guild-star-count" style="background-color: #fff; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 13px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>44</td>
                                    <td>63</td>
                                    <td>1.4</td>
                                    <td>2557955</td>
                                    <td>1786508</td>
                                    <td><a href="/server-activity-of-guild/Beef%20Jerky">USNW</a></td>
                                </tr>
                                <tr>
                                    <td>80.</td>
                                    <td><a href="/guild/Immortal%20Legend">Immortal Legend</a></td>
                                    <td><a href="/fame-history-of-guild/Immortal%20Legend">77989</a></td>
                                    <td>111875588</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="042316020002">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 23px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>160</td>
                                    <td>3.4</td>
                                    <td>2380331</td>
                                    <td>699222</td>
                                    <td><a href="/server-activity-of-guild/Immortal%20Legend">USE</a></td>
                                </tr>
                                <tr>
                                    <td>81.</td>
                                    <td><a href="/guild/Power%20Up">Power Up</a></td>
                                    <td><a href="/fame-history-of-guild/Power%20Up">63931</a></td>
                                    <td>109245558</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010503000100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>10</td>
                                    <td>55</td>
                                    <td>5.5</td>
                                    <td>10924555</td>
                                    <td>1986282</td>
                                    <td><a href="/server-activity-of-guild/Power%20Up">EUS</a></td>
                                </tr>
                                <tr>
                                    <td>82.</td>
                                    <td><a href="/guild/PhantomLord">PhantomLord</a></td>
                                    <td><a href="/fame-history-of-guild/PhantomLord">66470</a></td>
                                    <td>108540238</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="031011090003">
                                            <div class="guild-star-count" style="background-color: #fff; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>36</td>
                                    <td>87</td>
                                    <td>2.4</td>
                                    <td>3015006</td>
                                    <td>1247588</td>
                                    <td><a href="/server-activity-of-guild/PhantomLord">EUE</a></td>
                                </tr>
                                <tr>
                                    <td>83.</td>
                                    <td><a href="/guild/Spectral%20Rogues">Spectral Rogues</a></td>
                                    <td><a href="/fame-history-of-guild/Spectral%20Rogues">71627</a></td>
                                    <td>106765687</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="021016110101">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 16px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>41</td>
                                    <td>124</td>
                                    <td>3.0</td>
                                    <td>2604041</td>
                                    <td>861013</td>
                                    <td><a href="/server-activity-of-guild/Spectral%20Rogues">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>84.</td>
                                    <td><a href="/guild/TheCalm">TheCalm</a></td>
                                    <td><a href="/fame-history-of-guild/TheCalm">58021</a></td>
                                    <td>105775467</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040100000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>5</td>
                                    <td>28</td>
                                    <td>5.6</td>
                                    <td>21155093</td>
                                    <td>3777695</td>
                                    <td><a href="/server-activity-of-guild/TheCalm">USS</a></td>
                                </tr>
                                <tr>
                                    <td>85.</td>
                                    <td><a href="/guild/Die%20schwulen%20Zwei">Die schwulen Zwei</a></td>
                                    <td><a href="/fame-history-of-guild/Die%20schwulen%20Zwei">51448</a></td>
                                    <td>97680696</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020000000100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>3</td>
                                    <td>14</td>
                                    <td>4.7</td>
                                    <td>32560232</td>
                                    <td>6977192</td>
                                    <td><a href="/server-activity-of-guild/Die%20schwulen%20Zwei">EUN2</a></td>
                                </tr>
                                <tr>
                                    <td>86.</td>
                                    <td><a href="/guild/Familia">Familia</a></td>
                                    <td><a href="/fame-history-of-guild/Familia">60137</a></td>
                                    <td>97383283</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020615060502">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 5px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>36</td>
                                    <td>75</td>
                                    <td>2.1</td>
                                    <td>2705091</td>
                                    <td>1298443</td>
                                    <td><a href="/server-activity-of-guild/Familia">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>87.</td>
                                    <td><a href="/guild/KevinStinkt">KevinStinkt</a></td>
                                    <td><a href="/fame-history-of-guild/KevinStinkt">49858</a></td>
                                    <td>97102831</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020000000000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>7</td>
                                    <td>3.5</td>
                                    <td>48551415</td>
                                    <td>13871833</td>
                                    <td><a href="/server-activity-of-guild/KevinStinkt">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>88.</td>
                                    <td><a href="/guild/Bulwarks">Bulwarks</a></td>
                                    <td><a href="/fame-history-of-guild/Bulwarks">66207</a></td>
                                    <td>95146777</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010622140303">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 22px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 14px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>124</td>
                                    <td>2.5</td>
                                    <td>1941770</td>
                                    <td>767312</td>
                                    <td><a href="/server-activity-of-guild/Bulwarks">USE</a></td>
                                </tr>
                                <tr>
                                    <td>89.</td>
                                    <td><a href="/guild/DarknessHunter">DarknessHunter</a></td>
                                    <td><a href="/fame-history-of-guild/DarknessHunter">61288</a></td>
                                    <td>94210456</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000411040401">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>24</td>
                                    <td>100</td>
                                    <td>4.2</td>
                                    <td>3925435</td>
                                    <td>942104</td>
                                    <td><a href="/server-activity-of-guild/DarknessHunter">EUS</a></td>
                                </tr>
                                <tr>
                                    <td>90.</td>
                                    <td><a href="/guild/Happiness">Happiness</a></td>
                                    <td><a href="/fame-history-of-guild/Happiness">57855</a></td>
                                    <td>92551913</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020906040202">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>25</td>
                                    <td>73</td>
                                    <td>2.9</td>
                                    <td>3702076</td>
                                    <td>1267834</td>
                                    <td><a href="/server-activity-of-guild/Happiness">USE2</a></td>
                                </tr>
                                <tr>
                                    <td>91.</td>
                                    <td><a href="/guild/InFeRnItyS">InFeRnItyS</a></td>
                                    <td><a href="/fame-history-of-guild/InFeRnItyS">55529</a></td>
                                    <td>90926326</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000711171004">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 11px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>49</td>
                                    <td>85</td>
                                    <td>1.7</td>
                                    <td>1855639</td>
                                    <td>1069721</td>
                                    <td><a href="/server-activity-of-guild/InFeRnItyS">USE3</a></td>
                                </tr>
                                <tr>
                                    <td>92.</td>
                                    <td><a href="/guild/Ecstatic">Ecstatic</a></td>
                                    <td><a href="/fame-history-of-guild/Ecstatic">60173</a></td>
                                    <td>90760175</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010609080104">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 6px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 4px"></div>
                                        </div>
                                    </td>
                                    <td>29</td>
                                    <td>107</td>
                                    <td>3.7</td>
                                    <td>3129661</td>
                                    <td>848225</td>
                                    <td><a href="/server-activity-of-guild/Ecstatic">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>93.</td>
                                    <td><a href="/guild/AnusGods">AnusGods</a></td>
                                    <td><a href="/fame-history-of-guild/AnusGods">53896</a></td>
                                    <td>90317764</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="021019090303">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 10px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 19px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>46</td>
                                    <td>61</td>
                                    <td>1.3</td>
                                    <td>1963429</td>
                                    <td>1480619</td>
                                    <td><a href="/server-activity-of-guild/AnusGods">EUE</a></td>
                                </tr>
                                <tr>
                                    <td>94.</td>
                                    <td><a href="/guild/Vocivum">Vocivum</a></td>
                                    <td><a href="/fame-history-of-guild/Vocivum">63155</a></td>
                                    <td>90217230</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000817180101">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 17px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 18px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>45</td>
                                    <td>136</td>
                                    <td>3.0</td>
                                    <td>2004827</td>
                                    <td>663361</td>
                                    <td><a href="/server-activity-of-guild/Vocivum">USMW2</a></td>
                                </tr>
                                <tr>
                                    <td>95.</td>
                                    <td><a href="/guild/DeadPixel">DeadPixel</a></td>
                                    <td><a href="/fame-history-of-guild/DeadPixel">49039</a></td>
                                    <td>88409924</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010101000003">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>6</td>
                                    <td>27</td>
                                    <td>4.5</td>
                                    <td>14734987</td>
                                    <td>3274441</td>
                                    <td><a href="/server-activity-of-guild/DeadPixel">EUW</a></td>
                                </tr>
                                <tr>
                                    <td>96.</td>
                                    <td><a href="/guild/S%20T%20U%20N">S T U N</a></td>
                                    <td><a href="/fame-history-of-guild/S%20T%20U%20N">58128</a></td>
                                    <td>86990492</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010208070300">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 7px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>21</td>
                                    <td>103</td>
                                    <td>4.9</td>
                                    <td>4142404</td>
                                    <td>844567</td>
                                    <td><a href="/server-activity-of-guild/S%20T%20U%20N">ASE</a></td>
                                </tr>
                                <tr>
                                    <td>97.</td>
                                    <td><a href="/guild/OG%20Kush">OG Kush</a></td>
                                    <td><a href="/fame-history-of-guild/OG%20Kush">64266</a></td>
                                    <td>85623337</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="020915200100">
                                            <div class="guild-star-count" style="background-color: #fff; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 15px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>47</td>
                                    <td>158</td>
                                    <td>3.4</td>
                                    <td>1821773</td>
                                    <td>541919</td>
                                    <td><a href="/server-activity-of-guild/OG%20Kush">USSW</a></td>
                                </tr>
                                <tr>
                                    <td>98.</td>
                                    <td><a href="/guild/Ham%20Planet%20Express">Ham Planet Express</a></td>
                                    <td><a href="/fame-history-of-guild/Ham%20Planet%20Express">49514</a></td>
                                    <td>85548731</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="000300020200">
                                            <div class="guild-star-count" style="background-color: #ff0; width: 3px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #304cda; width: 2px"></div>
                                        </div>
                                    </td>
                                    <td>7</td>
                                    <td>38</td>
                                    <td>5.4</td>
                                    <td>12221247</td>
                                    <td>2251282</td>
                                    <td><a href="/server-activity-of-guild/Ham%20Planet%20Express">USS3</a></td>
                                </tr>
                                <tr>
                                    <td>99.</td>
                                    <td><a href="/guild/Taliban%20from%20Azkaban">Taliban from Azkaban</a></td>
                                    <td><a href="/fame-history-of-guild/Taliban%20from%20Azkaban">63368</a></td>
                                    <td>84725061</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="010920080003">
                                            <div class="guild-star-count" style="background-color: #fff; width: 1px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 9px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 20px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 8px"></div>
                                            <div class="guild-star-count" style="background-color: #8997dd; width: 3px"></div>
                                        </div>
                                    </td>
                                    <td>41</td>
                                    <td>144</td>
                                    <td>3.5</td>
                                    <td>2066464</td>
                                    <td>588368</td>
                                    <td><a href="/server-activity-of-guild/Taliban%20from%20Azkaban">EUN</a></td>
                                </tr>
                                <tr>
                                    <td>100.</td>
                                    <td><a href="/guild/ProfessionaI">ProfessionaI</a></td>
                                    <td><a href="/fame-history-of-guild/ProfessionaI">47365</a></td>
                                    <td>81878743</td>
                                    <td>
                                        <div class="guild-star-distribution" data-sorter="040202010000">
                                            <div class="guild-star-count" style="background-color: #fff; width: 4px"></div>
                                            <div class="guild-star-count" style="background-color: #ff0; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #f6921d; width: 2px"></div>
                                            <div class="guild-star-count" style="background-color: #c0262c; width: 1px"></div>
                                        </div>
                                    </td>
                                    <td>9</td>
                                    <td>38</td>
                                    <td>4.2</td>
                                    <td>9097638</td>
                                    <td>2154703</td>
                                    <td><a href="/server-activity-of-guild/ProfessionaI">EUN2</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <nav class="text-center">
                        <ul class="pagination">
                            <li class="active"><a href="/top-guilds-by-exp">1 - 100</a></li>
                            <li><a href="/top-guilds-by-exp/101">101 - 200</a></li>
                            <li><a href="/top-guilds-by-exp/201">201 - 300</a></li>
                            <li><a href="/top-guilds-by-exp/301">301 - 400</a></li>
                            <li><a href="/top-guilds-by-exp/401">401 - 500</a></li>
                            <li><a href="/top-guilds-by-exp/501">501 - 600</a></li>
                            <li><a href="/top-guilds-by-exp/601">601 - 700</a></li>
                            <li><a href="/top-guilds-by-exp/701">701 - 800</a></li>
                            <li><a href="/top-guilds-by-exp/801">801 - 900</a></li>
                            <li><a href="/top-guilds-by-exp/901">901 - 1000</a></li>
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
            initializeSearch("a");
            });
            initializeLoginButton("b");
            makeSortable("c", {
            0: {"sorter": "digit"},
            1: {"sorter": "text"},
            2: {"sorter": "digit"},
            3: {"sorter": "digit"},
            4: {"sorter": "guildStarDistribution"},
            5: {"sorter": "digit"},
            6: {"sorter": "digit"},
            7: {"sorter": "digit"},
            8: {"sorter": "digit"},
            9: {"sorter": "digit"},
            10: {"sorter": "text"}
            });
            renderNumeric("c", 1);
            renderNumeric("c", 3);
            renderNumeric("c", 4);
            renderNumeric("c", 6);
            renderNumeric("c", 7);
            renderNumeric("c", 8);
            renderNumeric("c", 9);
            renderNumeric("c", 10);
        </script>
    </body>
</html>