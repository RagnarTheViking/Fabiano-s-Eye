<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:41 PM
     */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Top Wizards 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Wizards">
    <meta name="description" content="Top Wizards 1-100 in Realm of the Mad God - the free online mmo rpg game.">
    <link href="css/re.css" rel="stylesheet">
    <link href="css/top-characters-by-class.css" rel="stylesheet">
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
        <div class="col-md-12"><h1>Top Wizards</h1><p>This is a list of the top 1000 wizards by Exp seen in the past two
                weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
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
                    </a><a class="btn btn-default list-selector-item" title="Top Warriors" href="/top-warriors"><span class="private-character" style="background-position: 0px -208px"></span>
                        <div class="list-selector-item-label">Warriors</div>
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-wizards">1 - 100</a></li>
                    <li><a href="/top-wizards/101">101 - 200</a></li>
                    <li><a href="/top-wizards/201">201 - 300</a></li>
                    <li><a href="/top-wizards/301">301 - 400</a></li>
                    <li><a href="/top-wizards/401">401 - 500</a></li>
                    <li><a href="/top-wizards/501">501 - 600</a></li>
                    <li><a href="/top-wizards/601">601 - 700</a></li>
                    <li><a href="/top-wizards/701">701 - 800</a></li>
                    <li><a href="/top-wizards/801">801 - 900</a></li>
                    <li><a href="/top-wizards/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/782/29813/4655/4911" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="167772185" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4655" data-count="1"></a>
                        </td>
                        <td><a href="/player/MOblivion">MOblivion</a></td>
                        <td>44600</td>
                        <td>88790363</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,75,40,50,49,69,75]" data-bonuses="[205,25,0,15,0,9,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T00:43:22Z">2015-09-18 00:43:22</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/782/0/4229/4873" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="21029072" data-dye2="167772163" data-accessory-dye-id="4873" data-clothing-dye-id="4229" data-count="2"></a>
                        </td>
                        <td><a href="/player/TomPooties">TomPooties</a></td>
                        <td>29434</td>
                        <td>58457640</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="8863"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,85,38,50,42,68,81]" data-bonuses="[110,55,10,13,0,2,8,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T07:50:30Z">2015-09-23 07:50:30</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/782/9012/4695/0" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="83886089" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4695" data-count="6"></a>
                        </td>
                        <td><a href="/player/FumbDool">FumbDool</a></td>
                        <td>23609</td>
                        <td>46807789</td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="8863"></span><span class="item" data-item="8960"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[579,369,79,46,50,40,66,75]" data-bonuses="[0,55,4,21,0,0,6,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T23:46:46Z">2015-09-14 23:46:46</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/782/29813/4611/0" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="83886081" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4611" data-count="2"></a>
                        </td>
                        <td><a href="/player/ToguroAni">ToguroAni</a></td>
                        <td>16464</td>
                        <td>32518098</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,445,86,44,50,42,65,75]" data-bonuses="[110,60,11,19,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T16:47:56Z">2015-09-22 16:47:56</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/782/0/4653/4908" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="167772183" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4653" data-count="2"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>14256</td>
                        <td>28100888</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,85,44,50,42,68,75]" data-bonuses="[60,115,10,19,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:21:04Z">2015-09-11 04:21:04</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/782/0/4693/4953" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="83886087" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4693" data-count="2"></a>
                        </td>
                        <td><a href="/player/Obieone">Obieone</a></td>
                        <td>13500</td>
                        <td>26590023</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T05:29:24Z">2015-09-22 05:29:24</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/782/0/4653/4889" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="167772183" data-dye2="150994948" data-accessory-dye-id="4889" data-clothing-dye-id="4653" data-count="1"></a>
                        </td>
                        <td><a href="/player/Natsu">Natsu</a></td>
                        <td>12061</td>
                        <td>23712083</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="8863"></span><span class="item" data-item="2764"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,79,38,50,42,68,83]" data-bonuses="[0,55,4,13,0,2,8,8]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T01:54:37Z">2015-09-22 01:54:37</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/782/850/4695/4951" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="83886089" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4695" data-count="3"></a>
                        </td>
                        <td><a href="/player/Sieniaa">Sieniaa</a></td>
                        <td>11326</td>
                        <td>22242147</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,445,86,44,50,42,65,75]" data-bonuses="[110,60,11,19,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/782/850/4125/4381" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33524736" data-dye2="33524736" data-accessory-dye-id="4381" data-clothing-dye-id="4125" data-count="1"></a>
                        </td>
                        <td><a href="/player/GodOfGravy">GodOfGravy</a></td>
                        <td>11111</td>
                        <td>21811522</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="8862"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,75,40,50,49,69,75]" data-bonuses="[205,25,0,15,0,9,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/782/0/4232/4866" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33554431" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>11111</td>
                        <td>21810969</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,450,81,40,50,47,71,81]" data-bonuses="[135,65,6,15,0,7,11,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/782/0/4643/4895" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="67108868" data-dye2="83886082" data-accessory-dye-id="4895" data-clothing-dye-id="4643" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shatov">Shatov</a></td>
                        <td>10593</td>
                        <td>20775239</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8862"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,42,68,75]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T01:26:20Z">2015-09-15 01:26:20</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td><span class="private-character" style="background-position: -250px -5100px"></span></td>
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
                        <td>13.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/782/29813/4650/4906" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="167772180" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>10055</td>
                        <td>19700258</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[765,475,84,48,50,47,67,75]" data-bonuses="[95,90,9,23,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T19:46:47Z">2015-09-21 19:46:47</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/782/29813/4130/4399" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="21511563" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Glaede">Glaede</a></td>
                        <td>10000</td>
                        <td>19590600</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,79,38,50,44,67,75]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td><span class="private-character" style="background-position: -250px -100px"></span></td>
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
                            <a id="q" class="character" href="/top-characters-with-outfit/782/850/4107/4881" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="27601450" data-dye2="167772171" data-accessory-dye-id="4881" data-clothing-dye-id="4107" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>9264</td>
                        <td>18118125</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:50:37Z">2015-09-21 22:50:37</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/782/0/4232/4432" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33554431" data-dye2="25165824" data-accessory-dye-id="4432" data-clothing-dye-id="4232" data-count="3"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>8888</td>
                        <td>17366177</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,79,46,50,42,68,75]" data-bonuses="[0,55,4,21,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T17:39:05Z">2015-09-12 17:39:05</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/782/0/4611/4359" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="83886081" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4611" data-count="2"></a>
                        </td>
                        <td><a href="/player/Puriity">Puriity</a></td>
                        <td>8369</td>
                        <td>16327232</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="8863"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,540,85,44,50,40,70,75]" data-bonuses="[60,155,10,19,0,0,10,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/782/850/4232/4901" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33554431" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>8236</td>
                        <td>16061719</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[765,475,84,48,50,47,67,75]" data-bonuses="[95,90,9,23,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/782/0/4652/4908" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="167772182" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4652" data-count="4"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>8228</td>
                        <td>16045572</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:05:10Z">2015-09-10 15:05:10</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/782/0/0/4908" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ninjanoobs">Ninjanoobs</a></td>
                        <td>8220</td>
                        <td>16029354</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/782/9012/4687/4943" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="167772210" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4687" data-count="2"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>8110</td>
                        <td>15809980</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,42,68,75]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T00:14:19Z">2015-09-16 00:14:19</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/782/29813/4630/4891" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143848</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="8863"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,480,79,38,50,40,70,75]" data-bonuses="[180,95,4,13,0,0,10,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:31:42Z">2015-09-16 10:31:42</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/782/9012/4147/4403" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="16809984" data-dye2="16809984" data-accessory-dye-id="4403" data-clothing-dye-id="4147" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kusoneko">Kusoneko</a></td>
                        <td>7708</td>
                        <td>15005463</td>
                        <td>
                            <span class="item" data-item="9086"></span><span class="item" data-item="2772"></span><span class="item" data-item="2687"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,400,79,33,50,40,62,75]" data-bonuses="[100,15,4,8,0,0,2,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T02:45:49Z">2015-09-19 02:45:49</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/782/1026/4684/0" style="background-position: -250px -5500px" data-class="782" data-skin="1026" data-dye1="167772207" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/CaTaHa">CaTaHa</a></td>
                        <td>7400</td>
                        <td>14390338</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="8617"></span><span class="item" data-item="8616"></span><span class="item" data-item="8618"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[750,420,80,44,55,40,70,80]" data-bonuses="[80,35,5,19,5,0,10,5]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/782/1026/0/0" style="background-position: -250px -5500px" data-class="782" data-skin="1026" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="14"></a>
                        </td>
                        <td><a href="/player/Smirnov">Smirnov</a></td>
                        <td>7388</td>
                        <td>14364844</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="8617"></span><span class="item" data-item="8616"></span><span class="item" data-item="8618"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[750,420,80,44,55,40,70,80]" data-bonuses="[80,35,5,19,5,0,10,5]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T05:38:53Z">2015-09-19 05:38:53</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/782/29813/4685/4943" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="167772208" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4685" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZebraPanda">ZebraPanda</a></td>
                        <td>7290</td>
                        <td>14170720</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8862"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td><span class="private-character" style="background-position: -250px -5100px"></span></td>
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
                        <td>29.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/782/9012/4695/4952" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="83886089" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4695" data-count="2"></a>
                        </td>
                        <td><a href="/player/MGVODGAHD">MGVODGAHD</a></td>
                        <td>7102</td>
                        <td>13794027</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,42,68,75]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T18:23:44Z">2015-09-14 18:23:44</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td><span class="private-character" style="background-position: -250px -1500px"></span></td>
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
                        <td>31.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/782/850/4692/0" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="167772215" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4692" data-count="7"></a>
                        </td>
                        <td><a href="/player/ONIKUtank">ONIKUtank</a></td>
                        <td>7064</td>
                        <td>13717435</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,445,82,40,50,42,65,75]" data-bonuses="[190,60,7,15,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T20:57:55Z">2015-09-17 20:57:55</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/782/29813/4103/4359" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="5"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>7000</td>
                        <td>13588924</td>
                        <td>
                            <span class="item" data-item="9086"></span><span class="item" data-item="8617"></span><span class="item" data-item="2710"></span><span class="item" data-item="2981"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[680,440,81,39,59,40,66,75]" data-bonuses="[10,55,6,14,9,0,6,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/782/0/4103/4359" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="20"></a>
                        </td>
                        <td><a href="/player/Rr">Rr</a></td>
                        <td>6681</td>
                        <td>12952560</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,86,38,53,42,68,81]" data-bonuses="[110,55,11,13,3,2,8,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/782/0/4697/4954" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="83886091" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4697" data-count="2"></a>
                        </td>
                        <td><a href="/player/ZasWiz">ZasWiz</a></td>
                        <td>6657</td>
                        <td>12903290</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:22:28Z">2015-09-23 12:22:28</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/782/0/4143/4866" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33093887" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4143" data-count="2"></a>
                        </td>
                        <td><a href="/player/Olimar">Olimar</a></td>
                        <td>6595</td>
                        <td>12779331</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[765,475,84,48,50,47,67,75]" data-bonuses="[95,90,9,23,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/782/0/4613/4431" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="150994945" data-dye2="33489151" data-accessory-dye-id="4431" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/SaltyOcean">SaltyOcean</a></td>
                        <td>6364</td>
                        <td>12317335</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="2852"></span><span class="item" data-item="30051"></span><span class="item" data-item="3117"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[588,289,79,36,56,43,63,76]" data-bonuses="[20,20,4,11,6,3,3,1]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/782/29813/0/0" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="108"></a>
                        </td>
                        <td><a href="/player/Vilethorn">Vilethorn</a></td>
                        <td>6215</td>
                        <td>12019847</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[740,505,82,44,50,46,65,75]" data-bonuses="[70,120,7,19,0,6,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:05:19Z">2015-09-22 23:05:19</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/782/1026/4637/4359" style="background-position: -250px -5500px" data-class="782" data-skin="1026" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="2"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>6128</td>
                        <td>11846157</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="8617"></span><span class="item" data-item="8616"></span><span class="item" data-item="8618"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[750,420,80,44,55,40,70,80]" data-bonuses="[80,35,5,19,5,0,10,5]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/782/9012/4621/0" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="167772167" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4621" data-count="2"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>6100</td>
                        <td>11788872</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[705,415,78,51,50,47,67,75]" data-bonuses="[35,30,3,26,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/782/850/4103/4372" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="16777216" data-dye2="16842751" data-accessory-dye-id="4372" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheJustSo">TheJustSo</a></td>
                        <td>5826</td>
                        <td>11241013</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,432,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/782/0/4175/4431" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33489151" data-dye2="33489151" data-accessory-dye-id="4431" data-clothing-dye-id="4175" data-count="6"></a>
                        </td>
                        <td><a href="/player/PinkPetite">PinkPetite</a></td>
                        <td>5821</td>
                        <td>11232205</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,79,38,50,42,68,75]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/782/0/4103/4890" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fitchium">Fitchium</a></td>
                        <td>5704</td>
                        <td>10997379</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2752"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,79,45,50,42,68,75]" data-bonuses="[0,55,4,20,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T22:41:06Z">2015-09-18 22:41:06</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/782/850/4168/4372" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="25677562" data-dye2="16842751" data-accessory-dye-id="4372" data-clothing-dye-id="4168" data-count="1"></a>
                        </td>
                        <td><a href="/player/CakeHealer">CakeHealer</a></td>
                        <td>5626</td>
                        <td>10842650</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T09:34:50Z">2015-09-23 09:34:50</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/782/0/4209/4465" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33488896" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4209" data-count="12"></a>
                        </td>
                        <td><a href="/player/XThEsimon">XThEsimon</a></td>
                        <td>5600</td>
                        <td>10789340</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,75,40,50,49,69,75]" data-bonuses="[205,25,0,15,0,9,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td><span class="private-character" style="background-position: -250px -1400px"></span></td>
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
                        <td>46.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/782/850/4232/4917" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>5525</td>
                        <td>10640663</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,410,81,40,50,49,69,81]" data-bonuses="[135,25,6,15,0,9,9,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/782/0/4232/4488" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="10"></a>
                        </td>
                        <td><a href="/player/AcaFaca">AcaFaca</a></td>
                        <td>5430</td>
                        <td>10450589</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T09:12:30Z">2015-09-19 09:12:30</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/782/0/4617/4923" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="167772163" data-dye2="167772196" data-accessory-dye-id="4923" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shider">Shider</a></td>
                        <td>5422</td>
                        <td>10432907</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[790,445,88,40,50,42,65,81]" data-bonuses="[120,60,13,15,0,2,5,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/782/0/4209/4399" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33488896" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kurushin">Kurushin</a></td>
                        <td>5415</td>
                        <td>10420669</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[885,415,78,42,50,47,67,75]" data-bonuses="[215,30,3,17,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T08:03:02Z">2015-09-23 08:03:02</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/782/850/4634/4359" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="150994949" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/Discern">Discern</a></td>
                        <td>5370</td>
                        <td>10329779</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2881"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,480,83,42,50,42,69,75]" data-bonuses="[100,95,8,17,0,2,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td><span class="private-character" style="background-position: -250px -4250px"></span></td>
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
                        <td>52.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/782/0/0/0" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22441"></a>
                        </td>
                        <td><a href="/player/Mindful">Mindful</a></td>
                        <td>5310</td>
                        <td>10209716</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="2608"></span><span class="item" data-item="2709"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[726,354,78,36,50,40,66,75]" data-bonuses="[140,50,3,11,0,0,6,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T18:48:55Z">2015-09-13 18:48:55</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td><span class="private-character" style="background-position: -250px -100px"></span></td>
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
                        <td>54.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/782/0/4150/4416" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33515956" data-dye2="32538752" data-accessory-dye-id="4416" data-clothing-dye-id="4150" data-count="1"></a>
                        </td>
                        <td><a href="/player/LadyNurul">LadyNurul</a></td>
                        <td>5230</td>
                        <td>10050024</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T01:46:05Z">2015-09-20 01:46:05</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/782/0/4153/4370" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33554416" data-dye2="33552604" data-accessory-dye-id="4370" data-clothing-dye-id="4153" data-count="1"></a>
                        </td>
                        <td><a href="/player/Steeeeeeee">Steeeeeeee</a></td>
                        <td>5144</td>
                        <td>9877353</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T10:56:37Z">2015-09-19 10:56:37</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/782/850/4103/4488" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="16777216" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZNoXz">ZNoXz</a></td>
                        <td>5130</td>
                        <td>9849051</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/782/850/4609/4866" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>5100</td>
                        <td>9789519</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="30051"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,535,78,41,61,40,64,75]" data-bonuses="[0,150,3,16,11,0,4,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/782/29813/0/0" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="108"></a>
                        </td>
                        <td><a href="/player/AndrejRUS">AndrejRUS</a></td>
                        <td>5051</td>
                        <td>9692033</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,445,86,44,50,42,65,75]" data-bonuses="[110,60,11,19,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T16:47:47Z">2015-09-22 16:47:47</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/782/850/4695/4949" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="83886089" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4695" data-count="3"></a>
                        </td>
                        <td><a href="/player/XXYAMYAMXx">XXYAMYAMXx</a></td>
                        <td>5000</td>
                        <td>9589742</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="30051"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,485,84,41,55,40,64,75]" data-bonuses="[60,100,9,16,5,0,4,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/782/850/4658/4874" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5000</td>
                        <td>9588956</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,42,68,75]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/782/0/4144/4464" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>5000</td>
                        <td>9588942</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[690,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/782/848/4609/4900" style="background-position: -250px -1400px" data-class="782" data-skin="848" data-dye1="67108865" data-dye2="67108869" data-accessory-dye-id="4900" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/California">California</a></td>
                        <td>5000</td>
                        <td>9588927</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,42,68,75]" data-bonuses="[100,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/782/0/0/0" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22441"></a>
                        </td>
                        <td><a href="/player/Owl">Owl</a></td>
                        <td>4992</td>
                        <td>9573779</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="2608"></span><span class="item" data-item="2710"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,435,78,45,50,40,66,75]" data-bonuses="[0,50,3,20,0,0,6,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T11:11:12Z">2015-09-19 11:11:12</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/782/0/4195/4451" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="33531136" data-dye2="33531136" data-accessory-dye-id="4451" data-clothing-dye-id="4195" data-count="3"></a>
                        </td>
                        <td><a href="/player/PrinceYimi">PrinceYimi</a></td>
                        <td>4927</td>
                        <td>9444307</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="2881"></span><span class="item" data-item="3122"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,480,85,38,50,42,69,81]" data-bonuses="[110,95,10,13,0,2,9,6]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T14:06:10Z">2015-09-21 14:06:10</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/782/0/0/0" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22441"></a>
                        </td>
                        <td><a href="/player/Nahzaar">Nahzaar</a></td>
                        <td>4924</td>
                        <td>9436939</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,403,79,46,50,42,68,75]" data-bonuses="[0,55,4,21,0,2,8,0]" data-class="782" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/782/850/4175/4431" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33489151" data-dye2="33489151" data-accessory-dye-id="4431" data-clothing-dye-id="4175" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hombr">Hombr</a></td>
                        <td>4881</td>
                        <td>9352274</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T19:24:05Z">2015-09-15 19:24:05</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td><span class="private-character" style="background-position: -250px -100px"></span></td>
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
                        <td>68.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/782/0/0/0" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22441"></a>
                        </td>
                        <td><a href="/player/H4cnVEHi4Bq">Tiar</a></td>
                        <td>4741</td>
                        <td>9071604</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2608"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[638,401,79,42,50,44,66,75]" data-bonuses="[60,115,4,17,0,4,6,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T03:25:22Z">2015-09-12 03:25:22</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/782/850/0/4951" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="0" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="0" data-count="4"></a>
                        </td>
                        <td><a href="/player/Morisei">Morisei</a></td>
                        <td>4716</td>
                        <td>9022633</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,79,38,50,44,67,75]" data-bonuses="[180,55,4,13,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T16:03:14Z">2015-09-18 16:03:14</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td><span class="private-character" style="background-position: -250px -5100px"></span></td>
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
                            <a id="am" class="character" href="/top-characters-with-outfit/782/0/0/0" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22441"></a>
                        </td>
                        <td><a href="/player/Statakaka">Statakaka</a></td>
                        <td>4688</td>
                        <td>8966522</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="8863"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,85,44,50,42,68,75]" data-bonuses="[60,115,10,19,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T15:46:36Z">2015-09-22 15:46:36</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/782/850/0/4954" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="0" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="0" data-count="15"></a>
                        </td>
                        <td><a href="/player/kMt4Ci36xUX">Itani</a></td>
                        <td>4652</td>
                        <td>8893242</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[887,440,83,42,50,42,68,75]" data-bonuses="[217,55,8,17,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T15:35:24Z">2015-09-23 15:35:24</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/782/29813/4693/4940" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="83886087" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/Algazairy">Algazairy</a></td>
                        <td>4628</td>
                        <td>8844927</td>
                        <td>
                            <span class="item" data-item="9086"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/782/0/4694/4953" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="83886088" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/Edzor">Edzor</a></td>
                        <td>4602</td>
                        <td>8793923</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/782/850/4633/4952" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="150994948" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4633" data-count="2"></a>
                        </td>
                        <td><a href="/player/iaRNzmXbkVZ">Sek</a></td>
                        <td>4599</td>
                        <td>8788038</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,85,44,50,42,68,75]" data-bonuses="[60,115,10,19,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:38:36Z">2015-09-23 13:38:36</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/782/872/4096/4356" style="background-position: -250px -2300px" data-class="782" data-skin="872" data-dye1="32569599" data-dye2="32571391" data-accessory-dye-id="4356" data-clothing-dye-id="4096" data-count="1"></a>
                        </td>
                        <td><a href="/player/FrSparkles">FrSparkles</a></td>
                        <td>4566</td>
                        <td>8721046</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T08:06:41Z">2015-09-12 08:06:41</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/782/0/4146/4480" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>4444</td>
                        <td>8476970</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:49:40Z">2015-09-16 23:49:40</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/782/29813/4103/4402" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="16777216" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kieubasa">Kieubasa</a></td>
                        <td>4381</td>
                        <td>8351046</td>
                        <td>
                            <span class="item" data-item="8615"></span><span class="item" data-item="2881"></span><span class="item" data-item="8616"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,435,81,37,53,40,74,84]" data-bonuses="[130,50,6,12,3,0,14,9]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:52:14Z">2015-09-12 12:52:14</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/782/850/4675/4873" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="150994955" data-dye2="167772163" data-accessory-dye-id="4873" data-clothing-dye-id="4675" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>4350</td>
                        <td>8289527</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2881"></span><span class="item" data-item="8616"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[790,430,81,37,53,40,64,84]" data-bonuses="[120,45,6,12,3,0,4,9]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:41:49Z">2015-09-23 12:41:49</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/782/850/4229/4485" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="21029072" data-dye2="21029072" data-accessory-dye-id="4485" data-clothing-dye-id="4229" data-count="3"></a>
                        </td>
                        <td><a href="/player/Coolaapan">Coolaapan</a></td>
                        <td>4308</td>
                        <td>8205436</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T14:15:34Z">2015-09-21 14:15:34</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/782/850/4232/4488" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="5"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>4282</td>
                        <td>8154213</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,83,42,50,44,67,75]" data-bonuses="[100,55,8,17,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/782/850/4123/4954" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="25886859" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4123" data-count="1"></a>
                        </td>
                        <td><a href="/player/JJAACCOOBB">JJAACCOOBB</a></td>
                        <td>4175</td>
                        <td>7939823</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2852"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,81,46,50,49,69,75]" data-bonuses="[85,85,6,21,0,9,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td><span class="private-character" style="background-position: -250px -5100px"></span></td>
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
                            <a id="ay" class="character" href="/top-characters-with-outfit/782/29813/4208/4895" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="25165952" data-dye2="83886082" data-accessory-dye-id="4895" data-clothing-dye-id="4208" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nathanite">Nathanite</a></td>
                        <td>4119</td>
                        <td>7826990</td>
                        <td>
                            <span class="item" data-item="9086"></span><span class="item" data-item="8617"></span><span class="item" data-item="2710"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[680,540,81,39,50,40,70,79]" data-bonuses="[10,155,6,14,0,0,10,4]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T21:26:14Z">2015-09-20 21:26:14</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/782/0/4625/4956" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="167772171" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4625" data-count="2"></a>
                        </td>
                        <td><a href="/player/VoidBeyond">VoidBeyond</a></td>
                        <td>4119</td>
                        <td>7826889</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[634,424,82,44,50,46,65,75]" data-bonuses="[70,120,7,19,0,6,5,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/782/850/0/0" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="825"></a>
                        </td>
                        <td><a href="/player/Tsssk">Tsssk</a></td>
                        <td>4111</td>
                        <td>7811069</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[885,415,78,42,50,47,67,75]" data-bonuses="[215,30,3,17,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T07:47:58Z">2015-09-19 07:47:58</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/782/850/4684/4954" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="167772207" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4684" data-count="4"></a>
                        </td>
                        <td><a href="/player/6AFcvTrs0B7">Zhiar</a></td>
                        <td>4075</td>
                        <td>7739308</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,79,38,54,42,68,79]" data-bonuses="[60,115,4,13,4,2,8,4]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:38:36Z">2015-09-23 13:38:36</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/782/850/4186/4902" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="18422128" data-dye2="67108871" data-accessory-dye-id="4902" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/XXwarhawkX">XXwarhawkX</a></td>
                        <td>4066</td>
                        <td>7722415</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2852"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,85,44,50,44,67,75]" data-bonuses="[60,115,10,19,0,4,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T00:13:17Z">2015-09-22 00:13:17</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td><span class="private-character" style="background-position: -250px -100px"></span></td>
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
                            <a id="aD" class="character" href="/top-characters-with-outfit/782/850/4670/4868" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="167772199" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4670" data-count="1"></a>
                        </td>
                        <td><a href="/player/KozMilan">KozMilan</a></td>
                        <td>4049</td>
                        <td>7688337</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T11:45:10Z">2015-09-23 11:45:10</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/782/9012/0/0" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="603"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>4023</td>
                        <td>7636517</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[740,505,88,46,50,42,65,75]" data-bonuses="[70,120,13,21,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T16:54:37Z">2015-09-21 16:54:37</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/782/850/4203/4459" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="33544889" data-dye2="33544889" data-accessory-dye-id="4459" data-clothing-dye-id="4203" data-count="1"></a>
                        </td>
                        <td><a href="/player/MiiAllYaa">MiiAllYaa</a></td>
                        <td>4008</td>
                        <td>7606433</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8862"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,75,40,50,49,69,75]" data-bonuses="[205,25,0,15,0,9,9,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:14:04Z">2015-09-22 21:14:04</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/782/872/0/0" style="background-position: -250px -2300px" data-class="782" data-skin="872" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="1599"></a>
                        </td>
                        <td><a href="/player/Ikusuz">Ikusuz</a></td>
                        <td>4000</td>
                        <td>7589834</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8862"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,79,38,54,44,67,79]" data-bonuses="[60,115,4,13,4,4,7,4]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T08:38:57Z">2015-09-23 08:38:57</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/782/872/4696/0" style="background-position: -250px -2300px" data-class="782" data-skin="872" data-dye1="83886090" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4696" data-count="13"></a>
                        </td>
                        <td><a href="/player/wHZSThCPT11">Itani</a></td>
                        <td>3984</td>
                        <td>7558164</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2608"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[647,416,79,42,50,44,66,75]" data-bonuses="[60,115,4,17,0,4,6,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T18:00:44Z">2015-09-22 18:00:44</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/782/29813/4161/4488" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="31522815" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4161" data-count="1"></a>
                        </td>
                        <td><a href="/player/Diokles">Diokles</a></td>
                        <td>3980</td>
                        <td>7550690</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="8617"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,415,82,46,50,47,67,75]" data-bonuses="[135,30,7,21,0,7,7,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/782/29813/4143/4399" style="background-position: -250px -5100px" data-class="782" data-skin="29813" data-dye1="33093887" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4143" data-count="3"></a>
                        </td>
                        <td><a href="/player/Rastas">Rastas</a></td>
                        <td>3868</td>
                        <td>7325936</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="8617"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[740,505,88,46,50,42,65,75]" data-bonuses="[70,120,13,21,0,2,5,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/782/850/4103/4922" style="background-position: -250px -1500px" data-class="782" data-skin="850" data-dye1="16777216" data-dye2="167772195" data-accessory-dye-id="4922" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cryophile">Cryophile</a></td>
                        <td>3868</td>
                        <td>7325843</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,82,39,55,42,62,75]" data-bonuses="[100,0,7,14,5,2,2,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:19:29Z">2015-09-21 22:19:29</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/782/872/4684/0" style="background-position: -250px -2300px" data-class="782" data-skin="872" data-dye1="167772207" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4684" data-count="4"></a>
                        </td>
                        <td><a href="/player/t0OdmjfjaTj">Issz</a></td>
                        <td>3859</td>
                        <td>7308595</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2608"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,371,83,42,50,42,65,75]" data-bonuses="[212,55,8,17,0,2,5,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T09:51:37Z">2015-09-23 09:51:37</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/782/0/4695/4951" style="background-position: -250px -100px" data-class="782" data-skin="0" data-dye1="83886089" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4695" data-count="8"></a>
                        </td>
                        <td><a href="/player/4WCPVejjD9f">Eendi</a></td>
                        <td>3851</td>
                        <td>7291829</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2608"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[714,393,83,42,50,42,65,75]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="782" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T19:47:43Z">2015-09-22 19:47:43</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/782/9012/0/0" style="background-position: -250px -4250px" data-class="782" data-skin="9012" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="603"></a>
                        </td>
                        <td><a href="/player/Nudolf">Nudolf</a></td>
                        <td>3809</td>
                        <td>7207535</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2852"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,79,38,50,42,68,75]" data-bonuses="[180,55,4,13,0,2,8,0]" data-class="782" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T04:32:51Z">2015-09-23 04:32:51</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-wizards">1 - 100</a></li>
                    <li><a href="/top-wizards/101">101 - 200</a></li>
                    <li><a href="/top-wizards/201">201 - 300</a></li>
                    <li><a href="/top-wizards/301">301 - 400</a></li>
                    <li><a href="/top-wizards/401">401 - 500</a></li>
                    <li><a href="/top-wizards/501">501 - 600</a></li>
                    <li><a href="/top-wizards/601">601 - 700</a></li>
                    <li><a href="/top-wizards/701">701 - 800</a></li>
                    <li><a href="/top-wizards/801">801 - 900</a></li>
                    <li><a href="/top-wizards/901">901 - 1000</a></li>
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