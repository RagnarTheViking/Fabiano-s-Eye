<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:35 PM
     */
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
        <title>Servers by Active Guilds | RealmEye.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <meta name="msapplication-config" content="none">
        <link rel="canonical" href="/servers-by-active-guilds">
        <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, servers by active guilds, by fame">
        <meta name="description" content="The list of servers ranked by active guilds in Realm of the Mad God - the free online MMO RPG game.">
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
            <noscript>
                <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
                    extensively, so expect a much degraded experience!
                </div>
            </noscript>
            <div class="row">
                <div class="col-md-12">
                    <h1>Servers by Active Guilds</h1>
                    <p>Each guild is counted to the server they are the most
                        active on.<br>The member count is the sum of these guilds&apos; members.<br>The list is ordered by the
                        sum of the fame of these guilds.
                    </p>
                    <div class="table-responsive">
                        <style type="text/css">#c th:nth-child(1), #c td:nth-child(1), #c th:nth-child(3), #c td:nth-child(3), #c th:nth-child(4), #c td:nth-child(4), #c th:nth-child(5), #c td:nth-child(5), #c th:nth-child(6), #c td:nth-child(6), #c th:nth-child(7), #c td:nth-child(7), #c th:nth-child(8), #c td:nth-child(8), #c th:nth-child(9), #c td:nth-child(9) {
                            text-align: right
                            }
                        </style>
                        <table id="c" class="table table-striped tablesorter">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Server</th>
                                    <th><abbr title="Number of active Guilds on Server">Guilds</abbr></th>
                                    <th><abbr title="Sum of the Members in active Guilds on Server">Members</abbr></th>
                                    <th><abbr title="Avg. Members / Guild">AM/G</abbr></th>
                                    <th>Fame</th>
                                    <th>Exp</th>
                                    <th><abbr title="Avg. Fame / Guild">AF/G</abbr></th>
                                    <th><abbr title="Avg. Exp / Guild">AE/G</abbr></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td><a href="/top-guilds-on-server/EUNorth2">EUNorth2</a></td>
                                    <td>821</td>
                                    <td>11111</td>
                                    <td>13.5</td>
                                    <td>3288425</td>
                                    <td>5362382084</td>
                                    <td>4005</td>
                                    <td>6531525</td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><a href="/top-guilds-on-server/EUNorth">EUNorth</a></td>
                                    <td>590</td>
                                    <td>8140</td>
                                    <td>13.8</td>
                                    <td>2662730</td>
                                    <td>4161755045</td>
                                    <td>4513</td>
                                    <td>7053822</td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><a href="/top-guilds-on-server/EUWest">EUWest</a></td>
                                    <td>991</td>
                                    <td>17064</td>
                                    <td>17.2</td>
                                    <td>2569875</td>
                                    <td>4056062980</td>
                                    <td>2593</td>
                                    <td>4092899</td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><a href="/top-guilds-on-server/USEast3">USEast3</a></td>
                                    <td>756</td>
                                    <td>12651</td>
                                    <td>16.7</td>
                                    <td>2522249</td>
                                    <td>3691717784</td>
                                    <td>3336</td>
                                    <td>4883224</td>
                                </tr>
                                <tr>
                                    <td>5.</td>
                                    <td><a href="/top-guilds-on-server/USMidWest2">USMidWest2</a></td>
                                    <td>962</td>
                                    <td>15839</td>
                                    <td>16.5</td>
                                    <td>2338220</td>
                                    <td>3229245760</td>
                                    <td>2430</td>
                                    <td>3356804</td>
                                </tr>
                                <tr>
                                    <td>6.</td>
                                    <td><a href="/top-guilds-on-server/USSouth3">USSouth3</a></td>
                                    <td>965</td>
                                    <td>17989</td>
                                    <td>18.6</td>
                                    <td>1692457</td>
                                    <td>2356619617</td>
                                    <td>1753</td>
                                    <td>2442092</td>
                                </tr>
                                <tr>
                                    <td>7.</td>
                                    <td><a href="/top-guilds-on-server/USWest2">USWest2</a></td>
                                    <td>689</td>
                                    <td>11153</td>
                                    <td>16.2</td>
                                    <td>1541461</td>
                                    <td>2267580201</td>
                                    <td>2237</td>
                                    <td>3291117</td>
                                </tr>
                                <tr>
                                    <td>8.</td>
                                    <td><a href="/top-guilds-on-server/EUSouthWest">EUSouthWest</a></td>
                                    <td>565</td>
                                    <td>9811</td>
                                    <td>17.4</td>
                                    <td>1527709</td>
                                    <td>2339206797</td>
                                    <td>2703</td>
                                    <td>4140189</td>
                                </tr>
                                <tr>
                                    <td>9.</td>
                                    <td><a href="/top-guilds-on-server/USWest">USWest</a></td>
                                    <td>1885</td>
                                    <td>32272</td>
                                    <td>17.1</td>
                                    <td>1518627</td>
                                    <td>1838187163</td>
                                    <td>805</td>
                                    <td>975165</td>
                                </tr>
                                <tr>
                                    <td>10.</td>
                                    <td><a href="/top-guilds-on-server/USEast">USEast</a></td>
                                    <td>753</td>
                                    <td>11535</td>
                                    <td>15.3</td>
                                    <td>1512652</td>
                                    <td>2271470933</td>
                                    <td>2008</td>
                                    <td>3016561</td>
                                </tr>
                                <tr>
                                    <td>11.</td>
                                    <td><a href="/top-guilds-on-server/USEast2">USEast2</a></td>
                                    <td>443</td>
                                    <td>6655</td>
                                    <td>15.0</td>
                                    <td>1451073</td>
                                    <td>2186864366</td>
                                    <td>3275</td>
                                    <td>4936488</td>
                                </tr>
                                <tr>
                                    <td>12.</td>
                                    <td><a href="/top-guilds-on-server/USWest3">USWest3</a></td>
                                    <td>972</td>
                                    <td>16630</td>
                                    <td>17.1</td>
                                    <td>1443168</td>
                                    <td>1747558914</td>
                                    <td>1484</td>
                                    <td>1797900</td>
                                </tr>
                                <tr>
                                    <td>13.</td>
                                    <td><a href="/top-guilds-on-server/USSouthWest">USSouthWest</a></td>
                                    <td>315</td>
                                    <td>4855</td>
                                    <td>15.4</td>
                                    <td>1435953</td>
                                    <td>2312057190</td>
                                    <td>4558</td>
                                    <td>7339864</td>
                                </tr>
                                <tr>
                                    <td>14.</td>
                                    <td><a href="/top-guilds-on-server/USNorthWest">USNorthWest</a></td>
                                    <td>418</td>
                                    <td>6367</td>
                                    <td>15.2</td>
                                    <td>1328238</td>
                                    <td>2115603237</td>
                                    <td>3177</td>
                                    <td>5061251</td>
                                </tr>
                                <tr>
                                    <td>15.</td>
                                    <td><a href="/top-guilds-on-server/EUWest2">EUWest2</a></td>
                                    <td>845</td>
                                    <td>12871</td>
                                    <td>15.2</td>
                                    <td>1326948</td>
                                    <td>1766785744</td>
                                    <td>1570</td>
                                    <td>2090870</td>
                                </tr>
                                <tr>
                                    <td>16.</td>
                                    <td><a href="/top-guilds-on-server/USSouth">USSouth</a></td>
                                    <td>603</td>
                                    <td>9483</td>
                                    <td>15.7</td>
                                    <td>1169195</td>
                                    <td>1676910783</td>
                                    <td>1938</td>
                                    <td>2780946</td>
                                </tr>
                                <tr>
                                    <td>17.</td>
                                    <td><a href="/top-guilds-on-server/AsiaSouthEast">AsiaSouthEast</a></td>
                                    <td>620</td>
                                    <td>10763</td>
                                    <td>17.4</td>
                                    <td>1141734</td>
                                    <td>1621898842</td>
                                    <td>1841</td>
                                    <td>2615965</td>
                                </tr>
                                <tr>
                                    <td>18.</td>
                                    <td><a href="/top-guilds-on-server/EUEast">EUEast</a></td>
                                    <td>745</td>
                                    <td>14158</td>
                                    <td>19.0</td>
                                    <td>1095057</td>
                                    <td>1617869927</td>
                                    <td>1469</td>
                                    <td>2171637</td>
                                </tr>
                                <tr>
                                    <td>19.</td>
                                    <td><a href="/top-guilds-on-server/AsiaEast">AsiaEast</a></td>
                                    <td>361</td>
                                    <td>5663</td>
                                    <td>15.7</td>
                                    <td>948007</td>
                                    <td>1482031226</td>
                                    <td>2626</td>
                                    <td>4105349</td>
                                </tr>
                                <tr>
                                    <td>20.</td>
                                    <td><a href="/top-guilds-on-server/USMidWest">USMidWest</a></td>
                                    <td>796</td>
                                    <td>13712</td>
                                    <td>17.2</td>
                                    <td>733330</td>
                                    <td>951155061</td>
                                    <td>921</td>
                                    <td>1194918</td>
                                </tr>
                                <tr>
                                    <td>21.</td>
                                    <td><a href="/top-guilds-on-server/EUSouth">EUSouth</a></td>
                                    <td>182</td>
                                    <td>2216</td>
                                    <td>12.2</td>
                                    <td>683552</td>
                                    <td>1037312095</td>
                                    <td>3755</td>
                                    <td>5699517</td>
                                </tr>
                                <tr>
                                    <td>22.</td>
                                    <td><a href="/top-guilds-on-server/USSouth2">USSouth2</a></td>
                                    <td>217</td>
                                    <td>2947</td>
                                    <td>13.6</td>
                                    <td>441444</td>
                                    <td>615353760</td>
                                    <td>2034</td>
                                    <td>2835731</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin:15px 0px;text-align:center">
                        <script>if (document.body.clientHeight > window.innerHeight) {
                            var s = 0, d = document, a;
                            try {
                                s = d.documentElement.clientWidth || 0
                            } catch (e) {
                            }
                            a = s < 330 ? ["block", 6930305338, " data-ad-format=\"auto\""] : s < 366 ? ["inline-block;width:300px;height:250px", 4616393335] : s < 758 ? ["inline-block;width:336px;height:280px", 6232727339] : ["inline-block;width:728px;height:90px", 1547194137];
                            d.write('<ins class="adsbygoogle" data-ad-client="ca-pub-0854318594344150" style="display:' + a[0] + '" data-ad-slot="' + a[1] + '"' + (a[2] || '') + '></ins>');
                            (adsbygoogle = window.adsbygoogle || []).push({})
                            }
                        </script>
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
            initializeLoginButton("b");
            makeSortable("c", {
            0: {"sorter": "digit"},
            1: {"sorter": "text"},
            2: {"sorter": "digit"},
            3: {"sorter": "digit"},
            4: {"sorter": "digit"},
            5: {"sorter": "digit"},
            6: {"sorter": "digit"},
            7: {"sorter": "digit"},
            8: {"sorter": "digit"}
            });
            renderNumeric("c", 1);
            renderNumeric("c", 3);
            renderNumeric("c", 4);
            renderNumeric("c", 5);
            renderNumeric("c", 6);
            renderNumeric("c", 7);
            renderNumeric("c", 8);
            renderNumeric("c", 9);
            var _gaq = _gaq || [];
            _gaq.push(["_setAccount", "UA-36039145-1"]);
            _gaq.push(["_setSiteSpeedSampleRate", 10]);
            _gaq.push(["_setSampleRate", "80"]);
            _gaq.push(["_gat._anonymizeIp"]);
            var ssl = "https:" == document.location.protocol;
            _gaq.push(["_setCustomVar", 1, "ssl", ssl ? "yes" : "no"]);
            _gaq.push(["_trackPageview"]);
            (function () {
            var ga = document.createElement("script");
            ga.type = "text/javascript";
            ga.async = true;
            ga.src = (ssl ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </body>
</html>