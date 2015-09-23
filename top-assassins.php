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
    <title>Top Assassins 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Assassins">
    <meta name="description" content="Top Assassins 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Assassins</h1><p>This is a list of the top 1000 assassins by Exp seen in the past
                two weeks in RotMG.</p><p>Click on a button below to see the list for another class.</p>
            <div class="text-center">
                <div class="btn-group">
                    <a class="btn btn-default list-selector-item" title="Top Archers" href="/top-archers"><span class="private-character" style="background-position: 0px -58px"></span>
                        <div class="list-selector-item-label">Archers</div>
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Assassins" href="/top-assassins"><span class="private-character" style="background-position: 0px -358px"></span>
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
                    </a><a class="btn btn-default list-selector-item" title="Top Wizards" href="/top-wizards"><span class="private-character" style="background-position: 0px -108px"></span>
                        <div class="list-selector-item-label">Wizards</div>
                    </a></div>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-assassins">1 - 100</a></li>
                    <li><a href="/top-assassins/101">101 - 200</a></li>
                    <li><a href="/top-assassins/201">201 - 300</a></li>
                    <li><a href="/top-assassins/301">301 - 400</a></li>
                    <li><a href="/top-assassins/401">401 - 500</a></li>
                    <li><a href="/top-assassins/501">501 - 600</a></li>
                    <li><a href="/top-assassins/601">601 - 700</a></li>
                    <li><a href="/top-assassins/701">701 - 800</a></li>
                    <li><a href="/top-assassins/801">801 - 900</a></li>
                    <li><a href="/top-assassins/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/800/0/4103/4465" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/DRMlNl">DRMlNl</a></td>
                        <td>27654</td>
                        <td>54897173</td>
                        <td>
                            <span class="item" data-item="2697"></span><span class="item" data-item="2723"></span><span class="item" data-item="2622"></span><span class="item" data-item="2761"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[719,201,60,36,86,40,60,78]" data-bonuses="[0,0,0,11,11,0,0,3]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td><span class="private-character" style="background-position: -250px -350px"></span></td>
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
                            <a id="e" class="character" href="/top-characters-with-outfit/800/29814/4232/4488" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="33554431" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4232" data-count="2"></a>
                        </td>
                        <td><a href="/player/Servusyou">Servusyou</a></td>
                        <td>11083</td>
                        <td>21756257</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,41,82,42,62,83]" data-bonuses="[60,60,0,16,7,2,2,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/800/912/4630/4891" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143655</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,62,41,78,40,66,79]" data-bonuses="[180,0,2,16,3,0,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:45:40Z">2015-09-16 10:45:40</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/800/29770/4209/4901" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="33488896" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/DELer">DELer</a></td>
                        <td>7777</td>
                        <td>15143645</td>
                        <td>
                            <span class="item" data-item="3106"></span><span class="item" data-item="2858"></span><span class="item" data-item="3202"></span><span class="item" data-item="2597"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[620,252,60,28,75,42,62,75]" data-bonuses="[-100,0,0,3,0,2,2,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T10:06:24Z">2015-09-20 10:06:24</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td><span class="private-character" style="background-position: -250px -2500px"></span></td>
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
                        <td><span class="private-character" style="background-position: -250px -350px"></span></td>
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
                            <a id="h" class="character" href="/top-characters-with-outfit/800/912/4692/4956" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772215" data-dye2="150994958" data-accessory-dye-id="4956" data-clothing-dye-id="4692" data-count="2"></a>
                        </td>
                        <td><a href="/player/Becomeone">Becomeone</a></td>
                        <td>6343</td>
                        <td>12275524</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[802,220,62,41,78,40,62,79]" data-bonuses="[180,0,2,16,3,0,2,4]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:29:25Z">2015-09-22 21:29:25</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/800/29770/4144/4464" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="33543936" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/Blar">Blar</a></td>
                        <td>6000</td>
                        <td>11589340</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[690,312,60,46,75,46,62,80]" data-bonuses="[60,60,0,21,0,6,2,5]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/800/841/4233/4393" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="32896501" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Yamafly">Yamafly</a></td>
                        <td>5555</td>
                        <td>10700140</td>
                        <td>
                            <span class="item" data-item="9000"></span><span class="item" data-item="3181"></span><span class="item" data-item="30050"></span><span class="item" data-item="2986"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,432,62,34,75,40,62,75]" data-bonuses="[50,180,2,9,0,0,2,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T06:02:02Z">2015-09-11 06:02:02</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>11.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/800/0/4104/4457" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="33549261" data-dye2="30961811" data-accessory-dye-id="4457" data-clothing-dye-id="4104" data-count="1"></a>
                        </td>
                        <td><a href="/player/Splendidit">Splendidit</a></td>
                        <td>5519</td>
                        <td>10628492</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,46,75,46,62,80]" data-bonuses="[60,60,0,21,0,6,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T12:38:48Z">2015-09-23 12:38:48</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/800/29814/4684/4489" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="167772207" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>5200</td>
                        <td>9989651</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,60,51,75,42,62,80]" data-bonuses="[0,0,0,26,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td>
                            <a id="m" class="character" href="/top-characters-with-outfit/800/29770/0/0" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="432"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>5018</td>
                        <td>9625569</td>
                        <td>
                            <span class="item" data-item="-1"></span><span class="item" data-item="-1"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[815,248,63,44,78,40,60,78]" data-bonuses="[100,0,4,20,3,0,0,4]" data-class="800" data-level="20">3/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T12:32:32Z">2015-09-21 12:32:32</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>14.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/800/912/4658/4874" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5000</td>
                        <td>9589192</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,44,64,80]" data-bonuses="[100,0,4,21,0,4,4,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="o" class="character" href="/top-characters-with-outfit/800/29770/4645/4932" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="67108870" data-dye2="150994956" data-accessory-dye-id="4932" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>4741</td>
                        <td>9070899</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,45,78,42,62,79]" data-bonuses="[100,0,4,20,3,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:47:56Z">2015-09-22 21:47:56</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td><span class="private-character" style="background-position: -250px -5150px"></span></td>
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
                            <a id="p" class="character" href="/top-characters-with-outfit/800/841/4103/4869" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="16777216" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>4104</td>
                        <td>7798348</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,46,71,75]" data-bonuses="[100,80,4,18,3,6,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/800/0/4150/4406" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="33515956" data-dye2="33515956" data-accessory-dye-id="4406" data-clothing-dye-id="4150" data-count="1"></a>
                        </td>
                        <td><a href="/player/Budderking">Budderking</a></td>
                        <td>3934</td>
                        <td>7457440</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="-1"></span><span class="item" data-item="2809"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[675,260,60,42,79,30,64,84]" data-bonuses="[60,60,0,17,4,0,4,9]" data-class="800" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T05:39:57Z">2015-09-13 05:39:57</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/800/912/0/0" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="82"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>3763</td>
                        <td>7116274</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,66,46,75,40,66,80]" data-bonuses="[100,0,6,21,0,0,6,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:03:22Z">2015-09-20 17:03:22</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/800/912/4687/4943" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772210" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/BiGMACC">BiGMACC</a></td>
                        <td>3701</td>
                        <td>6991961</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="-1"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,63,39,78,40,60,78]" data-bonuses="[180,0,3,14,3,0,0,3]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T07:28:58Z">2015-09-21 07:28:58</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/800/29770/4103/4465" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="16777216" data-dye2="33488896" data-accessory-dye-id="4465" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>3690</td>
                        <td>6969276</td>
                        <td>
                            <span class="item" data-item="2697"></span><span class="item" data-item="3181"></span><span class="item" data-item="30050"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[690,349,61,33,74,39,65,78]" data-bonuses="[50,100,2,9,0,0,6,4]" data-class="800" data-level="20">0/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/800/0/4666/4919" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772195" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kreg">Kreg</a></td>
                        <td>3661</td>
                        <td>6911640</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,392,60,43,78,46,67,75]" data-bonuses="[60,140,0,18,3,6,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T22:18:59Z">2015-09-19 22:18:59</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/800/841/4232/4911" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="33554431" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Baimbi">Baimbi</a></td>
                        <td>3604</td>
                        <td>6796960</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="2728"></span><span class="item" data-item="2703"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,45,75,44,60,79]" data-bonuses="[60,60,0,20,0,4,0,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T23:24:00Z">2015-09-19 23:24:00</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>24.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/800/0/4622/4930" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772168" data-dye2="150994954" data-accessory-dye-id="4930" data-clothing-dye-id="4622" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tibus">Tibus</a></td>
                        <td>3562</td>
                        <td>6713941</td>
                        <td>
                            <span class="item" data-item="8845"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,66,45,78,40,62,79]" data-bonuses="[100,0,6,20,3,0,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T16:41:07Z">2015-09-12 16:41:07</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/800/912/4630/4359" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255886</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,66,45,78,40,66,79]" data-bonuses="[100,0,6,20,3,0,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/800/29770/4646/4869" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="67108871" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4646" data-count="1"></a>
                        </td>
                        <td><a href="/player/GodOfGravy">GodOfGravy</a></td>
                        <td>3333</td>
                        <td>6255386</td>
                        <td>
                            <span class="item" data-item="9000"></span><span class="item" data-item="2858"></span><span class="item" data-item="8609"></span><span class="item" data-item="3167"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[745,162,60,37,85,52,52,75]" data-bonuses="[25,-90,0,12,10,12,-8,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/800/29770/0/0" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="432"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>3286</td>
                        <td>6161043</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,432,60,39,78,42,71,79]" data-bonuses="[0,180,0,14,3,2,11,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/800/29791/4103/4890" style="background-position: -250px -4500px" data-class="800" data-skin="29791" data-dye1="16777216" data-dye2="150994949" data-accessory-dye-id="4890" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hoborg">Hoborg</a></td>
                        <td>3252</td>
                        <td>6093528</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2728"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,41,82,40,60,83]" data-bonuses="[60,60,0,16,7,0,0,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T09:12:45Z">2015-09-23 09:12:45</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/800/0/4103/4464" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>3225</td>
                        <td>6038917</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,60,45,84,42,67,75]" data-bonuses="[0,190,0,20,9,2,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:18:30Z">2015-09-11 04:18:30</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/800/912/4623/4432" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772169" data-dye2="25165824" data-accessory-dye-id="4432" data-clothing-dye-id="4623" data-count="1"></a>
                        </td>
                        <td><a href="/player/Cookeyz">Cookeyz</a></td>
                        <td>3068</td>
                        <td>5726006</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,45,78,42,62,79]" data-bonuses="[100,0,4,20,3,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T08:53:21Z">2015-09-12 08:53:21</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/800/29770/4652/4908" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772182" data-dye2="167772182" data-accessory-dye-id="4908" data-clothing-dye-id="4652" data-count="2"></a>
                        </td>
                        <td><a href="/player/Wahoojie">Wahoojie</a></td>
                        <td>3044</td>
                        <td>5678666</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,60,42,75,42,62,80]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T21:22:04Z">2015-09-18 21:22:04</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>32.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/800/29791/4105/4361" style="background-position: -250px -4500px" data-class="800" data-skin="29791" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5589989</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,60,42,75,42,62,80]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T08:48:00Z">2015-09-22 08:48:00</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/800/29770/4233/4898" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="32896501" data-dye2="67108867" data-accessory-dye-id="4898" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Mangonator">Mangonator</a></td>
                        <td>2979</td>
                        <td>5547260</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,352,60,41,78,42,66,83]" data-bonuses="[0,100,0,16,3,2,6,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T05:48:11Z">2015-09-20 05:48:11</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/800/841/4103/4359" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Rr">Rr</a></td>
                        <td>2949</td>
                        <td>5487023</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[636,362,60,47,84,42,62,79]" data-bonuses="[0,110,0,22,9,2,2,4]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/800/912/4647/4940" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="167772177" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4647" data-count="1"></a>
                        </td>
                        <td><a href="/player/Spellparty">Spellparty</a></td>
                        <td>2910</td>
                        <td>5410094</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="3181"></span><span class="item" data-item="29768"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[804,293,62,39,78,44,71,75]" data-bonuses="[180,80,2,14,3,4,11,0]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T00:07:06Z">2015-09-23 00:07:06</span></td>
                        <td><abbr title="EUWest2">EUW2</abbr></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/800/29770/4700/0" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="150994958" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4700" data-count="1"></a>
                        </td>
                        <td><a href="/player/NPENEW">NPENEW</a></td>
                        <td>2749</td>
                        <td>5087408</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,67,43,78,46,66,78]" data-bonuses="[100,0,7,18,3,6,6,3]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T20:01:33Z">2015-09-12 20:01:33</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/800/841/4103/4919" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="16777216" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/ThaOmantek">ThaOmantek</a></td>
                        <td>2657</td>
                        <td>4903116</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,42,67,75]" data-bonuses="[100,80,4,18,3,2,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T16:04:53Z">2015-09-21 16:04:53</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/800/912/4645/4950" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="67108870" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/GgSui">GgSui</a></td>
                        <td>2592</td>
                        <td>4773278</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="3181"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,62,45,84,40,67,75]" data-bonuses="[0,190,2,20,9,0,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/800/0/4225/4363" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="30585996" data-dye2="27601450" data-accessory-dye-id="4363" data-clothing-dye-id="4225" data-count="1"></a>
                        </td>
                        <td><a href="/player/MrPoopface">MrPoopface</a></td>
                        <td>2567</td>
                        <td>4722777</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,41,82,42,62,83]" data-bonuses="[60,60,0,16,7,2,2,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T18:01:29Z">2015-09-09 18:01:29</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/800/0/4637/4490" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="67108866" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/Raiener">Raiener</a></td>
                        <td>2547</td>
                        <td>4683614</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,60,42,75,42,62,80]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T08:08:35Z">2015-09-23 08:08:35</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/800/29814/4686/4943" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="167772209" data-dye2="167772210" data-accessory-dye-id="4943" data-clothing-dye-id="4686" data-count="1"></a>
                        </td>
                        <td><a href="/player/FEGGGGG">FEGGGGG</a></td>
                        <td>2545</td>
                        <td>4678950</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,42,71,75]" data-bonuses="[100,80,4,18,3,2,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/800/29770/4103/4882" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="16777216" data-dye2="167772172" data-accessory-dye-id="4882" data-clothing-dye-id="4103" data-count="2"></a>
                        </td>
                        <td><a href="/player/Crussell">Crussell</a></td>
                        <td>2525</td>
                        <td>4639073</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,62,46,75,44,66,80]" data-bonuses="[60,60,2,21,0,4,6,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/800/29770/4698/4361" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772216" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bluenoser">Bluenoser</a></td>
                        <td>2509</td>
                        <td>4606949</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T21:00:53Z">2015-09-19 21:00:53</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td><span class="private-character" style="background-position: -250px -2500px"></span></td>
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
                        <td>45.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/800/912/4609/4866" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2500</td>
                        <td>4588983</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,66,45,78,40,66,79]" data-bonuses="[100,0,6,20,3,0,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td><span class="private-character" style="background-position: -250px -1050px"></span></td>
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
                            <a id="R" class="character" href="/top-characters-with-outfit/800/0/4664/4431" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772193" data-dye2="33489151" data-accessory-dye-id="4431" data-clothing-dye-id="4664" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2500</td>
                        <td>4588827</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,60,45,84,46,71,75]" data-bonuses="[0,190,0,20,9,6,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:04:00Z">2015-09-20 04:04:00</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/800/841/4186/4371" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="18422128" data-dye2="31200316" data-accessory-dye-id="4371" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2477</td>
                        <td>4543102</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,352,62,41,78,40,70,83]" data-bonuses="[0,100,2,16,3,0,10,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T15:03:20Z">2015-09-10 15:03:20</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/800/0/4698/4940" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772216" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4698" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jumnn">Jumnn</a></td>
                        <td>2470</td>
                        <td>4530013</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,41,82,42,62,83]" data-bonuses="[60,60,0,16,7,2,2,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T01:57:57Z">2015-09-21 01:57:57</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/800/0/4133/4490" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="26476755" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4133" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fruttti">Fruttti</a></td>
                        <td>2468</td>
                        <td>4526743</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,45,78,46,62,79]" data-bonuses="[60,60,0,20,3,6,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>51.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/800/29814/4168/4488" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="25677562" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4168" data-count="1"></a>
                        </td>
                        <td><a href="/player/ShadyBrady">ShadyBrady</a></td>
                        <td>2460</td>
                        <td>4509052</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2986"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,512,60,39,78,46,71,75]" data-bonuses="[0,260,0,14,3,6,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>52.</td>
                        <td>
                            <a id="W" class="character" href="/top-characters-with-outfit/800/29791/4144/4400" style="background-position: -250px -4500px" data-class="800" data-skin="29791" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>2450</td>
                        <td>4489557</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,42,67,75]" data-bonuses="[100,80,4,18,3,2,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:09:36Z">2015-09-22 03:09:36</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/800/29770/4637/4359" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2411</td>
                        <td>4411923</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3112"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,63,45,84,42,62,78]" data-bonuses="[0,110,3,20,9,2,2,3]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/800/841/4233/4891" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="32896501" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409292</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[646,311,60,48,81,42,62,80]" data-bonuses="[0,110,0,23,6,2,2,5]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/800/0/4103/4910" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="16777216" data-dye2="167772184" data-accessory-dye-id="4910" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Jstan">Jstan</a></td>
                        <td>2408</td>
                        <td>4406439</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="3181"></span><span class="item" data-item="29768"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,432,62,39,78,40,71,79]" data-bonuses="[0,180,2,14,3,0,11,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:21:48Z">2015-09-22 22:21:48</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/800/29770/4625/4947" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772171" data-dye2="167772214" data-accessory-dye-id="4947" data-clothing-dye-id="4625" data-count="2"></a>
                        </td>
                        <td><a href="/player/KinkyNinja">KinkyNinja</a></td>
                        <td>2406</td>
                        <td>4401715</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,392,60,43,78,46,71,75]" data-bonuses="[60,140,0,18,3,6,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/800/0/4188/4954" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="33547489" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4188" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2351</td>
                        <td>4291833</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,42,66,80]" data-bonuses="[100,0,4,21,0,2,6,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/800/0/4126/4390" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="26817228" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4126" data-count="1"></a>
                        </td>
                        <td><a href="/player/Thalan">Thalan</a></td>
                        <td>2350</td>
                        <td>4290011</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/800/29791/4693/0" style="background-position: -250px -4500px" data-class="800" data-skin="29791" data-dye1="83886087" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4693" data-count="1"></a>
                        </td>
                        <td><a href="/player/TheVulture">TheVulture</a></td>
                        <td>2345</td>
                        <td>4280423</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,42,71,75]" data-bonuses="[100,80,4,18,3,2,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T22:58:45Z">2015-09-19 22:58:45</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/800/912/4103/4390" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4278826</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="30050"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[870,252,64,38,75,46,66,75]" data-bonuses="[150,0,4,13,0,6,6,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/800/912/4126/4895" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="26817228" data-dye2="83886082" data-accessory-dye-id="4895" data-clothing-dye-id="4126" data-count="1"></a>
                        </td>
                        <td><a href="/player/Aether">Aether</a></td>
                        <td>2340</td>
                        <td>4270306</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2727"></span><span class="item" data-item="2703"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,360,60,47,81,40,60,79]" data-bonuses="[0,110,0,22,6,0,0,4]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T01:26:48Z">2015-09-19 01:26:48</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/800/29770/4618/4488" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772164" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/WhyteeNigg">WhyteeNigg</a></td>
                        <td>2303</td>
                        <td>4196062</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,62,47,84,44,66,79]" data-bonuses="[0,110,2,22,9,4,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/800/912/4208/4902" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="25165952" data-dye2="67108871" data-accessory-dye-id="4902" data-clothing-dye-id="4208" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtKerero">SgtKerero</a></td>
                        <td>2297</td>
                        <td>4183929</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2728"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[701,263,60,45,78,44,60,79]" data-bonuses="[60,60,0,20,3,4,0,4]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td><span class="private-character" style="background-position: -250px -2500px"></span></td>
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
                        <td>65.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/800/0/4126/4368" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="26817228" data-dye2="33521488" data-accessory-dye-id="4368" data-clothing-dye-id="4126" data-count="1"></a>
                        </td>
                        <td><a href="/player/Typhoons">Typhoons</a></td>
                        <td>2255</td>
                        <td>4099638</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,42,62,80]" data-bonuses="[100,0,4,21,0,2,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/800/29770/4652/4909" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>2249</td>
                        <td>4088026</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2986"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,432,60,41,78,42,62,79]" data-bonuses="[0,180,0,16,3,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/800/29770/0/0" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="432"></a>
                        </td>
                        <td><a href="/player/NATONATER">NATONATER</a></td>
                        <td>2248</td>
                        <td>4085152</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,46,75,46,62,80]" data-bonuses="[60,60,0,21,0,6,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T17:11:26Z">2015-09-12 17:11:26</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>68.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/800/29770/4680/4918" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="167772204" data-dye2="167772191" data-accessory-dye-id="4918" data-clothing-dye-id="4680" data-count="1"></a>
                        </td>
                        <td><a href="/player/GEEOH">GEEOH</a></td>
                        <td>2227</td>
                        <td>4043155</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,66,47,78,42,62,79]" data-bonuses="[60,60,6,22,3,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T04:29:37Z">2015-09-22 04:29:37</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>69.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/800/29770/4127/4919" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="25886720" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4127" data-count="1"></a>
                        </td>
                        <td><a href="/player/Carhoes">Carhoes</a></td>
                        <td>2224</td>
                        <td>4036800</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[822,332,60,39,78,42,67,75]" data-bonuses="[180,80,0,14,3,2,7,0]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T07:32:33Z">2015-09-19 07:32:33</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/800/841/4222/4480" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="33553146" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4222" data-count="1"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>2222</td>
                        <td>4033953</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[623,252,60,50,75,42,66,80]" data-bonuses="[0,0,0,25,0,2,6,5]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:20:34Z">2015-09-21 22:20:34</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/800/0/4203/4457" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="33544889" data-dye2="30961811" data-accessory-dye-id="4457" data-clothing-dye-id="4203" data-count="1"></a>
                        </td>
                        <td><a href="/player/Neqz">Neqz</a></td>
                        <td>2222</td>
                        <td>4033198</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,352,60,41,78,42,66,83]" data-bonuses="[0,100,0,16,3,2,6,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T01:08:25Z">2015-09-16 01:08:25</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/800/0/4618/4366" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772164" data-dye2="25165568" data-accessory-dye-id="4366" data-clothing-dye-id="4618" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bobolo">Bobolo</a></td>
                        <td>2222</td>
                        <td>4033032</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,62,41,82,40,62,83]" data-bonuses="[60,60,2,16,7,0,2,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/800/0/4146/4480" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="25198720" data-dye2="21398196" data-accessory-dye-id="4480" data-clothing-dye-id="4146" data-count="1"></a>
                        </td>
                        <td><a href="/player/Nixonboss">Nixonboss</a></td>
                        <td>2222</td>
                        <td>4032979</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,60,47,84,42,66,79]" data-bonuses="[0,110,0,22,9,2,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T23:47:14Z">2015-09-16 23:47:14</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/800/29814/4645/4901" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="67108870" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shadow">Shadow</a></td>
                        <td>2175</td>
                        <td>3939953</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,60,45,84,42,67,75]" data-bonuses="[0,190,0,20,9,2,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/800/0/4697/4950" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="83886091" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4697" data-count="1"></a>
                        </td>
                        <td><a href="/player/NikuCute">NikuCute</a></td>
                        <td>2171</td>
                        <td>3931834</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,392,60,43,78,46,67,75]" data-bonuses="[60,140,0,18,3,6,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T21:00:35Z">2015-09-22 21:00:35</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/800/841/4699/4945" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="167772217" data-dye2="167772212" data-accessory-dye-id="4945" data-clothing-dye-id="4699" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hexage">Hexage</a></td>
                        <td>2171</td>
                        <td>3931157</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,62,47,84,40,66,79]" data-bonuses="[0,110,2,22,9,0,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/800/0/4639/4881" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="83886082" data-dye2="167772171" data-accessory-dye-id="4881" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Zackrocks">Zackrocks</a></td>
                        <td>2158</td>
                        <td>3906594</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[744,312,60,41,82,42,62,83]" data-bonuses="[60,60,0,16,7,2,2,8]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/800/0/4617/4923" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="167772163" data-dye2="167772196" data-accessory-dye-id="4923" data-clothing-dye-id="4617" data-count="1"></a>
                        </td>
                        <td><a href="/player/Shider">Shider</a></td>
                        <td>2151</td>
                        <td>3892693</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="3181"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,62,45,84,40,67,75]" data-bonuses="[0,190,2,20,9,0,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>79.</td>
                        <td><span class="private-character" style="background-position: -250px -2500px"></span></td>
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
                        <td>80.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/800/0/4232/4473" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="33554431" data-dye2="27284013" data-accessory-dye-id="4473" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bengtz">Bengtz</a></td>
                        <td>2121</td>
                        <td>3830805</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="3181"></span><span class="item" data-item="30050"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,352,62,34,75,40,70,79]" data-bonuses="[50,100,2,9,0,0,10,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td><span class="private-character" style="background-position: -250px -2500px"></span></td>
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
                        <td>82.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/800/912/4640/4901" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="83886083" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4640" data-count="1"></a>
                        </td>
                        <td><a href="/player/Ukunavi">Ukunavi</a></td>
                        <td>2114</td>
                        <td>3817325</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,332,64,43,78,42,67,75]" data-bonuses="[100,80,4,18,3,2,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/800/0/4695/4483" style="background-position: -250px -350px" data-class="800" data-skin="0" data-dye1="83886089" data-dye2="30982104" data-accessory-dye-id="4483" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Williambb">Williambb</a></td>
                        <td>2113</td>
                        <td>3815422</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,45,78,46,62,79]" data-bonuses="[60,60,0,20,3,6,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/800/841/4232/4393" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="33554431" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4232" data-count="2"></a>
                        </td>
                        <td><a href="/player/Zedl">Zedl</a></td>
                        <td>2100</td>
                        <td>3790238</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2986"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[683,432,60,42,75,42,62,80]" data-bonuses="[0,180,0,17,0,2,2,5]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T20:06:13Z">2015-09-22 20:06:13</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/800/29814/4694/4901" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="83886088" data-dye2="67108870" data-accessory-dye-id="4901" data-clothing-dye-id="4694" data-count="1"></a>
                        </td>
                        <td><a href="/player/JmannExtra">JmannExtra</a></td>
                        <td>2100</td>
                        <td>3789023</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,60,45,84,42,71,75]" data-bonuses="[0,190,0,20,9,2,11,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T07:51:01Z">2015-09-23 07:51:01</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/800/841/4232/4383" style="background-position: -250px -1050px" data-class="800" data-skin="841" data-dye1="33554431" data-dye2="25886720" data-accessory-dye-id="4383" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fyhre">Fyhre</a></td>
                        <td>2100</td>
                        <td>3788956</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,217,60,42,75,42,62,80]" data-bonuses="[180,0,0,17,0,2,2,5]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T02:24:40Z">2015-09-22 02:24:40</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/800/29814/4176/4393" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="25165824" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/JAM">JAM</a></td>
                        <td>2100</td>
                        <td>3788851</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,45,78,42,62,79]" data-bonuses="[100,0,4,20,3,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/800/912/4639/0" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="83886082" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4639" data-count="4"></a>
                        </td>
                        <td><a href="/player/Stuntdude">Stuntdude</a></td>
                        <td>2098</td>
                        <td>3786556</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="30050"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,312,60,34,79,42,62,79]" data-bonuses="[110,60,0,9,4,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/800/29814/4687/4926" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="167772210" data-dye2="167772199" data-accessory-dye-id="4926" data-clothing-dye-id="4687" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kieubasa">Kieubasa</a></td>
                        <td>2097</td>
                        <td>3784155</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,64,46,75,46,66,80]" data-bonuses="[100,0,4,21,0,6,6,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T12:52:24Z">2015-09-12 12:52:24</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/800/29814/4648/4489" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="167772178" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4648" data-count="1"></a>
                        </td>
                        <td><a href="/player/KngArthur">KngArthur</a></td>
                        <td>2078</td>
                        <td>3745261</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[665,312,60,46,75,46,66,80]" data-bonuses="[60,60,0,21,0,6,6,5]" data-class="800" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T09:04:49Z">2015-09-23 09:04:49</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/800/29770/0/0" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="432"></a>
                        </td>
                        <td><a href="/player/Undenied">Undenied</a></td>
                        <td>2072</td>
                        <td>3733522</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2728"></span><span class="item" data-item="2704"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,46,75,44,60,79]" data-bonuses="[60,60,0,21,0,4,0,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/800/29770/4634/4866" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="150994949" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4634" data-count="1"></a>
                        </td>
                        <td><a href="/player/McDice">McDice</a></td>
                        <td>2066</td>
                        <td>3721625</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[732,219,64,45,78,46,66,79]" data-bonuses="[100,0,4,20,3,6,6,4]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T12:47:32Z">2015-09-22 12:47:32</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/800/9029/4155/4940" style="background-position: -250px -2100px" data-class="800" data-skin="9029" data-dye1="31909626" data-dye2="167772207" data-accessory-dye-id="4940" data-clothing-dye-id="4155" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dipser">Dipser</a></td>
                        <td>2064</td>
                        <td>3718523</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,46,75,46,62,80]" data-bonuses="[60,60,0,21,0,6,2,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:16:20Z">2015-09-22 23:16:20</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/800/9029/4115/4951" style="background-position: -250px -2100px" data-class="800" data-skin="9029" data-dye1="31200316" data-dye2="83886089" data-accessory-dye-id="4951" data-clothing-dye-id="4115" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tenismaan">Tenismaan</a></td>
                        <td>2063</td>
                        <td>3715406</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,60,47,84,42,62,79]" data-bonuses="[0,110,0,22,9,2,2,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/800/912/4646/4488" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="67108871" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4646" data-count="1"></a>
                        </td>
                        <td><a href="/player/Airons">Airons</a></td>
                        <td>2061</td>
                        <td>3712544</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,60,41,82,42,62,83]" data-bonuses="[60,60,0,16,7,2,2,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/800/912/4192/4391" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="33420774" data-dye2="16826367" data-accessory-dye-id="4391" data-clothing-dye-id="4192" data-count="1"></a>
                        </td>
                        <td><a href="/player/AapoPox">AapoPox</a></td>
                        <td>2060</td>
                        <td>3709198</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="3181"></span><span class="item" data-item="3096"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,62,47,84,44,66,79]" data-bonuses="[0,110,2,22,9,4,6,4]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/800/29814/0/0" style="background-position: -250px -5150px" data-class="800" data-skin="29814" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="39"></a>
                        </td>
                        <td><a href="/player/Fabitop">Fabitop</a></td>
                        <td>2059</td>
                        <td>3706876</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[691,252,60,46,75,46,62,80]" data-bonuses="[60,60,0,21,0,6,2,5]" data-class="800" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T19:06:54Z">2015-09-12 19:06:54</span></td>
                        <td><abbr title="USSouth2">USS2</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/800/912/4695/4408" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="83886089" data-dye2="21692546" data-accessory-dye-id="4408" data-clothing-dye-id="4695" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pixelmanns">Pixelmanns</a></td>
                        <td>2057</td>
                        <td>3704146</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="3181"></span><span class="item" data-item="29768"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,442,62,45,84,40,67,75]" data-bonuses="[0,190,2,20,9,0,7,0]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-09T20:43:52Z">2015-09-09 20:43:52</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/800/912/4232/4917" style="background-position: -250px -2500px" data-class="800" data-skin="912" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>2047</td>
                        <td>3683897</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2858"></span><span class="item" data-item="2809"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,60,48,81,42,66,80]" data-bonuses="[0,110,0,23,6,2,6,5]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aP" class="character" href="/top-characters-with-outfit/800/29770/4639/4399" style="background-position: -250px -4300px" data-class="800" data-skin="29770" data-dye1="83886082" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4639" data-count="8"></a>
                        </td>
                        <td><a href="/player/GrifballQc">GrifballQc</a></td>
                        <td>2044</td>
                        <td>3678310</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2858"></span><span class="item" data-item="3096"></span><span class="item" data-item="2976"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,352,60,41,78,42,66,83]" data-bonuses="[0,100,0,16,3,2,6,8]" data-class="800" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-assassins">1 - 100</a></li>
                    <li><a href="/top-assassins/101">101 - 200</a></li>
                    <li><a href="/top-assassins/201">201 - 300</a></li>
                    <li><a href="/top-assassins/301">301 - 400</a></li>
                    <li><a href="/top-assassins/401">401 - 500</a></li>
                    <li><a href="/top-assassins/501">501 - 600</a></li>
                    <li><a href="/top-assassins/601">601 - 700</a></li>
                    <li><a href="/top-assassins/701">701 - 800</a></li>
                    <li><a href="/top-assassins/801">801 - 900</a></li>
                    <li><a href="/top-assassins/901">901 - 1000</a></li>
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
