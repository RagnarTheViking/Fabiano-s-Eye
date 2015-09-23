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
    <title>Top Huntresses 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Huntresses">
    <meta name="description" content="Top Huntresses 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Huntresses</h1><p>This is a list of the top 1000 huntresses by Exp seen in the
                past two weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
            <div class="text-center">
                <div class="btn-group">
                    <a class="btn btn-default list-selector-item" title="Top Archers" href="/top-archers"><span class="private-character" style="background-position: 0px -58px"></span>
                        <div class="list-selector-item-label">Archers</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Assassins" href="/top-assassins"><span class="private-character" style="background-position: 0px -358px"></span>
                        <div class="list-selector-item-label">Assassins</div>
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Huntresses" href="/top-huntresses"><span class="private-character" style="background-position: 0px -458px"></span>
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
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-huntresses">1 - 100</a></li>
                    <li><a href="/top-huntresses/101">101 - 200</a></li>
                    <li><a href="/top-huntresses/201">201 - 300</a></li>
                    <li><a href="/top-huntresses/301">301 - 400</a></li>
                    <li><a href="/top-huntresses/401">401 - 500</a></li>
                    <li><a href="/top-huntresses/501">501 - 600</a></li>
                    <li><a href="/top-huntresses/601">601 - 700</a></li>
                    <li><a href="/top-huntresses/701">701 - 800</a></li>
                    <li><a href="/top-huntresses/801">801 - 900</a></li>
                    <li><a href="/top-huntresses/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/802/8977/4232/4878" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="33554431" data-dye2="167772168" data-accessory-dye-id="4878" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Sayalel">Sayalel</a></td>
                        <td>45651</td>
                        <td>90892223</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,75,42,52,40,50,57]" data-bonuses="[180,0,0,17,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/802/0/4615/4872" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772161" data-dye2="167772162" data-accessory-dye-id="4872" data-clothing-dye-id="4615" data-count="1"></a>
                        </td>
                        <td><a href="/player/MOblivion">MOblivion</a></td>
                        <td>42600</td>
                        <td>84790080</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,75,42,50,40,50,55]" data-bonuses="[180,0,0,17,0,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T00:43:08Z">2015-09-18 00:43:08</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/802/900/4103/4468" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="16777216" data-dye2="25904403" data-accessory-dye-id="4468" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/SaltyOcean">SaltyOcean</a></td>
                        <td>25300</td>
                        <td>50189571</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,198,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/802/0/4657/4913" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772187" data-dye2="167772187" data-accessory-dye-id="4913" data-clothing-dye-id="4657" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>22222</td>
                        <td>44033058</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="-1"></span><span class="item" data-item="3112"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[735,194,80,38,52,39,50,55]" data-bonuses="[40,0,6,14,3,0,0,6]" data-class="802" data-level="20">1/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/802/8977/4618/4927" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772164" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fawlup">Fawlup</a></td>
                        <td>21620</td>
                        <td>42828822</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/802/843/4233/4891" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="32896501" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>20410</td>
                        <td>40410020</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="8609"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[725,326,75,43,58,40,50,52]" data-bonuses="[25,120,0,18,8,0,0,2]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td><span class="private-character" style="background-position: -250px -1150px"></span></td>
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
                        <td>8.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/802/843/4103/4886" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="16777216" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Adtv">Adtv</a></td>
                        <td>14740</td>
                        <td>29070562</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,84,45,55,40,50,55]" data-bonuses="[60,60,9,20,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/802/0/4103/4944" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="16777216" data-dye2="167772211" data-accessory-dye-id="4944" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>12366</td>
                        <td>24322568</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,183,79,45,53,40,50,54]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T21:32:12Z">2015-09-21 21:32:12</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/802/8977/4135/4390" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="16826367" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4135" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pallladino">Pallladino</a></td>
                        <td>12280</td>
                        <td>24149101</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[740,252,78,25,50,40,50,53]" data-bonuses="[40,0,3,0,0,0,0,3]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/802/29789/4650/4897" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772180" data-dye2="83886084" data-accessory-dye-id="4897" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/Styling">Styling</a></td>
                        <td>12101</td>
                        <td>23792080</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td><span class="private-character" style="background-position: -250px -4100px"></span></td>
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
                            <a id="n" class="character" href="/top-characters-with-outfit/802/0/4655/4911" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772185" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4655" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tisgeh">Tisgeh</a></td>
                        <td>10318</td>
                        <td>20226676</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,75,41,53,40,50,54]" data-bonuses="[180,0,0,16,3,0,0,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T12:32:53Z">2015-09-17 12:32:53</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/802/843/4621/4939" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="167772167" data-dye2="167772206" data-accessory-dye-id="4939" data-clothing-dye-id="4621" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>10100</td>
                        <td>19789160</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,362,75,47,61,40,50,56]" data-bonuses="[0,110,0,22,11,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/802/0/4625/4877" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772171" data-dye2="167772167" data-accessory-dye-id="4877" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>10000</td>
                        <td>19589089</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2979"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,252,84,41,55,40,50,56]" data-bonuses="[0,0,9,16,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T01:45:41Z">2015-09-18 01:45:41</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/802/29789/4696/4940" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="83886090" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>10000</td>
                        <td>19589055</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,53,40,50,54]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/802/29789/4144/4464" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>10000</td>
                        <td>19588801</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,199,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/802/901/0/4357" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="0" data-dye2="32896476" data-accessory-dye-id="4357" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Eataroryx">Eataroryx</a></td>
                        <td>8581</td>
                        <td>16751732</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3091"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[620,276,75,41,60,40,55,56]" data-bonuses="[0,75,0,16,10,0,5,6]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:50:32Z">2015-09-23 13:50:32</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/802/8977/4232/4933" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="33554431" data-dye2="83886085" data-accessory-dye-id="4933" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Swiftapple">Swiftapple</a></td>
                        <td>8044</td>
                        <td>15677440</td>
                        <td>
                            <span class="item" data-item="8997"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,252,81,41,53,40,50,60]" data-bonuses="[110,0,6,16,3,0,0,10]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/802/843/4671/4927" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="167772200" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4671" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nut">Nut</a></td>
                        <td>8000</td>
                        <td>15589009</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,193,79,45,53,40,50,54]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T20:41:25Z">2015-09-18 20:41:25</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/802/29801/4132/4484" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="16830161" data-dye2="33514311" data-accessory-dye-id="4484" data-clothing-dye-id="4132" data-count="1"></a>
                        </td>
                        <td><a href="/player/GatorTail">GatorTail</a></td>
                        <td>7913</td>
                        <td>15414959</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,47,55,40,50,56]" data-bonuses="[60,60,6,22,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T01:06:28Z">2015-09-17 01:06:28</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/802/29789/4635/4886" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="150994950" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143644</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,78,39,55,40,50,55]" data-bonuses="[180,0,3,14,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:38:25Z">2015-09-16 10:38:25</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/802/29789/4617/4393" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772163" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/PoOonDaDa">PoOonDaDa</a></td>
                        <td>7552</td>
                        <td>14693032</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[840,192,75,41,53,40,50,54]" data-bonuses="[140,0,0,16,3,0,0,4]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/802/8977/4697/4929" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="83886091" data-dye2="167772202" data-accessory-dye-id="4929" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>7325</td>
                        <td>14239570</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[715,178,79,46,50,40,50,55]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/802/8977/4697/4927" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="83886091" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tealeaves">Tealeaves</a></td>
                        <td>7130</td>
                        <td>13849534</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,199,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T03:41:31Z">2015-09-17 03:41:31</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/802/0/4103/4868" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>6820</td>
                        <td>13229867</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/802/843/4195/4464" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="33531136" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>6759</td>
                        <td>13108589</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3091"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,327,75,41,60,40,55,56]" data-bonuses="[0,75,0,16,10,0,5,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:54:41Z">2015-09-21 22:54:41</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/802/0/4653/4908" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772183" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4653" data-count="1"></a>
                        </td>
                        <td><a href="/player/Eygptix">Eygptix</a></td>
                        <td>6700</td>
                        <td>12990219</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[708,214,56,46,52,32,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">4/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T20:14:06Z">2015-09-18 20:14:06</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/802/843/4103/4464" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>6490</td>
                        <td>12569890</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,47,55,40,50,56]" data-bonuses="[60,60,6,22,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:19:39Z">2015-09-11 04:19:39</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/802/29789/4616/4921" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772162" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dattler">Dattler</a></td>
                        <td>6265</td>
                        <td>12118937</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="2737"></span><span class="item" data-item="3096"></span><span class="item" data-item="2979"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,252,84,41,53,40,50,54]" data-bonuses="[0,0,9,16,3,0,0,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/802/29789/4684/4904" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772207" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>6100</td>
                        <td>11789842</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,192,79,46,50,40,50,55]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/802/8977/4670/4953" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772199" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4670" data-count="1"></a>
                        </td>
                        <td><a href="/player/CaTaHa">CaTaHa</a></td>
                        <td>6059</td>
                        <td>11707448</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,252,81,41,55,40,50,62]" data-bonuses="[110,0,6,16,5,0,0,12]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/802/843/4654/4877" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="167772184" data-dye2="167772167" data-accessory-dye-id="4877" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/HappyKarma">HappyKarma</a></td>
                        <td>5847</td>
                        <td>11283658</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="2860"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[722,202,79,45,53,42,52,54]" data-bonuses="[100,0,4,20,3,2,2,4]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T19:54:43Z">2015-09-19 19:54:43</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/802/0/4696/4914" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="83886090" data-dye2="167772188" data-accessory-dye-id="4914" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rorola">Rorola</a></td>
                        <td>5834</td>
                        <td>11258588</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,45,55,44,50,56]" data-bonuses="[60,60,0,20,5,4,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/802/843/4638/4391" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="150994952" data-dye2="16826367" data-accessory-dye-id="4391" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>5821</td>
                        <td>11230928</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,48,52,40,50,57]" data-bonuses="[60,60,6,23,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:31:27Z">2015-09-21 12:31:27</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/802/0/4146/4402" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="25198720" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4146" data-count="2"></a>
                        </td>
                        <td><a href="/player/Killian">Killian</a></td>
                        <td>5606</td>
                        <td>10801283</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,52,40,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T02:57:26Z">2015-09-11 02:57:26</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/802/29789/4650/4488" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772180" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/Avattar">Avattar</a></td>
                        <td>5520</td>
                        <td>10630447</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/802/8977/4207/4442" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="28369126" data-dye2="18422128" data-accessory-dye-id="4442" data-clothing-dye-id="4207" data-count="1"></a>
                        </td>
                        <td><a href="/player/Castrof">Castrof</a></td>
                        <td>5405</td>
                        <td>10399832</td>
                        <td>
                            <span class="item" data-item="2818"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,41,59,40,50,60]" data-bonuses="[60,60,0,16,9,0,0,10]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/802/0/4695/4952" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="83886089" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/GOWCoder">GOWCoder</a></td>
                        <td>5349</td>
                        <td>10288664</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="2860"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,75,42,50,42,52,55]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T08:23:39Z">2015-09-23 08:23:39</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td><span class="private-character" style="background-position: -250px -4650px"></span></td>
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
                        <td>41.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/802/29801/4658/4874" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5205</td>
                        <td>10000634</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2979"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,252,84,42,52,40,50,57]" data-bonuses="[0,0,9,17,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/802/8977/4692/4940" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772215" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4692" data-count="2"></a>
                        </td>
                        <td><a href="/player/MrFijiWiji">MrFijiWiji</a></td>
                        <td>5122</td>
                        <td>9834194</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T20:46:16Z">2015-09-13 20:46:16</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/802/0/4232/4488" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="6"></a>
                        </td>
                        <td><a href="/player/BozZMaster">BozZMaster</a></td>
                        <td>5121</td>
                        <td>9831998</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/802/29789/4637/4359" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>5115</td>
                        <td>9820314</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,52,40,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/802/843/4103/4927" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="16777216" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>5092</td>
                        <td>9772782</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/802/8977/4618/4442" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772164" data-dye2="18422128" data-accessory-dye-id="4442" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/WarriorBC">WarriorBC</a></td>
                        <td>5005</td>
                        <td>9599504</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[691,204,79,45,55,40,34,47]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">4/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/802/0/4176/4363" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="25165824" data-dye2="27601450" data-accessory-dye-id="4363" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>5000</td>
                        <td>9589830</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,252,75,49,55,40,50,56]" data-bonuses="[0,0,0,24,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T08:46:28Z">2015-09-10 08:46:28</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/802/0/4225/4488" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="30585996" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4225" data-count="1"></a>
                        </td>
                        <td><a href="/player/NScorpionN">NScorpionN</a></td>
                        <td>5000</td>
                        <td>9589605</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T14:29:58Z">2015-09-12 14:29:58</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/802/0/4624/4393" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772170" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4624" data-count="1"></a>
                        </td>
                        <td><a href="/player/Oztraya">Oztraya</a></td>
                        <td>5000</td>
                        <td>9588815</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,52,40,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/802/8977/4645/0" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="67108870" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4645" data-count="2"></a>
                        </td>
                        <td><a href="/player/Bboypwns">Bboypwns</a></td>
                        <td>4956</td>
                        <td>9502741</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,183,75,41,53,40,50,54]" data-bonuses="[180,0,0,16,3,0,0,4]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T05:57:25Z">2015-09-14 05:57:25</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/802/900/4671/4911" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="167772200" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4671" data-count="1"></a>
                        </td>
                        <td><a href="/player/Flyhippo">Flyhippo</a></td>
                        <td>4917</td>
                        <td>9424448</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3117"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,272,76,42,56,41,51,57]" data-bonuses="[20,20,1,17,6,1,1,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/802/843/4684/4871" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="167772207" data-dye2="167772161" data-accessory-dye-id="4871" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cookeyz">Cookeyz</a></td>
                        <td>4848</td>
                        <td>9285450</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T08:52:59Z">2015-09-12 08:52:59</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/802/29801/4645/4954" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="67108870" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/DameSexo">DameSexo</a></td>
                        <td>4814</td>
                        <td>9218267</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/802/29789/4639/4399" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="83886082" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/CashMoneyy">CashMoneyy</a></td>
                        <td>4783</td>
                        <td>9155255</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/802/29789/0/0" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="172"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>4715</td>
                        <td>9020641</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[716,185,79,45,53,40,50,54]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T15:03:11Z">2015-09-22 15:03:11</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/802/901/4103/4890" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>4626</td>
                        <td>8841371</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,352,75,41,55,40,54,60]" data-bonuses="[0,100,0,16,5,0,4,10]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:00:13Z">2015-09-16 23:00:13</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td><span class="private-character" style="background-position: -250px -4650px"></span></td>
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
                        <td>58.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/802/843/4622/4421" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="167772168" data-dye2="33535681" data-accessory-dye-id="4421" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Coolaapan">Coolaapan</a></td>
                        <td>4555</td>
                        <td>8700453</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T14:15:13Z">2015-09-21 14:15:13</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/802/0/4193/0" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="25198592" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4193" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tress">Tress</a></td>
                        <td>4546</td>
                        <td>8682556</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="2737"></span><span class="item" data-item="3096"></span><span class="item" data-item="3167"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,152,75,41,63,50,40,54]" data-bonuses="[0,-100,0,16,13,10,-10,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T00:25:18Z">2015-09-21 00:25:18</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/802/8977/4657/4892" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772187" data-dye2="150994951" data-accessory-dye-id="4892" data-clothing-dye-id="4657" data-count="1"></a>
                        </td>
                        <td><a href="/player/Discern">Discern</a></td>
                        <td>4446</td>
                        <td>8481255</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3091"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,327,75,41,60,40,55,56]" data-bonuses="[0,75,0,16,10,0,5,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/802/29789/4661/4488" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="167772190" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4661" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ryan">Ryan</a></td>
                        <td>4444</td>
                        <td>8477745</td>
                        <td>
                            <span class="item" data-item="2586"></span><span class="item" data-item="2737"></span><span class="item" data-item="2680"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,36,50,40,50,50]" data-bonuses="[60,60,6,11,0,0,0,0]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/802/901/4609/4866" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>4400</td>
                        <td>8389227</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/802/8977/4690/4949" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="167772213" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4690" data-count="1"></a>
                        </td>
                        <td><a href="/player/KotKas">KotKas</a></td>
                        <td>4215</td>
                        <td>8020631</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,45,55,44,50,56]" data-bonuses="[60,60,0,20,5,4,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/802/901/4165/4482" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="33535681" data-dye2="16810112" data-accessory-dye-id="4482" data-clothing-dye-id="4165" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vesson">Vesson</a></td>
                        <td>4160</td>
                        <td>7909657</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="2860"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,53,42,52,54]" data-bonuses="[100,0,4,20,3,2,2,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/802/901/0/0" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="244"></a>
                        </td>
                        <td><a href="/player/Rahnamatta">Rahnamatta</a></td>
                        <td>4098</td>
                        <td>7784936</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[794,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/802/29789/4644/4955" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="67108869" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4644" data-count="1"></a>
                        </td>
                        <td><a href="/player/Carhoes">Carhoes</a></td>
                        <td>4015</td>
                        <td>7620569</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[761,206,75,41,53,40,37,54]" data-bonuses="[180,0,0,16,3,0,0,4]" data-class="802" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T07:06:06Z">2015-09-17 07:06:06</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/802/29789/4117/4399" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="16777355" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4117" data-count="1"></a>
                        </td>
                        <td><a href="/player/Beastsword">Beastsword</a></td>
                        <td>4011</td>
                        <td>7610951</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,332,79,43,55,40,55,52]" data-bonuses="[100,80,4,18,5,0,5,2]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/802/0/4232/4488" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="6"></a>
                        </td>
                        <td><a href="/player/AssassinHe">AssassinHe</a></td>
                        <td>4000</td>
                        <td>7590250</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,41,59,40,50,60]" data-bonuses="[60,60,0,16,9,0,0,10]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:43:57Z">2015-09-23 02:43:57</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/802/29789/4168/4488" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="25677562" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4168" data-count="1"></a>
                        </td>
                        <td><a href="/player/ShadyBrady">ShadyBrady</a></td>
                        <td>3979</td>
                        <td>7547195</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td><span class="private-character" style="background-position: -250px -4650px"></span></td>
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
                            <a id="aq" class="character" href="/top-characters-with-outfit/802/8977/4695/4953" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="83886089" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Onydevils">Onydevils</a></td>
                        <td>3861</td>
                        <td>7310858</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[700,252,75,49,55,40,50,56]" data-bonuses="[0,0,0,24,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/802/900/4110/0" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="25165568" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4110" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>3824</td>
                        <td>7238182</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,52,40,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T22:57:35Z">2015-09-19 22:57:35</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/802/843/4631/4887" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="150994946" data-dye2="150994946" data-accessory-dye-id="4887" data-clothing-dye-id="4631" data-count="1"></a>
                        </td>
                        <td><a href="/player/DanylMc">DanylMc</a></td>
                        <td>3779</td>
                        <td>7148734</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,47,55,40,50,56]" data-bonuses="[60,60,6,22,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/802/0/4621/4894" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772167" data-dye2="150994952" data-accessory-dye-id="4894" data-clothing-dye-id="4621" data-count="1"></a>
                        </td>
                        <td><a href="/player/Killerboii">Killerboii</a></td>
                        <td>3728</td>
                        <td>7046592</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,199,75,41,55,40,50,56]" data-bonuses="[180,0,0,16,5,0,0,6]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/802/29789/4152/4408" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="21692546" data-dye2="21692546" data-accessory-dye-id="4408" data-clothing-dye-id="4152" data-count="1"></a>
                        </td>
                        <td><a href="/player/XProgity">XProgity</a></td>
                        <td>3712</td>
                        <td>7014250</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[637,207,78,41,53,36,50,57]" data-bonuses="[40,0,3,16,3,0,0,7]" data-class="802" data-level="20">5/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/802/0/4144/4400" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>3643</td>
                        <td>6876214</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:08:51Z">2015-09-22 03:08:51</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/802/843/4115/4399" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="31200316" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cometeer">Cometeer</a></td>
                        <td>3500</td>
                        <td>6590302</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,47,55,40,50,56]" data-bonuses="[60,60,6,22,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/802/8977/4208/4933" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="25165952" data-dye2="83886085" data-accessory-dye-id="4933" data-clothing-dye-id="4208" data-count="1"></a>
                        </td>
                        <td><a href="/player/AKnome">AKnome</a></td>
                        <td>3500</td>
                        <td>6589252</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="30050"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,252,79,38,52,40,50,52]" data-bonuses="[150,0,4,13,2,0,0,2]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T23:36:40Z">2015-09-09 23:36:40</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/802/29801/4115/4918" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="31200316" data-dye2="167772191" data-accessory-dye-id="4918" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/NatFigga">NatFigga</a></td>
                        <td>3452</td>
                        <td>6494543</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,47,55,40,50,56]" data-bonuses="[60,60,6,22,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/802/900/4150/0" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="33515956" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4150" data-count="1"></a>
                        </td>
                        <td><a href="/player/NagatoB">NagatoB</a></td>
                        <td>3421</td>
                        <td>6430763</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,45,55,44,50,56]" data-bonuses="[60,60,0,20,5,4,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:33:59Z">2015-09-23 02:33:59</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/802/8977/4694/4953" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="83886088" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/NikuCute">NikuCute</a></td>
                        <td>3409</td>
                        <td>6408240</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T19:27:10Z">2015-09-22 19:27:10</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/802/0/4663/4906" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772192" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/LTUeE">LTUeE</a></td>
                        <td>3400</td>
                        <td>6389561</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[661,256,75,41,57,40,50,58]" data-bonuses="[60,60,0,16,7,0,0,8]" data-class="802" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td><span class="private-character" style="background-position: -250px -4100px"></span></td>
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
                            <a id="aC" class="character" href="/top-characters-with-outfit/802/8977/4150/0" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="33515956" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4150" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zurit">Zurit</a></td>
                        <td>3356</td>
                        <td>6301213</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,81,48,52,40,50,57]" data-bonuses="[60,60,6,23,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/802/8977/4137/4479" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="18780415" data-dye2="16842623" data-accessory-dye-id="4479" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/DaddyH">DaddyH</a></td>
                        <td>3333</td>
                        <td>6255075</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,50,40,50,55]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/802/29801/4103/4359" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Beeperss">Beeperss</a></td>
                        <td>3311</td>
                        <td>6212091</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:32:46Z">2015-09-23 02:32:46</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/802/901/4686/4942" style="background-position: -250px -3350px" data-class="802" data-skin="901" data-dye1="167772209" data-dye2="167772209" data-accessory-dye-id="4942" data-clothing-dye-id="4686" data-count="1"></a>
                        </td>
                        <td><a href="/player/Teddus">Teddus</a></td>
                        <td>3255</td>
                        <td>6099703</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T15:58:49Z">2015-09-14 15:58:49</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td><span class="private-character" style="background-position: -250px -4100px"></span></td>
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
                        <td>89.</td>
                        <td><span class="private-character" style="background-position: -250px -3350px"></span></td>
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
                            <a id="aG" class="character" href="/top-characters-with-outfit/802/29801/4232/4917" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>3181</td>
                        <td>5952008</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="2737"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,78,39,53,40,50,53]" data-bonuses="[180,0,3,14,3,0,0,3]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/802/29801/4668/4931" style="background-position: -250px -4650px" data-class="802" data-skin="29801" data-dye1="167772197" data-dye2="150994955" data-accessory-dye-id="4931" data-clothing-dye-id="4668" data-count="1"></a>
                        </td>
                        <td><a href="/player/DaBiebs">DaBiebs</a></td>
                        <td>3161</td>
                        <td>5910989</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,45,55,40,50,56]" data-bonuses="[100,0,4,20,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T22:20:12Z">2015-09-20 22:20:12</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/802/0/4639/4391" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="83886082" data-dye2="16826367" data-accessory-dye-id="4391" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Simfex">Simfex</a></td>
                        <td>3137</td>
                        <td>5864378</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,82,43,55,40,50,55]" data-bonuses="[100,0,7,18,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/802/900/0/0" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="117"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>3135</td>
                        <td>5859482</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,75,41,55,40,50,56]" data-bonuses="[180,0,0,16,5,0,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/802/900/4697/4385" style="background-position: -250px -3100px" data-class="802" data-skin="900" data-dye1="83886091" data-dye2="26197135" data-accessory-dye-id="4385" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/SexyRydo">SexyRydo</a></td>
                        <td>3110</td>
                        <td>5809179</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[880,252,78,39,55,40,50,55]" data-bonuses="[180,0,3,14,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/802/843/4232/4370" style="background-position: -250px -1150px" data-class="802" data-skin="843" data-dye1="33554431" data-dye2="33552604" data-accessory-dye-id="4370" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mag">Mag</a></td>
                        <td>3103</td>
                        <td>5796009</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,41,57,40,50,58]" data-bonuses="[60,60,0,16,7,0,0,8]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T03:36:47Z">2015-09-18 03:36:47</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/802/8977/4115/0" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="31200316" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>3068</td>
                        <td>5726387</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="2737"></span><span class="item" data-item="30050"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[750,352,75,34,50,40,54,54]" data-bonuses="[50,100,0,9,0,0,4,4]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/802/8977/4693/4949" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="83886087" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/XNilamX">XNilamX</a></td>
                        <td>3039</td>
                        <td>5668594</td>
                        <td>
                            <span class="item" data-item="8961"></span><span class="item" data-item="3100"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,84,45,55,40,50,55]" data-bonuses="[60,60,9,20,5,0,0,5]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/802/29789/4696/0" style="background-position: -250px -4450px" data-class="802" data-skin="29789" data-dye1="83886090" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4696" data-count="2"></a>
                        </td>
                        <td><a href="/player/Wojeldort">Wojeldort</a></td>
                        <td>3026</td>
                        <td>5641406</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,312,75,45,55,44,50,56]" data-bonuses="[60,60,0,20,5,4,0,6]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T14:16:03Z">2015-09-22 14:16:03</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aP" class="character" href="/top-characters-with-outfit/802/0/4692/4359" style="background-position: -250px -450px" data-class="802" data-skin="0" data-dye1="167772215" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4692" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>3010</td>
                        <td>5610663</td>
                        <td>
                            <span class="item" data-item="3074"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,79,46,52,40,50,57]" data-bonuses="[100,0,4,21,2,0,0,7]" data-class="802" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aQ" class="character" href="/top-characters-with-outfit/802/8977/4146/4484" style="background-position: -250px -4100px" data-class="802" data-skin="8977" data-dye1="25198720" data-dye2="33514311" data-accessory-dye-id="4484" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Killblown">Killblown</a></td>
                        <td>3008</td>
                        <td>5605908</td>
                        <td>
                            <span class="item" data-item="3088"></span><span class="item" data-item="3100"></span><span class="item" data-item="2809"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[704,312,75,42,56,40,50,61]" data-bonuses="[60,60,0,17,6,0,0,11]" data-class="802" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T02:27:21Z">2015-09-10 02:27:21</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-huntresses">1 - 100</a></li>
                    <li><a href="/top-huntresses/101">101 - 200</a></li>
                    <li><a href="/top-huntresses/201">201 - 300</a></li>
                    <li><a href="/top-huntresses/301">301 - 400</a></li>
                    <li><a href="/top-huntresses/401">401 - 500</a></li>
                    <li><a href="/top-huntresses/501">501 - 600</a></li>
                    <li><a href="/top-huntresses/601">601 - 700</a></li>
                    <li><a href="/top-huntresses/701">701 - 800</a></li>
                    <li><a href="/top-huntresses/801">801 - 900</a></li>
                    <li><a href="/top-huntresses/901">901 - 1000</a></li>
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