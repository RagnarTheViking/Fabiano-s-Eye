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
    <title>Top Paladins 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Paladins">
    <meta name="description" content="Top Paladins 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Paladins</h1><p>This is a list of the top 1000 paladins by Exp seen in the past
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Paladins" href="/top-paladins"><span class="private-character" style="background-position: 0px -308px"></span>
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
                    <li class="active"><a href="/top-paladins">1 - 100</a></li>
                    <li><a href="/top-paladins/101">101 - 200</a></li>
                    <li><a href="/top-paladins/201">201 - 300</a></li>
                    <li><a href="/top-paladins/301">301 - 400</a></li>
                    <li><a href="/top-paladins/401">401 - 500</a></li>
                    <li><a href="/top-paladins/501">501 - 600</a></li>
                    <li><a href="/top-paladins/601">601 - 700</a></li>
                    <li><a href="/top-paladins/701">701 - 800</a></li>
                    <li><a href="/top-paladins/801">801 - 900</a></li>
                    <li><a href="/top-paladins/901">901 - 1000</a></li>
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
                        <td><span class="private-character" style="background-position: -250px -1700px"></span></td>
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
                        <td>2.</td>
                        <td><span class="private-character" style="background-position: -250px -1000px"></span></td>
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
                        <td>3.</td>
                        <td>
                            <a id="d" class="character" href="/top-characters-with-outfit/799/915/4635/4488" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="150994950" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>24010</td>
                        <td>47609409</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="9062"></span><span class="item" data-item="9060"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,402,52,56,61,45,80,45]" data-bonuses="[40,150,2,26,6,5,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/799/854/4107/4909" style="background-position: -250px -1700px" data-class="799" data-skin="854" data-dye1="27601450" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4107" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>22420</td>
                        <td>44429693</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3078"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,57,56,59,40,75,45]" data-bonuses="[60,60,7,26,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td><span class="private-character" style="background-position: -250px -1000px"></span></td>
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
                        <td>6.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/799/840/4103/4910" style="background-position: -250px -1000px" data-class="799" data-skin="840" data-dye1="16777216" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dull">Dull</a></td>
                        <td>13092</td>
                        <td>25773254</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,195,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T01:49:25Z">2015-09-20 01:49:25</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/799/29800/4634/0" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="150994949" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4634" data-count="11"></a>
                        </td>
                        <td><a href="/player/Stuntdude">Stuntdude</a></td>
                        <td>11637</td>
                        <td>22863218</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,64,55,40,75,35]" data-bonuses="[100,0,5,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/799/0/4626/4886" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772172" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4626" data-count="1"></a>
                        </td>
                        <td><a href="/player/IShockzz">IShockzz</a></td>
                        <td>10793</td>
                        <td>21176118</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,56,59,40,75,45]" data-bonuses="[60,60,6,26,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/799/885/4661/4917" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772190" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4661" data-count="2"></a>
                        </td>
                        <td><a href="/player/Hunterg">Hunterg</a></td>
                        <td>10430</td>
                        <td>20450238</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,57,56,55,40,75,45]" data-bonuses="[100,100,7,26,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/799/915/4613/4890" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="150994945" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4613" data-count="3"></a>
                        </td>
                        <td><a href="/player/Beastsword">Beastsword</a></td>
                        <td>10204</td>
                        <td>19997259</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,51,56,59,40,75,35]" data-bonuses="[180,0,1,26,4,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/799/885/4153/4951" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="33554416" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4153" data-count="1"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>10000</td>
                        <td>19590063</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,51,50,59,40,75,49]" data-bonuses="[100,100,1,20,4,0,0,4]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/799/0/4609/4866" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>10000</td>
                        <td>19589109</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3078"></span><span class="item" data-item="30052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,57,45,62,43,75,45]" data-bonuses="[100,0,7,15,7,3,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/799/0/4103/4868" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>10000</td>
                        <td>19588943</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,60,59,40,75,35]" data-bonuses="[100,0,4,30,4,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td><span class="private-character" style="background-position: -250px -1700px"></span></td>
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
                        <td>15.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/799/885/4698/0" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4698" data-count="15"></a>
                        </td>
                        <td><a href="/player/RomanXII">RomanXII</a></td>
                        <td>8727</td>
                        <td>17043299</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,50,54,55,40,75,45]" data-bonuses="[140,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/799/840/4196/4465" style="background-position: -250px -1000px" data-class="799" data-skin="840" data-dye1="33506560" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4196" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>8188</td>
                        <td>15965678</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,51,54,55,40,75,45]" data-bonuses="[180,0,1,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:09:10Z">2015-09-22 03:09:10</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/799/840/4103/4359" style="background-position: -250px -1000px" data-class="799" data-skin="840" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>8011</td>
                        <td>15611175</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,56,59,40,75,45]" data-bonuses="[60,60,6,26,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/799/0/4195/4908" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="33531136" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/Yuzuru">Yuzuru</a></td>
                        <td>8009</td>
                        <td>15607132</td>
                        <td>
                            <span class="item" data-item="2563"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,64,55,40,75,35]" data-bonuses="[100,0,4,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T14:45:42Z">2015-09-10 14:45:42</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/799/915/4635/4886" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="150994950" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143520</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="3078"></span><span class="item" data-item="3182"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,402,50,43,59,40,80,45]" data-bonuses="[180,150,0,13,4,0,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:37:23Z">2015-09-16 10:37:23</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/799/0/4617/4488" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772163" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/y4Vim57xyay">Zhiar</a></td>
                        <td>7637</td>
                        <td>14862866</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[944,312,56,60,55,40,75,45]" data-bonuses="[174,60,6,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:09:45Z">2015-09-21 23:09:45</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/799/0/4103/4359" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="9"></a>
                        </td>
                        <td><a href="/player/Rr">Rr</a></td>
                        <td>7174</td>
                        <td>13937118</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,66,55,40,75,35]" data-bonuses="[60,60,6,36,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/799/915/4658/4902" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772188" data-dye2="67108871" data-accessory-dye-id="4902" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/iOGHxDvEh01">Oeti</a></td>
                        <td>7104</td>
                        <td>13797479</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[912,277,50,54,55,45,85,45]" data-bonuses="[142,25,0,24,0,5,10,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T15:35:23Z">2015-09-23 15:35:23</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/799/915/4127/4399" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="25886720" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4127" data-count="1"></a>
                        </td>
                        <td><a href="/player/Wlopezsix">Wlopezsix</a></td>
                        <td>7085</td>
                        <td>13759431</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,54,55,40,75,45]" data-bonuses="[140,40,4,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td><span class="private-character" style="background-position: -250px -2650px"></span></td>
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
                        <td>25.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/799/885/4634/4953" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="150994949" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4634" data-count="2"></a>
                        </td>
                        <td><a href="/player/Gmanlucas">Gmanlucas</a></td>
                        <td>6876</td>
                        <td>13342114</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/799/915/4623/4359" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772169" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4623" data-count="1"></a>
                        </td>
                        <td><a href="/player/MiguelKerr">MiguelKerr</a></td>
                        <td>6676</td>
                        <td>12942309</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[942,312,57,60,55,40,75,45]" data-bonuses="[172,60,7,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/799/29788/4625/0" style="background-position: -250px -5400px" data-class="799" data-skin="29788" data-dye1="167772171" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/THSiGMA">THSiGMA</a></td>
                        <td>6666</td>
                        <td>12921117</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9062"></span><span class="item" data-item="9060"></span><span class="item" data-item="9061"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,55,60,60,45,80,45]" data-bonuses="[100,100,5,30,5,5,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T21:11:16Z">2015-09-21 21:11:16</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/799/915/4613/4869" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="150994945" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheAngelic">TheAngelic</a></td>
                        <td>6400</td>
                        <td>12388932</td>
                        <td>
                            <span class="item" data-item="9612"></span><span class="item" data-item="2642"></span><span class="item" data-item="2707"></span><span class="item" data-item="2983"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,53,55,40,84,45]" data-bonuses="[0,0,0,23,0,0,9,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/799/854/4674/4405" style="background-position: -250px -1700px" data-class="799" data-skin="854" data-dye1="150994954" data-dye2="32571376" data-accessory-dye-id="4405" data-clothing-dye-id="4674" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tagamea">Tagamea</a></td>
                        <td>6354</td>
                        <td>12297907</td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="2645"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,30,55,40,75,45]" data-bonuses="[0,0,0,0,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T14:39:51Z">2015-09-14 14:39:51</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/799/0/4619/4875" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772165" data-dye2="167772165" data-accessory-dye-id="4875" data-clothing-dye-id="4619" data-count="1"></a>
                        </td>
                        <td><a href="/player/SOLOeclips">SOLOeclips</a></td>
                        <td>6339</td>
                        <td>12267839</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,56,59,40,75,35]" data-bonuses="[180,0,0,26,4,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:08:01Z">2015-09-23 02:08:01</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/799/915/4634/4359" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="150994949" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/Discern">Discern</a></td>
                        <td>6281</td>
                        <td>12151644</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,56,60,55,40,75,41]" data-bonuses="[110,0,6,30,0,0,0,-4]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/799/915/4103/4886" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="16777216" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Adtv">Adtv</a></td>
                        <td>6246</td>
                        <td>12081697</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3078"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,50,59,40,75,45]" data-bonuses="[140,40,4,20,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/799/0/4671/4927" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772200" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4671" data-count="3"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>6196</td>
                        <td>11981433</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,60,55,40,75,45]" data-bonuses="[60,60,6,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:19:30Z">2015-09-11 04:19:30</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/799/915/4694/4488" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="83886088" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/GGWalrus">GGWalrus</a></td>
                        <td>6059</td>
                        <td>11707289</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,362,50,60,61,40,75,45]" data-bonuses="[0,110,0,30,6,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:55:55Z">2015-09-23 02:55:55</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/799/885/4695/4895" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="83886089" data-dye2="83886082" data-accessory-dye-id="4895" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dotnoppler">Dotnoppler</a></td>
                        <td>6047</td>
                        <td>11683704</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[782,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/799/29788/0/0" style="background-position: -250px -5400px" data-class="799" data-skin="29788" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>5877</td>
                        <td>11342858</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9062"></span><span class="item" data-item="9060"></span><span class="item" data-item="9061"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,55,60,60,45,80,45]" data-bonuses="[100,100,5,30,5,5,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:18:46Z">2015-09-21 23:18:46</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/799/915/4232/4488" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="9"></a>
                        </td>
                        <td><a href="/player/BozZMaster">BozZMaster</a></td>
                        <td>5851</td>
                        <td>11292552</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,56,54,55,40,75,51]" data-bonuses="[110,0,6,24,0,0,0,6]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/799/915/4637/4890" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="67108866" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>5700</td>
                        <td>10989291</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,51,63,55,40,75,45]" data-bonuses="[0,0,1,33,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/799/915/4696/4954" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="83886090" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4696" data-count="2"></a>
                        </td>
                        <td><a href="/player/Matizzz">Matizzz</a></td>
                        <td>5291</td>
                        <td>10170800</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,60,59,40,75,35]" data-bonuses="[100,0,4,30,4,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/799/0/4622/4399" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772168" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4622" data-count="10"></a>
                        </td>
                        <td><a href="/player/JeaDae">JeaDae</a></td>
                        <td>5227</td>
                        <td>10044300</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/799/915/4625/4886" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772171" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/CanPulse">CanPulse</a></td>
                        <td>5200</td>
                        <td>9989497</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,292,54,54,55,40,75,45]" data-bonuses="[140,40,4,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T00:40:14Z">2015-09-22 00:40:14</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/799/885/4623/4954" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772169" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4623" data-count="1"></a>
                        </td>
                        <td><a href="/player/ArokSF">ArokSF</a></td>
                        <td>5175</td>
                        <td>9939461</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,292,51,50,55,40,75,45]" data-bonuses="[220,40,1,20,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/799/915/4172/4359" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="16842496" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4172" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoffster">Hoffster</a></td>
                        <td>5158</td>
                        <td>9905463</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,51,56,63,40,75,39]" data-bonuses="[60,60,1,26,8,0,0,-6]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/799/915/4232/4917" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>5147</td>
                        <td>9883881</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,57,60,55,40,75,45]" data-bonuses="[60,60,7,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/799/0/4670/4488" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772199" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4670" data-count="1"></a>
                        </td>
                        <td><a href="/player/FOOzor">FOOzor</a></td>
                        <td>5114</td>
                        <td>9817044</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="9062"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[961,252,56,58,55,45,80,45]" data-bonuses="[191,0,6,28,0,5,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T10:46:41Z">2015-09-10 10:46:41</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td><span class="private-character" style="background-position: -250px -3250px"></span></td>
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
                            <a id="R" class="character" href="/top-characters-with-outfit/799/0/4693/4951" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="83886087" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4693" data-count="2"></a>
                        </td>
                        <td><a href="/player/ugDnTK4vK8p">Oeti</a></td>
                        <td>5032</td>
                        <td>9653418</td>
                        <td>
                            <span class="item" data-item="2563"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[840,312,56,60,55,40,75,45]" data-bonuses="[172,60,6,30,0,0,0,0]" data-class="799" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T03:38:28Z">2015-09-16 03:38:28</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/799/915/4614/4383" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772160" data-dye2="25886720" data-accessory-dye-id="4383" data-clothing-dye-id="4614" data-count="1"></a>
                        </td>
                        <td><a href="/player/KingSwidi">KingSwidi</a></td>
                        <td>5023</td>
                        <td>9636711</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,57,66,55,40,75,35]" data-bonuses="[60,60,7,36,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td><span class="private-character" style="background-position: -250px -3250px"></span></td>
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
                        <td>50.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/799/854/4658/4874" style="background-position: -250px -1700px" data-class="799" data-skin="854" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5007</td>
                        <td>9604384</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="2812"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,50,54,59,44,75,45]" data-bonuses="[60,60,0,24,4,4,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/799/885/0/0" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="355"></a>
                        </td>
                        <td><a href="/player/LordBleat">LordBleat</a></td>
                        <td>5005</td>
                        <td>9600222</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,57,54,55,40,75,51]" data-bonuses="[110,0,7,24,0,0,0,6]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T07:29:21Z">2015-09-13 07:29:21</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/799/885/4691/0" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772214" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4691" data-count="3"></a>
                        </td>
                        <td><a href="/player/Coolkorah">Coolkorah</a></td>
                        <td>5000</td>
                        <td>9589723</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,64,55,40,75,35]" data-bonuses="[100,0,5,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T17:05:51Z">2015-09-15 17:05:51</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/799/29788/4144/4464" style="background-position: -250px -5400px" data-class="799" data-skin="29788" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>5000</td>
                        <td>9588878</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9062"></span><span class="item" data-item="9060"></span><span class="item" data-item="9061"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[777,352,55,60,60,45,80,45]" data-bonuses="[100,100,5,30,5,5,5,0]" data-class="799" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/799/915/4111/0" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="30566686" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4111" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pixelmanns">Pixelmanns</a></td>
                        <td>4933</td>
                        <td>9456362</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,60,59,40,75,35]" data-bonuses="[100,0,5,30,4,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T18:56:20Z">2015-09-22 18:56:20</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/799/0/4211/4467" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="21064161" data-dye2="21064161" data-accessory-dye-id="4467" data-clothing-dye-id="4211" data-count="1"></a>
                        </td>
                        <td><a href="/player/NikuQ">NikuQ</a></td>
                        <td>4912</td>
                        <td>9413218</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,62,55,40,75,45]" data-bonuses="[0,0,0,32,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:59:32Z">2015-09-22 23:59:32</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td><span class="private-character" style="background-position: -250px -4600px"></span></td>
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
                            <a id="Z" class="character" href="/top-characters-with-outfit/799/915/4103/4901" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="16777216" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Carpz">Carpz</a></td>
                        <td>4804</td>
                        <td>9196976</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:50:38Z">2015-09-22 23:50:38</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/799/29800/4618/4422" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="167772164" data-dye2="33529978" data-accessory-dye-id="4422" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/SsShard">SsShard</a></td>
                        <td>4703</td>
                        <td>8995088</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,30,55,40,75,45]" data-bonuses="[0,0,0,0,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/799/29788/4637/4359" style="background-position: -250px -5400px" data-class="799" data-skin="29788" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>4666</td>
                        <td>8922670</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="9062"></span><span class="item" data-item="9060"></span><span class="item" data-item="9061"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,55,60,60,45,80,45]" data-bonuses="[100,100,5,30,5,5,5,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/799/915/4696/4359" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="83886090" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ippomaru">Ippomaru</a></td>
                        <td>4643</td>
                        <td>8875791</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,64,55,40,75,35]" data-bonuses="[100,0,4,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T06:34:30Z">2015-09-14 06:34:30</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/799/885/4192/4448" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="33420774" data-dye2="33420774" data-accessory-dye-id="4448" data-clothing-dye-id="4192" data-count="1"></a>
                        </td>
                        <td><a href="/player/Xlan">Xlan</a></td>
                        <td>4642</td>
                        <td>8873395</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/799/29800/4696/4953" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="83886090" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>4641</td>
                        <td>8871840</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:31:14Z">2015-09-21 12:31:14</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td><span class="private-character" style="background-position: -250px -3250px"></span></td>
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
                            <a id="af" class="character" href="/top-characters-with-outfit/799/915/4618/4488" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772164" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/WhyteeNigg">WhyteeNigg</a></td>
                        <td>4500</td>
                        <td>8589015</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,57,60,55,40,75,45]" data-bonuses="[60,60,7,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/799/915/4644/4906" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="67108869" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tiydus">Tiydus</a></td>
                        <td>4419</td>
                        <td>8427339</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[942,312,57,60,55,40,75,45]" data-bonuses="[172,60,7,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td><span class="private-character" style="background-position: -250px -1000px"></span></td>
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
                        <td>67.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/799/0/0/0" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3144"></a>
                        </td>
                        <td><a href="/player/Denski">Denski</a></td>
                        <td>4377</td>
                        <td>8343615</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/799/915/4175/4478" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="33489151" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4175" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jkhfg">Jkhfg</a></td>
                        <td>4287</td>
                        <td>8164342</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,56,60,55,40,75,45]" data-bonuses="[60,60,6,30,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:05:17Z">2015-09-22 21:05:17</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/799/9030/4655/4911" style="background-position: -250px -2150px" data-class="799" data-skin="9030" data-dye1="167772185" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4655" data-count="1"></a>
                        </td>
                        <td><a href="/player/FlameFish">FlameFish</a></td>
                        <td>4261</td>
                        <td>8110765</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="3078"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,54,59,40,75,45]" data-bonuses="[100,0,4,24,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T15:11:28Z">2015-09-20 15:11:28</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/799/915/4232/4488" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="9"></a>
                        </td>
                        <td><a href="/player/Drewjohnny">Drewjohnny</a></td>
                        <td>4236</td>
                        <td>8061729</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,69,55,40,75,35]" data-bonuses="[0,0,0,39,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/799/0/4146/4402" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="25198720" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4146" data-count="3"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>4233</td>
                        <td>8056133</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T23:01:31Z">2015-09-19 23:01:31</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/799/0/4644/4444" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="67108869" data-dye2="33547489" data-accessory-dye-id="4444" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hexage">Hexage</a></td>
                        <td>4226</td>
                        <td>8040981</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3078"></span><span class="item" data-item="9060"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,56,52,59,40,75,45]" data-bonuses="[100,100,6,22,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td><span class="private-character" style="background-position: -250px -3250px"></span></td>
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
                        <td>74.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/799/915/4609/4900" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="67108865" data-dye2="67108869" data-accessory-dye-id="4900" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/California">California</a></td>
                        <td>4200</td>
                        <td>7989166</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/799/885/4105/4361" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="3"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>4200</td>
                        <td>7989119</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:44:57Z">2015-09-12 12:44:57</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/799/915/4645/4363" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="67108870" data-dye2="27601450" data-accessory-dye-id="4363" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/ExoticKiwi">ExoticKiwi</a></td>
                        <td>4173</td>
                        <td>7935095</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,54,59,40,75,45]" data-bonuses="[100,0,4,24,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/799/885/4613/4956" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="150994945" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/Circumcise">Circumcise</a></td>
                        <td>4154</td>
                        <td>7898635</td>
                        <td>
                            <span class="item" data-item="8962"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T10:13:55Z">2015-09-20 10:13:55</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/799/885/4691/4901" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772214" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rotum">Rotum</a></td>
                        <td>4146</td>
                        <td>7881027</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="-1"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,60,55,40,75,35]" data-bonuses="[0,0,0,30,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:09:06Z">2015-09-23 14:09:06</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/799/0/4693/4951" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="83886087" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4693" data-count="2"></a>
                        </td>
                        <td><a href="/player/oBzoPzLi1tO">Drac</a></td>
                        <td>4117</td>
                        <td>7824352</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[881,312,50,64,55,44,75,35]" data-bonuses="[172,60,0,34,0,4,0,-10]" data-class="799" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:08:38Z">2015-09-23 16:08:38</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/799/29800/4634/0" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="150994949" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4634" data-count="11"></a>
                        </td>
                        <td><a href="/player/Maxqw">Maxqw</a></td>
                        <td>4103</td>
                        <td>7796604</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T06:35:56Z">2015-09-12 06:35:56</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/799/915/4687/4901" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772210" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/MrExterm">MrExterm</a></td>
                        <td>4080</td>
                        <td>7750272</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,64,55,40,75,35]" data-bonuses="[100,0,4,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/799/915/4191/4395" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="16777344" data-dye2="33553136" data-accessory-dye-id="4395" data-clothing-dye-id="4191" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vjjkingg">Vjjkingg</a></td>
                        <td>4078</td>
                        <td>7746095</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[950,252,51,54,55,40,75,45]" data-bonuses="[180,0,1,24,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/799/915/4685/0" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772208" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4685" data-count="1"></a>
                        </td>
                        <td><a href="/player/Brollibear">Brollibear</a></td>
                        <td>4069</td>
                        <td>7728213</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/799/885/4103/0" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="16777216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4103" data-count="18"></a>
                        </td>
                        <td><a href="/player/BobiPvP">BobiPvP</a></td>
                        <td>4063</td>
                        <td>7715008</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="3169"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,56,56,59,40,75,41]" data-bonuses="[110,0,6,26,4,0,0,-4]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/799/885/4696/4941" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="83886090" data-dye2="167772208" data-accessory-dye-id="4941" data-clothing-dye-id="4696" data-count="2"></a>
                        </td>
                        <td><a href="/player/Aykut">Aykut</a></td>
                        <td>4057</td>
                        <td>7704556</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="2578"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,50,45,59,44,75,45]" data-bonuses="[60,60,0,15,4,4,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/799/885/4698/4954" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="4"></a>
                        </td>
                        <td><a href="/player/ComeShards">ComeShards</a></td>
                        <td>4028</td>
                        <td>7645933</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,64,55,40,75,35]" data-bonuses="[100,0,5,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/799/0/4173/4413" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="20106546" data-dye2="24968192" data-accessory-dye-id="4413" data-clothing-dye-id="4173" data-count="1"></a>
                        </td>
                        <td><a href="/player/RMGnoob">RMGnoob</a></td>
                        <td>4011</td>
                        <td>7612218</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,58,55,40,75,45]" data-bonuses="[100,0,5,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:32:22Z">2015-09-22 21:32:22</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/799/915/4650/4424" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="167772180" data-dye2="25677562" data-accessory-dye-id="4424" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>4005</td>
                        <td>7599248</td>
                        <td>
                            <span class="item" data-item="3077"></span><span class="item" data-item="3078"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,54,59,40,75,45]" data-bonuses="[100,0,4,24,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/799/915/4216/4906" style="background-position: -250px -3250px" data-class="799" data-skin="915" data-dye1="33551854" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4216" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nudgemania">Nudgemania</a></td>
                        <td>4001</td>
                        <td>7591210</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="2854"></span><span class="item" data-item="9060"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,352,50,54,55,44,75,45]" data-bonuses="[100,100,0,24,0,4,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td><span class="private-character" style="background-position: -250px -2650px"></span></td>
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
                            <a id="aD" class="character" href="/top-characters-with-outfit/799/885/4134/4488" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="33494163" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4134" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>3961</td>
                        <td>7510975</td>
                        <td>
                            <span class="item" data-item="2827"></span><span class="item" data-item="2854"></span><span class="item" data-item="3169"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,64,55,40,75,35]" data-bonuses="[100,0,4,34,0,0,0,-10]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/799/0/0/0" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3144"></a>
                        </td>
                        <td><a href="/player/OgTheWeak">OgTheWeak</a></td>
                        <td>3958</td>
                        <td>7505325</td>
                        <td>
                            <span class="item" data-item="2631"></span><span class="item" data-item="3078"></span><span class="item" data-item="2707"></span><span class="item" data-item="8960"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[679,202,50,57,59,40,75,45]" data-bonuses="[0,0,0,27,4,0,0,0]" data-class="799" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:03:45Z">2015-09-23 16:03:45</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/799/0/0/0" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3144"></a>
                        </td>
                        <td><a href="/player/NagatoB">NagatoB</a></td>
                        <td>3904</td>
                        <td>7396962</td>
                        <td>
                            <span class="item" data-item="3073"></span><span class="item" data-item="3078"></span><span class="item" data-item="2812"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,50,54,59,44,75,45]" data-bonuses="[60,60,0,24,4,4,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:58:13Z">2015-09-23 13:58:13</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/799/0/4666/4359" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>3860</td>
                        <td>7308804</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="3078"></span><span class="item" data-item="9015"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,54,59,40,75,45]" data-bonuses="[100,0,4,24,4,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/799/29800/4647/4956" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="167772177" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4647" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>3849</td>
                        <td>7288410</td>
                        <td>
                            <span class="item" data-item="8963"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,54,58,55,40,75,45]" data-bonuses="[100,0,4,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T23:57:23Z">2015-09-15 23:57:23</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/799/0/4695/4949" style="background-position: -250px -300px" data-class="799" data-skin="0" data-dye1="83886089" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4695" data-count="2"></a>
                        </td>
                        <td><a href="/player/Mint">Mint</a></td>
                        <td>3778</td>
                        <td>7145078</td>
                        <td>
                            <span class="item" data-item="3291"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,252,50,63,55,40,75,45]" data-bonuses="[0,0,0,33,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td><span class="private-character" style="background-position: -250px -300px"></span></td>
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
                        <td>98.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/799/29800/4698/4954" style="background-position: -250px -4600px" data-class="799" data-skin="29800" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="9"></a>
                        </td>
                        <td><a href="/player/AivarasXXX">AivarasXXX</a></td>
                        <td>3756</td>
                        <td>7100977</td>
                        <td>
                            <span class="item" data-item="9063"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,55,58,55,40,75,45]" data-bonuses="[100,0,5,28,0,0,0,0]" data-class="799" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T18:33:51Z">2015-09-20 18:33:51</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/799/885/4174/4925" style="background-position: -250px -2650px" data-class="799" data-skin="885" data-dye1="33222886" data-dye2="167772198" data-accessory-dye-id="4925" data-clothing-dye-id="4174" data-count="1"></a>
                        </td>
                        <td><a href="/player/HITTBOY">HITTBOY</a></td>
                        <td>3752</td>
                        <td>7093102</td>
                        <td>
                            <span class="item" data-item="8732"></span><span class="item" data-item="2854"></span><span class="item" data-item="2812"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[862,221,50,54,55,40,75,45]" data-bonuses="[180,0,0,24,0,0,0,0]" data-class="799" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td><span class="private-character" style="background-position: -250px -2650px"></span></td>
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
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-paladins">1 - 100</a></li>
                    <li><a href="/top-paladins/101">101 - 200</a></li>
                    <li><a href="/top-paladins/201">201 - 300</a></li>
                    <li><a href="/top-paladins/301">301 - 400</a></li>
                    <li><a href="/top-paladins/401">401 - 500</a></li>
                    <li><a href="/top-paladins/501">501 - 600</a></li>
                    <li><a href="/top-paladins/601">601 - 700</a></li>
                    <li><a href="/top-paladins/701">701 - 800</a></li>
                    <li><a href="/top-paladins/801">801 - 900</a></li>
                    <li><a href="/top-paladins/901">901 - 1000</a></li>
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