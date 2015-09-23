<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:40 PM
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Warriors 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Warriors">
    <meta name="description" content="Top Warriors 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Warriors</h1><p>This is a list of the top 1000 warriors by Exp seen in the past
                two weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Warriors" href="/top-warriors"><span class="private-character" style="background-position: 0px -208px"></span>
                        <div class="list-selector-item-label">Warriors</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-warriors">1 - 100</a></li>
                    <li><a href="/top-warriors/101">101 - 200</a></li>
                    <li><a href="/top-warriors/201">201 - 300</a></li>
                    <li><a href="/top-warriors/301">301 - 400</a></li>
                    <li><a href="/top-warriors/401">401 - 500</a></li>
                    <li><a href="/top-warriors/501">501 - 600</a></li>
                    <li><a href="/top-warriors/601">601 - 700</a></li>
                    <li><a href="/top-warriors/701">701 - 800</a></li>
                    <li><a href="/top-warriors/801">801 - 900</a></li>
                    <li><a href="/top-warriors/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/797/8965/4232/4886" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="33554431" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Souldealer">Souldealer</a></td>
                        <td>38100</td>
                        <td>75790663</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,50,77,52,50]" data-bonuses="[180,0,0,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:33:13Z">2015-09-22 22:33:13</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/797/29790/4103/4406" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="16777216" data-dye2="33515956" data-accessory-dye-id="4406" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>32266</td>
                        <td>64120885</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="3169"></span><span class="item" data-item="3167"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[766,88,75,64,64,84,39,39]" data-bonuses="[0,-100,1,40,15,10,-10,-10]" data-class="797" data-level="20">0/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td><span class="private-character" style="background-position: -250px -2550px"></span></td>
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
                        <td>4.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/797/838/4233/4891" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="32896501" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>24010</td>
                        <td>47609073</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2857"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,402,75,61,56,77,52,50]" data-bonuses="[40,150,0,36,6,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/797/0/4232/4917" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>23827</td>
                        <td>47242856</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/797/8965/4684/4901" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="167772207" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Weemee">Weemee</a></td>
                        <td>22545</td>
                        <td>44678770</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,65,55,75,50,40]" data-bonuses="[180,0,1,40,5,0,0,-10]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/797/853/4637/4927" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="67108866" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/WarriorBC">WarriorBC</a></td>
                        <td>21344</td>
                        <td>42276773</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,209,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/797/29816/0/0" style="background-position: -250px -4700px" data-class="797" data-skin="29816" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="25"></a>
                        </td>
                        <td><a href="/player/RomulusRex">RomulusRex</a></td>
                        <td>20275</td>
                        <td>40139103</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="3182"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,402,79,56,55,75,55,50]" data-bonuses="[100,150,4,31,5,0,5,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/797/8965/4103/4359" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/XProgity">XProgity</a></td>
                        <td>20141</td>
                        <td>39871194</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,50,77,52,50]" data-bonuses="[180,0,0,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td><span class="private-character" style="background-position: -250px -4700px"></span></td>
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
                        <td>11.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/797/838/4659/4911" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="167772189" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Citrus">Citrus</a></td>
                        <td>16980</td>
                        <td>33550227</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,80,63,55,75,50,50]" data-bonuses="[100,0,5,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/797/8965/4648/4904" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="167772178" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4648" data-count="1"></a>
                        </td>
                        <td><a href="/player/Yutil">Yutil</a></td>
                        <td>16015</td>
                        <td>31619523</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td><span class="private-character" style="background-position: -250px -200px"></span></td>
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
                        <td>14.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/797/883/4695/4940" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="83886089" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/BarbiQ">BarbiQ</a></td>
                        <td>15717</td>
                        <td>31023890</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,81,65,50,77,52,50]" data-bonuses="[60,60,6,40,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T13:48:20Z">2015-09-22 13:48:20</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/797/838/4103/4359" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="6"></a>
                        </td>
                        <td><a href="/player/TigeltoN">TigeltoN</a></td>
                        <td>15661</td>
                        <td>30912370</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td><span class="private-character" style="background-position: -250px -3500px"></span></td>
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
                        <td>17.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/797/8965/4637/4359" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="2"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>14309</td>
                        <td>28208127</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/797/29790/4103/4926" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="16777216" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>14249</td>
                        <td>28086943</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,80,63,55,75,50,50]" data-bonuses="[100,0,5,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T21:04:11Z">2015-09-20 21:04:11</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/797/883/4622/4901" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="167772168" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ulfberhtt">Ulfberhtt</a></td>
                        <td>13875</td>
                        <td>27339421</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/797/883/4148/4404" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="28180271" data-dye2="28180271" data-accessory-dye-id="4404" data-clothing-dye-id="4148" data-count="1"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>13081</td>
                        <td>25750878</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9060"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[920,292,82,55,55,75,50,56]" data-bonuses="[150,40,7,30,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/797/29790/4138/4478" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="28451362" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4138" data-count="1"></a>
                        </td>
                        <td><a href="/player/iJzB2Jb16AJ">Rayr</a></td>
                        <td>12964</td>
                        <td>25518572</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[942,312,81,65,50,77,52,50]" data-bonuses="[172,60,6,40,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T00:39:49Z">2015-09-12 00:39:49</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td><span class="private-character" style="background-position: -250px -200px"></span></td>
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
                        <td>23.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/797/0/4695/0" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="83886089" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4695" data-count="16"></a>
                        </td>
                        <td><a href="/player/DFBbayern">DFBbayern</a></td>
                        <td>12225</td>
                        <td>24040242</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/797/853/4144/4400" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="2"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>12116</td>
                        <td>23821875</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,81,59,55,75,50,56]" data-bonuses="[110,0,6,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:01:48Z">2015-09-22 03:01:48</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/797/853/4107/4909" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="27601450" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4107" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>12096</td>
                        <td>23781148</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td><span class="private-character" style="background-position: -250px -3600px"></span></td>
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
                        <td>27.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/797/838/4103/4897" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="16777216" data-dye2="83886084" data-accessory-dye-id="4897" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/ArcticAlof">ArcticAlof</a></td>
                        <td>11901</td>
                        <td>23390848</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,81,59,55,75,50,56]" data-bonuses="[110,0,6,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/797/8965/4133/4488" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="26476755" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4133" data-count="1"></a>
                        </td>
                        <td><a href="/player/Sckulll">Sckulll</a></td>
                        <td>11731</td>
                        <td>23052543</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/797/29816/4121/4420" style="background-position: -250px -4700px" data-class="797" data-skin="29816" data-dye1="16802816" data-dye2="26275472" data-accessory-dye-id="4420" data-clothing-dye-id="4121" data-count="1"></a>
                        </td>
                        <td><a href="/player/Flylighter">Flylighter</a></td>
                        <td>11682</td>
                        <td>22953671</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,79,59,55,75,50,50]" data-bonuses="[140,40,4,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/797/0/4232/4488" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="3"></a>
                        </td>
                        <td><a href="/player/DrgnShark">DrgnShark</a></td>
                        <td>11502</td>
                        <td>22594075</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,81,59,55,75,50,56]" data-bonuses="[110,0,6,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/797/29816/4684/0" style="background-position: -250px -4700px" data-class="797" data-skin="29816" data-dye1="167772207" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Aykut">Aykut</a></td>
                        <td>11285</td>
                        <td>22160610</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,84,50,58,78,50,56]" data-bonuses="[110,0,9,25,8,3,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/797/8967/4162/4393" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="33225426" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4162" data-count="1"></a>
                        </td>
                        <td><a href="/player/VANSKUKIZ">VANSKUKIZ</a></td>
                        <td>10940</td>
                        <td>21468957</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/797/838/4697/4950" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="83886091" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/ThaOne">ThaOne</a></td>
                        <td>10851</td>
                        <td>21292736</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,84,50,58,78,50,56]" data-bonuses="[110,0,9,25,8,3,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/797/29790/4687/4943" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="167772210" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/Chickenli">Chickenli</a></td>
                        <td>10613</td>
                        <td>20816016</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,79,59,55,75,50,50]" data-bonuses="[140,40,4,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/797/29790/0/0" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="224"></a>
                        </td>
                        <td><a href="/player/AmurPL">AmurPL</a></td>
                        <td>10428</td>
                        <td>20444924</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,75,68,50,77,52,50]" data-bonuses="[0,0,0,43,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:05:35Z">2015-09-23 16:05:35</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/797/0/4156/4355" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="33550581" data-dye2="25165780" data-accessory-dye-id="4355" data-clothing-dye-id="4156" data-count="1"></a>
                        </td>
                        <td><a href="/player/KPalazzo">KPalazzo</a></td>
                        <td>10421</td>
                        <td>20431720</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,82,65,50,77,52,50]" data-bonuses="[60,60,7,40,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/797/838/4611/4867" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="83886081" data-dye2="83886081" data-accessory-dye-id="4867" data-clothing-dye-id="4611" data-count="2"></a>
                        </td>
                        <td><a href="/player/Nozu">Nozu</a></td>
                        <td>10282</td>
                        <td>20154288</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td><span class="private-character" style="background-position: -250px -2550px"></span></td>
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
                        <td>39.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/797/853/4609/4866" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>10200</td>
                        <td>19988906</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,84,50,58,78,50,56]" data-bonuses="[110,0,9,25,8,3,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/797/838/4687/4941" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="167772210" data-dye2="167772208" data-accessory-dye-id="4941" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vesson">Vesson</a></td>
                        <td>10093</td>
                        <td>19774974</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,82,65,50,77,52,50]" data-bonuses="[60,60,7,40,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/797/883/4687/4478" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="167772210" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/LiveJoker">LiveJoker</a></td>
                        <td>10057</td>
                        <td>19704064</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,79,59,55,75,50,50]" data-bonuses="[140,40,4,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/797/0/4103/4868" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>10000</td>
                        <td>19589011</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td><span class="private-character" style="background-position: -250px -1650px"></span></td>
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
                        <td>44.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/797/853/4232/4476" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="33554431" data-dye2="23747277" data-accessory-dye-id="4476" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>9000</td>
                        <td>17589428</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/797/853/4689/4954" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="167772212" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4689" data-count="1"></a>
                        </td>
                        <td><a href="/player/Yadav">Yadav</a></td>
                        <td>9000</td>
                        <td>17589390</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,65,55,75,50,40]" data-bonuses="[180,0,1,40,5,0,0,-10]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/797/853/4116/4488" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="16842751" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4116" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cyanluma">Cyanluma</a></td>
                        <td>8731</td>
                        <td>17051183</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/797/29790/4644/4889" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="67108869" data-dye2="150994948" data-accessory-dye-id="4889" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>8560</td>
                        <td>16709185</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,50,77,52,50]" data-bonuses="[180,0,1,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/797/883/4643/4488" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="67108868" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4643" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vemolz">Vemolz</a></td>
                        <td>8400</td>
                        <td>16390066</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,50,77,52,50]" data-bonuses="[180,0,1,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/797/8967/4698/4954" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="10"></a>
                        </td>
                        <td><a href="/player/Mrsimply">Mrsimply</a></td>
                        <td>8400</td>
                        <td>16389307</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/797/0/4653/4909" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="167772183" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4653" data-count="3"></a>
                        </td>
                        <td><a href="/player/Chochota">Chochota</a></td>
                        <td>8377</td>
                        <td>16343590</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,80,69,55,75,50,40]" data-bonuses="[100,0,5,44,5,0,0,-10]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/797/838/4611/4359" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="83886081" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4611" data-count="1"></a>
                        </td>
                        <td><a href="/player/Puriity">Puriity</a></td>
                        <td>8288</td>
                        <td>16164898</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/797/8967/4659/4359" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="167772189" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dudemeiste">Dudemeiste</a></td>
                        <td>8286</td>
                        <td>16161414</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/797/0/4108/4359" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="31373447" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4108" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>8051</td>
                        <td>15692039</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T12:58:35Z">2015-09-13 12:58:35</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/797/29816/4700/4954" style="background-position: -250px -4700px" data-class="797" data-skin="29816" data-dye1="150994958" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tormixfarm">Tormixfarm</a></td>
                        <td>7997</td>
                        <td>15583948</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,50,77,52,50]" data-bonuses="[180,0,0,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/797/838/4672/4941" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="167772201" data-dye2="167772208" data-accessory-dye-id="4941" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dashrey">Dashrey</a></td>
                        <td>7871</td>
                        <td>15332707</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/797/29790/4630/4891" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143478</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="3080"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,402,75,52,55,75,55,50]" data-bonuses="[180,150,0,27,5,0,5,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:36:07Z">2015-09-16 10:36:07</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/797/8965/4103/4359" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/Noozy">Noozy</a></td>
                        <td>7771</td>
                        <td>15131304</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/797/853/4634/4890" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="150994949" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/Veeti">Veeti</a></td>
                        <td>7671</td>
                        <td>14931594</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T18:14:22Z">2015-09-11 18:14:22</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/797/883/4695/4953" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="83886089" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4695" data-count="2"></a>
                        </td>
                        <td><a href="/player/JmannExtra">JmannExtra</a></td>
                        <td>7656</td>
                        <td>14901522</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,55,75,50,50]" data-bonuses="[180,0,0,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T19:58:59Z">2015-09-20 19:58:59</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/797/883/4191/4400" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="16777344" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4191" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tottsson">Tottsson</a></td>
                        <td>7646</td>
                        <td>14881794</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,81,59,55,75,50,56]" data-bonuses="[110,0,6,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/797/29790/4644/4944" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="67108869" data-dye2="167772211" data-accessory-dye-id="4944" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>7464</td>
                        <td>14517560</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:17:03Z">2015-09-21 23:17:03</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/797/29790/0/0" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="224"></a>
                        </td>
                        <td><a href="/player/CASTERR">CASTERR</a></td>
                        <td>7335</td>
                        <td>14258770</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,50,77,52,50]" data-bonuses="[180,0,1,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td><span class="private-character" style="background-position: -250px -200px"></span></td>
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
                        <td>64.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/797/838/4103/4359" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="6"></a>
                        </td>
                        <td><a href="/player/PayOuu">PayOuu</a></td>
                        <td>7000</td>
                        <td>13588765</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,82,54,58,78,50,50]" data-bonuses="[100,0,7,29,8,3,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td><span class="private-character" style="background-position: -250px -1650px"></span></td>
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
                        <td>66.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/797/29790/4153/4393" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="33554416" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4153" data-count="1"></a>
                        </td>
                        <td><a href="/player/3EVRBzkNuLx">Idrae</a></td>
                        <td>6893</td>
                        <td>13375189</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[997,252,81,59,50,77,52,56]" data-bonuses="[227,0,6,34,0,2,2,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T15:35:24Z">2015-09-23 15:35:24</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/797/29790/4123/4461" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="25886859" data-dye2="33538251" data-accessory-dye-id="4461" data-clothing-dye-id="4123" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shamoney">Shamoney</a></td>
                        <td>6893</td>
                        <td>13375012</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,81,65,50,77,52,50]" data-bonuses="[60,60,6,40,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T03:40:03Z">2015-09-23 03:40:03</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/797/883/4697/4919" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="83886091" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mickert">Mickert</a></td>
                        <td>6845</td>
                        <td>13280142</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T00:24:26Z">2015-09-20 00:24:26</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/797/838/4616/4921" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="167772162" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dattler">Dattler</a></td>
                        <td>6794</td>
                        <td>13178456</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,82,54,58,78,50,50]" data-bonuses="[100,0,7,29,8,3,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td><span class="private-character" style="background-position: -250px -200px"></span></td>
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
                        <td>71.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/797/0/4697/4940" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="83886091" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mint">Mint</a></td>
                        <td>6675</td>
                        <td>12940454</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,80,63,55,75,50,50]" data-bonuses="[100,0,5,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/797/853/4645/4901" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="67108870" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Xilt">Xilt</a></td>
                        <td>6471</td>
                        <td>12532501</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,83,54,58,78,50,50]" data-bonuses="[100,0,8,29,8,3,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/797/883/4693/4949" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="83886087" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4693" data-count="2"></a>
                        </td>
                        <td><a href="/player/GGWalrus">GGWalrus</a></td>
                        <td>6363</td>
                        <td>12316487</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="3182"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,512,76,58,61,75,55,50]" data-bonuses="[0,260,1,33,11,0,5,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T03:07:46Z">2015-09-23 03:07:46</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/797/883/4228/4369" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="33514311" data-dye2="23369197" data-accessory-dye-id="4369" data-clothing-dye-id="4228" data-count="1"></a>
                        </td>
                        <td><a href="/player/JackLennon">JackLennon</a></td>
                        <td>6340</td>
                        <td>12270630</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,50,77,52,50]" data-bonuses="[180,0,1,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/797/29790/4209/4359" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="33488896" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/GigaM">GigaM</a></td>
                        <td>6290</td>
                        <td>12169439</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,82,65,55,75,50,50]" data-bonuses="[60,60,7,40,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T22:18:45Z">2015-09-12 22:18:45</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/797/883/4671/4909" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="167772200" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4671" data-count="1"></a>
                        </td>
                        <td><a href="/player/DELer">DELer</a></td>
                        <td>6277</td>
                        <td>12143375</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2857"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,279,75,55,50,77,52,50]" data-bonuses="[220,40,0,30,0,2,2,0]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:33:08Z">2015-09-20 17:33:08</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/797/883/4698/4356" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="167772216" data-dye2="32571391" data-accessory-dye-id="4356" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/Adlet">Adlet</a></td>
                        <td>6247</td>
                        <td>12083850</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,65,55,75,50,40]" data-bonuses="[180,0,0,40,5,0,0,-10]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/797/29790/4698/4954" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="5"></a>
                        </td>
                        <td><a href="/player/DocZhivago">DocZhivago</a></td>
                        <td>6232</td>
                        <td>12053292</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2857"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/797/853/4103/4868" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Otipo">Otipo</a></td>
                        <td>6209</td>
                        <td>12007526</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/797/29790/4103/4390" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>6155</td>
                        <td>11900161</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/797/8965/4103/4359" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/Paynusnut">Paynusnut</a></td>
                        <td>6155</td>
                        <td>11899137</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/797/29790/4170/4878" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="28361950" data-dye2="167772168" data-accessory-dye-id="4878" data-clothing-dye-id="4170" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zyram">Zyram</a></td>
                        <td>6089</td>
                        <td>11766792</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T12:20:48Z">2015-09-18 12:20:48</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td><span class="private-character" style="background-position: -250px -4400px"></span></td>
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
                        <td>84.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/797/8965/4232/4880" style="background-position: -250px -3500px" data-class="797" data-skin="8965" data-dye1="33554431" data-dye2="167772170" data-accessory-dye-id="4880" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/SlyFort">SlyFort</a></td>
                        <td>6043</td>
                        <td>11676613</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="30052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,79,50,58,78,50,50]" data-bonuses="[180,0,4,25,8,3,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T04:55:44Z">2015-09-19 04:55:44</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/797/29790/4134/0" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="33494163" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4134" data-count="2"></a>
                        </td>
                        <td><a href="/player/Epictwnins">Epictwnins</a></td>
                        <td>6043</td>
                        <td>11674846</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,75,59,50,77,52,50]" data-bonuses="[180,0,0,34,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/797/29790/4115/4909" style="background-position: -250px -4400px" data-class="797" data-skin="29790" data-dye1="31200316" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mimighster">Mimighster</a></td>
                        <td>6037</td>
                        <td>11663217</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,203,76,59,50,77,52,50]" data-bonuses="[180,0,1,34,0,2,2,0]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td><span class="private-character" style="background-position: -250px -4400px"></span></td>
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
                        <td>88.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/797/883/4696/4952" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="83886090" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>6025</td>
                        <td>11639465</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,77,52,50]" data-bonuses="[100,0,4,38,0,2,2,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:32:20Z">2015-09-21 12:32:20</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/797/9032/4698/4903" style="background-position: -250px -2400px" data-class="797" data-skin="9032" data-dye1="167772216" data-dye2="167772177" data-accessory-dye-id="4903" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/Huaraches">Huaraches</a></td>
                        <td>6007</td>
                        <td>11603141</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="3169"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,256,75,69,50,81,52,40]" data-bonuses="[60,60,0,44,0,6,2,-10]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:23:30Z">2015-09-23 02:23:30</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/797/0/4625/4361" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="167772171" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>6001</td>
                        <td>11592478</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,213,80,63,55,75,50,50]" data-bonuses="[100,0,5,38,5,0,0,0]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T13:48:27Z">2015-09-13 13:48:27</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/797/8967/4144/4464" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>6000</td>
                        <td>11588879</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[790,252,80,63,55,75,50,50]" data-bonuses="[100,0,5,38,5,0,0,0]" data-class="797" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/797/8967/4645/4950" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="67108870" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Maddrake">Maddrake</a></td>
                        <td>5860</td>
                        <td>11309307</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2857"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,69,50,77,52,40]" data-bonuses="[100,0,4,44,0,2,2,-10]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/797/8967/4187/4443" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="32899066" data-dye2="32899066" data-accessory-dye-id="4443" data-clothing-dye-id="4187" data-count="1"></a>
                        </td>
                        <td><a href="/player/Alfacebr">Alfacebr</a></td>
                        <td>5629</td>
                        <td>10847190</td>
                        <td>
                            <span class="item" data-item="2563"></span><span class="item" data-item="2667"></span><span class="item" data-item="-1"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,39,50,75,50,50]" data-bonuses="[100,0,4,14,0,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:50:16Z">2015-09-21 22:50:16</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/797/838/4659/4905" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="167772189" data-dye2="167772179" data-accessory-dye-id="4905" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Martiino">Martiino</a></td>
                        <td>5581</td>
                        <td>10751918</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2667"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,50,75,50,50]" data-bonuses="[100,0,4,38,0,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T18:39:04Z">2015-09-22 18:39:04</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/797/838/4645/4883" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="67108870" data-dye2="167772173" data-accessory-dye-id="4883" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>5555</td>
                        <td>10699221</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,75,67,55,75,50,50]" data-bonuses="[0,0,0,42,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:21:27Z">2015-09-21 22:21:27</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/797/853/4622/0" style="background-position: -250px -1650px" data-class="797" data-skin="853" data-dye1="167772168" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4622" data-count="2"></a>
                        </td>
                        <td><a href="/player/Lakie">Lakie</a></td>
                        <td>5513</td>
                        <td>10615695</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/797/8967/4663/4919" style="background-position: -250px -3600px" data-class="797" data-skin="8967" data-dye1="167772192" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mag">Mag</a></td>
                        <td>5438</td>
                        <td>10465138</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,76,59,55,75,50,50]" data-bonuses="[180,0,1,34,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T03:36:39Z">2015-09-18 03:36:39</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/797/0/4626/4899" style="background-position: -250px -200px" data-class="797" data-skin="0" data-dye1="167772172" data-dye2="67108868" data-accessory-dye-id="4899" data-clothing-dye-id="4626" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheVeryOP">TheVeryOP</a></td>
                        <td>5408</td>
                        <td>10405980</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3080"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,79,63,55,75,50,50]" data-bonuses="[100,0,4,38,5,0,0,0]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/797/838/4638/4393" style="background-position: -250px -900px" data-class="797" data-skin="838" data-dye1="150994952" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hellas">Hellas</a></td>
                        <td>5405</td>
                        <td>10400437</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T14:51:23Z">2015-09-22 14:51:23</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/797/883/4652/4909" style="background-position: -250px -2550px" data-class="797" data-skin="883" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/Homofil">Homofil</a></td>
                        <td>5352</td>
                        <td>10292841</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3080"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,82,59,55,75,50,56]" data-bonuses="[110,0,7,34,5,0,0,6]" data-class="797" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-warriors">1 - 100</a></li>
                    <li><a href="/top-warriors/101">101 - 200</a></li>
                    <li><a href="/top-warriors/201">201 - 300</a></li>
                    <li><a href="/top-warriors/301">301 - 400</a></li>
                    <li><a href="/top-warriors/401">401 - 500</a></li>
                    <li><a href="/top-warriors/501">501 - 600</a></li>
                    <li><a href="/top-warriors/601">601 - 700</a></li>
                    <li><a href="/top-warriors/701">701 - 800</a></li>
                    <li><a href="/top-warriors/801">801 - 900</a></li>
                    <li><a href="/top-warriors/901">901 - 1000</a></li>
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