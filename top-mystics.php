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
    <title>Top Mystics 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Mystics">
    <meta name="description" content="Top Mystics 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Mystics</h1><p>This is a list of the top 1000 mystics by Exp seen in the past two
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Mystics" href="/top-mystics"><span class="private-character" style="background-position: 0px -508px"></span>
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
                    <li class="active"><a href="/top-mystics">1 - 100</a></li>
                    <li><a href="/top-mystics/101">101 - 200</a></li>
                    <li><a href="/top-mystics/201">201 - 300</a></li>
                    <li><a href="/top-mystics/301">301 - 400</a></li>
                    <li><a href="/top-mystics/401">401 - 500</a></li>
                    <li><a href="/top-mystics/501">501 - 600</a></li>
                    <li><a href="/top-mystics/601">601 - 700</a></li>
                    <li><a href="/top-mystics/701">701 - 800</a></li>
                    <li><a href="/top-mystics/801">801 - 900</a></li>
                    <li><a href="/top-mystics/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/803/29815/4700/4409" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="150994958" data-dye2="33554416" data-accessory-dye-id="4409" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/CptRom">CptRom</a></td>
                        <td>36555</td>
                        <td>72698811</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2629"></span><span class="item" data-item="8863"></span><span class="item" data-item="3134"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,38,63,43,81,58]" data-bonuses="[0,55,4,13,3,3,6,3]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/803/0/4096/4931" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="32569599" data-dye2="150994955" data-accessory-dye-id="4931" data-clothing-dye-id="4096" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hellas">Hellas</a></td>
                        <td>33433</td>
                        <td>66456303</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2861"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T18:55:23Z">2015-09-14 18:55:23</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/803/29815/4635/4886" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="150994950" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143403</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="3083"></span><span class="item" data-item="8863"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,66,38,60,40,81,57]" data-bonuses="[180,55,6,13,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:32:50Z">2015-09-16 10:32:50</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/803/0/4103/4363" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="16777216" data-dye2="27601450" data-accessory-dye-id="4363" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>7300</td>
                        <td>14189732</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,60,44,60,51,82,55]" data-bonuses="[85,85,0,19,0,11,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td><span class="private-character" style="background-position: -250px -500px"></span></td>
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
                            <a id="h" class="character" href="/top-characters-with-outfit/803/0/4659/4490" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772189" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>6508</td>
                        <td>12605661</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,46,60,40,81,55]" data-bonuses="[0,55,4,21,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T12:58:08Z">2015-09-13 12:58:08</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/803/29815/4658/4874" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5000</td>
                        <td>9588760</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="2982"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,66,38,60,49,81,57]" data-bonuses="[0,55,6,13,0,9,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/803/0/4666/4359" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>4585</td>
                        <td>8760180</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,66,38,60,42,80,57]" data-bonuses="[180,55,6,13,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/803/29815/4639/4488" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="83886082" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Algazairy">Algazairy</a></td>
                        <td>4359</td>
                        <td>8308342</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,66,46,60,47,82,55]" data-bonuses="[85,85,6,21,0,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/803/8968/4220/4438" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="23747277" data-dye2="24865006" data-accessory-dye-id="4438" data-clothing-dye-id="4220" data-count="1"></a>
                        </td>
                        <td><a href="/player/HappyKarma">HappyKarma</a></td>
                        <td>4214</td>
                        <td>8017744</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="3167"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,340,66,38,70,52,70,57]" data-bonuses="[0,-45,6,13,10,12,-5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:53:46Z">2015-09-20 20:53:46</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/803/0/4613/4488" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="150994945" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/Time">Time</a></td>
                        <td>4100</td>
                        <td>7788994</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T03:51:30Z">2015-09-20 03:51:30</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/803/29815/4196/4388" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="33506560" data-dye2="16830161" data-accessory-dye-id="4388" data-clothing-dye-id="4196" data-count="1"></a>
                        </td>
                        <td><a href="/player/GatorTail">GatorTail</a></td>
                        <td>4015</td>
                        <td>7620738</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,71,44,63,42,80,55]" data-bonuses="[60,115,11,19,3,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T01:06:42Z">2015-09-17 01:06:42</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/803/8968/0/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="317"></a>
                        </td>
                        <td><a href="/player/NikuCute">NikuCute</a></td>
                        <td>4008</td>
                        <td>7605444</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,431,64,38,60,40,81,55]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="803" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T08:33:46Z">2015-09-21 08:33:46</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/803/0/4654/4924" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772184" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>4006</td>
                        <td>7602610</td>
                        <td>
                            <span class="item" data-item="3306"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,60,47,82,55]" data-bonuses="[125,25,4,19,0,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/803/29815/0/4954" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="0" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="0" data-count="2"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>3903</td>
                        <td>7395268</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="3083"></span><span class="item" data-item="8863"></span><span class="item" data-item="8960"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,66,46,60,40,81,57]" data-bonuses="[0,55,6,21,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:57:53Z">2015-09-21 22:57:53</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/803/844/4630/4359" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255515</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="3083"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,66,44,60,47,82,57]" data-bonuses="[125,25,6,19,0,7,7,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/803/8968/0/4460" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="0" data-dye2="30246207" data-accessory-dye-id="4460" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>3329</td>
                        <td>6247065</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T22:59:46Z">2015-09-16 22:59:46</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/803/8968/4143/4372" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="33093887" data-dye2="16842751" data-accessory-dye-id="4372" data-clothing-dye-id="4143" data-count="2"></a>
                        </td>
                        <td><a href="/player/McFuji">McFuji</a></td>
                        <td>3243</td>
                        <td>6076576</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/803/0/4653/4464" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772183" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4653" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>3200</td>
                        <td>5989372</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,42,80,57]" data-bonuses="[60,115,12,19,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:18:21Z">2015-09-11 04:18:21</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                        <td>21.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/803/0/4613/4869" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="150994945" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/OrangeBang">OrangeBang</a></td>
                        <td>3119</td>
                        <td>5827442</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[718,326,64,38,60,40,81,55]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:39:27Z">2015-09-20 17:39:27</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/803/8968/4652/4909" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>3086</td>
                        <td>5762448</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,53]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/803/0/4695/4950" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="83886089" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Badra">Badra</a></td>
                        <td>3059</td>
                        <td>5707680</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:44:52Z">2015-09-20 20:44:52</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/803/8968/4164/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="26275472" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4164" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dipser">Dipser</a></td>
                        <td>3005</td>
                        <td>5599197</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:20:26Z">2015-09-22 23:20:26</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/803/8968/4693/4951" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="83886087" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/XXYAMYAMXx">XXYAMYAMXx</a></td>
                        <td>3000</td>
                        <td>5590588</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/803/8968/4105/4361" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5588800</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,40,81,55]" data-bonuses="[180,55,4,13,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:53:53Z">2015-09-12 12:53:53</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/803/8968/4232/4393" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="33554431" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zedl">Zedl</a></td>
                        <td>3000</td>
                        <td>5588760</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T20:07:33Z">2015-09-22 20:07:33</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td><span class="private-character" style="background-position: -250px -500px"></span></td>
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
                            <a id="C" class="character" href="/top-characters-with-outfit/803/0/4103/4465" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>2700</td>
                        <td>4989724</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2626"></span><span class="item" data-item="30051"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,347,64,35,72,40,75,59]" data-bonuses="[60,60,4,10,12,0,0,4]" data-class="803" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/803/0/4697/4949" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="83886091" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/LaDArbok">LaDArbok</a></td>
                        <td>2665</td>
                        <td>4920077</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T03:15:29Z">2015-09-11 03:15:29</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/803/0/4133/4389" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="26476755" data-dye2="26476755" data-accessory-dye-id="4389" data-clothing-dye-id="4133" data-count="3"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>2598</td>
                        <td>4785138</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="3083"></span><span class="item" data-item="30051"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,445,72,41,68,40,75,57]" data-bonuses="[60,60,12,16,8,0,0,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/803/29815/4199/4365" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="26803096" data-dye2="23043744" data-accessory-dye-id="4365" data-clothing-dye-id="4199" data-count="1"></a>
                        </td>
                        <td><a href="/player/Remorain">Remorain</a></td>
                        <td>2572</td>
                        <td>4734339</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,60,47,82,55]" data-bonuses="[125,25,4,19,0,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T06:34:47Z">2015-09-14 06:34:47</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td><span class="private-character" style="background-position: -250px -1200px"></span></td>
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
                            <a id="G" class="character" href="/top-characters-with-outfit/803/29815/4642/4870" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="67108867" data-dye2="167772160" data-accessory-dye-id="4870" data-clothing-dye-id="4642" data-count="1"></a>
                        </td>
                        <td><a href="/player/Makapaka">Makapaka</a></td>
                        <td>2551</td>
                        <td>4691464</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="3083"></span><span class="item" data-item="8863"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,72,38,60,40,81,63]" data-bonuses="[110,55,12,13,0,0,6,8]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/803/29815/4691/4955" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772214" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>2509</td>
                        <td>4606914</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T01:09:16Z">2015-09-21 01:09:16</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td><span class="private-character" style="background-position: -250px -1200px"></span></td>
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
                        <td>37.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/803/844/4232/4891" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="33554431" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409255</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[546,436,64,44,66,40,81,55]" data-bonuses="[0,165,4,19,6,0,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/803/29815/4681/4932" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="150994957" data-dye2="150994956" data-accessory-dye-id="4932" data-clothing-dye-id="4681" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>2403</td>
                        <td>4395135</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2861"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T07:08:16Z">2015-09-17 07:08:16</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td><span class="private-character" style="background-position: -250px -5200px"></span></td>
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
                        <td>40.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                            <a id="K" class="character" href="/top-characters-with-outfit/803/8968/4697/4874" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="83886091" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Denn">Denn</a></td>
                        <td>2347</td>
                        <td>4284399</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,62,40,60,47,82,57]" data-bonuses="[205,25,2,15,0,7,7,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/803/29815/4103/4390" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4279259</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="3083"></span><span class="item" data-item="30051"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,445,72,41,68,40,75,57]" data-bonuses="[60,60,12,16,8,0,0,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/803/0/4655/4911" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772185" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4655" data-count="1"></a>
                        </td>
                        <td><a href="/player/EMoney">EMoney</a></td>
                        <td>2328</td>
                        <td>4246613</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="3083"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,69,39,65,40,75,57]" data-bonuses="[100,0,9,14,5,0,0,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T22:34:32Z">2015-09-16 22:34:32</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/803/8968/4622/4478" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772168" data-dye2="33553146" data-accessory-dye-id="4478" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mest">Mest</a></td>
                        <td>2324</td>
                        <td>4237909</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/803/9026/4637/4359" style="background-position: -250px -1950px" data-class="803" data-skin="9026" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2322</td>
                        <td>4232861</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,42,80,55]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/803/844/4609/4866" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188826</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2861"></span><span class="item" data-item="30051"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,495,63,41,71,40,75,55]" data-bonuses="[0,110,3,16,11,0,0,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/803/844/4232/4485" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="33554431" data-dye2="21029072" data-accessory-dye-id="4485" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2260</td>
                        <td>4109407</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,38,64,42,80,61]" data-bonuses="[60,115,6,13,4,2,5,6]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:01:52Z">2015-09-10 15:01:52</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/803/0/4692/0" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772215" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4692" data-count="7"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2237</td>
                        <td>4064441</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,40,81,57]" data-bonuses="[100,55,10,17,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/803/844/0/0" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="8"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>2222</td>
                        <td>4032908</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,66,46,60,42,80,57]" data-bonuses="[0,55,6,21,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:18:33Z">2015-09-21 22:18:33</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/803/0/4691/4950" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772214" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/Undenied">Undenied</a></td>
                        <td>2222</td>
                        <td>4032861</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,70,38,60,42,80,61]" data-bonuses="[110,55,10,13,0,2,5,6]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/803/8968/4625/4886" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772171" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2200</td>
                        <td>3989974</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:03:32Z">2015-09-20 04:03:32</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/803/8968/4664/4920" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772193" data-dye2="167772193" data-accessory-dye-id="4920" data-clothing-dye-id="4664" data-count="3"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2192</td>
                        <td>3974052</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T23:40:51Z">2015-09-12 23:40:51</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/803/8968/4693/4929" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="83886087" data-dye2="167772202" data-accessory-dye-id="4929" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>2192</td>
                        <td>3972994</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T19:22:02Z">2015-09-21 19:22:02</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td><span class="private-character" style="background-position: -250px -500px"></span></td>
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
                        <td>55.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/803/29815/4687/4943" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772210" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/EpiCLicTra">EpiCLicTra</a></td>
                        <td>2170</td>
                        <td>3930344</td>
                        <td>
                            <span class="item" data-item="3859"></span><span class="item" data-item="2630"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,368,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:24:12Z">2015-09-22 22:24:12</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/803/8968/4645/4901" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="67108870" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hikary">Hikary</a></td>
                        <td>2160</td>
                        <td>3909300</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="3083"></span><span class="item" data-item="8863"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,475,72,44,60,40,81,57]" data-bonuses="[60,115,12,19,0,0,6,2]" data-class="803" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/803/29815/4634/4891" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="150994949" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuntdude">Stuntdude</a></td>
                        <td>2155</td>
                        <td>3900667</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,40,81,55]" data-bonuses="[180,55,4,13,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/803/8968/0/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="317"></a>
                        </td>
                        <td><a href="/player/Jscobeetoo">Jscobeetoo</a></td>
                        <td>2130</td>
                        <td>3849748</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[703,335,64,38,60,40,81,55]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td><span class="private-character" style="background-position: -250px -500px"></span></td>
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
                        <td>60.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/803/8968/4209/4359" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="33488896" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/GigaM">GigaM</a></td>
                        <td>2121</td>
                        <td>3832243</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T22:19:59Z">2015-09-12 22:19:59</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/803/0/4186/4865" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="18422128" data-dye2="67108865" data-accessory-dye-id="4865" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/Adtv">Adtv</a></td>
                        <td>2121</td>
                        <td>3831686</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,40,81,57]" data-bonuses="[100,55,10,17,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/803/0/4233/4489" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="32896501" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bengtz">Bengtz</a></td>
                        <td>2121</td>
                        <td>3831027</td>
                        <td>
                            <span class="item" data-item="3108"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/803/8968/4154/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="32564876" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4154" data-count="1"></a>
                        </td>
                        <td><a href="/player/Isabre">Isabre</a></td>
                        <td>2117</td>
                        <td>3824725</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,42,80,55]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T06:06:11Z">2015-09-20 06:06:11</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/803/8968/0/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="317"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>2110</td>
                        <td>3809397</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="9016"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,64,38,60,40,81,55]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                            <a id="ag" class="character" href="/top-characters-with-outfit/803/0/4146/4480" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>2101</td>
                        <td>3791103</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:47:01Z">2015-09-16 23:47:01</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/803/29815/4130/4399" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="21511563" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4130" data-count="2"></a>
                        </td>
                        <td><a href="/player/Glaede">Glaede</a></td>
                        <td>2100</td>
                        <td>3789444</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,42,80,55]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/803/8968/4143/4866" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="33093887" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4143" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>2100</td>
                        <td>3789273</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,60,47,82,55]" data-bonuses="[125,25,4,19,0,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/803/8968/4198/4394" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="32434346" data-dye2="28451362" data-accessory-dye-id="4394" data-clothing-dye-id="4198" data-count="1"></a>
                        </td>
                        <td><a href="/player/XLABLegend">XLABLegend</a></td>
                        <td>2096</td>
                        <td>3782539</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[684,346,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/803/0/4188/4918" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="33547489" data-dye2="167772191" data-accessory-dye-id="4918" data-clothing-dye-id="4188" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hexage">Hexage</a></td>
                        <td>2086</td>
                        <td>3762529</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="3083"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,410,68,40,60,47,82,63]" data-bonuses="[135,25,8,15,0,7,7,8]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/803/0/4101/0" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="32896476" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4101" data-count="1"></a>
                        </td>
                        <td><a href="/player/DetslavHR">DetslavHR</a></td>
                        <td>2075</td>
                        <td>3740465</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,40,81,57]" data-bonuses="[100,55,10,17,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T22:52:15Z">2015-09-11 22:52:15</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/803/8968/4698/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4698" data-count="4"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2073</td>
                        <td>3735035</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2630"></span><span class="item" data-item="2710"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,435,67,41,60,40,81,55]" data-bonuses="[100,50,7,16,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                            <a id="an" class="character" href="/top-characters-with-outfit/803/29815/4691/4947" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772214" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4691" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>2072</td>
                        <td>3733338</td>
                        <td>
                            <span class="item" data-item="3075"></span><span class="item" data-item="2861"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:30:17Z">2015-09-21 12:30:17</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td><span class="private-character" style="background-position: -250px -5200px"></span></td>
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
                        <td>77.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/803/9026/4625/0" style="background-position: -250px -1950px" data-class="803" data-skin="9026" data-dye1="167772171" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Baack">Baack</a></td>
                        <td>2051</td>
                        <td>3691472</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[626,405,64,42,60,44,81,55]" data-bonuses="[60,115,4,17,0,4,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T01:15:18Z">2015-09-16 01:15:18</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/803/29815/4658/4955" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772188" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/FakeShadow">FakeShadow</a></td>
                        <td>2050</td>
                        <td>3688967</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,62,40,60,47,82,57]" data-bonuses="[205,25,2,15,0,7,7,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T10:19:12Z">2015-09-20 10:19:12</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/803/8968/4634/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="150994949" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4634" data-count="6"></a>
                        </td>
                        <td><a href="/player/Darnren">Darnren</a></td>
                        <td>2047</td>
                        <td>3684233</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,40,81,57]" data-bonuses="[60,115,12,19,0,0,6,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T01:33:59Z">2015-09-16 01:33:59</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                            <a id="ar" class="character" href="/top-characters-with-outfit/803/29815/4622/4399" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772168" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4622" data-count="3"></a>
                        </td>
                        <td><a href="/player/JimReborn">JimReborn</a></td>
                        <td>2041</td>
                        <td>3671738</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,42,80,55]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/803/8968/4698/4954" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="3"></a>
                        </td>
                        <td><a href="/player/AllenLoo">AllenLoo</a></td>
                        <td>2033</td>
                        <td>3655127</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,60,47,82,55]" data-bonuses="[125,25,4,19,0,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/803/8968/0/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="317"></a>
                        </td>
                        <td><a href="/player/Inking">Inking</a></td>
                        <td>2031</td>
                        <td>3651804</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="2630"></span><span class="item" data-item="2821"></span><span class="item" data-item="2753"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[592,348,64,38,67,40,81,55]" data-bonuses="[0,55,4,13,7,0,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T08:08:11Z">2015-09-12 08:08:11</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/803/0/4130/4488" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="21511563" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dikkus">Dikkus</a></td>
                        <td>2030</td>
                        <td>3649050</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,40,81,55]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/803/8968/4116/4359" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="16842751" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4116" data-count="1"></a>
                        </td>
                        <td><a href="/player/Domoswag">Domoswag</a></td>
                        <td>2020</td>
                        <td>3628782</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,42,80,57]" data-bonuses="[60,115,12,19,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/803/29815/4232/4359" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="33554431" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/MuthaFargo">MuthaFargo</a></td>
                        <td>2019</td>
                        <td>3627170</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,42,80,55]" data-bonuses="[180,55,4,13,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/803/844/0/0" style="background-position: -250px -1200px" data-class="803" data-skin="844" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="8"></a>
                        </td>
                        <td><a href="/player/MatHesteen">MatHesteen</a></td>
                        <td>2014</td>
                        <td>3618662</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,46,80,57]" data-bonuses="[60,115,6,17,0,6,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/803/0/4671/4927" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772200" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4671" data-count="2"></a>
                        </td>
                        <td><a href="/player/Meliorus">Meliorus</a></td>
                        <td>2014</td>
                        <td>3618295</td>
                        <td>
                            <span class="item" data-item="1894"></span><span class="item" data-item="2861"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,67,46,63,47,82,55]" data-bonuses="[85,85,7,21,3,7,7,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T16:39:07Z">2015-09-20 16:39:07</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/803/29815/4697/4950" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="83886091" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/IMeXistenZ">IMeXistenZ</a></td>
                        <td>2013</td>
                        <td>3616101</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,42,80,57]" data-bonuses="[100,55,10,17,0,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/803/8968/4096/4353" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="32569599" data-dye2="33221591" data-accessory-dye-id="4353" data-clothing-dye-id="4096" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jmwlolzor">Jmwlolzor</a></td>
                        <td>2011</td>
                        <td>3612409</td>
                        <td>
                            <span class="item" data-item="8857"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T05:07:11Z">2015-09-23 05:07:11</span></td>
                        <td><abbr title="USMidWest">USMW</abbr></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/803/0/4103/4359" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/Souldealer">Souldealer</a></td>
                        <td>2009</td>
                        <td>3607416</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="3083"></span><span class="item" data-item="2710"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[667,346,69,41,60,40,81,57]" data-bonuses="[100,50,9,16,0,0,6,2]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:34:28Z">2015-09-22 22:34:28</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/803/0/4232/4488" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="2"></a>
                        </td>
                        <td><a href="/player/Tisgeh">Tisgeh</a></td>
                        <td>2009</td>
                        <td>3607107</td>
                        <td>
                            <span class="item" data-item="2722"></span><span class="item" data-item="2861"></span><span class="item" data-item="2710"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,435,63,37,60,40,81,55]" data-bonuses="[180,50,3,12,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T12:34:04Z">2015-09-17 12:34:04</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/803/8968/4631/0" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="150994946" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4631" data-count="2"></a>
                        </td>
                        <td><a href="/player/Zurit">Zurit</a></td>
                        <td>2004</td>
                        <td>3596919</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="3122"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,550,66,44,66,42,80,57]" data-bonuses="[0,165,6,19,6,2,5,2]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/803/8968/4234/4490" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="33554176" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4234" data-count="1"></a>
                        </td>
                        <td><a href="/player/Orono">Orono</a></td>
                        <td>2003</td>
                        <td>3595346</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[696,440,68,42,60,40,81,50]" data-bonuses="[100,55,8,17,0,0,6,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/803/0/4673/4892" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="167772202" data-dye2="150994951" data-accessory-dye-id="4892" data-clothing-dye-id="4673" data-count="1"></a>
                        </td>
                        <td><a href="/player/8cdzhEnCK99">Uoro</a></td>
                        <td>2002</td>
                        <td>3593612</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[769,359,66,38,60,40,54,57]" data-bonuses="[180,55,6,13,0,0,6,2]" data-class="803" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T01:03:28Z">2015-09-23 01:03:28</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td><span class="private-character" style="background-position: -250px -3650px"></span></td>
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
                            <a id="aG" class="character" href="/top-characters-with-outfit/803/0/4130/4393" style="background-position: -250px -500px" data-class="803" data-skin="0" data-dye1="21511563" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Typhoons">Typhoons</a></td>
                        <td>2001</td>
                        <td>3592642</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[688,359,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/803/29815/4168/4488" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="25677562" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4168" data-count="1"></a>
                        </td>
                        <td><a href="/player/ShadyBrady">ShadyBrady</a></td>
                        <td>2001</td>
                        <td>3592109</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,68,42,60,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/803/8968/4103/4399" style="background-position: -250px -3650px" data-class="803" data-skin="8968" data-dye1="16777216" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/MustyThug">MustyThug</a></td>
                        <td>2001</td>
                        <td>3591159</td>
                        <td>
                            <span class="item" data-item="2824"></span><span class="item" data-item="2861"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,64,38,60,40,81,55]" data-bonuses="[180,55,4,13,0,0,6,0]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/803/29815/4664/4920" style="background-position: -250px -5200px" data-class="803" data-skin="29815" data-dye1="167772193" data-dye2="167772193" data-accessory-dye-id="4920" data-clothing-dye-id="4664" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lodis">Lodis</a></td>
                        <td>2001</td>
                        <td>3590957</td>
                        <td>
                            <span class="item" data-item="8998"></span><span class="item" data-item="3083"></span><span class="item" data-item="2821"></span><span class="item" data-item="3117"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[690,460,67,39,61,41,82,58]" data-bonuses="[20,75,7,14,1,1,7,3]" data-class="803" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T22:57:58Z">2015-09-09 22:57:58</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-mystics">1 - 100</a></li>
                    <li><a href="/top-mystics/101">101 - 200</a></li>
                    <li><a href="/top-mystics/201">201 - 300</a></li>
                    <li><a href="/top-mystics/301">301 - 400</a></li>
                    <li><a href="/top-mystics/401">401 - 500</a></li>
                    <li><a href="/top-mystics/501">501 - 600</a></li>
                    <li><a href="/top-mystics/601">601 - 700</a></li>
                    <li><a href="/top-mystics/701">701 - 800</a></li>
                    <li><a href="/top-mystics/801">801 - 900</a></li>
                    <li><a href="/top-mystics/901">901 - 1000</a></li>
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