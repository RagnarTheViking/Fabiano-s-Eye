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
    <title>Top Tricksters 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Tricksters">
    <meta name="description" content="Top Tricksters 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Tricksters</h1><p>This is a list of the top 1000 tricksters by Exp seen in the
                past two weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Tricksters" href="/top-tricksters"><span class="private-character" style="background-position: 0px -558px"></span>
                        <div class="list-selector-item-label">Tricksters</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Warriors" href="/top-warriors"><span class="private-character" style="background-position: 0px -208px"></span>
                        <div class="list-selector-item-label">Warriors</div>
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-tricksters">1 - 100</a></li>
                    <li><a href="/top-tricksters/101">101 - 200</a></li>
                    <li><a href="/top-tricksters/201">201 - 300</a></li>
                    <li><a href="/top-tricksters/301">301 - 400</a></li>
                    <li><a href="/top-tricksters/401">401 - 500</a></li>
                    <li><a href="/top-tricksters/501">501 - 600</a></li>
                    <li><a href="/top-tricksters/601">601 - 700</a></li>
                    <li><a href="/top-tricksters/701">701 - 800</a></li>
                    <li><a href="/top-tricksters/801">801 - 900</a></li>
                    <li><a href="/top-tricksters/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/804/8969/4663/4359" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="167772192" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>23456</td>
                        <td>46501405</td>
                        <td>
                            <span class="item" data-item="2697"></span><span class="item" data-item="2322"></span><span class="item" data-item="30050"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,287,68,33,79,39,63,78]" data-bonuses="[90,100,4,9,4,0,4,4]" data-class="804" data-level="20">1/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/804/29771/4616/4911" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772162" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shu">Shu</a></td>
                        <td>21500</td>
                        <td>42589834</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,312,78,45,82,40,60,78]" data-bonuses="[100,60,13,20,7,0,0,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T15:40:02Z">2015-09-21 15:40:02</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td><span class="private-character" style="background-position: -250px -4350px"></span></td>
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
                            <a id="f" class="character" href="/top-characters-with-outfit/804/29771/4650/4393" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772180" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/FrikenGods">FrikenGods</a></td>
                        <td>11111</td>
                        <td>21810887</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,312,75,48,79,44,64,80]" data-bonuses="[100,60,10,23,4,4,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T02:24:23Z">2015-09-16 02:24:23</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/804/8969/4126/4359" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="26817228" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4126" data-count="1"></a>
                        </td>
                        <td><a href="/player/Devilnev">Devilnev</a></td>
                        <td>10250</td>
                        <td>20089567</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,312,69,42,83,40,60,84]" data-bonuses="[100,60,4,17,8,0,0,9]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T18:33:28Z">2015-09-16 18:33:28</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/804/917/4658/4874" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>10000</td>
                        <td>19589802</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2787"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,64,80]" data-bonuses="[100,0,4,21,0,0,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/804/917/4137/4904" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="18780415" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/SaltyOcean">SaltyOcean</a></td>
                        <td>8360</td>
                        <td>16308789</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="-1"></span><span class="item" data-item="3202"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[595,253,45,30,41,24,29,42]" data-bonuses="[-40,60,6,6,0,0,0,0]" data-class="804" data-level="20">0/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/804/29771/4635/4886" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="150994950" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143468</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,41,82,40,64,79]" data-bonuses="[220,0,4,16,7,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:42:29Z">2015-09-16 10:42:29</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/804/29771/4700/4956" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="150994958" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4700" data-count="2"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>7400</td>
                        <td>14390459</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,198,69,46,75,40,60,80]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/804/29817/4678/4955" style="background-position: -250px -4750px" data-class="804" data-skin="29817" data-dye1="83886086" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4678" data-count="1"></a>
                        </td>
                        <td><a href="/player/Meritt">Meritt</a></td>
                        <td>6175</td>
                        <td>11939581</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2322"></span><span class="item" data-item="30050"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[990,191,69,34,79,40,60,75]" data-bonuses="[270,0,4,9,4,0,0,0]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/804/29771/4639/4359" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="83886082" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>4008</td>
                        <td>7606442</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,72,43,78,44,64,78]" data-bonuses="[100,0,7,18,3,4,4,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/804/917/4103/4464" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/LabdaABeta">LabdaABeta</a></td>
                        <td>3771</td>
                        <td>7131791</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,60,80]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T04:00:11Z">2015-09-22 04:00:11</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/804/29771/4638/4393" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="150994952" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hellas">Hellas</a></td>
                        <td>3405</td>
                        <td>6399015</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2787"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,44,64,80]" data-bonuses="[100,0,4,21,0,4,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T20:58:28Z">2015-09-15 20:58:28</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/804/917/4630/4359" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255485</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,40,64,79]" data-bonuses="[100,0,4,20,3,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/804/29771/4650/0" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772180" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>3231</td>
                        <td>6051357</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,46,79,40,60,80]" data-bonuses="[140,0,8,21,4,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T15:02:58Z">2015-09-22 15:02:58</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/804/8969/0/0" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="212"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>3200</td>
                        <td>5989071</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[800,252,75,39,82,40,64,81]" data-bonuses="[80,0,10,14,7,0,4,6]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/804/8969/4685/4914" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="167772208" data-dye2="167772188" data-accessory-dye-id="4914" data-clothing-dye-id="4685" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ukunavi">Ukunavi</a></td>
                        <td>3100</td>
                        <td>5789349</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,41,78,40,64,79]" data-bonuses="[180,0,0,16,3,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/804/8969/0/4875" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="0" data-dye2="167772165" data-accessory-dye-id="4875" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>3013</td>
                        <td>5616381</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,64,80]" data-bonuses="[100,0,4,21,0,0,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:52:03Z">2015-09-21 22:52:03</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/804/8969/0/0" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="212"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>3011</td>
                        <td>5611922</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T22:59:12Z">2015-09-16 22:59:12</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/804/8969/4105/4361" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5589965</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,42,75,42,62,80]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:44:45Z">2015-09-12 12:44:45</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/804/917/4622/4878" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="167772168" data-dye2="167772168" data-accessory-dye-id="4878" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>2887</td>
                        <td>5363126</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2787"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,60,80]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T23:02:37Z">2015-09-19 23:02:37</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/804/0/4666/4359" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>2870</td>
                        <td>5328970</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2787"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,40,60,79]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/804/29771/4127/4927" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="25886720" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4127" data-count="1"></a>
                        </td>
                        <td><a href="/player/ThaOmantek">ThaOmantek</a></td>
                        <td>2821</td>
                        <td>5231888</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,45,82,40,60,79]" data-bonuses="[140,0,8,20,7,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T16:04:41Z">2015-09-21 16:04:41</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/804/29771/4622/4478" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772168" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mest">Mest</a></td>
                        <td>2684</td>
                        <td>4957692</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,76,43,82,40,64,78]" data-bonuses="[140,0,11,18,7,0,4,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/804/0/4688/4945" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="167772211" data-dye2="167772212" data-accessory-dye-id="4945" data-clothing-dye-id="4688" data-count="1"></a>
                        </td>
                        <td><a href="/player/Yurpdadurp">Yurpdadurp</a></td>
                        <td>2604</td>
                        <td>4797846</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="2851"></span><span class="item" data-item="30050"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[774,191,69,38,52,42,58,75]" data-bonuses="[150,0,4,13,0,2,2,0]" data-class="804" data-level="20">4/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:30:03Z">2015-09-16 23:30:03</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/804/0/4653/0" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="167772183" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4653" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>2600</td>
                        <td>4789268</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,65,48,81,40,60,80]" data-bonuses="[0,110,0,23,6,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:18:12Z">2015-09-11 04:18:12</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/804/29817/4232/4917" style="background-position: -250px -4750px" data-class="804" data-skin="29817" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>2598</td>
                        <td>4785465</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,72,43,78,42,66,78]" data-bonuses="[100,0,7,18,3,2,6,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/804/8969/4698/4954" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="4"></a>
                        </td>
                        <td><a href="/player/CashMoneyy">CashMoneyy</a></td>
                        <td>2590</td>
                        <td>4769753</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="30050"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,69,38,75,40,60,75]" data-bonuses="[150,0,4,13,0,0,0,0]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/804/8969/4696/0" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="83886090" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Treffer">Treffer</a></td>
                        <td>2546</td>
                        <td>4682423</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[854,252,69,41,82,44,64,79]" data-bonuses="[220,0,4,16,7,4,4,4]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td><span class="private-character" style="background-position: -250px -550px"></span></td>
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
                            <a id="F" class="character" href="/top-characters-with-outfit/804/29771/4698/4953" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772216" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>2509</td>
                        <td>4606951</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,46,79,40,60,80]" data-bonuses="[140,0,8,21,4,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:56:16Z">2015-09-19 20:56:16</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/804/29771/4206/4457" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="31301853" data-dye2="30961811" data-accessory-dye-id="4457" data-clothing-dye-id="4206" data-count="1"></a>
                        </td>
                        <td><a href="/player/Skylinear">Skylinear</a></td>
                        <td>2501</td>
                        <td>4592563</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,45,82,44,64,79]" data-bonuses="[140,0,8,20,7,4,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/804/0/4611/4363" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="83886081" data-dye2="27601450" data-accessory-dye-id="4363" data-clothing-dye-id="4611" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2500</td>
                        <td>4589124</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,42,66,79]" data-bonuses="[100,0,4,20,3,2,6,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:05:56Z">2015-09-20 04:05:56</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/804/917/4635/4488" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="150994950" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409088</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[638,315,65,48,81,42,62,80]" data-bonuses="[0,110,0,23,6,2,2,5]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/804/917/4153/4929" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="33554416" data-dye2="167772202" data-accessory-dye-id="4929" data-clothing-dye-id="4153" data-count="1"></a>
                        </td>
                        <td><a href="/player/JimmyB">JimmyB</a></td>
                        <td>2399</td>
                        <td>4388602</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,42,79,44,64,80]" data-bonuses="[220,0,4,17,4,4,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T17:14:55Z">2015-09-15 17:14:55</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/804/917/0/4359" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="0" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jstan">Jstan</a></td>
                        <td>2394</td>
                        <td>4378086</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,252,71,39,78,40,60,81]" data-bonuses="[40,0,6,14,3,0,0,6]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T04:28:21Z">2015-09-23 04:28:21</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/804/8979/4641/4897" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="83886084" data-dye2="83886084" data-accessory-dye-id="4897" data-clothing-dye-id="4641" data-count="1"></a>
                        </td>
                        <td><a href="/player/Extremist">Extremist</a></td>
                        <td>2391</td>
                        <td>4372420</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2787"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,40,64,79]" data-bonuses="[100,0,4,20,3,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td><span class="private-character" style="background-position: -250px -1250px"></span></td>
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
                            <a id="M" class="character" href="/top-characters-with-outfit/804/917/4697/4953" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="83886091" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>2345</td>
                        <td>4279825</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2787"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,41,78,40,60,79]" data-bonuses="[180,0,0,16,3,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:30:30Z">2015-09-21 12:30:30</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/804/8969/4103/4390" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4278924</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="30050"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[910,252,73,38,79,44,64,75]" data-bonuses="[190,0,8,13,4,4,4,0]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/804/8979/4609/4866" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188943</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,40,64,79]" data-bonuses="[100,0,4,20,3,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/804/0/4131/4471" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="19877711" data-dye2="19827543" data-accessory-dye-id="4471" data-clothing-dye-id="4131" data-count="1"></a>
                        </td>
                        <td><a href="/player/Videohead">Videohead</a></td>
                        <td>2292</td>
                        <td>4173804</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2787"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,60,80]" data-bonuses="[100,0,4,21,0,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/804/29771/4621/4954" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772167" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4621" data-count="1"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2280</td>
                        <td>4150735</td>
                        <td>
                            <span class="item" data-item="9000"></span><span class="item" data-item="2322"></span><span class="item" data-item="29768"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,392,69,39,86,40,65,79]" data-bonuses="[100,140,4,14,11,0,5,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/804/8969/4637/4359" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2270</td>
                        <td>4129345</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2322"></span><span class="item" data-item="8609"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[845,322,69,37,83,40,60,79]" data-bonuses="[125,70,4,12,8,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/804/8969/4232/4390" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="33554431" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4232" data-count="2"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2253</td>
                        <td>4095816</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,42,66,80]" data-bonuses="[100,0,4,21,0,2,6,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/804/0/4103/4868" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>2250</td>
                        <td>4089296</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,42,66,79]" data-bonuses="[100,0,4,20,3,2,6,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/804/917/4183/4362" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="16841370" data-dye2="25832418" data-accessory-dye-id="4362" data-clothing-dye-id="4183" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ollyboy">Ollyboy</a></td>
                        <td>2233</td>
                        <td>4055061</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[742,256,69,41,86,40,64,83]" data-bonuses="[100,60,4,16,11,0,4,8]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/804/845/0/0" style="background-position: -250px -1250px" data-class="804" data-skin="845" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="3"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>2222</td>
                        <td>4033539</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[632,252,65,50,75,42,66,80]" data-bonuses="[0,0,0,25,0,2,6,5]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:20:25Z">2015-09-21 22:20:25</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/804/29771/4633/4934" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="150994948" data-dye2="83886086" data-accessory-dye-id="4934" data-clothing-dye-id="4633" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tealeaves">Tealeaves</a></td>
                        <td>2222</td>
                        <td>4033311</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[866,252,75,41,82,40,64,85]" data-bonuses="[150,0,10,16,7,0,4,10]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T04:53:08Z">2015-09-19 04:53:08</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/804/845/4229/4490" style="background-position: -250px -1250px" data-class="804" data-skin="845" data-dye1="21029072" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4229" data-count="1"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2209</td>
                        <td>4008274</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,72,43,78,40,60,78]" data-bonuses="[100,0,7,18,3,0,0,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:07:30Z">2015-09-10 15:07:30</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/804/29771/4645/4901" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="67108870" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shadow">Shadow</a></td>
                        <td>2200</td>
                        <td>3989032</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="8609"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[845,322,75,43,79,40,64,75]" data-bonuses="[125,70,10,18,4,0,4,0]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/804/29771/4672/4389" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772201" data-dye2="26476755" data-accessory-dye-id="4389" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/CptRom">CptRom</a></td>
                        <td>2180</td>
                        <td>3949160</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,312,78,45,82,40,64,78]" data-bonuses="[100,60,13,20,7,0,4,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td><span class="private-character" style="background-position: -250px -4750px"></span></td>
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
                            <a id="aa" class="character" href="/top-characters-with-outfit/804/29817/0/4951" style="background-position: -250px -4750px" data-class="804" data-skin="29817" data-dye1="0" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="0" data-count="2"></a>
                        </td>
                        <td><a href="/player/Aykut">Aykut</a></td>
                        <td>2159</td>
                        <td>3907598</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,45,82,40,64,79]" data-bonuses="[140,0,8,20,7,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/804/0/4146/4480" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>2129</td>
                        <td>3847772</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,78,39,82,40,64,84]" data-bonuses="[150,0,13,14,7,0,4,9]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:49:51Z">2015-09-16 23:49:51</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td><span class="private-character" style="background-position: -250px -3150px"></span></td>
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
                            <a id="ac" class="character" href="/top-characters-with-outfit/804/917/4233/4489" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="32896501" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bengtz">Bengtz</a></td>
                        <td>2121</td>
                        <td>3830781</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,64,80]" data-bonuses="[100,0,4,21,0,0,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/804/0/4232/4383" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="33554431" data-dye2="25886720" data-accessory-dye-id="4383" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fyhre">Fyhre</a></td>
                        <td>2100</td>
                        <td>3789238</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,42,75,46,66,80]" data-bonuses="[180,0,0,17,0,6,6,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T01:40:47Z">2015-09-22 01:40:47</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/804/8979/4181/4439" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="20755313" data-dye2="16841370" data-accessory-dye-id="4439" data-clothing-dye-id="4181" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hewburt">Hewburt</a></td>
                        <td>2081</td>
                        <td>3752630</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2787"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[748,194,72,43,78,40,60,78]" data-bonuses="[100,0,7,18,3,0,0,3]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/804/29771/4652/4909" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>2079</td>
                        <td>3747390</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,45,82,40,60,79]" data-bonuses="[140,0,8,20,7,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/804/29771/0/4952" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="0" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/KaBeCiriac">KaBeCiriac</a></td>
                        <td>2077</td>
                        <td>3743639</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,72,43,78,40,64,78]" data-bonuses="[100,0,7,18,3,0,4,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T00:06:50Z">2015-09-22 00:06:50</span></td>
                        <td><abbr title="USSouth2">USS2</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td><span class="private-character" style="background-position: -250px -3700px"></span></td>
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
                            <a id="ah" class="character" href="/top-characters-with-outfit/804/29771/4694/0" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="83886088" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/RaThoth">RaThoth</a></td>
                        <td>2074</td>
                        <td>3737184</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="2787"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[711,252,72,43,78,40,60,78]" data-bonuses="[100,0,7,18,3,0,0,3]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/804/8979/4232/4451" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="33554431" data-dye2="33531136" data-accessory-dye-id="4451" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/NITROAIDS">NITROAIDS</a></td>
                        <td>2061</td>
                        <td>3712493</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,40,64,79]" data-bonuses="[100,0,4,20,3,0,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T05:26:05Z">2015-09-22 05:26:05</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/804/8969/4222/4924" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="33553146" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4222" data-count="1"></a>
                        </td>
                        <td><a href="/player/PooplePie">PooplePie</a></td>
                        <td>2053</td>
                        <td>3695164</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[688,255,68,39,82,40,64,82]" data-bonuses="[60,60,3,14,7,0,4,7]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/804/0/4232/4911" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="33554431" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tisgeh">Tisgeh</a></td>
                        <td>2045</td>
                        <td>3680632</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2787"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,41,78,40,60,79]" data-bonuses="[180,0,0,16,3,0,0,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T12:33:46Z">2015-09-17 12:33:46</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td><span class="private-character" style="background-position: -250px -4200px"></span></td>
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
                            <a id="al" class="character" href="/top-characters-with-outfit/804/8979/4654/4910" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="167772184" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/DaBoMBzer">DaBoMBzer</a></td>
                        <td>2042</td>
                        <td>3674651</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,45,78,42,66,79]" data-bonuses="[100,0,4,20,3,2,6,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T12:37:03Z">2015-09-16 12:37:03</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/804/8969/0/0" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="212"></a>
                        </td>
                        <td><a href="/player/Bowmanian">Bowmanian</a></td>
                        <td>2035</td>
                        <td>3658938</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,42,79,40,60,80]" data-bonuses="[220,0,4,17,4,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T22:54:43Z">2015-09-15 22:54:43</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/804/8979/4633/4399" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="150994948" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4633" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kreg">Kreg</a></td>
                        <td>2033</td>
                        <td>3655679</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,42,79,40,60,80]" data-bonuses="[220,0,4,17,4,0,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T23:23:01Z">2015-09-18 23:23:01</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/804/917/4174/4389" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="33222886" data-dye2="26476755" data-accessory-dye-id="4389" data-clothing-dye-id="4174" data-count="1"></a>
                        </td>
                        <td><a href="/player/WRATHes">WRATHes</a></td>
                        <td>2031</td>
                        <td>3651690</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2787"></span><span class="item" data-item="3112"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,68,43,78,48,64,78]" data-bonuses="[60,60,3,18,3,8,4,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/804/8969/4143/4947" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="33093887" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4143" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tido">Tido</a></td>
                        <td>2028</td>
                        <td>3645662</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,41,78,46,66,79]" data-bonuses="[180,0,0,16,3,6,6,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/804/29817/4639/0" style="background-position: -250px -4750px" data-class="804" data-skin="29817" data-dye1="83886082" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuntdude">Stuntdude</a></td>
                        <td>2026</td>
                        <td>3642012</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[687,244,68,39,82,40,60,82]" data-bonuses="[60,60,3,14,7,0,0,7]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td><span class="private-character" style="background-position: -250px -3700px"></span></td>
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
                        <td>75.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/804/8969/4678/4885" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="83886086" data-dye2="167772175" data-accessory-dye-id="4885" data-clothing-dye-id="4678" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2020</td>
                        <td>3629842</td>
                        <td>
                            <span class="item" data-item="3309"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,65,42,79,42,62,84]" data-bonuses="[60,60,0,17,4,2,2,9]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T23:39:16Z">2015-09-12 23:39:16</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/804/8969/4696/4950" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="83886090" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Baack">Baack</a></td>
                        <td>2019</td>
                        <td>3628418</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="3112"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,68,47,78,42,62,78]" data-bonuses="[0,0,3,22,3,2,2,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T01:17:50Z">2015-09-16 01:17:50</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/804/917/4103/4880" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="16777216" data-dye2="167772170" data-accessory-dye-id="4880" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/BarbiQ">BarbiQ</a></td>
                        <td>2019</td>
                        <td>3628357</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,41,82,44,64,79]" data-bonuses="[220,0,4,16,7,4,4,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T00:49:23Z">2015-09-15 00:49:23</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/804/8969/4155/4930" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="31909626" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4155" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>2019</td>
                        <td>3627782</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,40,64,80]" data-bonuses="[100,0,4,21,0,0,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/804/0/4232/0" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="33554431" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4232" data-count="3"></a>
                        </td>
                        <td><a href="/player/DHeight">DHeight</a></td>
                        <td>2018</td>
                        <td>3624775</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T18:51:07Z">2015-09-22 18:51:07</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/804/29817/4664/4920" style="background-position: -250px -4750px" data-class="804" data-skin="29817" data-dye1="167772193" data-dye2="167772193" data-accessory-dye-id="4920" data-clothing-dye-id="4664" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lodis">Lodis</a></td>
                        <td>2015</td>
                        <td>3618934</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="29768"></span><span class="item" data-item="3134"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,332,65,39,81,43,69,78]" data-bonuses="[0,80,0,14,6,3,9,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T23:01:22Z">2015-09-09 23:01:22</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/804/8969/4103/4924" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="16777216" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jakisaurus">Jakisaurus</a></td>
                        <td>2012</td>
                        <td>3612880</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2322"></span><span class="item" data-item="29768"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,392,69,39,86,40,65,79]" data-bonuses="[100,140,4,14,11,0,5,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/804/917/4154/4395" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="32564876" data-dye2="33553136" data-accessory-dye-id="4395" data-clothing-dye-id="4154" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZinxHD">ZinxHD</a></td>
                        <td>2009</td>
                        <td>3607840</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2787"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,65,46,75,44,60,80]" data-bonuses="[60,60,0,21,0,4,0,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/804/0/4103/4359" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="4"></a>
                        </td>
                        <td><a href="/player/Souldealer">Souldealer</a></td>
                        <td>2008</td>
                        <td>3605062</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2848"></span><span class="item" data-item="3112"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,210,71,39,78,40,60,81]" data-bonuses="[40,0,6,14,3,0,0,6]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:34:37Z">2015-09-22 22:34:37</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/804/8969/4143/4359" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="33093887" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4143" data-count="1"></a>
                        </td>
                        <td><a href="/player/MustyThug">MustyThug</a></td>
                        <td>2007</td>
                        <td>3603586</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,65,41,78,42,62,79]" data-bonuses="[180,0,0,16,3,2,2,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/804/8969/4151/4407" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="30235740" data-dye2="30235740" data-accessory-dye-id="4407" data-clothing-dye-id="4151" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zurit">Zurit</a></td>
                        <td>2003</td>
                        <td>3594946</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3114"></span><span class="item" data-item="2809"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,252,71,42,75,40,64,86]" data-bonuses="[110,0,6,17,0,0,4,11]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/804/0/4671/4927" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="167772200" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4671" data-count="2"></a>
                        </td>
                        <td><a href="/player/Waaatch">Waaatch</a></td>
                        <td>2002</td>
                        <td>3592828</td>
                        <td>
                            <span class="item" data-item="2698"></span><span class="item" data-item="2848"></span><span class="item" data-item="3096"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[784,180,65,41,78,40,60,79]" data-bonuses="[140,0,0,16,3,0,0,4]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T05:19:11Z">2015-09-20 05:19:11</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/804/917/4128/4405" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="32085626" data-dye2="32571376" data-accessory-dye-id="4405" data-clothing-dye-id="4128" data-count="1"></a>
                        </td>
                        <td><a href="/player/GKYS">GKYS</a></td>
                        <td>2001</td>
                        <td>3591013</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,76,43,82,40,60,78]" data-bonuses="[140,0,11,18,7,0,0,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td><span class="private-character" style="background-position: -250px -550px"></span></td>
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
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/804/8969/4625/4953" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="167772171" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Becomeone">Becomeone</a></td>
                        <td>2001</td>
                        <td>3590932</td>
                        <td>
                            <span class="item" data-item="3309"></span><span class="item" data-item="2322"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[855,201,72,39,82,40,32,78]" data-bonuses="[220,0,7,14,7,0,0,3]" data-class="804" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T09:45:22Z">2015-09-17 09:45:22</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/804/917/4117/4434" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="16777355" data-dye2="16777421" data-accessory-dye-id="4434" data-clothing-dye-id="4117" data-count="1"></a>
                        </td>
                        <td><a href="/player/Polak">Polak</a></td>
                        <td>2000</td>
                        <td>3590247</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[861,230,65,42,75,42,62,80]" data-bonuses="[208,0,0,17,0,2,2,5]" data-class="804" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/804/29771/4695/4954" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="83886089" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Biteables">Biteables</a></td>
                        <td>2000</td>
                        <td>3590227</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="3111"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,252,71,39,78,40,60,81]" data-bonuses="[40,0,6,14,3,0,0,6]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T03:20:33Z">2015-09-11 03:20:33</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/804/8969/4137/4488" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="18780415" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/PaIRaS">PaIRaS</a></td>
                        <td>2000</td>
                        <td>3590170</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="3114"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,72,43,78,40,60,78]" data-bonuses="[100,0,7,18,3,0,0,3]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/804/917/4639/4910" style="background-position: -250px -3150px" data-class="804" data-skin="917" data-dye1="83886082" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Itwastobig">Itwastobig</a></td>
                        <td>2000</td>
                        <td>3590034</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2322"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[760,442,69,45,88,40,65,75]" data-bonuses="[40,190,4,20,13,0,5,0]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T00:58:17Z">2015-09-15 00:58:17</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/804/8979/4645/4441" style="background-position: -250px -4200px" data-class="804" data-skin="8979" data-dye1="67108870" data-dye2="29824389" data-accessory-dye-id="4441" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shatter">Shatter</a></td>
                        <td>2000</td>
                        <td>3590000</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[860,252,73,46,79,44,64,80]" data-bonuses="[140,0,8,21,4,4,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T23:53:29Z">2015-09-14 23:53:29</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/804/29771/4677/4362" style="background-position: -250px -4350px" data-class="804" data-skin="29771" data-dye1="83886085" data-dye2="25832418" data-accessory-dye-id="4362" data-clothing-dye-id="4677" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lucidly">Lucidly</a></td>
                        <td>2000</td>
                        <td>3590000</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2322"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[940,252,69,42,79,44,64,80]" data-bonuses="[220,0,4,17,4,4,4,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td><span class="private-character" style="background-position: -250px -550px"></span></td>
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
                        <td>97.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/804/9014/4192/0" style="background-position: -250px -1900px" data-class="804" data-skin="9014" data-dye1="33420774" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4192" data-count="1"></a>
                        </td>
                        <td><a href="/player/Oztraya">Oztraya</a></td>
                        <td>2000</td>
                        <td>3589191</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2851"></span><span class="item" data-item="3096"></span><span class="item" data-item="2981"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,65,41,87,42,66,79]" data-bonuses="[0,0,0,16,12,2,6,4]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/804/8969/4133/4901" style="background-position: -250px -3700px" data-class="804" data-skin="8969" data-dye1="26476755" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4133" data-count="1"></a>
                        </td>
                        <td><a href="/player/SIypop">SIypop</a></td>
                        <td>2000</td>
                        <td>3589178</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="-1"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[775,252,68,39,78,40,60,78]" data-bonuses="[180,0,3,14,3,0,0,3]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/804/845/4609/4900" style="background-position: -250px -1250px" data-class="804" data-skin="845" data-dye1="67108865" data-dye2="67108869" data-accessory-dye-id="4900" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/California">California</a></td>
                        <td>2000</td>
                        <td>3589010</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2851"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,69,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="804" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/804/0/4186/4408" style="background-position: -250px -550px" data-class="804" data-skin="0" data-dye1="18422128" data-dye2="21692546" data-accessory-dye-id="4408" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/Straasha">Straasha</a></td>
                        <td>2000</td>
                        <td>3588949</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2787"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[693,312,65,41,82,40,60,83]" data-bonuses="[60,60,0,16,7,0,0,8]" data-class="804" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T09:23:30Z">2015-09-20 09:23:30</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-tricksters">1 - 100</a></li>
                    <li><a href="/top-tricksters/101">101 - 200</a></li>
                    <li><a href="/top-tricksters/201">201 - 300</a></li>
                    <li><a href="/top-tricksters/301">301 - 400</a></li>
                    <li><a href="/top-tricksters/401">401 - 500</a></li>
                    <li><a href="/top-tricksters/501">501 - 600</a></li>
                    <li><a href="/top-tricksters/601">601 - 700</a></li>
                    <li><a href="/top-tricksters/701">701 - 800</a></li>
                    <li><a href="/top-tricksters/801">801 - 900</a></li>
                    <li><a href="/top-tricksters/901">901 - 1000</a></li>
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