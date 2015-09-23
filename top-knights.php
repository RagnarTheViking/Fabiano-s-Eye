<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:38 PM
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Knights 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Knights">
    <meta name="description" content="Top Knights 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Knights</h1><p>This is a list of the top 1000 knights by Exp seen in the past two
                weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
            <div class="text-center">
                <div class="btn-group">
                    <a class="btn btn-default list-selector-item" title="Top Archers" href="/top-archers"><span class="private-character" style="background-position: 0px -58px"></span>
                        <div class="list-selector-item-label">Archers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Assassins" href="/top-assassins"><span class="private-character" style="background-position: 0px -358px"></span>
                        <div class="list-selector-item-label">Assassins</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Huntresses" href="/top-huntresses"><span class="private-character" style="background-position: 0px -458px"></span>
                        <div class="list-selector-item-label">Huntresses</div>
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Knights" href="/top-knights"><span class="private-character" style="background-position: 0px -258px"></span>
                        <div class="list-selector-item-label">Knights</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Mystics" href="/top-mystics"><span class="private-character" style="background-position: 0px -508px"></span>
                        <div class="list-selector-item-label">Mystics</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Necromancers" href="/top-necromancers"><span class="private-character" style="background-position: 0px -408px"></span>
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
                    <li class="active"><a href="/top-knights">1 - 100</a></li>
                    <li><a href="/top-knights/101">101 - 200</a></li>
                    <li><a href="/top-knights/201">201 - 300</a></li>
                    <li><a href="/top-knights/301">301 - 400</a></li>
                    <li><a href="/top-knights/401">401 - 500</a></li>
                    <li><a href="/top-knights/501">501 - 600</a></li>
                    <li><a href="/top-knights/601">601 - 700</a></li>
                    <li><a href="/top-knights/701">701 - 800</a></li>
                    <li><a href="/top-knights/801">801 - 900</a></li>
                    <li><a href="/top-knights/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/798/902/4695/4949" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="83886089" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/POK2sBqKWbt">Itani</a></td>
                        <td>40715</td>
                        <td>81019988</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1078,194,50,84,50,75,25,40]" data-bonuses="[308,0,0,44,0,0,0,-10]" data-class="798" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:09:46Z">2015-09-23 14:09:46</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/798/839/4658/4874" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>39219</td>
                        <td>78027113</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,50,78,50,75,50,50]" data-bonuses="[240,0,0,38,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/798/29818/4117/4410" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="16777355" data-dye2="32564876" data-accessory-dye-id="4410" data-clothing-dye-id="4117" data-count="1"></a>
                        </td>
                        <td><a href="/player/BXoneXR">BXoneXR</a></td>
                        <td>28807</td>
                        <td>57204520</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3087"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,252,54,88,50,75,50,40]" data-bonuses="[160,0,4,48,0,0,0,-10]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/798/902/4103/4465" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/DRMlNl">DRMlNl</a></td>
                        <td>20250</td>
                        <td>40090734</td>
                        <td>
                            <span class="item" data-item="2631"></span><span class="item" data-item="2572"></span><span class="item" data-item="2707"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[740,258,49,74,53,74,49,53]" data-bonuses="[60,60,0,35,4,0,0,4]" data-class="798" data-level="20">0/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/798/0/4676/4930" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="150994956" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4676" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>18420</td>
                        <td>36430664</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,76,50,77,52,50]" data-bonuses="[180,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/798/8964/4639/4868" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="83886082" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4639" data-count="2"></a>
                        </td>
                        <td><a href="/player/KlWl">KlWl</a></td>
                        <td>17031</td>
                        <td>33651290</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,402,51,78,56,77,52,50]" data-bonuses="[40,150,1,38,6,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T05:02:27Z">2015-09-23 05:02:27</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/798/0/4696/4953" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="83886090" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4696" data-count="5"></a>
                        </td>
                        <td><a href="/player/kVQ57HZKPj5">Vorck</a></td>
                        <td>16828</td>
                        <td>33244893</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[763,279,51,80,50,81,52,50]" data-bonuses="[60,60,1,40,0,6,2,0]" data-class="798" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T19:44:39Z">2015-09-22 19:44:39</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/798/0/4622/4399" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772168" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4622" data-count="21"></a>
                        </td>
                        <td><a href="/player/Hellas">Hellas</a></td>
                        <td>16000</td>
                        <td>31589159</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2850"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,196,50,82,50,45,30,40]" data-bonuses="[180,0,0,42,0,2,2,-10]" data-class="798" data-level="20">4/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T10:22:02Z">2015-09-19 10:22:02</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/798/0/4103/4488" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="16777216" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4103" data-count="5"></a>
                        </td>
                        <td><a href="/player/Anixxon">Anixxon</a></td>
                        <td>15406</td>
                        <td>30401403</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9017"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,512,51,75,56,77,57,50]" data-bonuses="[0,260,1,35,6,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/798/1025/4631/4954" style="background-position: -250px -5250px" data-class="798" data-skin="1025" data-dye1="150994946" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4631" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>14369</td>
                        <td>28326943</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T19:41:06Z">2015-09-20 19:41:06</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td><span class="private-character" style="background-position: -250px -250px"></span></td>
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
                        <td>12.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/798/29818/4637/4359" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>12701</td>
                        <td>24991730</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,362,50,82,56,77,52,50]" data-bonuses="[0,110,0,42,6,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/798/839/4103/4400" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="16777216" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/FrSparkles">FrSparkles</a></td>
                        <td>12325</td>
                        <td>24239402</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,50,80,56,75,50,50]" data-bonuses="[100,150,0,40,6,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T09:44:27Z">2015-09-20 09:44:27</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/798/0/4671/4927" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772200" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4671" data-count="3"></a>
                        </td>
                        <td><a href="/player/Nut">Nut</a></td>
                        <td>11937</td>
                        <td>23464376</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,512,50,77,56,75,55,50]" data-bonuses="[60,260,0,37,6,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T20:24:34Z">2015-09-18 20:24:34</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td><span class="private-character" style="background-position: -250px -3200px"></span></td>
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
                        <td>16.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/798/1025/4103/4908" style="background-position: -250px -5250px" data-class="798" data-skin="1025" data-dye1="16777216" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/FrikenGods">FrikenGods</a></td>
                        <td>11111</td>
                        <td>21811537</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T02:23:36Z">2015-09-16 02:23:36</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/798/8964/4675/4930" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="150994955" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4675" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>11111</td>
                        <td>21811369</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,51,80,56,75,50,50]" data-bonuses="[100,150,1,40,6,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/798/0/4640/4868" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="83886083" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4640" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hannutha">Hannutha</a></td>
                        <td>10574</td>
                        <td>20736808</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/798/29818/4115/4359" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="31200316" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/IHazcabb">IHazcabb</a></td>
                        <td>10323</td>
                        <td>20236252</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="3169"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,312,56,90,50,75,50,40]" data-bonuses="[120,60,6,50,0,0,0,-10]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/798/839/4621/4877" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="167772167" data-dye2="167772167" data-accessory-dye-id="4877" data-clothing-dye-id="4621" data-count="2"></a>
                        </td>
                        <td><a href="/player/Humidify">Humidify</a></td>
                        <td>10162</td>
                        <td>19913467</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,402,50,69,50,77,57,50]" data-bonuses="[180,150,0,29,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/798/0/4208/4901" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="25165952" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4208" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>10151</td>
                        <td>19892161</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,362,50,82,56,77,52,50]" data-bonuses="[0,110,0,42,6,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T07:15:17Z">2015-09-17 07:15:17</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/798/0/4691/4947" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772214" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4691" data-count="8"></a>
                        </td>
                        <td><a href="/player/Xlan">Xlan</a></td>
                        <td>10000</td>
                        <td>19590353</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/798/839/4169/4386" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="24610969" data-dye2="21511563" data-accessory-dye-id="4386" data-clothing-dye-id="4169" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nickon">Nickon</a></td>
                        <td>10000</td>
                        <td>19589771</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,51,72,50,77,52,50]" data-bonuses="[220,40,1,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/798/839/4609/4866" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>10000</td>
                        <td>19589712</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3087"></span><span class="item" data-item="30052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,59,69,53,78,50,56]" data-bonuses="[170,0,9,29,3,3,0,6]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/798/1025/4650/4488" style="background-position: -250px -5250px" data-class="798" data-skin="1025" data-dye1="167772180" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/Avattar">Avattar</a></td>
                        <td>10000</td>
                        <td>19589607</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/798/0/4686/0" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772209" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4686" data-count="9"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>10000</td>
                        <td>19589367</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,352,56,80,50,75,50,50]" data-bonuses="[160,100,6,40,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/798/0/4103/4868" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="4"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>10000</td>
                        <td>19589318</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,402,54,75,50,75,55,50]" data-bonuses="[160,150,4,35,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/798/839/4195/4908" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="33531136" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/JoeeSapeee">JoeeSapeee</a></td>
                        <td>10000</td>
                        <td>19588870</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="9017"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,402,50,69,50,77,57,50]" data-bonuses="[180,150,0,29,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T18:02:34Z">2015-09-15 18:02:34</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/798/0/4184/4869" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="21549516" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4184" data-count="1"></a>
                        </td>
                        <td><a href="/player/Isabre">Isabre</a></td>
                        <td>9636</td>
                        <td>18861213</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,402,50,71,50,75,55,50]" data-bonuses="[240,150,0,31,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:44:26Z">2015-09-20 20:44:26</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/798/839/4143/4399" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="33093887" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4143" data-count="3"></a>
                        </td>
                        <td><a href="/player/CronosKing">CronosKing</a></td>
                        <td>9511</td>
                        <td>18611282</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="2850"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,82,50,77,52,40]" data-bonuses="[180,0,0,42,0,2,2,-10]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/798/0/4684/4951" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772207" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Atoskun">Atoskun</a></td>
                        <td>9310</td>
                        <td>18209293</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1050,292,50,74,50,75,50,50]" data-bonuses="[280,40,0,34,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:11:20Z">2015-09-23 12:11:20</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/798/8964/4697/4953" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="83886091" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4697" data-count="2"></a>
                        </td>
                        <td><a href="/player/MomoPro">MomoPro</a></td>
                        <td>9295</td>
                        <td>18179038</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td><span class="private-character" style="background-position: -250px -5250px"></span></td>
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
                        <td>34.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/798/8964/4645/4927" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="67108870" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/DELer">DELer</a></td>
                        <td>8950</td>
                        <td>17489523</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T18:31:42Z">2015-09-21 18:31:42</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/798/29818/4651/4364" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772181" data-dye2="31373447" data-accessory-dye-id="4364" data-clothing-dye-id="4651" data-count="1"></a>
                        </td>
                        <td><a href="/player/Theduuuude">Theduuuude</a></td>
                        <td>8793</td>
                        <td>17176488</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,54,73,50,77,57,50]" data-bonuses="[100,150,4,33,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T12:30:04Z">2015-09-20 12:30:04</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/798/839/4613/4415" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="150994945" data-dye2="28170470" data-accessory-dye-id="4415" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/RaThoth">RaThoth</a></td>
                        <td>8233</td>
                        <td>16056462</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/798/0/4158/4375" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="33553101" data-dye2="28870155" data-accessory-dye-id="4375" data-clothing-dye-id="4158" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vebbb">Vebbb</a></td>
                        <td>8100</td>
                        <td>15790304</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="2572"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[897,206,50,82,50,75,50,40]" data-bonuses="[180,0,0,42,0,0,0,-10]" data-class="798" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T14:42:24Z">2015-09-19 14:42:24</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/798/0/4232/4907" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="33554431" data-dye2="167772181" data-accessory-dye-id="4907" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lidist">Lidist</a></td>
                        <td>8067</td>
                        <td>15723243</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,50,78,50,75,50,50]" data-bonuses="[240,0,0,38,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/798/839/4220/4908" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="23747277" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4220" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>8059</td>
                        <td>15707331</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,54,73,50,77,57,50]" data-bonuses="[100,150,4,33,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/798/902/4645/4919" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="67108870" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/ArchieDev">ArchieDev</a></td>
                        <td>7926</td>
                        <td>15442415</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,50,76,54,77,52,54]" data-bonuses="[60,60,0,36,4,2,2,4]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T19:56:44Z">2015-09-21 19:56:44</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/798/29818/4635/4886" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="150994950" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143403</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,402,50,71,50,75,55,50]" data-bonuses="[240,150,0,31,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:36:53Z">2015-09-16 10:36:53</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/798/0/4143/4467" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="33093887" data-dye2="21064161" data-accessory-dye-id="4467" data-clothing-dye-id="4143" data-count="1"></a>
                        </td>
                        <td><a href="/player/GGWalrus">GGWalrus</a></td>
                        <td>7671</td>
                        <td>14931061</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,402,54,75,50,75,55,50]" data-bonuses="[160,150,4,35,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T03:49:38Z">2015-09-18 03:49:38</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/798/839/4645/4901" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="67108870" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4645" data-count="3"></a>
                        </td>
                        <td><a href="/player/Rihaudr">Rihaudr</a></td>
                        <td>7456</td>
                        <td>14501422</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,76,50,77,52,50]" data-bonuses="[140,40,4,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/798/0/4174/4399" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="33222886" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4174" data-count="1"></a>
                        </td>
                        <td><a href="/player/VTDA">VTDA</a></td>
                        <td>7400</td>
                        <td>14389030</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="30052"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,312,53,69,57,78,50,54]" data-bonuses="[120,60,3,29,7,3,0,4]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:40:30Z">2015-09-22 23:40:30</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/798/902/4649/4467" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="167772179" data-dye2="21064161" data-accessory-dye-id="4467" data-clothing-dye-id="4649" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>7300</td>
                        <td>14189964</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,51,76,50,77,52,50]" data-bonuses="[180,0,1,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td><span class="private-character" style="background-position: -250px -250px"></span></td>
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
                        <td>47.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/798/8964/4639/4402" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="83886082" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/CptDweind">CptDweind</a></td>
                        <td>7229</td>
                        <td>14047702</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,402,50,78,56,77,52,50]" data-bonuses="[40,150,0,38,6,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T08:57:28Z">2015-09-20 08:57:28</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/798/839/4130/4386" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="21511563" data-dye2="21511563" data-accessory-dye-id="4386" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Astolfinho">Astolfinho</a></td>
                        <td>7070</td>
                        <td>13729536</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="30052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,362,53,75,59,78,50,50]" data-bonuses="[60,110,3,35,9,3,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/798/29818/4687/4357" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772210" data-dye2="32896476" data-accessory-dye-id="4357" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/LiveJoker">LiveJoker</a></td>
                        <td>7034</td>
                        <td>13658205</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[891,245,50,72,50,77,52,50]" data-bonuses="[220,40,0,32,0,2,2,0]" data-class="798" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/798/0/4696/4949" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="83886090" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4696" data-count="3"></a>
                        </td>
                        <td><a href="/player/Koninglol">Koninglol</a></td>
                        <td>7025</td>
                        <td>13639856</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,462,50,69,54,77,57,54]" data-bonuses="[60,210,0,29,4,2,7,4]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:20:05Z">2015-09-23 14:20:05</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/798/0/4666/4359" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="2"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>6900</td>
                        <td>13388805</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3087"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,50,78,50,75,50,50]" data-bonuses="[240,0,0,38,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/798/839/4209/4359" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="33488896" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/GigaM">GigaM</a></td>
                        <td>6809</td>
                        <td>13208240</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1050,292,50,74,50,75,50,50]" data-bonuses="[280,40,0,34,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T14:45:40Z">2015-09-22 14:45:40</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/798/29818/4189/4922" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="33547445" data-dye2="167772195" data-accessory-dye-id="4922" data-clothing-dye-id="4189" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kmilito">Kmilito</a></td>
                        <td>6798</td>
                        <td>13185652</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[980,292,56,74,50,75,50,56]" data-bonuses="[210,40,6,34,0,0,0,6]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/798/8964/4634/4390" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="150994949" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/MadNomad">MadNomad</a></td>
                        <td>6766</td>
                        <td>13120821</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,402,50,71,50,75,55,50]" data-bonuses="[240,150,0,31,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/798/903/4694/4950" style="background-position: -250px -2200px" data-class="798" data-skin="903" data-dye1="83886088" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/DietBurger">DietBurger</a></td>
                        <td>6761</td>
                        <td>13110889</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,462,56,75,50,77,57,50]" data-bonuses="[60,210,6,35,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T16:09:46Z">2015-09-18 16:09:46</span></td>
                        <td><abbr title="USSouth2">USS2</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td><span class="private-character" style="background-position: -250px -950px"></span></td>
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
                        <td>57.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/798/0/4687/4943" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772210" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cwele">Cwele</a></td>
                        <td>6510</td>
                        <td>12609768</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2572"></span><span class="item" data-item="2812"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,50,76,54,75,50,54]" data-bonuses="[60,60,0,36,4,0,0,4]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T10:12:55Z">2015-09-17 10:12:55</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/798/0/4617/4923" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772163" data-dye2="167772196" data-accessory-dye-id="4923" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shider">Shider</a></td>
                        <td>6379</td>
                        <td>12347655</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3087"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,57,78,50,75,50,56]" data-bonuses="[170,0,7,38,0,0,0,6]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/798/902/4698/0" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="167772216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4698" data-count="49"></a>
                        </td>
                        <td><a href="/player/Divinelaw">Divinelaw</a></td>
                        <td>6285</td>
                        <td>12160530</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,80,50,77,52,50]" data-bonuses="[100,0,4,40,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/798/839/4116/4372" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="16842751" data-dye2="16842751" data-accessory-dye-id="4372" data-clothing-dye-id="4116" data-count="1"></a>
                        </td>
                        <td><a href="/player/CyanReaper">CyanReaper</a></td>
                        <td>6153</td>
                        <td>11895558</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td><span class="private-character" style="background-position: -250px -4800px"></span></td>
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
                        <td>62.</td>
                        <td><span class="private-character" style="background-position: -250px -3200px"></span></td>
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
                        <td>63.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/798/902/4644/4954" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="67108869" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4644" data-count="3"></a>
                        </td>
                        <td><a href="/player/KoksMichal">KoksMichal</a></td>
                        <td>6074</td>
                        <td>11736837</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,512,51,77,56,75,55,50]" data-bonuses="[60,260,1,37,6,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T16:16:56Z">2015-09-15 16:16:56</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/798/839/4103/4399" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="16777216" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4103" data-count="7"></a>
                        </td>
                        <td><a href="/player/Henrytwelv">Henrytwelv</a></td>
                        <td>6070</td>
                        <td>11729657</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,512,50,77,56,75,55,50]" data-bonuses="[60,260,0,37,6,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/798/0/4684/4941" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772207" data-dye2="167772208" data-accessory-dye-id="4941" data-clothing-dye-id="4684" data-count="2"></a>
                        </td>
                        <td><a href="/player/NextDDD">NextDDD</a></td>
                        <td>6059</td>
                        <td>11707017</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="9060"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,56,78,50,77,52,50]" data-bonuses="[100,100,6,38,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/798/8964/4664/4926" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="167772193" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4664" data-count="1"></a>
                        </td>
                        <td><a href="/player/Derbeste">Derbeste</a></td>
                        <td>6050</td>
                        <td>11690007</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,402,54,75,50,75,55,50]" data-bonuses="[160,150,4,35,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/798/0/4617/4924" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772163" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4617" data-count="2"></a>
                        </td>
                        <td><a href="/player/Meliorus">Meliorus</a></td>
                        <td>6017</td>
                        <td>11623682</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,50,80,56,75,50,50]" data-bonuses="[100,150,0,40,6,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T17:34:42Z">2015-09-13 17:34:42</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/798/1025/4144/4464" style="background-position: -250px -5250px" data-class="798" data-skin="1025" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>6000</td>
                        <td>11589480</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[816,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/798/839/4672/4927" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="167772201" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blurghhhhh">Blurghhhhh</a></td>
                        <td>6000</td>
                        <td>11588785</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,76,50,77,52,50]" data-bonuses="[140,40,4,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/798/839/4103/4359" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/PayOuu">PayOuu</a></td>
                        <td>6000</td>
                        <td>11588773</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,512,51,77,56,75,55,50]" data-bonuses="[60,260,1,37,6,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/798/0/4103/4359" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="10"></a>
                        </td>
                        <td><a href="/player/ZebraPanda">ZebraPanda</a></td>
                        <td>5939</td>
                        <td>11466945</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,82,50,77,52,50]" data-bonuses="[60,60,6,42,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/798/0/4689/4955" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772212" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4689" data-count="4"></a>
                        </td>
                        <td><a href="/player/Pendragony">Pendragony</a></td>
                        <td>5896</td>
                        <td>11381145</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="9017"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,402,50,69,50,77,57,50]" data-bonuses="[180,150,0,29,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/798/0/4232/4399" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="33554431" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/NATONATER">NATONATER</a></td>
                        <td>5886</td>
                        <td>11361954</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,462,51,73,50,81,57,50]" data-bonuses="[60,210,1,33,0,6,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T19:00:40Z">2015-09-15 19:00:40</span></td>
                        <td><abbr title="USMidWest">USMW</abbr></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/798/902/4149/4950" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="32571376" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4149" data-count="1"></a>
                        </td>
                        <td><a href="/player/AssualtBS">AssualtBS</a></td>
                        <td>5834</td>
                        <td>11258594</td>
                        <td>
                            <span class="item" data-item="9612"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,76,50,77,52,50]" data-bonuses="[180,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T03:12:06Z">2015-09-15 03:12:06</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/798/29818/4691/4443" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772214" data-dye2="32899066" data-accessory-dye-id="4443" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Iotan">Iotan</a></td>
                        <td>5818</td>
                        <td>11226216</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3087"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,50,78,50,75,50,50]" data-bonuses="[240,0,0,38,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:20:56Z">2015-09-23 12:20:56</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/798/29818/4698/4954" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="4"></a>
                        </td>
                        <td><a href="/player/Dinamottt">Dinamottt</a></td>
                        <td>5804</td>
                        <td>11197464</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,312,56,84,50,75,50,50]" data-bonuses="[120,60,6,44,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/798/839/4652/4908" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="167772182" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/Gigafight">Gigafight</a></td>
                        <td>5800</td>
                        <td>11190258</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="9017"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,76,50,77,52,50]" data-bonuses="[140,40,4,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T14:39:43Z">2015-09-22 14:39:43</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/798/0/4693/4883" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="83886087" data-dye2="167772173" data-accessory-dye-id="4883" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/XHatsunex">XHatsunex</a></td>
                        <td>5799</td>
                        <td>11187741</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,512,50,77,56,75,55,50]" data-bonuses="[60,260,0,37,6,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T14:36:39Z">2015-09-19 14:36:39</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/798/839/4100/4477" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="32571391" data-dye2="24150160" data-accessory-dye-id="4477" data-clothing-dye-id="4100" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dovahkim">Dovahkim</a></td>
                        <td>5769</td>
                        <td>11127963</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3087"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,51,84,50,75,50,40]" data-bonuses="[240,0,1,44,0,0,0,-10]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td><span class="private-character" style="background-position: -250px -950px"></span></td>
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
                        <td>81.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/798/902/4691/4947" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="167772214" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4691" data-count="3"></a>
                        </td>
                        <td><a href="/player/SrylmBlack">SrylmBlack</a></td>
                        <td>5707</td>
                        <td>11004654</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="30052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,53,69,53,78,50,50]" data-bonuses="[240,0,3,29,3,3,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:51:45Z">2015-09-23 14:51:45</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/798/0/4693/4952" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="83886087" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4693" data-count="2"></a>
                        </td>
                        <td><a href="/player/ROMPADOMP">ROMPADOMP</a></td>
                        <td>5676</td>
                        <td>10942218</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,252,50,78,50,75,50,50]" data-bonuses="[240,0,0,38,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T00:07:54Z">2015-09-23 00:07:54</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/798/839/4691/4924" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="167772214" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Williambb">Williambb</a></td>
                        <td>5674</td>
                        <td>10937738</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="9060"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[920,292,57,72,50,77,52,56]" data-bonuses="[150,40,7,32,0,2,2,6]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td><span class="private-character" style="background-position: -250px -3200px"></span></td>
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
                        <td>85.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/798/0/4648/4921" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="167772178" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4648" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blaetterte">Blaetterte</a></td>
                        <td>5616</td>
                        <td>10821374</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,51,76,50,77,52,50]" data-bonuses="[180,0,1,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:24:00Z">2015-09-12 12:24:00</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td><span class="private-character" style="background-position: -250px -250px"></span></td>
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
                        <td>87.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/798/839/4191/4357" style="background-position: -250px -950px" data-class="798" data-skin="839" data-dye1="16777344" data-dye2="32896476" data-accessory-dye-id="4357" data-clothing-dye-id="4191" data-count="1"></a>
                        </td>
                        <td><a href="/player/BenjaAce">BenjaAce</a></td>
                        <td>5557</td>
                        <td>10703608</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3087"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1010,402,50,71,50,75,55,50]" data-bonuses="[240,150,0,31,0,0,5,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T16:02:19Z">2015-09-18 16:02:19</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/798/0/4211/4901" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="21064161" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4211" data-count="1"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>5555</td>
                        <td>10698894</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,84,50,77,52,50]" data-bonuses="[0,0,0,44,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:21:15Z">2015-09-21 22:21:15</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td><span class="private-character" style="background-position: -250px -950px"></span></td>
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
                        <td>90.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/798/8964/4103/4390" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>5479</td>
                        <td>10547136</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3087"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[930,252,54,82,50,75,50,50]" data-bonuses="[160,0,4,42,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td><span class="private-character" style="background-position: -250px -3450px"></span></td>
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
                        <td>92.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/798/8964/4137/4488" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="18780415" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/BecuzLogic">BecuzLogic</a></td>
                        <td>5427</td>
                        <td>10442850</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2850"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,402,50,78,56,77,52,50]" data-bonuses="[40,150,0,38,6,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/798/29818/4616/4456" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772162" data-dye2="28307182" data-accessory-dye-id="4456" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/BastianD">BastianD</a></td>
                        <td>5408</td>
                        <td>10404766</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,76,50,77,52,50]" data-bonuses="[180,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td><span class="private-character" style="background-position: -250px -250px"></span></td>
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
                        <td>95.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/798/902/4176/4906" style="background-position: -250px -3200px" data-class="798" data-skin="902" data-dye1="25165824" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nuubixd">Nuubixd</a></td>
                        <td>5342</td>
                        <td>10272926</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2850"></span><span class="item" data-item="30052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,54,67,53,80,52,50]" data-bonuses="[180,0,4,27,3,5,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/798/8964/4664/4443" style="background-position: -250px -3450px" data-class="798" data-skin="8964" data-dye1="167772193" data-dye2="32899066" data-accessory-dye-id="4443" data-clothing-dye-id="4664" data-count="1"></a>
                        </td>
                        <td><a href="/player/Firixable">Firixable</a></td>
                        <td>5340</td>
                        <td>10269865</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2850"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,54,73,50,77,57,50]" data-bonuses="[100,150,4,33,0,2,7,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:36:33Z">2015-09-20 17:36:33</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/798/0/4163/4868" style="background-position: -250px -250px" data-class="798" data-skin="0" data-dye1="30659539" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4163" data-count="1"></a>
                        </td>
                        <td><a href="/player/FAAVORITEE">FAAVORITEE</a></td>
                        <td>5322</td>
                        <td>10234110</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2850"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,76,50,77,52,50]" data-bonuses="[180,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td><span class="private-character" style="background-position: -250px -250px"></span></td>
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
                        <td>99.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/798/29818/4667/4952" style="background-position: -250px -4800px" data-class="798" data-skin="29818" data-dye1="167772196" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4667" data-count="1"></a>
                        </td>
                        <td><a href="/player/Noster">Noster</a></td>
                        <td>5287</td>
                        <td>10163699</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3087"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1050,292,50,74,50,75,50,50]" data-bonuses="[280,40,0,34,0,0,0,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/798/1025/4634/4901" style="background-position: -250px -5250px" data-class="798" data-skin="1025" data-dye1="150994949" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>5275</td>
                        <td>10140574</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="9017"></span><span class="item" data-item="9015"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,76,50,77,52,50]" data-bonuses="[140,0,0,36,0,2,2,0]" data-class="798" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:19:38Z">2015-09-21 22:19:38</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-knights">1 - 100</a></li>
                    <li><a href="/top-knights/101">101 - 200</a></li>
                    <li><a href="/top-knights/201">201 - 300</a></li>
                    <li><a href="/top-knights/301">301 - 400</a></li>
                    <li><a href="/top-knights/401">401 - 500</a></li>
                    <li><a href="/top-knights/501">501 - 600</a></li>
                    <li><a href="/top-knights/601">601 - 700</a></li>
                    <li><a href="/top-knights/701">701 - 800</a></li>
                    <li><a href="/top-knights/801">801 - 900</a></li>
                    <li><a href="/top-knights/901">901 - 1000</a></li>
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