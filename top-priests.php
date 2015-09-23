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
    <title>Top Priests 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Priests">
    <meta name="description" content="Top Priests 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Priests</h1><p>This is a list of the top 1000 priests by Exp seen in the past two
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Priests" href="/top-priests"><span class="private-character" style="background-position: 0px -158px"></span>
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
                    <li class="active"><a href="/top-priests">1 - 100</a></li>
                    <li><a href="/top-priests/101">101 - 200</a></li>
                    <li><a href="/top-priests/201">201 - 300</a></li>
                    <li><a href="/top-priests/301">301 - 400</a></li>
                    <li><a href="/top-priests/401">401 - 500</a></li>
                    <li><a href="/top-priests/501">501 - 600</a></li>
                    <li><a href="/top-priests/601">601 - 700</a></li>
                    <li><a href="/top-priests/701">701 - 800</a></li>
                    <li><a href="/top-priests/801">801 - 900</a></li>
                    <li><a href="/top-priests/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/784/0/4616/4921" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772162" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dattler">Dattler</a></td>
                        <td>78831</td>
                        <td>157250862</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[735,520,50,46,61,51,82,55]" data-bonuses="[65,135,0,21,6,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/784/0/4617/4399" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772163" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tisgeh">Tisgeh</a></td>
                        <td>67545</td>
                        <td>134679851</td>
                        <td>
                            <span class="item" data-item="9084"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,440,54,38,55,44,81,55]" data-bonuses="[220,55,4,13,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T12:32:45Z">2015-09-17 12:32:45</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/784/0/4673/4400" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772202" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4673" data-count="1"></a>
                        </td>
                        <td><a href="/player/KNCHA">KNCHA</a></td>
                        <td>11662</td>
                        <td>22914620</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td><span class="private-character" style="background-position: -250px -1450px"></span></td>
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
                            <a id="g" class="character" href="/top-characters-with-outfit/784/852/4130/4399" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="21511563" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Glaede">Glaede</a></td>
                        <td>10000</td>
                        <td>19590000</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,54,38,55,49,87,55]" data-bonuses="[180,55,4,13,0,9,12,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td><span class="private-character" style="background-position: -250px -2600px"></span></td>
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
                        <td>7.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/784/29811/4630/4891" style="background-position: -250px -5000px" data-class="784" data-skin="29811" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143580</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,50,40,55,54,89,55]" data-bonuses="[205,25,0,15,0,14,14,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:31:01Z">2015-09-16 10:31:01</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/784/0/4103/4488" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="16777216" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4103" data-count="4"></a>
                        </td>
                        <td><a href="/player/Troglodyta">Troglodyta</a></td>
                        <td>6447</td>
                        <td>12483468</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/784/884/4684/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772207" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4684" data-count="8"></a>
                        </td>
                        <td><a href="/player/Lirynetto">Lirynetto</a></td>
                        <td>6033</td>
                        <td>11654784</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,500,60,44,55,46,80,55]" data-bonuses="[100,115,10,19,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/784/837/0/0" style="background-position: -250px -850px" data-class="784" data-skin="837" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="22"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>6000</td>
                        <td>11589278</td>
                        <td>
                            <span class="item" data-item="3101"></span><span class="item" data-item="3081"></span><span class="item" data-item="3103"></span><span class="item" data-item="3104"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,435,50,35,55,60,95,55]" data-bonuses="[0,50,0,10,0,20,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/784/884/4687/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772210" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4687" data-count="10"></a>
                        </td>
                        <td><a href="/player/LiveJoker">LiveJoker</a></td>
                        <td>5363</td>
                        <td>10315973</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,358,54,38,55,46,80,55]" data-bonuses="[220,55,4,13,0,6,5,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/784/884/4686/4955" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772209" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4686" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>5300</td>
                        <td>10189702</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="9054"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,435,50,45,55,55,95,55]" data-bonuses="[50,50,0,20,0,15,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/784/29786/0/0" style="background-position: -250px -5300px" data-class="784" data-skin="29786" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="25"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>5012</td>
                        <td>9613959</td>
                        <td>
                            <span class="item" data-item="9055"></span><span class="item" data-item="9054"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,485,60,45,60,55,95,55]" data-bonuses="[100,100,10,20,5,15,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:04:35Z">2015-09-21 23:04:35</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/784/852/4658/4874" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5003</td>
                        <td>9594884</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2983"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[710,440,54,38,55,44,94,59]" data-bonuses="[40,55,4,13,0,4,19,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/784/849/4618/4927" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="167772164" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fawlup">Fawlup</a></td>
                        <td>5000</td>
                        <td>9589039</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/784/884/4144/4464" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>5000</td>
                        <td>9588974</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[723,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/784/884/4182/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="24865006" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4182" data-count="3"></a>
                        </td>
                        <td><a href="/player/Dipser">Dipser</a></td>
                        <td>4860</td>
                        <td>9310269</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,84,59]" data-bonuses="[140,55,8,17,0,6,9,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:22:31Z">2015-09-22 23:22:31</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                        <td>19.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/784/0/4694/4954" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="83886088" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4694" data-count="7"></a>
                        </td>
                        <td><a href="/player/voEMA7xweK4">Risrr</a></td>
                        <td>4260</td>
                        <td>8109639</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[847,500,54,42,55,44,81,55]" data-bonuses="[177,115,4,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T15:35:23Z">2015-09-23 15:35:23</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/784/884/4613/4952" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="150994945" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/Runnybunny">Runnybunny</a></td>
                        <td>4226</td>
                        <td>8041078</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,85,59]" data-bonuses="[140,55,8,17,0,4,10,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/784/0/4195/4488" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="33531136" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/PrinceYimi">PrinceYimi</a></td>
                        <td>4210</td>
                        <td>8009727</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[710,550,54,44,61,44,81,55]" data-bonuses="[40,165,4,19,6,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T16:12:55Z">2015-09-20 16:12:55</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/784/849/4103/0" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="16777216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>4141</td>
                        <td>7870794</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,54,44,55,54,89,55]" data-bonuses="[125,25,4,19,0,14,14,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/784/0/4674/4930" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="150994954" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4674" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZYnk">ZYnk</a></td>
                        <td>4134</td>
                        <td>7858691</td>
                        <td>
                            <span class="item" data-item="8844"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[915,410,50,40,55,51,82,55]" data-bonuses="[245,25,0,15,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T21:39:56Z">2015-09-19 21:39:56</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td><span class="private-character" style="background-position: -250px -2600px"></span></td>
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
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                        <td>26.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/784/0/4696/4921" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="83886090" data-dye2="167772194" data-accessory-dye-id="4921" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Doomdager">Doomdager</a></td>
                        <td>4005</td>
                        <td>7599134</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T06:08:23Z">2015-09-14 06:08:23</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/784/0/0/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="10742"></a>
                        </td>
                        <td><a href="/player/Nopperabo">Nopperabo</a></td>
                        <td>3944</td>
                        <td>7476807</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T01:18:26Z">2015-09-23 01:18:26</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/784/0/4615/4474" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772161" data-dye2="29409472" data-accessory-dye-id="4474" data-clothing-dye-id="4615" data-count="1"></a>
                        </td>
                        <td><a href="/player/5BZyoVZsmRE">Iawa</a></td>
                        <td>3863</td>
                        <td>7316183</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2776"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[769,440,58,42,55,40,81,55]" data-bonuses="[212,55,8,17,0,0,6,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:08:38Z">2015-09-23 16:08:38</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/784/0/4103/4464" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>3773</td>
                        <td>7136694</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:19:00Z">2015-09-11 04:19:00</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/784/0/0/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="10742"></a>
                        </td>
                        <td><a href="/player/DHorVvMg7Ky">Serl</a></td>
                        <td>3643</td>
                        <td>6875044</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="9052"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[601,410,50,48,55,47,82,55]" data-bonuses="[25,25,0,23,0,7,7,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T05:30:12Z">2015-09-22 05:30:12</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/784/837/4619/4875" style="background-position: -250px -850px" data-class="784" data-skin="837" data-dye1="167772165" data-dye2="167772165" data-accessory-dye-id="4875" data-clothing-dye-id="4619" data-count="2"></a>
                        </td>
                        <td><a href="/player/Billylolol">Billylolol</a></td>
                        <td>3615</td>
                        <td>6820150</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3081"></span><span class="item" data-item="2710"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,409,53,45,55,47,88,55]" data-bonuses="[0,50,3,20,0,7,13,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T03:23:49Z">2015-09-21 03:23:49</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/784/29811/4700/4956" style="background-position: -250px -5000px" data-class="784" data-skin="29811" data-dye1="150994958" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cantha">Cantha</a></td>
                        <td>3610</td>
                        <td>6809849</td>
                        <td>
                            <span class="item" data-item="3856"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[1027,410,50,40,55,51,82,55]" data-bonuses="[357,25,0,15,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/784/849/4619/0" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="167772165" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4619" data-count="1"></a>
                        </td>
                        <td><a href="/player/JAM">JAM</a></td>
                        <td>3600</td>
                        <td>6788790</td>
                        <td>
                            <span class="item" data-item="8854"></span><span class="item" data-item="3081"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,54,38,55,49,87,55]" data-bonuses="[180,55,4,13,0,9,12,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/784/0/4103/4890" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>3548</td>
                        <td>6686665</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3081"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,54,38,59,49,87,59]" data-bonuses="[60,115,4,13,4,9,12,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T21:53:13Z">2015-09-16 21:53:13</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/784/884/4672/4395" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772201" data-dye2="33553136" data-accessory-dye-id="4395" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/EJD">EJD</a></td>
                        <td>3500</td>
                        <td>6588929</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3081"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,54,38,55,49,87,55]" data-bonuses="[180,55,4,13,0,9,12,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T02:26:17Z">2015-09-21 02:26:17</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/784/0/0/4952" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="0" data-count="7"></a>
                        </td>
                        <td><a href="/player/Amphipath">Amphipath</a></td>
                        <td>3479</td>
                        <td>6547135</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3081"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,413,54,42,55,51,88,55]" data-bonuses="[60,115,4,17,0,11,13,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T10:32:19Z">2015-09-22 10:32:19</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/784/0/4179/4411" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="28988883" data-dye2="31909626" data-accessory-dye-id="4411" data-clothing-dye-id="4179" data-count="1"></a>
                        </td>
                        <td><a href="/player/AIestorm">AIestorm</a></td>
                        <td>3429</td>
                        <td>6448356</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[735,520,50,46,61,51,82,55]" data-bonuses="[65,135,0,21,6,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/784/884/4667/4482" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772196" data-dye2="16810112" data-accessory-dye-id="4482" data-clothing-dye-id="4667" data-count="1"></a>
                        </td>
                        <td><a href="/player/PeeBreak">PeeBreak</a></td>
                        <td>3422</td>
                        <td>6432775</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,435,50,40,55,59,99,55]" data-bonuses="[50,50,0,15,0,19,24,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T16:23:36Z">2015-09-22 16:23:36</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/784/0/4700/4956" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="150994958" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/Vesson">Vesson</a></td>
                        <td>3356</td>
                        <td>6300845</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/784/852/4630/4359" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255474</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/784/29811/0/4917" style="background-position: -250px -5000px" data-class="784" data-skin="29811" data-dye1="0" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>3224</td>
                        <td>6036768</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[915,410,50,40,55,51,82,55]" data-bonuses="[245,25,0,15,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/784/849/4684/4940" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="167772207" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>3222</td>
                        <td>6033372</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:30:44Z">2015-09-21 12:30:44</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/784/884/4216/4490" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="33551854" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4216" data-count="1"></a>
                        </td>
                        <td><a href="/player/Albatron">Albatron</a></td>
                        <td>3107</td>
                        <td>5803027</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,440,54,38,55,46,80,55]" data-bonuses="[220,55,4,13,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/784/0/4698/4954" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="19"></a>
                        </td>
                        <td><a href="/player/GtVWjrtDr0S">Lorz</a></td>
                        <td>3096</td>
                        <td>5781964</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="2710"></span><span class="item" data-item="2757"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[819,346,53,37,50,40,81,55]" data-bonuses="[237,50,3,12,0,0,6,0]" data-class="784" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:24:38Z">2015-09-22 22:24:38</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/784/905/4652/4909" style="background-position: -250px -2250px" data-class="784" data-skin="905" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>3080</td>
                        <td>5750508</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,440,54,38,55,46,80,55]" data-bonuses="[220,55,4,13,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/784/0/4623/4392" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772169" data-dye2="23685481" data-accessory-dye-id="4392" data-clothing-dye-id="4623" data-count="1"></a>
                        </td>
                        <td><a href="/player/RMGnoob">RMGnoob</a></td>
                        <td>3032</td>
                        <td>5654637</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[695,520,50,46,61,54,89,55]" data-bonuses="[25,135,0,21,6,14,14,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:06:35Z">2015-09-20 04:06:35</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/784/0/4697/4952" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="83886091" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4697" data-count="2"></a>
                        </td>
                        <td><a href="/player/bjhVQL62tUJ">Vorv</a></td>
                        <td>3025</td>
                        <td>5639347</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[759,440,54,38,55,40,81,55]" data-bonuses="[180,55,4,13,0,0,6,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:38:43Z">2015-09-22 21:38:43</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/784/884/4150/4486" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="33515956" data-dye2="32408302" data-accessory-dye-id="4486" data-clothing-dye-id="4150" data-count="1"></a>
                        </td>
                        <td><a href="/player/Maxhello">Maxhello</a></td>
                        <td>3014</td>
                        <td>5617972</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,56,46,55,54,89,55]" data-bonuses="[85,85,6,21,0,14,14,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/784/0/0/4949" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="0" data-count="6"></a>
                        </td>
                        <td><a href="/player/xOFLZjnfQWU">Utanu</a></td>
                        <td>3005</td>
                        <td>5598849</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[613,520,50,46,61,47,82,55]" data-bonuses="[25,135,0,21,6,7,7,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:40:41Z">2015-09-23 14:40:41</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/784/0/4103/4928" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="16777216" data-dye2="167772201" data-accessory-dye-id="4928" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cookeyz">Cookeyz</a></td>
                        <td>3001</td>
                        <td>5592037</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T08:53:11Z">2015-09-12 08:53:11</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                            <a id="W" class="character" href="/top-characters-with-outfit/784/905/4211/4910" style="background-position: -250px -2250px" data-class="784" data-skin="905" data-dye1="21064161" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4211" data-count="1"></a>
                        </td>
                        <td><a href="/player/Oztraya">Oztraya</a></td>
                        <td>3001</td>
                        <td>5591104</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="2853"></span><span class="item" data-item="3122"></span><span class="item" data-item="2764"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,54,38,55,42,80,63]" data-bonuses="[0,55,4,13,0,2,5,8]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/784/884/4105/4361" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5589143</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,440,54,38,55,44,81,55]" data-bonuses="[220,55,4,13,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T08:48:16Z">2015-09-22 08:48:16</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/784/0/4138/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="28451362" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4138" data-count="2"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>2900</td>
                        <td>5388759</td>
                        <td>
                            <span class="item" data-item="3101"></span><span class="item" data-item="3081"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,54,38,55,51,92,55]" data-bonuses="[140,55,4,13,0,11,17,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T08:45:56Z">2015-09-10 08:45:56</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/784/852/4144/4400" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>2888</td>
                        <td>5365869</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:08:37Z">2015-09-22 03:08:37</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/784/884/4695/4951" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="83886089" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4695" data-count="3"></a>
                        </td>
                        <td><a href="/player/GgSui">GgSui</a></td>
                        <td>2834</td>
                        <td>5257715</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,500,60,44,55,46,80,55]" data-bonuses="[100,115,10,19,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/784/905/4637/4359" style="background-position: -250px -2250px" data-class="784" data-skin="905" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2800</td>
                        <td>5188931</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[735,520,50,46,61,51,82,55]" data-bonuses="[65,135,0,21,6,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/784/884/4663/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772192" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/Homofil">Homofil</a></td>
                        <td>2790</td>
                        <td>5169759</td>
                        <td>
                            <span class="item" data-item="3101"></span><span class="item" data-item="3081"></span><span class="item" data-item="3103"></span><span class="item" data-item="3104"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,435,50,35,55,60,95,55]" data-bonuses="[0,50,0,10,0,20,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td><span class="private-character" style="background-position: -250px -2600px"></span></td>
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
                            <a id="ad" class="character" href="/top-characters-with-outfit/784/905/4693/4951" style="background-position: -250px -2250px" data-class="784" data-skin="905" data-dye1="83886087" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/Buzzergon">Buzzergon</a></td>
                        <td>2731</td>
                        <td>5051722</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,500,54,38,59,46,80,59]" data-bonuses="[100,115,4,13,4,6,5,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T06:28:15Z">2015-09-12 06:28:15</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/784/0/4698/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4698" data-count="42"></a>
                        </td>
                        <td><a href="/player/pQYk1HaaXRh">Queq</a></td>
                        <td>2713</td>
                        <td>5015103</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[843,376,54,38,55,40,81,55]" data-bonuses="[252,55,4,13,0,0,6,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:05:03Z">2015-09-22 22:05:03</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/784/0/0/4430" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="33222886" data-accessory-dye-id="4430" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lakie">Lakie</a></td>
                        <td>2702</td>
                        <td>4994745</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,500,60,44,55,44,81,55]" data-bonuses="[100,115,10,19,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/784/0/4680/4944" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772204" data-dye2="167772211" data-accessory-dye-id="4944" data-clothing-dye-id="4680" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>2696</td>
                        <td>4981720</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,54,44,55,54,89,55]" data-bonuses="[125,25,4,19,0,14,14,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T02:54:12Z">2015-09-18 02:54:12</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/784/0/4698/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4698" data-count="42"></a>
                        </td>
                        <td><a href="/player/nzjRwwzURFS">Iatho</a></td>
                        <td>2678</td>
                        <td>4944939</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="2821"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[741,440,54,38,50,40,81,55]" data-bonuses="[140,55,4,13,0,0,6,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:48:30Z">2015-09-23 14:48:30</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/784/849/4666/4359" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>2665</td>
                        <td>4919442</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[890,440,54,38,55,46,80,55]" data-bonuses="[220,55,4,13,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/784/29786/4686/0" style="background-position: -250px -5300px" data-class="784" data-skin="29786" data-dye1="167772209" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4686" data-count="2"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2654</td>
                        <td>4897035</td>
                        <td>
                            <span class="item" data-item="9055"></span><span class="item" data-item="9054"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,485,60,45,60,55,95,55]" data-bonuses="[100,100,10,20,5,15,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/784/0/4638/4488" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="150994952" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/HyroW">HyroW</a></td>
                        <td>2602</td>
                        <td>4794456</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/784/884/4159/4358" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="28170470" data-dye2="33547460" data-accessory-dye-id="4358" data-clothing-dye-id="4159" data-count="1"></a>
                        </td>
                        <td><a href="/player/MikeBeszPL">MikeBeszPL</a></td>
                        <td>2601</td>
                        <td>4791376</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/784/0/0/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="10742"></a>
                        </td>
                        <td><a href="/player/PNDR">PNDR</a></td>
                        <td>2585</td>
                        <td>4758954</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T03:23:33Z">2015-09-20 03:23:33</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/784/884/4697/4950" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="83886091" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/FucDATGAME">FucDATGAME</a></td>
                        <td>2576</td>
                        <td>4741114</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2610"></span><span class="item" data-item="2821"></span><span class="item" data-item="2766"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[623,580,54,38,55,40,81,55]" data-bonuses="[0,195,4,13,0,0,6,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:05:29Z">2015-09-23 16:05:29</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/784/0/0/4951" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="0" data-count="11"></a>
                        </td>
                        <td><a href="/player/JH13u1boA0J">Laen</a></td>
                        <td>2569</td>
                        <td>4728192</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="2821"></span><span class="item" data-item="2758"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[582,560,54,38,55,40,81,55]" data-bonuses="[0,175,4,13,0,0,6,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T03:25:22Z">2015-09-12 03:25:22</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                        <td>73.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/784/29786/4105/4953" style="background-position: -250px -5300px" data-class="784" data-skin="29786" data-dye1="16777471" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>2509</td>
                        <td>4607119</td>
                        <td>
                            <span class="item" data-item="9055"></span><span class="item" data-item="9054"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,485,60,45,60,55,95,55]" data-bonuses="[100,100,10,20,5,15,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T15:23:18Z">2015-09-21 15:23:18</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/784/849/4103/4952" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="16777216" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Diokles">Diokles</a></td>
                        <td>2508</td>
                        <td>4606368</td>
                        <td>
                            <span class="item" data-item="8854"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/784/884/4134/4390" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="33494163" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4134" data-count="1"></a>
                        </td>
                        <td><a href="/player/XKnown">XKnown</a></td>
                        <td>2500</td>
                        <td>4589538</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[710,550,54,44,61,46,80,55]" data-bonuses="[40,165,4,19,6,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/784/849/4666/4922" style="background-position: -250px -1450px" data-class="784" data-skin="849" data-dye1="167772195" data-dye2="167772195" data-accessory-dye-id="4922" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2500</td>
                        <td>4588895</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="9052"></span><span class="item" data-item="3117"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[715,430,51,41,56,55,90,56]" data-bonuses="[45,45,1,16,1,15,15,1]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:04:13Z">2015-09-20 04:04:13</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/784/0/4623/4359" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772169" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4623" data-count="2"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2499</td>
                        <td>4588089</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,44,81,55]" data-bonuses="[140,55,8,17,0,4,6,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/784/0/4105/4447" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="16777471" data-dye2="16777344" data-accessory-dye-id="4447" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Skylinear">Skylinear</a></td>
                        <td>2480</td>
                        <td>4550240</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3081"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,58,42,55,47,88,55]" data-bonuses="[100,55,8,17,0,7,13,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/784/884/4622/4399" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772168" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4622" data-count="4"></a>
                        </td>
                        <td><a href="/player/JimReborn">JimReborn</a></td>
                        <td>2464</td>
                        <td>4518354</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[735,520,50,46,61,51,82,55]" data-bonuses="[65,135,0,21,6,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/784/0/0/4954" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="0" data-count="30"></a>
                        </td>
                        <td><a href="/player/Oebx2UzgUY8">Lauk</a></td>
                        <td>2459</td>
                        <td>4508408</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="9052"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[807,520,50,46,61,47,82,55]" data-bonuses="[137,135,0,21,6,7,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T07:48:00Z">2015-09-23 07:48:00</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/784/852/4616/4359" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="167772162" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2450</td>
                        <td>4488799</td>
                        <td>
                            <span class="item" data-item="8844"></span><span class="item" data-item="2853"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,58,42,55,42,80,55]" data-bonuses="[100,55,8,17,0,2,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T23:40:03Z">2015-09-12 23:40:03</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/784/884/4103/4399" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="16777216" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/StallyLoL">StallyLoL</a></td>
                        <td>2437</td>
                        <td>4464413</td>
                        <td>
                            <span class="item" data-item="8999"></span><span class="item" data-item="3081"></span><span class="item" data-item="30051"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,495,53,41,66,47,82,55]" data-bonuses="[0,110,3,16,11,7,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/784/0/0/4950" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="0" data-count="11"></a>
                        </td>
                        <td><a href="/player/Undenied">Undenied</a></td>
                        <td>2431</td>
                        <td>4450879</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="3122"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,440,60,38,55,42,80,61]" data-bonuses="[110,55,10,13,0,2,5,6]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/784/852/4615/4895" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="167772161" data-dye2="83886082" data-accessory-dye-id="4895" data-clothing-dye-id="4615" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nicob">Nicob</a></td>
                        <td>2420</td>
                        <td>4429760</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3081"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,60,44,55,49,91,59]" data-bonuses="[60,115,10,19,0,9,16,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T02:53:53Z">2015-09-21 02:53:53</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/784/884/4648/4389" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="167772178" data-dye2="26476755" data-accessory-dye-id="4389" data-clothing-dye-id="4648" data-count="1"></a>
                        </td>
                        <td><a href="/player/ImStew">ImStew</a></td>
                        <td>2411</td>
                        <td>4410886</td>
                        <td>
                            <span class="item" data-item="8844"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/784/852/4232/4891" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="33554431" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4408865</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2853"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[556,435,54,44,61,40,81,55]" data-bonuses="[0,165,4,19,6,0,6,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/784/0/4186/4865" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="18422128" data-dye2="67108865" data-accessory-dye-id="4865" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/Adtv">Adtv</a></td>
                        <td>2384</td>
                        <td>4356925</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,58,42,55,46,80,55]" data-bonuses="[140,55,8,17,0,6,5,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/784/29811/4695/4942" style="background-position: -250px -5000px" data-class="784" data-skin="29811" data-dye1="83886089" data-dye2="167772209" data-accessory-dye-id="4942" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/JmannExtra">JmannExtra</a></td>
                        <td>2375</td>
                        <td>4338886</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[915,410,50,40,55,51,82,55]" data-bonuses="[245,25,0,15,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:37:43Z">2015-09-20 20:37:43</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/784/29811/4677/4399" style="background-position: -250px -5000px" data-class="784" data-skin="29811" data-dye1="83886085" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4677" data-count="1"></a>
                        </td>
                        <td><a href="/player/Awzz">Awzz</a></td>
                        <td>2350</td>
                        <td>4289526</td>
                        <td>
                            <span class="item" data-item="9055"></span><span class="item" data-item="9054"></span><span class="item" data-item="30051"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,385,61,40,60,43,78,61]" data-bonuses="[110,0,11,15,5,3,3,6]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/784/29786/4103/4390" style="background-position: -250px -5300px" data-class="784" data-skin="29786" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4278770</td>
                        <td>
                            <span class="item" data-item="9055"></span><span class="item" data-item="9054"></span><span class="item" data-item="9052"></span><span class="item" data-item="9053"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,485,60,45,60,55,95,55]" data-bonuses="[100,100,10,20,5,15,20,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/784/0/0/4952" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="0" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="0" data-count="7"></a>
                        </td>
                        <td><a href="/player/vzE0N4ZvqD1">Eati</a></td>
                        <td>2319</td>
                        <td>4228083</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2651"></span><span class="item" data-item="2821"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[718,440,54,46,55,40,81,55]" data-bonuses="[112,55,4,21,0,0,6,0]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T15:00:14Z">2015-09-16 15:00:14</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/784/0/4127/0" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="25886720" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4127" data-count="9"></a>
                        </td>
                        <td><a href="/player/Reebevoli">Reebevoli</a></td>
                        <td>2312</td>
                        <td>4214380</td>
                        <td>
                            <span class="item" data-item="3856"></span><span class="item" data-item="2853"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[638,387,54,42,55,46,80,55]" data-bonuses="[60,115,4,17,0,6,5,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T02:18:47Z">2015-09-23 02:18:47</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/784/884/0/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="514"></a>
                        </td>
                        <td><a href="/player/FatalPain">FatalPain</a></td>
                        <td>2306</td>
                        <td>4202641</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[699,399,54,42,55,50,80,55]" data-bonuses="[100,115,4,17,0,10,5,0]" data-class="784" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T16:08:54Z">2015-09-19 16:08:54</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/784/852/4609/4866" style="background-position: -250px -1600px" data-class="784" data-skin="852" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188961</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3081"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,57,39,60,47,82,55]" data-bonuses="[100,0,7,14,5,7,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                        <td>96.</td>
                        <td><span class="private-character" style="background-position: -250px -150px"></span></td>
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
                            <a id="aL" class="character" href="/top-characters-with-outfit/784/0/4672/4864" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="167772201" data-dye2="67108864" data-accessory-dye-id="4864" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/HappyKarma">HappyKarma</a></td>
                        <td>2273</td>
                        <td>4135914</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[686,500,54,38,59,44,85,63]" data-bonuses="[100,115,4,13,4,4,10,8]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T00:55:58Z">2015-09-21 00:55:58</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/784/0/4697/4954" style="background-position: -250px -150px" data-class="784" data-skin="0" data-dye1="83886091" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Skullslice">Skullslice</a></td>
                        <td>2269</td>
                        <td>4127606</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[835,410,54,44,55,51,82,55]" data-bonuses="[165,25,4,19,0,11,7,0]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/784/905/4199/4455" style="background-position: -250px -2250px" data-class="784" data-skin="905" data-dye1="26803096" data-dye2="26803096" data-accessory-dye-id="4455" data-clothing-dye-id="4199" data-count="2"></a>
                        </td>
                        <td><a href="/player/ValleWest">ValleWest</a></td>
                        <td>2262</td>
                        <td>4113118</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3102"></span><span class="item" data-item="30051"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,445,53,35,64,44,75,59]" data-bonuses="[100,60,3,10,9,4,0,4]" data-class="784" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/784/884/4695/0" style="background-position: -250px -2600px" data-class="784" data-skin="884" data-dye1="83886089" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4695" data-count="11"></a>
                        </td>
                        <td><a href="/player/Badra">Badra</a></td>
                        <td>2255</td>
                        <td>4099275</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3102"></span><span class="item" data-item="2821"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[663,500,54,38,59,44,81,59]" data-bonuses="[100,115,4,13,4,4,6,4]" data-class="784" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:10:49Z">2015-09-19 20:10:49</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-priests">1 - 100</a></li>
                    <li><a href="/top-priests/101">101 - 200</a></li>
                    <li><a href="/top-priests/201">201 - 300</a></li>
                    <li><a href="/top-priests/301">301 - 400</a></li>
                    <li><a href="/top-priests/401">401 - 500</a></li>
                    <li><a href="/top-priests/501">501 - 600</a></li>
                    <li><a href="/top-priests/601">601 - 700</a></li>
                    <li><a href="/top-priests/701">701 - 800</a></li>
                    <li><a href="/top-priests/801">801 - 900</a></li>
                    <li><a href="/top-priests/901">901 - 1000</a></li>
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