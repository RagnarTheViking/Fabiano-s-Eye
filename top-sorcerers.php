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
    <title>Top Sorcerers 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Sorcerers">
    <meta name="description" content="Top Sorcerers 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Sorcerers</h1><p>This is a list of the top 1000 sorcerers by Exp seen in the past
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Sorcerers" href="/top-sorcerers"><span class="private-character" style="background-position: 0px -608px"></span>
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
                    <li class="active"><a href="/top-sorcerers">1 - 100</a></li>
                    <li><a href="/top-sorcerers/101">101 - 200</a></li>
                    <li><a href="/top-sorcerers/201">201 - 300</a></li>
                    <li><a href="/top-sorcerers/301">301 - 400</a></li>
                    <li><a href="/top-sorcerers/401">401 - 500</a></li>
                    <li><a href="/top-sorcerers/501">501 - 600</a></li>
                    <li><a href="/top-sorcerers/601">601 - 700</a></li>
                    <li><a href="/top-sorcerers/701">701 - 800</a></li>
                    <li><a href="/top-sorcerers/801">801 - 900</a></li>
                    <li><a href="/top-sorcerers/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/805/846/4658/4874" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>40000</td>
                        <td>79590001</td>
                        <td>
                            <span class="item" data-item="8999"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,66,44,60,82,69,60]" data-bonuses="[125,25,6,19,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/805/8855/4189/4390" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="33547445" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4189" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mojao">Mojao</a></td>
                        <td>13553</td>
                        <td>26694989</td>
                        <td>
                            <span class="item" data-item="3101"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,499,72,44,60,81,71,60]" data-bonuses="[60,115,12,19,0,6,11,0]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T15:54:45Z">2015-09-22 15:54:45</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/805/8976/4176/4402" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="25165824" data-dye2="25198720" data-accessory-dye-id="4402" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/AceCon">AceCon</a></td>
                        <td>12023</td>
                        <td>23636180</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,77,67,60]" data-bonuses="[60,115,12,19,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/805/846/4130/4399" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="21511563" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4130" data-count="1"></a>
                        </td>
                        <td><a href="/player/Glaede">Glaede</a></td>
                        <td>11000</td>
                        <td>21590000</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,440,66,38,60,77,67,60]" data-bonuses="[180,55,6,13,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td><span class="private-character" style="background-position: -250px -1300px"></span></td>
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
                            <a id="h" class="character" href="/top-characters-with-outfit/805/8855/4636/4892" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="150994951" data-dye2="150994951" data-accessory-dye-id="4892" data-clothing-dye-id="4636" data-count="1"></a>
                        </td>
                        <td><a href="/player/MopTosh">MopTosh</a></td>
                        <td>10000</td>
                        <td>19588979</td>
                        <td>
                            <span class="item" data-item="8854"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T04:25:32Z">2015-09-21 04:25:32</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/805/0/4103/4477" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="16777216" data-dye2="24150160" data-accessory-dye-id="4477" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Hpzorz">Hpzorz</a></td>
                        <td>9821</td>
                        <td>19232359</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T18:56:02Z">2015-09-20 18:56:02</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td><span class="private-character" style="background-position: -250px -1850px"></span></td>
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
                        <td>9.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/805/0/4196/4452" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="33506560" data-dye2="33506560" data-accessory-dye-id="4452" data-clothing-dye-id="4196" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nevov">Nevov</a></td>
                        <td>8282</td>
                        <td>16153366</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="8863"></span><span class="item" data-item="8960"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,66,46,60,75,68,60]" data-bonuses="[0,55,6,21,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T12:57:59Z">2015-09-13 12:57:59</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/805/0/4676/4930" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="150994956" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4676" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>8000</td>
                        <td>15589535</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T00:48:26Z">2015-09-22 00:48:26</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/805/0/4120/4392" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="27896233" data-dye2="23685481" data-accessory-dye-id="4392" data-clothing-dye-id="4120" data-count="1"></a>
                        </td>
                        <td><a href="/player/Curator">Curator</a></td>
                        <td>7833</td>
                        <td>15255226</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[658,403,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T17:50:52Z">2015-09-21 17:50:52</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/805/8976/4630/4891" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15144078</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,62,40,60,82,69,60]" data-bonuses="[205,25,2,15,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:30:26Z">2015-09-16 10:30:26</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/805/8976/4609/4477" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="67108865" data-dye2="24150160" data-accessory-dye-id="4477" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/Aether">Aether</a></td>
                        <td>7558</td>
                        <td>14704771</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[666,500,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T23:30:01Z">2015-09-21 23:30:01</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/805/0/4217/4468" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="27284013" data-dye2="25904403" data-accessory-dye-id="4468" data-clothing-dye-id="4217" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bobolo">Bobolo</a></td>
                        <td>7250</td>
                        <td>14089559</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2979"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,75,38,60,77,67,60]" data-bonuses="[0,55,15,13,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td><span class="private-character" style="background-position: -250px -3400px"></span></td>
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
                            <a id="p" class="character" href="/top-characters-with-outfit/805/8976/4654/4924" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772184" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/Makapaka">Makapaka</a></td>
                        <td>6958</td>
                        <td>13505764</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[755,470,68,46,60,82,69,60]" data-bonuses="[85,85,8,21,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/805/8855/4144/4400" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>6810</td>
                        <td>13209241</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:09:48Z">2015-09-22 03:09:48</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/805/899/4109/4373" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="23043744" data-dye2="16777355" data-accessory-dye-id="4373" data-clothing-dye-id="4109" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>6800</td>
                        <td>13189248</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2867"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,64,44,60,84,69,60]" data-bonuses="[125,25,4,19,0,9,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/805/0/4649/4404" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772179" data-dye2="28180271" data-accessory-dye-id="4404" data-clothing-dye-id="4649" data-count="1"></a>
                        </td>
                        <td><a href="/player/Karaffe">Karaffe</a></td>
                        <td>6785</td>
                        <td>13159823</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="8863"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[706,460,66,42,60,79,68,60]" data-bonuses="[60,115,6,17,0,4,8,0]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T11:11:30Z">2015-09-23 11:11:30</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/805/846/4099/4925" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="25165780" data-dye2="167772198" data-accessory-dye-id="4925" data-clothing-dye-id="4099" data-count="1"></a>
                        </td>
                        <td><a href="/player/PooScoo">PooScoo</a></td>
                        <td>6477</td>
                        <td>12544305</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,356,66,46,60,77,71,64]" data-bonuses="[0,55,6,21,0,2,11,4]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T19:05:57Z">2015-09-12 19:05:57</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/805/8976/4635/4888" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994950" data-dye2="150994947" data-accessory-dye-id="4888" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/Gahruiva">Gahruiva</a></td>
                        <td>6125</td>
                        <td>11838823</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[695,510,62,40,60,82,77,68]" data-bonuses="[25,125,2,15,0,7,17,8]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T04:36:11Z">2015-09-14 04:36:11</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/805/9013/4103/4890" style="background-position: -250px -1850px" data-class="805" data-skin="9013" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>5631</td>
                        <td>10851592</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,540,66,38,60,77,71,64]" data-bonuses="[0,155,6,13,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:00:57Z">2015-09-16 23:00:57</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/805/8976/4634/4869" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994949" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/CeeBo">CeeBo</a></td>
                        <td>5630</td>
                        <td>10849101</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T21:44:48Z">2015-09-13 21:44:48</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/805/0/4144/4464" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>5532</td>
                        <td>10653882</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[690,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/805/0/0/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="2042"></a>
                        </td>
                        <td><a href="/player/Retor">Retor</a></td>
                        <td>5528</td>
                        <td>10645795</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,62,40,60,82,69,60]" data-bonuses="[205,25,2,15,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T07:54:40Z">2015-09-23 07:54:40</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/805/0/4195/4451" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="33531136" data-dye2="33531136" data-accessory-dye-id="4451" data-clothing-dye-id="4195" data-count="1"></a>
                        </td>
                        <td><a href="/player/PrinceYimi">PrinceYimi</a></td>
                        <td>5318</td>
                        <td>10224875</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,550,66,44,66,77,71,64]" data-bonuses="[0,165,6,19,6,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T16:13:12Z">2015-09-20 16:13:12</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/805/8976/4613/4904" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994945" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/TrippinOut">TrippinOut</a></td>
                        <td>5151</td>
                        <td>9891856</td>
                        <td>
                            <span class="item" data-item="8999"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/805/846/4103/4359" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>5045</td>
                        <td>9679303</td>
                        <td>
                            <span class="item" data-item="8999"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,66,44,60,82,69,60]" data-bonuses="[125,25,6,19,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/805/0/4659/4911" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772189" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Citrus">Citrus</a></td>
                        <td>5006</td>
                        <td>9602294</td>
                        <td>
                            <span class="item" data-item="8999"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/805/0/0/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="2042"></a>
                        </td>
                        <td><a href="/player/kxMTLXmRG8c">Uoro</a></td>
                        <td>4817</td>
                        <td>9223657</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[810,440,66,38,60,77,67,60]" data-bonuses="[140,55,6,13,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T13:55:16Z">2015-09-20 13:55:16</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/805/8976/4700/4956" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994958" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cantha">Cantha</a></td>
                        <td>4400</td>
                        <td>8389718</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[875,410,62,40,60,82,69,60]" data-bonuses="[205,25,2,15,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/805/8976/4663/4443" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772192" data-dye2="32899066" data-accessory-dye-id="4443" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/XSeek">XSeek</a></td>
                        <td>4370</td>
                        <td>8329234</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="8863"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,75,68,60]" data-bonuses="[100,55,10,17,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/805/8855/4103/4359" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>4250</td>
                        <td>8089473</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:19:14Z">2015-09-11 04:19:14</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/805/0/0/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="2042"></a>
                        </td>
                        <td><a href="/player/Andrij">Andrij</a></td>
                        <td>4205</td>
                        <td>8000726</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T15:22:53Z">2015-09-15 15:22:53</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/805/8976/0/0" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="85"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>4194</td>
                        <td>7978291</td>
                        <td>
                            <span class="item" data-item="3856"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/805/846/4618/4488" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772164" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/WhyteeNigg">WhyteeNigg</a></td>
                        <td>4104</td>
                        <td>7796995</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="8616"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[811,390,66,41,63,75,66,67]" data-bonuses="[141,5,6,16,3,0,6,7]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/805/8855/4697/4953" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="83886091" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dragounov">Dragounov</a></td>
                        <td>4001</td>
                        <td>7592249</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/805/846/4218/4490" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="29409472" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4218" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>3977</td>
                        <td>7542793</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:47:41Z">2015-09-20 20:47:41</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/805/8855/4154/4421" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="32564876" data-dye2="33535681" data-accessory-dye-id="4421" data-clothing-dye-id="4154" data-count="1"></a>
                        </td>
                        <td><a href="/player/Meio">Meio</a></td>
                        <td>3826</td>
                        <td>7242312</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,75,68,60]" data-bonuses="[60,115,12,19,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/805/8855/4103/4359" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Crussell">Crussell</a></td>
                        <td>3800</td>
                        <td>7189352</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,410,68,40,60,82,69,66]" data-bonuses="[135,25,8,15,0,7,9,6]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/805/0/4103/4355" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="16777216" data-dye2="25165780" data-accessory-dye-id="4355" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Starstream">Starstream</a></td>
                        <td>3575</td>
                        <td>6740606</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/805/0/4638/4393" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="150994952" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4638" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hellas">Hellas</a></td>
                        <td>3549</td>
                        <td>6687646</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T17:37:46Z">2015-09-18 17:37:46</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/805/8976/4698/4954" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="2"></a>
                        </td>
                        <td><a href="/player/SpaceChief">SpaceChief</a></td>
                        <td>3484</td>
                        <td>6557551</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T00:37:12Z">2015-09-16 00:37:12</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/805/8855/4637/4359" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>3463</td>
                        <td>6516703</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td><span class="private-character" style="background-position: -250px -4050px"></span></td>
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
                            <a id="S" class="character" href="/top-characters-with-outfit/805/846/4630/4359" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255158</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,66,44,60,82,69,60]" data-bonuses="[125,25,6,19,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/805/0/4191/4943" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="16777344" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4191" data-count="1"></a>
                        </td>
                        <td><a href="/player/JGWentwort">JGWentwort</a></td>
                        <td>3278</td>
                        <td>6146313</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T19:20:50Z">2015-09-10 19:20:50</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/805/0/4178/4865" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="16777421" data-dye2="67108865" data-accessory-dye-id="4865" data-clothing-dye-id="4178" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nrcolepsy">Nrcolepsy</a></td>
                        <td>3243</td>
                        <td>6075603</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[642,415,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/805/846/4103/4359" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="8"></a>
                        </td>
                        <td><a href="/player/Zorpox">Zorpox</a></td>
                        <td>3188</td>
                        <td>5965615</td>
                        <td>
                            <span class="item" data-item="2784"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T23:57:37Z">2015-09-19 23:57:37</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/805/8976/4676/4932" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994956" data-dye2="150994956" data-accessory-dye-id="4932" data-clothing-dye-id="4676" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>3174</td>
                        <td>5938086</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="9052"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[795,410,66,44,60,82,69,60]" data-bonuses="[125,25,6,19,0,7,9,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T01:06:00Z">2015-09-12 01:06:00</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/805/8976/4684/4940" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772207" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>3162</td>
                        <td>5914697</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:32:03Z">2015-09-21 12:32:03</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/805/899/0/4951" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="0" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="0" data-count="3"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>3130</td>
                        <td>5850589</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="8863"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,75,68,60]" data-bonuses="[60,115,12,19,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T22:00:12Z">2015-09-14 22:00:12</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/805/0/4625/4881" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772171" data-dye2="167772171" data-accessory-dye-id="4881" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Atoskun">Atoskun</a></td>
                        <td>3120</td>
                        <td>5828759</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,550,66,44,66,77,71,64]" data-bonuses="[0,165,6,19,6,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T11:41:29Z">2015-09-23 11:41:29</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/805/899/4103/4359" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/Rr">Rr</a></td>
                        <td>3111</td>
                        <td>5811735</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,550,66,44,66,75,68,60]" data-bonuses="[0,165,6,19,6,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/805/8855/4135/4390" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="16826367" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4135" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pallladino">Pallladino</a></td>
                        <td>3030</td>
                        <td>5649965</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,69,39,65,75,62,60]" data-bonuses="[100,0,9,14,5,0,2,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/805/846/4673/4867" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772202" data-dye2="83886081" data-accessory-dye-id="4867" data-clothing-dye-id="4673" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seikon">Seikon</a></td>
                        <td>3029</td>
                        <td>5647624</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T14:57:58Z">2015-09-23 14:57:58</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/805/8976/4232/4405" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="33554431" data-dye2="32571376" data-accessory-dye-id="4405" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mag">Mag</a></td>
                        <td>3022</td>
                        <td>5634409</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,69,39,65,75,62,60]" data-bonuses="[100,0,9,14,5,0,2,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T03:37:11Z">2015-09-18 03:37:11</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/805/0/4146/4480" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>3001</td>
                        <td>5590873</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,72,44,60,77,67,60]" data-bonuses="[60,115,12,19,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:47:58Z">2015-09-16 23:47:58</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/805/0/4103/4359" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="13"></a>
                        </td>
                        <td><a href="/player/Dajcobra">Dajcobra</a></td>
                        <td>3000</td>
                        <td>5589223</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[672,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T03:35:28Z">2015-09-17 03:35:28</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/805/0/4609/4900" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="67108865" data-dye2="67108869" data-accessory-dye-id="4900" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/California">California</a></td>
                        <td>3000</td>
                        <td>5588972</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,75,68,60]" data-bonuses="[100,55,10,17,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/805/0/4694/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="83886088" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4694" data-count="7"></a>
                        </td>
                        <td><a href="/player/Litejason">Litejason</a></td>
                        <td>3000</td>
                        <td>5588931</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[769,348,70,42,60,75,68,60]" data-bonuses="[100,55,10,17,0,0,8,0]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T00:34:47Z">2015-09-16 00:34:47</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/805/0/0/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="2042"></a>
                        </td>
                        <td><a href="/player/Inkinf">Inkinf</a></td>
                        <td>2989</td>
                        <td>5567982</td>
                        <td>
                            <span class="item" data-item="9084"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[653,458,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T08:01:53Z">2015-09-18 08:01:53</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/805/8976/0/0" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="85"></a>
                        </td>
                        <td><a href="/player/JimReborn">JimReborn</a></td>
                        <td>2937</td>
                        <td>5464749</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="-1"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[645,410,63,42,60,81,50,58]" data-bonuses="[60,115,4,17,0,6,5,0]" data-class="805" data-level="20">3/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/805/0/4698/4952" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772216" data-dye2="83886090" data-accessory-dye-id="4952" data-clothing-dye-id="4698" data-count="2"></a>
                        </td>
                        <td><a href="/player/Hacilas">Hacilas</a></td>
                        <td>2908</td>
                        <td>5405677</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2867"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,426,64,42,60,83,67,60]" data-bonuses="[60,115,4,17,0,8,7,0]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T13:50:20Z">2015-09-23 13:50:20</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/805/8976/4105/4361" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>2900</td>
                        <td>5389401</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2867"></span><span class="item" data-item="2821"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,440,64,47,60,77,68,60]" data-bonuses="[0,55,4,22,0,2,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T12:55:50Z">2015-09-18 12:55:50</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/805/899/4134/4408" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="33494163" data-dye2="21692546" data-accessory-dye-id="4408" data-clothing-dye-id="4134" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2842</td>
                        <td>5273157</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,75,68,60]" data-bonuses="[100,55,10,17,0,0,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/805/0/4694/4943" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="83886088" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/Redlegos">Redlegos</a></td>
                        <td>2768</td>
                        <td>5126225</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[640,430,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T20:20:03Z">2015-09-20 20:20:03</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/805/899/4700/4410" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="150994958" data-dye2="32564876" data-accessory-dye-id="4410" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/LaDArbok">LaDArbok</a></td>
                        <td>2720</td>
                        <td>5029777</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T03:18:08Z">2015-09-11 03:18:08</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/805/0/4234/4490" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="33554176" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4234" data-count="2"></a>
                        </td>
                        <td><a href="/player/BuffGuy">BuffGuy</a></td>
                        <td>2650</td>
                        <td>4889177</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[631,433,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T22:15:59Z">2015-09-19 22:15:59</span></td>
                        <td><abbr title="USWest3">USW3</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/805/0/4230/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="32408302" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4230" data-count="1"></a>
                        </td>
                        <td><a href="/player/Orsogufo">Orsogufo</a></td>
                        <td>2629</td>
                        <td>4846994</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-14T14:21:08Z">2015-09-14 14:21:08</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/805/0/4697/4953" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="83886091" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4697" data-count="4"></a>
                        </td>
                        <td><a href="/player/SantaII">SantaII</a></td>
                        <td>2625</td>
                        <td>4840241</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="2821"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,79,68,60]" data-bonuses="[60,115,6,17,0,4,8,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T02:47:27Z">2015-09-22 02:47:27</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/805/846/4659/4917" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772189" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Babies">Babies</a></td>
                        <td>2589</td>
                        <td>4767297</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T19:16:34Z">2015-09-15 19:16:34</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/805/0/4225/4481" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="30585996" data-dye2="30585996" data-accessory-dye-id="4481" data-clothing-dye-id="4225" data-count="1"></a>
                        </td>
                        <td><a href="/player/MrPoopface">MrPoopface</a></td>
                        <td>2584</td>
                        <td>4757334</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T02:18:39Z">2015-09-16 02:18:39</span></td>
                        <td><abbr title="USMidWest">USMW</abbr></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/805/8855/4652/4909" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>2508</td>
                        <td>4605971</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/805/0/4698/4954" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772216" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4698" data-count="29"></a>
                        </td>
                        <td><a href="/player/Mint">Mint</a></td>
                        <td>2505</td>
                        <td>4600621</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/805/8976/4634/0" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="150994949" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4634" data-count="3"></a>
                        </td>
                        <td><a href="/player/BASTIANT">BASTIANT</a></td>
                        <td>2500</td>
                        <td>4590239</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/805/846/4103/4464" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/LabdaABeta">LabdaABeta</a></td>
                        <td>2490</td>
                        <td>4569725</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:29:21Z">2015-09-22 21:29:21</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/805/0/0/4949" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="0" data-count="3"></a>
                        </td>
                        <td><a href="/player/Nonlooser">Nonlooser</a></td>
                        <td>2478</td>
                        <td>4545206</td>
                        <td>
                            <span class="item" data-item="9084"></span><span class="item" data-item="2867"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[650,407,64,42,60,83,67,60]" data-bonuses="[60,115,4,17,0,8,7,0]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:35:15Z">2015-09-21 22:35:15</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/805/899/4619/4951" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="167772165" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4619" data-count="1"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2455</td>
                        <td>4500135</td>
                        <td>
                            <span class="item" data-item="3856"></span><span class="item" data-item="2866"></span><span class="item" data-item="2710"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,495,63,41,60,79,66,60]" data-bonuses="[60,110,3,16,0,4,6,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/805/8976/4667/4923" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="167772196" data-dye2="167772196" data-accessory-dye-id="4923" data-clothing-dye-id="4667" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2421</td>
                        <td>4432054</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T23:39:26Z">2015-09-12 23:39:26</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/805/846/4233/4891" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="32896501" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409077</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="2867"></span><span class="item" data-item="2821"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[571,453,64,44,66,77,68,60]" data-bonuses="[0,165,4,19,6,2,8,0]" data-class="805" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/805/0/4650/4906" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772180" data-dye2="167772180" data-accessory-dye-id="4906" data-clothing-dye-id="4650" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fizzinc">Fizzinc</a></td>
                        <td>2400</td>
                        <td>4390158</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T06:09:25Z">2015-09-21 06:09:25</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/805/0/4640/4896" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="83886083" data-dye2="83886083" data-accessory-dye-id="4896" data-clothing-dye-id="4640" data-count="2"></a>
                        </td>
                        <td><a href="/player/Waaatch">Waaatch</a></td>
                        <td>2397</td>
                        <td>4384284</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T05:17:56Z">2015-09-20 05:17:56</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/805/9013/0/4954" style="background-position: -250px -1850px" data-class="805" data-skin="9013" data-dye1="0" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="0" data-count="4"></a>
                        </td>
                        <td><a href="/player/TenebrisX">TenebrisX</a></td>
                        <td>2375</td>
                        <td>4338923</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T16:14:15Z">2015-09-21 16:14:15</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/805/8855/4201/4421" style="background-position: -250px -3400px" data-class="805" data-skin="8855" data-dye1="30961811" data-dye2="33535681" data-accessory-dye-id="4421" data-clothing-dye-id="4201" data-count="1"></a>
                        </td>
                        <td><a href="/player/Melofee">Melofee</a></td>
                        <td>2369</td>
                        <td>4328409</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T13:12:28Z">2015-09-10 13:12:28</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/805/899/4630/4886" style="background-position: -250px -3050px" data-class="805" data-skin="899" data-dye1="167772176" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheMErnon">TheMErnon</a></td>
                        <td>2369</td>
                        <td>4327890</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T20:33:02Z">2015-09-09 20:33:02</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/805/0/4641/4472" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="83886084" data-dye2="33551854" data-accessory-dye-id="4472" data-clothing-dye-id="4641" data-count="1"></a>
                        </td>
                        <td><a href="/player/AssualtBS">AssualtBS</a></td>
                        <td>2357</td>
                        <td>4303024</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T00:26:30Z">2015-09-19 00:26:30</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/805/0/4184/4456" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="21549516" data-dye2="28307182" data-accessory-dye-id="4456" data-clothing-dye-id="4184" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuttering">Stuttering</a></td>
                        <td>2353</td>
                        <td>4296510</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/805/8976/4103/4390" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4279171</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,69,39,65,75,62,60]" data-bonuses="[100,0,9,14,5,0,2,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/805/0/0/0" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="2042"></a>
                        </td>
                        <td><a href="/player/Adariel">Adariel</a></td>
                        <td>2338</td>
                        <td>4265159</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,416,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/805/846/4687/4953" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="167772210" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/LeRoiLiche">LeRoiLiche</a></td>
                        <td>2326</td>
                        <td>4241546</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T14:24:48Z">2015-09-13 14:24:48</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/805/846/4645/4919" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="67108870" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/ThaOmantek">ThaOmantek</a></td>
                        <td>2322</td>
                        <td>4234600</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,67,60]" data-bonuses="[100,55,10,17,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T16:04:12Z">2015-09-21 16:04:12</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/805/8976/4695/0" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="83886089" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4695" data-count="2"></a>
                        </td>
                        <td><a href="/player/MooLooKoo">MooLooKoo</a></td>
                        <td>2320</td>
                        <td>4229868</td>
                        <td>
                            <span class="item" data-item="2806"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[812,500,72,44,60,77,67,60]" data-bonuses="[142,115,12,19,0,2,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/805/0/4125/4381" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="33524736" data-dye2="33524736" data-accessory-dye-id="4381" data-clothing-dye-id="4125" data-count="2"></a>
                        </td>
                        <td><a href="/player/Yamafly">Yamafly</a></td>
                        <td>2311</td>
                        <td>4211618</td>
                        <td>
                            <span class="item" data-item="2879"></span><span class="item" data-item="3120"></span><span class="item" data-item="30051"></span><span class="item" data-item="2983"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[670,385,65,35,65,75,71,60]" data-bonuses="[0,0,5,10,5,0,11,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T06:02:31Z">2015-09-11 06:02:31</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aP" class="character" href="/top-characters-with-outfit/805/0/4657/4883" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="167772187" data-dye2="167772173" data-accessory-dye-id="4883" data-clothing-dye-id="4657" data-count="1"></a>
                        </td>
                        <td><a href="/player/TomPooties">TomPooties</a></td>
                        <td>2300</td>
                        <td>4190571</td>
                        <td>
                            <span class="item" data-item="8854"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,67,60]" data-bonuses="[60,115,6,17,0,6,7,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T20:34:09Z">2015-09-16 20:34:09</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aQ" class="character" href="/top-characters-with-outfit/805/846/4696/4950" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="83886090" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4696" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kronoszs">Kronoszs</a></td>
                        <td>2300</td>
                        <td>4189453</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="2866"></span><span class="item" data-item="3122"></span><span class="item" data-item="2765"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[749,440,64,38,60,77,69,64]" data-bonuses="[140,55,4,13,0,2,9,4]" data-class="805" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T18:13:46Z">2015-09-10 18:13:46</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aR" class="character" href="/top-characters-with-outfit/805/8976/4609/4866" style="background-position: -250px -4050px" data-class="805" data-skin="8976" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188819</td>
                        <td>
                            <span class="item" data-item="3076"></span><span class="item" data-item="3120"></span><span class="item" data-item="30051"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,385,69,39,65,75,62,60]" data-bonuses="[100,0,9,14,5,0,2,0]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aS" class="character" href="/top-characters-with-outfit/805/846/4232/4488" style="background-position: -250px -1300px" data-class="805" data-skin="846" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="3"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2298</td>
                        <td>4185634</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[730,500,66,42,60,81,71,64]" data-bonuses="[60,115,6,17,0,6,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:02:43Z">2015-09-10 15:02:43</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td><span class="private-character" style="background-position: -250px -3400px"></span></td>
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
                        <td>100.</td>
                        <td>
                            <a id="aT" class="character" href="/top-characters-with-outfit/805/0/4137/4894" style="background-position: -250px -600px" data-class="805" data-skin="0" data-dye1="18780415" data-dye2="150994952" data-accessory-dye-id="4894" data-clothing-dye-id="4137" data-count="1"></a>
                        </td>
                        <td><a href="/player/Daydreamm">Daydreamm</a></td>
                        <td>2277</td>
                        <td>4144040</td>
                        <td>
                            <span class="item" data-item="3123"></span><span class="item" data-item="3120"></span><span class="item" data-item="3122"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,440,70,42,60,77,71,64]" data-bonuses="[100,55,10,17,0,2,11,4]" data-class="805" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-sorcerers">1 - 100</a></li>
                    <li><a href="/top-sorcerers/101">101 - 200</a></li>
                    <li><a href="/top-sorcerers/201">201 - 300</a></li>
                    <li><a href="/top-sorcerers/301">301 - 400</a></li>
                    <li><a href="/top-sorcerers/401">401 - 500</a></li>
                    <li><a href="/top-sorcerers/501">501 - 600</a></li>
                    <li><a href="/top-sorcerers/601">601 - 700</a></li>
                    <li><a href="/top-sorcerers/701">701 - 800</a></li>
                    <li><a href="/top-sorcerers/801">801 - 900</a></li>
                    <li><a href="/top-sorcerers/901">901 - 1000</a></li>
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