<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:39 PM
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Necromancers 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Necromancers">
    <meta name="description" content="Top Necromancers 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Necromancers</h1><p>This is a list of the top 1000 necromancers by Exp seen in
                the past two weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
            <div class="text-center">
                <div class="btn-group">
                    <a class="btn btn-default list-selector-item" title="Top Archers" href="/top-archers"><span class="private-character" style="background-position: 0px -58px"></span>
                        <div class="list-selector-item-label">Archers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Assassins" href="/top-assassins"><span class="private-character" style="background-position: 0px -358px"></span>
                        <div class="list-selector-item-label">Assassins</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Huntresses" href="/top-huntresses"><span class="private-character" style="background-position: 0px -458px"></span>
                        <div class="list-selector-item-label">Huntresses</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Knights" href="/top-knights"><span class="private-character" style="background-position: 0px -258px"></span>
                        <div class="list-selector-item-label">Knights</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Mystics" href="/top-mystics"><span class="private-character" style="background-position: 0px -508px"></span>
                        <div class="list-selector-item-label">Mystics</div>
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Necromancers" href="/top-necromancers"><span class="private-character" style="background-position: 0px -408px"></span>
                        <div class="list-selector-item-label">Necromancers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Ninjas" href="/top-ninjas"><span class="private-character" style="background-position: 0px -658px"></span>
                        <div class="list-selector-item-label">Ninjas</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Paladins" href="/top-paladins"><span class="private-character" style="background-position: 0px -308px"></span>
                        <div class="list-selector-item-label">Paladins</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Priests" href="/top-priests"><span class="private-character" style="background-position: 0px -158px"></span>
                        <div class="list-selector-item-label">Priests</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Rogues" href="/top-rogues"><span class="private-character" style="background-position: 0px -8px"></span>
                        <div class="list-selector-item-label">Rogues</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Sorcerers" href="/top-sorcerers"><span class="private-character" style="background-position: 0px -608px"></span>
                        <div class="list-selector-item-label">Sorcerers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Tricksters" href="/top-tricksters"><span class="private-character" style="background-position: 0px -558px"></span>
                        <div class="list-selector-item-label">Tricksters</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Warriors" href="/top-warriors"><span class="private-character" style="background-position: 0px -208px"></span>
                        <div class="list-selector-item-label">Warriors</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-necromancers">1 - 100</a></li>
                    <li><a href="/top-necromancers/101">101 - 200</a></li>
                    <li><a href="/top-necromancers/201">201 - 300</a></li>
                    <li><a href="/top-necromancers/301">301 - 400</a></li>
                    <li><a href="/top-necromancers/401">401 - 500</a></li>
                    <li><a href="/top-necromancers/501">501 - 600</a></li>
                    <li><a href="/top-necromancers/601">601 - 700</a></li>
                    <li><a href="/top-necromancers/701">701 - 800</a></li>
                    <li><a href="/top-necromancers/801">801 - 900</a></li>
                    <li><a href="/top-necromancers/901">901 - 1000</a></li>
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
                    <tr>
                        <td>1.</td>
                        <td>
                            <a id="d" class="character" href="/top-characters-with-outfit/801/842/4666/4922" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772195" data-dye2="167772195" data-accessory-dye-id="4922" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stration">Stration</a></td>
                        <td>51853</td>
                        <td>103295996</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[885,415,60,40,50,39,94,60]" data-bonuses="[215,30,0,15,0,9,19,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T04:34:32Z">2015-09-13 04:34:32</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/801/29810/4638/4488" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="150994952" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/LiveJoker">LiveJoker</a></td>
                        <td>29866</td>
                        <td>59320816</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[765,475,66,46,50,39,94,60]" data-bonuses="[95,90,6,21,0,9,19,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/801/29810/4103/4465" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>24200</td>
                        <td>47989173</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2321"></span><span class="item" data-item="8863"></span><span class="item" data-item="8960"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,339,64,49,50,30,81,63]" data-bonuses="[0,55,4,24,0,0,6,3]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td><span class="private-character" style="background-position: -250px -2050px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/801/29810/4232/4393" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="33554431" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zedl">Zedl</a></td>
                        <td>13400</td>
                        <td>26389505</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2321"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,45,50,32,80,63]" data-bonuses="[100,55,8,20,0,2,5,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T20:08:45Z">2015-09-22 20:08:45</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/801/0/4616/4403" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772162" data-dye2="16809984" data-accessory-dye-id="4403" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dipser">Dipser</a></td>
                        <td>13259</td>
                        <td>26107199</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:13:36Z">2015-09-22 23:13:36</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/801/0/4684/4940" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772207" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4684" data-count="3"></a>
                        </td>
                        <td><a href="/player/MrFijiWiji">MrFijiWiji</a></td>
                        <td>11317</td>
                        <td>22223405</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,60,40,50,39,84,60]" data-bonuses="[205,25,0,15,0,9,9,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T23:33:41Z">2015-09-14 23:33:41</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/801/842/4191/4902" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="16777344" data-dye2="67108871" data-accessory-dye-id="4902" data-clothing-dye-id="4191" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>8551</td>
                        <td>16690891</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="1895"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,68,44,47,37,82,60]" data-bonuses="[125,25,8,19,-3,7,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/801/842/4103/4452" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="16777216" data-dye2="33506560" data-accessory-dye-id="4452" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kingged">Kingged</a></td>
                        <td>8081</td>
                        <td>15750971</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="1895"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,70,46,47,37,82,60]" data-bonuses="[85,85,10,21,-3,7,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/801/842/4630/4891" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143046</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="1895"></span><span class="item" data-item="8863"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,68,38,47,30,81,60]" data-bonuses="[180,55,8,13,-3,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:32:09Z">2015-09-16 10:32:09</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/801/842/4636/4441" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="150994951" data-dye2="29824389" data-accessory-dye-id="4441" data-clothing-dye-id="4636" data-count="1"></a>
                        </td>
                        <td><a href="/player/Talooola">Talooola</a></td>
                        <td>7509</td>
                        <td>14608283</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2735"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,30,81,60]" data-bonuses="[180,55,4,13,0,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T15:46:54Z">2015-09-23 15:46:54</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/801/0/4195/4403" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="33531136" data-dye2="16809984" data-accessory-dye-id="4403" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrgnShark">DrgnShark</a></td>
                        <td>6960</td>
                        <td>13509062</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2859"></span><span class="item" data-item="30051"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,445,69,41,55,32,77,60]" data-bonuses="[60,60,9,16,5,2,2,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/801/842/4164/4386" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="26275472" data-dye2="21511563" data-accessory-dye-id="4386" data-clothing-dye-id="4164" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>5742</td>
                        <td>11073861</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,60,40,54,39,84,64]" data-bonuses="[85,85,0,15,4,9,9,4]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:13:37Z">2015-09-21 23:13:37</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/801/842/4103/4461" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="16777216" data-dye2="33538251" data-accessory-dye-id="4461" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dovaakhin">Dovaakhin</a></td>
                        <td>5606</td>
                        <td>10801078</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,68,42,47,36,80,60]" data-bonuses="[60,115,8,17,-3,6,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/801/898/4103/4924" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777216" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jakisaurus">Jakisaurus</a></td>
                        <td>5439</td>
                        <td>10468633</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/801/0/4685/0" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772208" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4685" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dagnele">Dagnele</a></td>
                        <td>5350</td>
                        <td>10289485</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,61,40,53,39,84,60]" data-bonuses="[205,25,1,15,3,9,9,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/801/29810/4214/4489" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="32810080" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4214" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>5300</td>
                        <td>10189611</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,50,39,84,60]" data-bonuses="[125,25,4,19,0,9,9,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/801/0/0/4892" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="0" data-dye2="150994951" data-accessory-dye-id="4892" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/FoeNyx">FoeNyx</a></td>
                        <td>5140</td>
                        <td>9869405</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,540,65,38,53,34,86,64]" data-bonuses="[0,155,5,13,3,4,11,4]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T14:22:36Z">2015-09-11 14:22:36</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/801/842/4658/4874" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5012</td>
                        <td>9614141</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,540,64,38,50,34,86,64]" data-bonuses="[0,155,4,13,0,4,11,4]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/801/29810/0/0" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="51"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>5000</td>
                        <td>9590474</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,69,38,50,32,80,60]" data-bonuses="[180,55,9,13,0,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/801/0/4144/4464" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>5000</td>
                        <td>9589019</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[694,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/801/29810/4622/4878" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="167772168" data-dye2="167772168" data-accessory-dye-id="4878" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/AmurPL">AmurPL</a></td>
                        <td>4695</td>
                        <td>8979513</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,47,50,34,82,60]" data-bonuses="[0,55,4,22,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:11:22Z">2015-09-23 13:11:22</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/801/9028/0/0" style="background-position: -250px -2050px" data-class="801" data-skin="9028" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="276"></a>
                        </td>
                        <td><a href="/player/KarKrash">KarKrash</a></td>
                        <td>4527</td>
                        <td>8643930</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2732"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,64,42,50,36,80,60]" data-bonuses="[60,115,4,17,0,6,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T14:55:29Z">2015-09-18 14:55:29</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/801/0/0/0" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3409"></a>
                        </td>
                        <td><a href="/player/Kollra">Kollra</a></td>
                        <td>4140</td>
                        <td>7869475</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,34,82,60]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T22:56:07Z">2015-09-18 22:56:07</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/801/0/4103/4474" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="16777216" data-dye2="29409472" data-accessory-dye-id="4474" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>4074</td>
                        <td>7737117</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,46,50,32,83,60]" data-bonuses="[0,55,4,21,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T15:46:27Z">2015-09-14 15:46:27</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/801/9028/4176/0" style="background-position: -250px -2050px" data-class="801" data-skin="9028" data-dye1="25165824" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4176" data-count="3"></a>
                        </td>
                        <td><a href="/player/Vijen">Vijen</a></td>
                        <td>4000</td>
                        <td>7589210</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="-1"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[758,338,64,38,50,32,80,60]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/801/0/4232/4908" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="33554431" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>3960</td>
                        <td>7509866</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2733"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,70,44,50,30,81,60]" data-bonuses="[60,115,10,19,0,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:19:06Z">2015-09-11 04:19:06</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/801/898/4146/4402" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="25198720" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>3863</td>
                        <td>7315748</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T22:57:05Z">2015-09-19 22:57:05</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/801/29810/4684/4940" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="167772207" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4684" data-count="2"></a>
                        </td>
                        <td><a href="/player/Anthrixqt">Anthrixqt</a></td>
                        <td>3808</td>
                        <td>7205827</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,34,82,60]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T04:37:05Z">2015-09-16 04:37:05</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/801/29810/0/0" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="51"></a>
                        </td>
                        <td><a href="/player/CASTERR">CASTERR</a></td>
                        <td>3666</td>
                        <td>6922624</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/801/842/4630/4359" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6256321</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2321"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,410,66,43,50,37,82,69]" data-bonuses="[135,25,6,18,0,7,7,9]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/801/898/4666/4922" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772195" data-dye2="167772195" data-accessory-dye-id="4922" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blazespot">Blazespot</a></td>
                        <td>3302</td>
                        <td>6193063</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T18:51:08Z">2015-09-13 18:51:08</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/801/842/4103/4465" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/UNOX">UNOX</a></td>
                        <td>3276</td>
                        <td>6141370</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,70,38,50,34,82,66]" data-bonuses="[110,55,10,13,0,4,7,6]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/801/0/4692/4940" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772215" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4692" data-count="2"></a>
                        </td>
                        <td><a href="/player/Amigowhite">Amigowhite</a></td>
                        <td>3252</td>
                        <td>6093226</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,32,83,60]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td><span class="private-character" style="background-position: -250px -4950px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/801/898/4653/4908" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772183" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4653" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>3078</td>
                        <td>5746052</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2733"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,32,80,60]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/801/842/4103/4889" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="16777216" data-dye2="150994948" data-accessory-dye-id="4889" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Wolusco">Wolusco</a></td>
                        <td>3036</td>
                        <td>5662404</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2321"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,64,41,54,32,80,67]" data-bonuses="[60,115,4,16,4,2,5,7]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:46:41Z">2015-09-22 23:46:41</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/801/898/4103/4940" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777216" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/DarkCrelio">DarkCrelio</a></td>
                        <td>3013</td>
                        <td>5616502</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2321"></span><span class="item" data-item="9052"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,60,43,54,37,82,67]" data-bonuses="[85,85,0,18,4,7,7,7]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/801/898/0/0" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="335"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>3003</td>
                        <td>5595170</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T19:26:06Z">2015-09-16 19:26:06</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/801/898/4105/4361" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5589157</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,32,83,60]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T12:55:17Z">2015-09-18 12:55:17</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/801/0/0/0" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3409"></a>
                        </td>
                        <td><a href="/player/Bobertthed">Bobertthed</a></td>
                        <td>2922</td>
                        <td>5434559</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2735"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[708,500,64,42,50,36,80,60]" data-bonuses="[60,115,4,17,0,6,5,0]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T00:29:10Z">2015-09-23 00:29:10</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td><span class="private-character" style="background-position: -250px -1100px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/801/0/4186/4352" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="18422128" data-dye2="32569599" data-accessory-dye-id="4352" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/FroggyJ">FroggyJ</a></td>
                        <td>2810</td>
                        <td>5209059</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2735"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[654,411,64,42,50,34,81,60]" data-bonuses="[60,115,4,17,0,4,6,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T16:56:53Z">2015-09-11 16:56:53</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/801/9028/4688/4926" style="background-position: -250px -2050px" data-class="801" data-skin="9028" data-dye1="167772211" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4688" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>2729</td>
                        <td>5046811</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2733"></span><span class="item" data-item="8863"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,64,42,50,34,81,60]" data-bonuses="[60,115,4,17,0,4,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T11:01:11Z">2015-09-14 11:01:11</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/801/842/4169/4491" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="24610969" data-dye2="26922290" data-accessory-dye-id="4491" data-clothing-dye-id="4169" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>2720</td>
                        <td>5029903</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2321"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,47,50,37,82,63]" data-bonuses="[125,25,4,22,0,7,7,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:57:19Z">2015-09-23 12:57:19</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/801/898/4625/4947" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772171" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/MikeBeszPL">MikeBeszPL</a></td>
                        <td>2705</td>
                        <td>4999846</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2732"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,50,37,82,60]" data-bonuses="[125,25,4,19,0,7,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/801/0/4232/4483" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="33554431" data-dye2="30982104" data-accessory-dye-id="4483" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Brickdoctr">Brickdoctr</a></td>
                        <td>2668</td>
                        <td>4926620</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2735"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,64,38,50,30,81,60]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T22:54:44Z">2015-09-18 22:54:44</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/801/29810/4103/4882" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="16777216" data-dye2="167772172" data-accessory-dye-id="4882" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Crussell">Crussell</a></td>
                        <td>2650</td>
                        <td>4890711</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="2321"></span><span class="item" data-item="3122"></span><span class="item" data-item="3135"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,41,52,34,80,65]" data-bonuses="[0,55,4,16,2,4,5,5]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/801/29810/4637/4359" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2579</td>
                        <td>4747846</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,68,38,47,30,81,60]" data-bonuses="[180,55,8,13,-3,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/801/0/4232/4488" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="2"></a>
                        </td>
                        <td><a href="/player/FlowerRain">FlowerRain</a></td>
                        <td>2528</td>
                        <td>4645367</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T15:04:59Z">2015-09-22 15:04:59</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/801/29810/4105/4361" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>2509</td>
                        <td>4607153</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,550,64,44,56,32,83,60]" data-bonuses="[0,165,4,19,6,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T21:03:39Z">2015-09-19 21:03:39</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/801/0/4217/4473" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="27284013" data-dye2="27284013" data-accessory-dye-id="4473" data-clothing-dye-id="4217" data-count="1"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>2504</td>
                        <td>4597556</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="3094"></span><span class="item" data-item="2821"></span><span class="item" data-item="2982"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,38,50,39,81,60]" data-bonuses="[0,55,4,13,0,9,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/801/29810/4130/4399" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="21511563" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Glaede">Glaede</a></td>
                        <td>2500</td>
                        <td>4590000</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,34,82,60]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/801/29810/4137/4393" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="18780415" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>2490</td>
                        <td>4568891</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="2859"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:31:51Z">2015-09-21 12:31:51</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td><span class="private-character" style="background-position: -250px -400px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/801/29810/4654/4921" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="167772184" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/Theanlop">Theanlop</a></td>
                        <td>2451</td>
                        <td>4491493</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,32,83,60]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T07:52:25Z">2015-09-10 07:52:25</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/801/842/4209/4478" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="33488896" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2417</td>
                        <td>4424518</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:06:57Z">2015-09-10 15:06:57</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/801/842/4232/4891" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="33554431" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409019</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[544,448,64,44,56,32,83,60]" data-bonuses="[0,165,4,19,6,2,8,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/801/29810/4644/4941" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="67108869" data-dye2="167772208" data-accessory-dye-id="4941" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2408</td>
                        <td>4406010</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="1895"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,71,39,52,30,75,60]" data-bonuses="[100,0,11,14,2,0,0,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/801/898/4691/4956" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772214" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Treffer">Treffer</a></td>
                        <td>2402</td>
                        <td>4394400</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="8863"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[651,394,68,42,47,34,81,60]" data-bonuses="[60,115,8,17,-3,4,6,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/801/9028/4103/4890" style="background-position: -250px -2050px" data-class="801" data-skin="9028" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Laushichon">Laushichon</a></td>
                        <td>2382</td>
                        <td>4353228</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2321"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,410,66,43,50,37,82,69]" data-bonuses="[135,25,6,18,0,7,7,9]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T02:38:07Z">2015-09-19 02:38:07</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/801/0/4634/4406" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="150994949" data-dye2="33515956" data-accessory-dye-id="4406" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/PrincessCM">PrincessCM</a></td>
                        <td>2374</td>
                        <td>4336995</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,64,42,50,36,83,60]" data-bonuses="[60,115,4,17,0,6,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:08:05Z">2015-09-19 20:08:05</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/801/898/0/0" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="335"></a>
                        </td>
                        <td><a href="/player/Radanon">Radanon</a></td>
                        <td>2372</td>
                        <td>4333612</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2710"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,400,63,45,50,32,83,60]" data-bonuses="[0,50,3,20,0,2,8,0]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T08:38:24Z">2015-09-21 08:38:24</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/801/842/4234/4490" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="33554176" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4234" data-count="1"></a>
                        </td>
                        <td><a href="/player/MatHesteen">MatHesteen</a></td>
                        <td>2363</td>
                        <td>4315726</td>
                        <td>
                            <span class="item" data-item="3093"></span><span class="item" data-item="3094"></span><span class="item" data-item="3092"></span><span class="item" data-item="3095"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,430,60,25,50,30,86,63]" data-bonuses="[0,45,0,0,0,0,11,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/801/898/4103/4390" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4279384</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2321"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,68,42,58,30,75,63]" data-bonuses="[100,0,8,17,8,0,0,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/801/29810/4103/4904" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="16777216" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/TiBaggins">TiBaggins</a></td>
                        <td>2334</td>
                        <td>4258033</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,69,38,50,32,80,60]" data-bonuses="[180,55,9,13,0,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:36:25Z">2015-09-22 21:36:25</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/801/0/4644/4956" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="67108869" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hassesthl">Hassesthl</a></td>
                        <td>2323</td>
                        <td>4234965</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[713,360,69,38,50,32,80,60]" data-bonuses="[140,55,9,13,0,2,5,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:43:03Z">2015-09-19 20:43:03</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td><span class="private-character" style="background-position: -250px -400px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/801/0/4609/4866" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188988</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2321"></span><span class="item" data-item="30051"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,495,63,44,61,30,75,63]" data-bonuses="[0,110,3,19,11,0,0,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/801/898/4209/4381" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="33488896" data-dye2="33524736" data-accessory-dye-id="4381" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/JayTGod">JayTGod</a></td>
                        <td>2257</td>
                        <td>4103540</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:34:26Z">2015-09-19 20:34:26</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/801/898/4103/4390" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2241</td>
                        <td>4071112</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/801/0/4654/4910" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772184" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4654" data-count="2"></a>
                        </td>
                        <td><a href="/player/CBBERGCB">CBBERGCB</a></td>
                        <td>2234</td>
                        <td>4056812</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,64,38,54,32,83,64]" data-bonuses="[60,115,4,13,4,2,8,4]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/801/0/4623/4353" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772169" data-dye2="33221591" data-accessory-dye-id="4353" data-clothing-dye-id="4623" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ollyboy">Ollyboy</a></td>
                        <td>2228</td>
                        <td>4046117</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[636,396,64,38,54,34,82,64]" data-bonuses="[60,115,4,13,4,4,7,4]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/801/0/4103/4359" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/Authority">Authority</a></td>
                        <td>2228</td>
                        <td>4045151</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2321"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,45,50,32,80,63]" data-bonuses="[100,55,8,20,0,2,5,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/801/842/4611/4359" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="83886081" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4611" data-count="1"></a>
                        </td>
                        <td><a href="/player/Puriity">Puriity</a></td>
                        <td>2222</td>
                        <td>4033568</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,405,74,44,47,32,80,60]" data-bonuses="[60,115,14,19,-3,2,5,0]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/801/842/0/0" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="38"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>2222</td>
                        <td>4033352</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,46,50,34,82,60]" data-bonuses="[0,55,4,21,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:20:02Z">2015-09-21 22:20:02</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/801/0/4146/4480" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>2222</td>
                        <td>4033005</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:48:25Z">2015-09-16 23:48:25</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/801/9028/4110/0" style="background-position: -250px -2050px" data-class="801" data-skin="9028" data-dye1="25165568" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4110" data-count="1"></a>
                        </td>
                        <td><a href="/player/NeoDemon">NeoDemon</a></td>
                        <td>2222</td>
                        <td>4032918</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="3094"></span><span class="item" data-item="3103"></span><span class="item" data-item="3095"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,435,60,35,50,34,82,63]" data-bonuses="[0,50,0,10,0,4,7,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T12:53:36Z">2015-09-15 12:53:36</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/801/898/4651/4479" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772181" data-dye2="16842623" data-accessory-dye-id="4479" data-clothing-dye-id="4651" data-count="1"></a>
                        </td>
                        <td><a href="/player/JoeeSapeee">JoeeSapeee</a></td>
                        <td>2222</td>
                        <td>4032847</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,50,34,82,60]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T18:02:15Z">2015-09-15 18:02:15</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/801/898/4698/4938" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772216" data-dye2="167772205" data-accessory-dye-id="4938" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/NATONATER">NATONATER</a></td>
                        <td>2220</td>
                        <td>4028985</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[710,331,68,38,47,30,81,60]" data-bonuses="[140,55,8,13,-3,0,6,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T22:05:12Z">2015-09-16 22:05:12</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/801/0/4692/4953" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="167772215" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4692" data-count="1"></a>
                        </td>
                        <td><a href="/player/SoraTSky">SoraTSky</a></td>
                        <td>2215</td>
                        <td>4018970</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2321"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,45,50,32,80,63]" data-bonuses="[100,55,8,20,0,2,5,3]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/801/0/4636/4892" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="150994951" data-dye2="150994951" data-accessory-dye-id="4892" data-clothing-dye-id="4636" data-count="1"></a>
                        </td>
                        <td><a href="/player/Skylinear">Skylinear</a></td>
                        <td>2200</td>
                        <td>3989551</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/801/898/4672/4412" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="167772201" data-dye2="33550581" data-accessory-dye-id="4412" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2200</td>
                        <td>3989042</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="1895"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,68,44,47,37,92,60]" data-bonuses="[135,30,8,19,-3,7,17,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:02:53Z">2015-09-20 04:02:53</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/801/29810/4176/4927" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="25165824" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/JAM">JAM</a></td>
                        <td>2200</td>
                        <td>3988856</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/801/898/4181/4926" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="20755313" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4181" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kinoh">Kinoh</a></td>
                        <td>2191</td>
                        <td>3972692</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="8863"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,68,38,47,30,81,60]" data-bonuses="[140,55,8,13,-3,0,6,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/801/0/0/0" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3409"></a>
                        </td>
                        <td><a href="/player/Ironmzn">Ironmzn</a></td>
                        <td>2180</td>
                        <td>3949478</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[643,424,64,42,50,36,83,60]" data-bonuses="[60,115,4,17,0,6,8,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/801/898/4613/4923" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="150994945" data-dye2="167772196" data-accessory-dye-id="4923" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/Coraza">Coraza</a></td>
                        <td>2172</td>
                        <td>3933238</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/801/842/4644/4954" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="67108869" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Richtoe">Richtoe</a></td>
                        <td>2163</td>
                        <td>3915984</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,68,44,47,37,82,60]" data-bonuses="[125,25,8,19,-3,7,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/801/898/4232/4906" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="33554431" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Sandyballz">Sandyballz</a></td>
                        <td>2159</td>
                        <td>3906820</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T09:39:13Z">2015-09-18 09:39:13</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td><span class="private-character" style="background-position: -250px -400px"></span></td>
                        <td>Private</td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/801/29810/4103/0" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="16777216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/SImN">SImN</a></td>
                        <td>2133</td>
                        <td>3856247</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,32,83,60]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T18:48:02Z">2015-09-13 18:48:02</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/801/842/4622/4949" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772168" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mest">Mest</a></td>
                        <td>2127</td>
                        <td>3843196</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/801/0/4233/4489" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="32896501" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bengtz">Bengtz</a></td>
                        <td>2121</td>
                        <td>3831028</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/801/0/4695/4950" style="background-position: -250px -400px" data-class="801" data-skin="0" data-dye1="83886089" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ivloan">Ivloan</a></td>
                        <td>2118</td>
                        <td>3825138</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2710"></span><span class="item" data-item="2757"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[681,319,63,37,50,32,83,60]" data-bonuses="[120,50,3,12,0,2,8,0]" data-class="801" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T17:01:18Z">2015-09-21 17:01:18</span></td>
                        <td><abbr title="USSouth2">USS2</abbr></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/801/29810/4622/4926" style="background-position: -250px -4950px" data-class="801" data-skin="29810" data-dye1="167772168" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2105</td>
                        <td>3798801</td>
                        <td>
                            <span class="item" data-item="3306"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,50,34,82,60]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T23:38:56Z">2015-09-12 23:38:56</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/801/898/4103/4488" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="16777216" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Straasha">Straasha</a></td>
                        <td>2101</td>
                        <td>3791947</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[653,500,64,38,54,34,82,64]" data-bonuses="[60,115,4,13,4,4,7,4]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T09:01:07Z">2015-09-10 09:01:07</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aP" class="character" href="/top-characters-with-outfit/801/842/4232/4383" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="33554431" data-dye2="25886720" data-accessory-dye-id="4383" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fyhre">Fyhre</a></td>
                        <td>2100</td>
                        <td>3790540</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2859"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,332,64,38,50,32,83,60]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="801" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:09:09Z">2015-09-20 17:09:09</span></td>
                        <td><abbr title="USMidWest">USMW</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aQ" class="character" href="/top-characters-with-outfit/801/898/4222/4866" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="33553146" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4222" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>2100</td>
                        <td>3789116</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aR" class="character" href="/top-characters-with-outfit/801/898/4200/4393" style="background-position: -250px -3000px" data-class="801" data-skin="898" data-dye1="28307182" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4200" data-count="1"></a>
                        </td>
                        <td><a href="/player/CentASCHok">CentASCHok</a></td>
                        <td>2088</td>
                        <td>3765663</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="1895"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,72,42,47,32,80,60]" data-bonuses="[100,55,12,17,-3,2,5,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T17:41:00Z">2015-09-17 17:41:00</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aS" class="character" href="/top-characters-with-outfit/801/842/4654/4928" style="background-position: -250px -1100px" data-class="801" data-skin="842" data-dye1="167772184" data-dye2="167772201" data-accessory-dye-id="4928" data-clothing-dye-id="4654" data-count="2"></a>
                        </td>
                        <td><a href="/player/Shu">Shu</a></td>
                        <td>2067</td>
                        <td>3724482</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="2859"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,50,39,84,60]" data-bonuses="[125,25,4,19,0,9,9,0]" data-class="801" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T19:00:19Z">2015-09-10 19:00:19</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-necromancers">1 - 100</a></li>
                    <li><a href="/top-necromancers/101">101 - 200</a></li>
                    <li><a href="/top-necromancers/201">201 - 300</a></li>
                    <li><a href="/top-necromancers/301">301 - 400</a></li>
                    <li><a href="/top-necromancers/401">401 - 500</a></li>
                    <li><a href="/top-necromancers/501">501 - 600</a></li>
                    <li><a href="/top-necromancers/601">601 - 700</a></li>
                    <li><a href="/top-necromancers/701">701 - 800</a></li>
                    <li><a href="/top-necromancers/801">801 - 900</a></li>
                    <li><a href="/top-necromancers/901">901 - 1000</a></li>
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