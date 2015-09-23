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
    <title>Top Rogues 1-100 | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta name="msapplication-config" content="none">
    <link rel="canonical" href="/top-">
    <meta name="keywords" content="realm of the mad god, rotmg, statistics, stats,rankings, top Rogues">
    <meta name="description" content="Top Rogues 1-100 in Realm of the Mad God - the free online mmo rpg game.">
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
        <div class="col-md-12"><h1>Top Rogues</h1><p>This is a list of the top 1000 rogues by Exp seen in the past two
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
                    </a><a class="btn btn-default list-selector-item disabled" title="Top Rogues" href="/top-rogues"><span class="private-character" style="background-position: 0px -8px"></span>
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
                    <li class="active"><a href="/top-rogues">1 - 100</a></li>
                    <li><a href="/top-rogues/101">101 - 200</a></li>
                    <li><a href="/top-rogues/201">201 - 300</a></li>
                    <li><a href="/top-rogues/301">301 - 400</a></li>
                    <li><a href="/top-rogues/401">401 - 500</a></li>
                    <li><a href="/top-rogues/501">501 - 600</a></li>
                    <li><a href="/top-rogues/601">601 - 700</a></li>
                    <li><a href="/top-rogues/701">701 - 800</a></li>
                    <li><a href="/top-rogues/801">801 - 900</a></li>
                    <li><a href="/top-rogues/901">901 - 1000</a></li>
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
                            <a id="d" class="character" href="/top-characters-with-outfit/768/0/4663/4869" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772192" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4663" data-count="1"></a>
                        </td>
                        <td><a href="/player/BlueBolt">BlueBolt</a></td>
                        <td>35172</td>
                        <td>69934151</td>
                        <td>
                            <span class="item" data-item="3106"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2764"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,50,41,83,42,52,91]" data-bonuses="[0,0,0,16,8,2,2,16]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T14:57:01Z">2015-09-21 14:57:01</span></td>
                        <td><abbr title="EUWest">EUW</abbr></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>
                            <a id="e" class="character" href="/top-characters-with-outfit/768/29808/0/0" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="82"></a>
                        </td>
                        <td><a href="/player/CwandERS">CwandERS</a></td>
                        <td>14279</td>
                        <td>28148117</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,42,80,42,56,84]" data-bonuses="[180,0,0,17,5,2,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T11:14:26Z">2015-09-22 11:14:26</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>
                            <a id="f" class="character" href="/top-characters-with-outfit/768/29808/4630/4891" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="167772176" data-dye2="150994950" data-accessory-dye-id="4891" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/GeeroTwo">GeeroTwo</a></td>
                        <td>7777</td>
                        <td>15143307</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,40,54,83]" data-bonuses="[180,0,0,16,8,0,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T10:43:45Z">2015-09-16 10:43:45</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>
                            <a id="g" class="character" href="/top-characters-with-outfit/768/0/4625/4886" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772171" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4625" data-count="1"></a>
                        </td>
                        <td><a href="/player/Meliorus">Meliorus</a></td>
                        <td>6066</td>
                        <td>11721093</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[830,252,56,42,80,40,54,90]" data-bonuses="[110,0,6,17,5,0,4,15]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T17:34:32Z">2015-09-13 17:34:32</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>
                            <a id="h" class="character" href="/top-characters-with-outfit/768/913/4615/4394" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="167772161" data-dye2="28451362" data-accessory-dye-id="4394" data-clothing-dye-id="4615" data-count="1"></a>
                        </td>
                        <td><a href="/player/Krakouna">Krakouna</a></td>
                        <td>5500</td>
                        <td>10589162</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2980"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,50,51,80,42,52,84]" data-bonuses="[0,0,0,26,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>
                            <a id="i" class="character" href="/top-characters-with-outfit/768/916/4136/4468" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="23685481" data-dye2="25904403" data-accessory-dye-id="4468" data-clothing-dye-id="4136" data-count="1"></a>
                        </td>
                        <td><a href="/player/LEQN">LEQN</a></td>
                        <td>5422</td>
                        <td>10432911</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,44,54,84]" data-bonuses="[100,0,4,21,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>
                            <a id="j" class="character" href="/top-characters-with-outfit/768/8966/4224/4924" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="21398196" data-dye2="167772197" data-accessory-dye-id="4924" data-clothing-dye-id="4224" data-count="1"></a>
                        </td>
                        <td><a href="/player/LiveJoker">LiveJoker</a></td>
                        <td>5400</td>
                        <td>10389710</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,42,56,82]" data-bonuses="[100,0,7,18,8,2,6,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>
                            <a id="k" class="character" href="/top-characters-with-outfit/768/916/4689/4955" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="167772212" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4689" data-count="1"></a>
                        </td>
                        <td><a href="/player/Statakaka">Statakaka</a></td>
                        <td>5340</td>
                        <td>10269192</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,56,48,80,42,52,84]" data-bonuses="[60,60,6,23,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T17:35:41Z">2015-09-16 17:35:41</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>
                            <a id="l" class="character" href="/top-characters-with-outfit/768/29808/4658/4874" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="167772188" data-dye2="167772164" data-accessory-dye-id="4874" data-clothing-dye-id="4658" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fiddy">Fiddy</a></td>
                        <td>5150</td>
                        <td>9888826</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2984"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,50,42,80,40,50,93]" data-bonuses="[0,0,0,17,5,0,0,18]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td><span class="private-character" style="background-position: -250px -4850px"></span></td>
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
                            <a id="m" class="character" href="/top-characters-with-outfit/768/8614/4107/4878" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="27601450" data-dye2="167772168" data-accessory-dye-id="4878" data-clothing-dye-id="4107" data-count="1"></a>
                        </td>
                        <td><a href="/player/BOOSTE">BOOSTE</a></td>
                        <td>4416</td>
                        <td>8421599</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:27:52Z">2015-09-20 17:27:52</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>12.</td>
                        <td>
                            <a id="n" class="character" href="/top-characters-with-outfit/768/0/0/0" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="9811"></a>
                        </td>
                        <td><a href="/player/OgTheWeak">OgTheWeak</a></td>
                        <td>4389</td>
                        <td>8366910</td>
                        <td>
                            <span class="item" data-item="2697"></span><span class="item" data-item="2785"></span><span class="item" data-item="2703"></span><span class="item" data-item="2752"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[618,197,50,48,80,29,50,83]" data-bonuses="[0,0,0,23,5,0,0,8]" data-class="768" data-level="20">5/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T16:05:44Z">2015-09-23 16:05:44</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>13.</td>
                        <td><span class="private-character" style="background-position: -250px -5450px"></span></td>
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
                            <a id="o" class="character" href="/top-characters-with-outfit/768/834/4211/4467" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="21064161" data-dye2="21064161" data-accessory-dye-id="4467" data-clothing-dye-id="4211" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pharest">Pharest</a></td>
                        <td>4113</td>
                        <td>7816070</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,44,54,84]" data-bonuses="[100,0,4,21,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>15.</td>
                        <td>
                            <a id="p" class="character" href="/top-characters-with-outfit/768/916/4110/4391" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="25165568" data-dye2="16826367" data-accessory-dye-id="4391" data-clothing-dye-id="4110" data-count="1"></a>
                        </td>
                        <td><a href="/player/PWNdemnoob">PWNdemnoob</a></td>
                        <td>3717</td>
                        <td>7024656</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,46,56,84]" data-bonuses="[100,0,4,21,5,6,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T22:52:43Z">2015-09-22 22:52:43</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>16.</td>
                        <td>
                            <a id="q" class="character" href="/top-characters-with-outfit/768/0/4103/4464" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="16777216" data-dye2="25165952" data-accessory-dye-id="4464" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Pfiffel">Pfiffel</a></td>
                        <td>3607</td>
                        <td>6803468</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,54,83]" data-bonuses="[100,0,4,20,8,0,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T04:18:48Z">2015-09-11 04:18:48</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>17.</td>
                        <td>
                            <a id="r" class="character" href="/top-characters-with-outfit/768/913/4630/4359" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="167772176" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/Dane">Dane</a></td>
                        <td>3333</td>
                        <td>6255372</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,44,54,82]" data-bonuses="[100,0,7,18,8,4,4,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>18.</td>
                        <td>
                            <a id="s" class="character" href="/top-characters-with-outfit/768/0/4145/4902" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="31106336" data-dye2="67108871" data-accessory-dye-id="4902" data-clothing-dye-id="4145" data-count="1"></a>
                        </td>
                        <td><a href="/player/ToguroAni">ToguroAni</a></td>
                        <td>3088</td>
                        <td>5765323</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,46,56,84]" data-bonuses="[100,0,4,21,5,6,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T10:39:39Z">2015-09-20 10:39:39</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>19.</td>
                        <td>
                            <a id="t" class="character" href="/top-characters-with-outfit/768/8966/4105/4361" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="16777471" data-dye2="16777471" data-accessory-dye-id="4361" data-clothing-dye-id="4105" data-count="1"></a>
                        </td>
                        <td><a href="/player/Csajjj">Csajjj</a></td>
                        <td>3000</td>
                        <td>5589028</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,42,80,42,52,84]" data-bonuses="[180,0,0,17,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T08:47:42Z">2015-09-22 08:47:42</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>20.</td>
                        <td>
                            <a id="u" class="character" href="/top-characters-with-outfit/768/916/4176/4950" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="25165824" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4176" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZelearsPL">ZelearsPL</a></td>
                        <td>2857</td>
                        <td>5304098</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2855"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,42,52,82]" data-bonuses="[100,0,7,18,8,2,2,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-12T17:32:43Z">2015-09-12 17:32:43</span></td>
                        <td><abbr title="EUEast">EUE</abbr></td>
                    </tr>
                    <tr>
                        <td>21.</td>
                        <td>
                            <a id="v" class="character" href="/top-characters-with-outfit/768/8966/4695/4953" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="83886089" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4695" data-count="2"></a>
                        </td>
                        <td><a href="/player/MikeBeszPL">MikeBeszPL</a></td>
                        <td>2834</td>
                        <td>5257410</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,46,56,84]" data-bonuses="[100,0,4,21,5,6,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>22.</td>
                        <td>
                            <a id="w" class="character" href="/top-characters-with-outfit/768/916/4103/0" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="16777216" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/CptDisco">CptDisco</a></td>
                        <td>2800</td>
                        <td>5189213</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,59,45,83,40,54,82]" data-bonuses="[60,60,9,20,8,0,4,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>23.</td>
                        <td><span class="private-character" style="background-position: -250px -0px"></span></td>
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
                        <td>24.</td>
                        <td>
                            <a id="x" class="character" href="/top-characters-with-outfit/768/0/4184/0" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="21549516" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4184" data-count="2"></a>
                        </td>
                        <td><a href="/player/SeSeSeSerl">SeSeSeSerl</a></td>
                        <td>2736</td>
                        <td>5060915</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,46,56,84]" data-bonuses="[100,0,4,21,5,6,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T05:35:55Z">2015-09-23 05:35:55</span></td>
                        <td><abbr title="AsiaEast">AE</abbr></td>
                    </tr>
                    <tr>
                        <td>25.</td>
                        <td>
                            <a id="y" class="character" href="/top-characters-with-outfit/768/8614/4654/4886" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="167772184" data-dye2="167772176" data-accessory-dye-id="4886" data-clothing-dye-id="4654" data-count="1"></a>
                        </td>
                        <td><a href="/player/Kupapookup">Kupapookup</a></td>
                        <td>2728</td>
                        <td>5045253</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>26.</td>
                        <td>
                            <a id="z" class="character" href="/top-characters-with-outfit/768/8614/4126/4490" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="26817228" data-dye2="33554176" data-accessory-dye-id="4490" data-clothing-dye-id="4126" data-count="1"></a>
                        </td>
                        <td><a href="/player/KarlF">KarlF</a></td>
                        <td>2704</td>
                        <td>4998540</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>27.</td>
                        <td>
                            <a id="A" class="character" href="/top-characters-with-outfit/768/0/4175/4387" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="33489151" data-dye2="19877711" data-accessory-dye-id="4387" data-clothing-dye-id="4175" data-count="1"></a>
                        </td>
                        <td><a href="/player/NatFigga">NatFigga</a></td>
                        <td>2648</td>
                        <td>4884885</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,50,83]" data-bonuses="[100,0,4,20,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>28.</td>
                        <td>
                            <a id="B" class="character" href="/top-characters-with-outfit/768/0/0/4458" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="0" data-dye2="33550293" data-accessory-dye-id="4458" data-clothing-dye-id="0" data-count="1"></a>
                        </td>
                        <td><a href="/player/SpaceChief">SpaceChief</a></td>
                        <td>2614</td>
                        <td>4816916</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,52,84]" data-bonuses="[100,0,4,21,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-16T00:38:16Z">2015-09-16 00:38:16</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>29.</td>
                        <td>
                            <a id="C" class="character" href="/top-characters-with-outfit/768/916/4685/0" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="167772208" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4685" data-count="1"></a>
                        </td>
                        <td><a href="/player/Destard">Destard</a></td>
                        <td>2597</td>
                        <td>4784220</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[770,262,50,37,78,44,54,83]" data-bonuses="[50,10,0,12,3,4,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>30.</td>
                        <td>
                            <a id="D" class="character" href="/top-characters-with-outfit/768/916/4672/4868" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="167772201" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4672" data-count="1"></a>
                        </td>
                        <td><a href="/player/CptRom">CptRom</a></td>
                        <td>2528</td>
                        <td>4645005</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,44,54,82]" data-bonuses="[100,0,7,18,8,4,4,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>31.</td>
                        <td><span class="private-character" style="background-position: -250px -2900px"></span></td>
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
                        <td>32.</td>
                        <td>
                            <a id="E" class="character" href="/top-characters-with-outfit/768/834/4232/4383" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="33554431" data-dye2="25886720" data-accessory-dye-id="4383" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Fyhre">Fyhre</a></td>
                        <td>2500</td>
                        <td>4589051</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,53,39,83,40,50,82]" data-bonuses="[180,0,3,14,8,0,0,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T21:12:32Z">2015-09-20 21:12:32</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>33.</td>
                        <td>
                            <a id="F" class="character" href="/top-characters-with-outfit/768/916/4678/4899" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="83886086" data-dye2="67108868" data-accessory-dye-id="4899" data-clothing-dye-id="4678" data-count="1"></a>
                        </td>
                        <td><a href="/player/Hipoglos">Hipoglos</a></td>
                        <td>2500</td>
                        <td>4589036</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,78,44,54,78]" data-bonuses="[100,0,7,18,3,4,4,3]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T04:04:43Z">2015-09-20 04:04:43</span></td>
                        <td><abbr title="USSouth3">USS3</abbr></td>
                    </tr>
                    <tr>
                        <td>34.</td>
                        <td>
                            <a id="G" class="character" href="/top-characters-with-outfit/768/916/4232/4917" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="33554431" data-dye2="167772190" data-accessory-dye-id="4917" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Churlish">Churlish</a></td>
                        <td>2437</td>
                        <td>4462877</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2855"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,42,52,82]" data-bonuses="[100,0,7,18,8,2,2,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>35.</td>
                        <td>
                            <a id="H" class="character" href="/top-characters-with-outfit/768/0/4103/4359" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="4"></a>
                        </td>
                        <td><a href="/player/Rr">Rr</a></td>
                        <td>2427</td>
                        <td>4443601</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3112"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,362,53,45,89,42,56,82]" data-bonuses="[0,110,3,20,14,2,6,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>36.</td>
                        <td>
                            <a id="I" class="character" href="/top-characters-with-outfit/768/0/4622/4927" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772168" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4622" data-count="2"></a>
                        </td>
                        <td><a href="/player/Zurit">Zurit</a></td>
                        <td>2421</td>
                        <td>4432681</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="2987"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[855,262,56,37,75,40,54,81]" data-bonuses="[135,10,6,12,0,0,4,6]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>37.</td>
                        <td>
                            <a id="J" class="character" href="/top-characters-with-outfit/768/913/4635/4488" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="150994950" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4635" data-count="1"></a>
                        </td>
                        <td><a href="/player/Rannnar">Rannnar</a></td>
                        <td>2410</td>
                        <td>4409294</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2988"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[633,300,50,48,86,42,52,84]" data-bonuses="[0,110,0,23,11,2,2,9]" data-class="768" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>38.</td>
                        <td>
                            <a id="K" class="character" href="/top-characters-with-outfit/768/916/4134/4416" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="33494163" data-dye2="32538752" data-accessory-dye-id="4416" data-clothing-dye-id="4134" data-count="1"></a>
                        </td>
                        <td><a href="/player/Melofee">Melofee</a></td>
                        <td>2406</td>
                        <td>4401910</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,50,84]" data-bonuses="[100,0,4,21,5,0,0,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T13:11:06Z">2015-09-10 13:11:06</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>39.</td>
                        <td>
                            <a id="L" class="character" href="/top-characters-with-outfit/768/913/4641/4871" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="83886084" data-dye2="167772161" data-accessory-dye-id="4871" data-clothing-dye-id="4641" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrDeIaney">DrDeIaney</a></td>
                        <td>2382</td>
                        <td>4353637</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,59,45,83,40,54,82]" data-bonuses="[60,60,9,20,8,0,4,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T12:29:46Z">2015-09-20 12:29:46</span></td>
                        <td><abbr title="EUSouthWest">EUSW</abbr></td>
                    </tr>
                    <tr>
                        <td>40.</td>
                        <td>
                            <a id="M" class="character" href="/top-characters-with-outfit/768/913/4209/4359" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="33488896" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4209" data-count="1"></a>
                        </td>
                        <td><a href="/player/GigaM">GigaM</a></td>
                        <td>2368</td>
                        <td>4325121</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,44,54,84]" data-bonuses="[100,0,4,21,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-11T13:21:31Z">2015-09-11 13:21:31</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>41.</td>
                        <td>
                            <a id="N" class="character" href="/top-characters-with-outfit/768/913/4103/4390" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="16777216" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/CeeAitch">CeeAitch</a></td>
                        <td>2345</td>
                        <td>4278933</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="8610"></span><span class="item" data-item="3096"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,56,47,78,40,54,79]" data-bonuses="[60,60,6,22,3,0,4,4]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>42.</td>
                        <td>
                            <a id="O" class="character" href="/top-characters-with-outfit/768/8614/4637/4359" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="67108866" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4637" data-count="1"></a>
                        </td>
                        <td><a href="/player/TBQNEE">TBQNEE</a></td>
                        <td>2318</td>
                        <td>4224919</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>43.</td>
                        <td>
                            <a id="P" class="character" href="/top-characters-with-outfit/768/916/4636/4370" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="150994951" data-dye2="33552604" data-accessory-dye-id="4370" data-clothing-dye-id="4636" data-count="1"></a>
                        </td>
                        <td><a href="/player/Timullle">Timullle</a></td>
                        <td>2313</td>
                        <td>4216132</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,42,80,44,54,84]" data-bonuses="[180,0,0,17,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T18:56:36Z">2015-09-20 18:56:36</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>44.</td>
                        <td>
                            <a id="Q" class="character" href="/top-characters-with-outfit/768/916/4192/4393" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="33420774" data-dye2="18780415" data-accessory-dye-id="4393" data-clothing-dye-id="4192" data-count="1"></a>
                        </td>
                        <td><a href="/player/Booyahman">Booyahman</a></td>
                        <td>2310</td>
                        <td>4210431</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,42,52,83]" data-bonuses="[180,0,0,16,8,2,2,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-23T00:54:48Z">2015-09-23 00:54:48</span></td>
                        <td><abbr title="USNorthWest">USNW</abbr></td>
                    </tr>
                    <tr>
                        <td>45.</td>
                        <td>
                            <a id="R" class="character" href="/top-characters-with-outfit/768/834/4609/4866" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="67108865" data-dye2="83886080" data-accessory-dye-id="4866" data-clothing-dye-id="4609" data-count="1"></a>
                        </td>
                        <td><a href="/player/SgtToasty">SgtToasty</a></td>
                        <td>2300</td>
                        <td>4188958</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,54,83]" data-bonuses="[100,0,4,20,8,0,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>46.</td>
                        <td>
                            <a id="S" class="character" href="/top-characters-with-outfit/768/0/0/0" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="9811"></a>
                        </td>
                        <td><a href="/player/ArcaBlue">ArcaBlue</a></td>
                        <td>2273</td>
                        <td>4135658</td>
                        <td>
                            <span class="item" data-item="2697"></span><span class="item" data-item="2785"></span><span class="item" data-item="2703"></span><span class="item" data-item="2757"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[761,196,50,41,80,40,50,83]" data-bonuses="[120,0,0,16,5,0,0,8]" data-class="768" data-level="20">6/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-13T04:06:34Z">2015-09-13 04:06:34</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>47.</td>
                        <td>
                            <a id="T" class="character" href="/top-characters-with-outfit/768/834/4215/4381" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="19827543" data-dye2="33524736" data-accessory-dye-id="4381" data-clothing-dye-id="4215" data-count="1"></a>
                        </td>
                        <td><a href="/player/CloudyMint">CloudyMint</a></td>
                        <td>2266</td>
                        <td>4122312</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,42,56,83]" data-bonuses="[100,0,4,20,8,2,6,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>48.</td>
                        <td>
                            <a id="U" class="character" href="/top-characters-with-outfit/768/913/4659/4911" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="167772189" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4659" data-count="1"></a>
                        </td>
                        <td><a href="/player/Citrus">Citrus</a></td>
                        <td>2266</td>
                        <td>4121824</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,42,56,83]" data-bonuses="[100,0,4,20,8,2,6,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>49.</td>
                        <td>
                            <a id="V" class="character" href="/top-characters-with-outfit/768/0/4103/4868" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="16777216" data-dye2="150994944" data-accessory-dye-id="4868" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/JMLCortina">JMLCortina</a></td>
                        <td>2250</td>
                        <td>4090090</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,54,83]" data-bonuses="[100,0,4,20,8,0,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>50.</td>
                        <td><span class="private-character" style="background-position: -250px -2900px"></span></td>
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
                        <td>51.</td>
                        <td><span class="private-character" style="background-position: -250px -0px"></span></td>
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
                            <a id="W" class="character" href="/top-characters-with-outfit/768/913/4232/4907" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="33554431" data-dye2="167772181" data-accessory-dye-id="4907" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Lidist">Lidist</a></td>
                        <td>2235</td>
                        <td>4060441</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,50,83]" data-bonuses="[100,0,4,20,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>53.</td>
                        <td>
                            <a id="X" class="character" href="/top-characters-with-outfit/768/916/4652/4909" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="167772182" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4652" data-count="1"></a>
                        </td>
                        <td><a href="/player/AuntMay">AuntMay</a></td>
                        <td>2231</td>
                        <td>4052232</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,44,54,83]" data-bonuses="[100,0,4,20,8,4,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>54.</td>
                        <td>
                            <a id="Y" class="character" href="/top-characters-with-outfit/768/8966/4222/4953" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="33553146" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4222" data-count="1"></a>
                        </td>
                        <td><a href="/player/O">O</a></td>
                        <td>2226</td>
                        <td>4042659</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,56,84]" data-bonuses="[100,0,4,21,5,2,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>55.</td>
                        <td>
                            <a id="Z" class="character" href="/top-characters-with-outfit/768/0/4233/4894" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="32896501" data-dye2="150994952" data-accessory-dye-id="4894" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bobolo">Bobolo</a></td>
                        <td>2222</td>
                        <td>4033663</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,50,41,87,40,50,87]" data-bonuses="[60,60,0,16,12,0,0,12]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>56.</td>
                        <td>
                            <a id="aa" class="character" href="/top-characters-with-outfit/768/29808/4103/4359" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="16777216" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/DrMini">DrMini</a></td>
                        <td>2222</td>
                        <td>4033115</td>
                        <td>
                            <span class="item" data-item="2849"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="2989"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[805,258,56,43,75,40,50,75]" data-bonuses="[85,70,6,18,0,0,0,0]" data-class="768" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>57.</td>
                        <td>
                            <a id="ab" class="character" href="/top-characters-with-outfit/768/834/4232/4369" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="33554431" data-dye2="23369197" data-accessory-dye-id="4369" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/SamRiddelI">SamRiddelI</a></td>
                        <td>2222</td>
                        <td>4033097</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,50,50,80,42,56,84]" data-bonuses="[0,0,0,25,5,2,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T22:19:04Z">2015-09-21 22:19:04</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>58.</td>
                        <td>
                            <a id="ac" class="character" href="/top-characters-with-outfit/768/8966/4616/4876" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="167772162" data-dye2="167772166" data-accessory-dye-id="4876" data-clothing-dye-id="4616" data-count="1"></a>
                        </td>
                        <td><a href="/player/Seiyasu">Seiyasu</a></td>
                        <td>2213</td>
                        <td>4015021</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,42,56,82]" data-bonuses="[100,0,7,18,8,2,6,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T23:47:59Z">2015-09-15 23:47:59</span></td>
                        <td><abbr title="EUSouth">EUS</abbr></td>
                    </tr>
                    <tr>
                        <td>59.</td>
                        <td>
                            <a id="ad" class="character" href="/top-characters-with-outfit/768/834/4666/4359" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="167772195" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4666" data-count="1"></a>
                        </td>
                        <td><a href="/player/Epax">Epax</a></td>
                        <td>2210</td>
                        <td>4008799</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,50,83]" data-bonuses="[100,0,4,20,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>60.</td>
                        <td>
                            <a id="ae" class="character" href="/top-characters-with-outfit/768/916/4138/4909" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="28451362" data-dye2="167772183" data-accessory-dye-id="4909" data-clothing-dye-id="4138" data-count="1"></a>
                        </td>
                        <td><a href="/player/FrikenGods">FrikenGods</a></td>
                        <td>2182</td>
                        <td>3954516</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2785"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,50,83]" data-bonuses="[100,0,4,20,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T04:31:15Z">2015-09-19 04:31:15</span></td>
                        <td><abbr title="USMidWest2">USMW2</abbr></td>
                    </tr>
                    <tr>
                        <td>61.</td>
                        <td>
                            <a id="af" class="character" href="/top-characters-with-outfit/768/916/4639/4950" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="83886082" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4639" data-count="1"></a>
                        </td>
                        <td><a href="/player/Thawiseguy">Thawiseguy</a></td>
                        <td>2175</td>
                        <td>3939620</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2979"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,59,42,80,40,50,84]" data-bonuses="[0,0,9,17,5,0,0,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>62.</td>
                        <td>
                            <a id="ag" class="character" href="/top-characters-with-outfit/768/913/4232/4873" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="33554431" data-dye2="167772163" data-accessory-dye-id="4873" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/McNois">McNois</a></td>
                        <td>2174</td>
                        <td>3937026</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,40,50,83]" data-bonuses="[180,0,0,16,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-19T20:15:12Z">2015-09-19 20:15:12</span></td>
                        <td><abbr title="USWest">USW</abbr></td>
                    </tr>
                    <tr>
                        <td>63.</td>
                        <td>
                            <a id="ah" class="character" href="/top-characters-with-outfit/768/0/4645/4919" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="67108870" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4645" data-count="2"></a>
                        </td>
                        <td><a href="/player/Coolaapan">Coolaapan</a></td>
                        <td>2173</td>
                        <td>3936671</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,52,84]" data-bonuses="[100,0,4,21,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T14:15:20Z">2015-09-21 14:15:20</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>64.</td>
                        <td>
                            <a id="ai" class="character" href="/top-characters-with-outfit/768/8966/4620/4927" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="167772166" data-dye2="167772200" data-accessory-dye-id="4927" data-clothing-dye-id="4620" data-count="1"></a>
                        </td>
                        <td><a href="/player/ImSpaz">ImSpaz</a></td>
                        <td>2168</td>
                        <td>3925493</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,42,52,83]" data-bonuses="[100,0,4,20,8,2,2,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>65.</td>
                        <td>
                            <a id="aj" class="character" href="/top-characters-with-outfit/768/916/4116/4373" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="16842751" data-dye2="16777355" data-accessory-dye-id="4373" data-clothing-dye-id="4116" data-count="1"></a>
                        </td>
                        <td><a href="/player/Skylinear">Skylinear</a></td>
                        <td>2167</td>
                        <td>3924390</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,78,44,54,79]" data-bonuses="[100,0,4,20,3,4,4,4]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>66.</td>
                        <td>
                            <a id="ak" class="character" href="/top-characters-with-outfit/768/29808/4645/4949" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="67108870" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/Firenzi">Firenzi</a></td>
                        <td>2164</td>
                        <td>3917968</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2785"></span><span class="item" data-item="2809"></span><span class="item" data-item="3121"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[695,312,50,46,80,48,54,84]" data-bonuses="[60,60,0,21,5,8,4,9]" data-class="768" data-level="20">7/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T21:34:14Z">2015-09-20 21:34:14</span></td>
                        <td><abbr title="AsiaSouthEast">ASE</abbr></td>
                    </tr>
                    <tr>
                        <td>67.</td>
                        <td><span class="private-character" style="background-position: -250px -2900px"></span></td>
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
                        <td><span class="private-character" style="background-position: -250px -3300px"></span></td>
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
                        <td>69.</td>
                        <td>
                            <a id="al" class="character" href="/top-characters-with-outfit/768/913/0/0" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="163"></a>
                        </td>
                        <td><a href="/player/Dipser">Dipser</a></td>
                        <td>2153</td>
                        <td>3895068</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,56,84]" data-bonuses="[100,0,4,21,5,2,6,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T23:15:27Z">2015-09-22 23:15:27</span></td>
                        <td><abbr title="EUNorth">EUN</abbr></td>
                    </tr>
                    <tr>
                        <td>70.</td>
                        <td>
                            <a id="am" class="character" href="/top-characters-with-outfit/768/8614/0/0" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="0" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="0" data-count="25"></a>
                        </td>
                        <td><a href="/player/Srte">Srte</a></td>
                        <td>2150</td>
                        <td>3888952</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>71.</td>
                        <td>
                            <a id="an" class="character" href="/top-characters-with-outfit/768/916/4696/4950" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="83886090" data-dye2="83886088" data-accessory-dye-id="4950" data-clothing-dye-id="4696" data-count="2"></a>
                        </td>
                        <td><a href="/player/JmannExtra">JmannExtra</a></td>
                        <td>2140</td>
                        <td>3870183</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,42,80,44,54,84]" data-bonuses="[180,0,0,17,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-21T20:38:01Z">2015-09-21 20:38:01</span></td>
                        <td><abbr title="USSouthWest">USSW</abbr></td>
                    </tr>
                    <tr>
                        <td>72.</td>
                        <td>
                            <a id="ao" class="character" href="/top-characters-with-outfit/768/916/4134/4390" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="33494163" data-dye2="33494163" data-accessory-dye-id="4390" data-clothing-dye-id="4134" data-count="1"></a>
                        </td>
                        <td><a href="/player/XKnown">XKnown</a></td>
                        <td>2130</td>
                        <td>3849112</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,40,50,82]" data-bonuses="[100,0,7,18,8,0,0,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>73.</td>
                        <td>
                            <a id="ap" class="character" href="/top-characters-with-outfit/768/0/4669/0" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772198" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4669" data-count="1"></a>
                        </td>
                        <td><a href="/player/MatHesteen">MatHesteen</a></td>
                        <td>2128</td>
                        <td>3846643</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2977"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[780,312,50,41,87,40,54,87]" data-bonuses="[60,60,0,16,12,0,4,12]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>74.</td>
                        <td>
                            <a id="aq" class="character" href="/top-characters-with-outfit/768/913/4233/4489" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="32896501" data-dye2="32896501" data-accessory-dye-id="4489" data-clothing-dye-id="4233" data-count="1"></a>
                        </td>
                        <td><a href="/player/Bengtz">Bengtz</a></td>
                        <td>2121</td>
                        <td>3830859</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,54,84]" data-bonuses="[100,0,4,21,5,0,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>75.</td>
                        <td>
                            <a id="ar" class="character" href="/top-characters-with-outfit/768/913/4103/4953" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="16777216" data-dye2="83886091" data-accessory-dye-id="4953" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Flarbie">Flarbie</a></td>
                        <td>2113</td>
                        <td>3816540</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,40,50,82]" data-bonuses="[100,0,7,18,8,0,0,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>76.</td>
                        <td>
                            <a id="as" class="character" href="/top-characters-with-outfit/768/29808/4630/4919" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="167772176" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4630" data-count="1"></a>
                        </td>
                        <td><a href="/player/PERMANEWB">PERMANEWB</a></td>
                        <td>2091</td>
                        <td>3771464</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,42,56,83]" data-bonuses="[100,0,4,20,8,2,6,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-18T23:40:38Z">2015-09-18 23:40:38</span></td>
                        <td><abbr title="USEast2">USE2</abbr></td>
                    </tr>
                    <tr>
                        <td>77.</td>
                        <td>
                            <a id="at" class="character" href="/top-characters-with-outfit/768/913/4103/4399" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="16777216" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4103" data-count="3"></a>
                        </td>
                        <td><a href="/player/MustyThug">MustyThug</a></td>
                        <td>2089</td>
                        <td>3768478</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,42,52,83]" data-bonuses="[180,0,0,16,8,2,2,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>78.</td>
                        <td><span class="private-character" style="background-position: -250px -5450px"></span></td>
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
                        <td>79.</td>
                        <td>
                            <a id="au" class="character" href="/top-characters-with-outfit/768/916/4621/4954" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="167772167" data-dye2="167772216" data-accessory-dye-id="4954" data-clothing-dye-id="4621" data-count="1"></a>
                        </td>
                        <td><a href="/player/Stuntdude">Stuntdude</a></td>
                        <td>2082</td>
                        <td>3753514</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,40,50,83]" data-bonuses="[180,0,0,16,8,0,0,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>80.</td>
                        <td>
                            <a id="av" class="character" href="/top-characters-with-outfit/768/0/4154/4410" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="32564876" data-dye2="32564876" data-accessory-dye-id="4410" data-clothing-dye-id="4154" data-count="1"></a>
                        </td>
                        <td><a href="/player/McFarvo">McFarvo</a></td>
                        <td>2080</td>
                        <td>3749287</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,52,84]" data-bonuses="[100,0,4,21,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-10T14:56:22Z">2015-09-10 14:56:22</span></td>
                        <td><abbr title="USEast3">USE3</abbr></td>
                    </tr>
                    <tr>
                        <td>81.</td>
                        <td>
                            <a id="aw" class="character" href="/top-characters-with-outfit/768/913/4123/4382" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="25886859" data-dye2="26817228" data-accessory-dye-id="4382" data-clothing-dye-id="4123" data-count="1"></a>
                        </td>
                        <td><a href="/player/XXKeinusXx">XXKeinusXx</a></td>
                        <td>2071</td>
                        <td>3732350</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,42,56,83]" data-bonuses="[100,0,4,20,8,2,6,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T21:23:59Z">2015-09-20 21:23:59</span></td>
                        <td><abbr title="USSouth">USS</abbr></td>
                    </tr>
                    <tr>
                        <td>82.</td>
                        <td>
                            <a id="ax" class="character" href="/top-characters-with-outfit/768/0/4232/4911" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="33554431" data-dye2="167772185" data-accessory-dye-id="4911" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Tisgeh">Tisgeh</a></td>
                        <td>2067</td>
                        <td>3723277</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,44,54,83]" data-bonuses="[180,0,0,16,8,4,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-17T12:33:37Z">2015-09-17 12:33:37</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>83.</td>
                        <td>
                            <a id="ay" class="character" href="/top-characters-with-outfit/768/0/4657/4913" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772187" data-dye2="167772187" data-accessory-dye-id="4913" data-clothing-dye-id="4657" data-count="1"></a>
                        </td>
                        <td><a href="/player/SomeLions">SomeLions</a></td>
                        <td>2066</td>
                        <td>3721207</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,54,84]" data-bonuses="[100,0,4,21,5,0,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>84.</td>
                        <td>
                            <a id="az" class="character" href="/top-characters-with-outfit/768/913/4684/4392" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="167772207" data-dye2="23685481" data-accessory-dye-id="4392" data-clothing-dye-id="4684" data-count="1"></a>
                        </td>
                        <td><a href="/player/Gravoty">Gravoty</a></td>
                        <td>2058</td>
                        <td>3706584</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,46,56,83]" data-bonuses="[180,0,0,16,8,6,6,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>85.</td>
                        <td>
                            <a id="aA" class="character" href="/top-characters-with-outfit/768/834/4144/4400" style="background-position: -250px -700px" data-class="768" data-skin="834" data-dye1="33543936" data-dye2="33543936" data-accessory-dye-id="4400" data-clothing-dye-id="4144" data-count="2"></a>
                        </td>
                        <td><a href="/player/TheHittman">TheHittman</a></td>
                        <td>2055</td>
                        <td>3700001</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,44,54,84]" data-bonuses="[100,0,4,21,5,4,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-22T03:09:22Z">2015-09-22 03:09:22</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                    </tr>
                    <tr>
                        <td>86.</td>
                        <td>
                            <a id="aB" class="character" href="/top-characters-with-outfit/768/916/4639/4399" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="83886082" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4639" data-count="2"></a>
                        </td>
                        <td><a href="/player/PGA">PGA</a></td>
                        <td>2053</td>
                        <td>3695179</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,75,44,54,80]" data-bonuses="[100,0,4,21,0,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>87.</td>
                        <td>
                            <a id="aC" class="character" href="/top-characters-with-outfit/768/0/4692/4948" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="167772215" data-dye2="167772215" data-accessory-dye-id="4948" data-clothing-dye-id="4692" data-count="3"></a>
                        </td>
                        <td><a href="/player/Enoleym">Enoleym</a></td>
                        <td>2051</td>
                        <td>3692412</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[925,262,50,37,75,44,54,75]" data-bonuses="[205,10,0,12,0,4,4,0]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>88.</td>
                        <td>
                            <a id="aD" class="character" href="/top-characters-with-outfit/768/916/4103/4919" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="16777216" data-dye2="167772192" data-accessory-dye-id="4919" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/BarbiQ">BarbiQ</a></td>
                        <td>2043</td>
                        <td>3676557</td>
                        <td>
                            <span class="item" data-item="3857"></span><span class="item" data-item="2855"></span><span class="item" data-item="3096"></span><span class="item" data-item="2985"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[900,252,50,41,83,42,52,83]" data-bonuses="[180,0,0,16,8,2,2,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-15T00:49:10Z">2015-09-15 00:49:10</span></td>
                        <td><abbr title="USEast">USE</abbr></td>
                    </tr>
                    <tr>
                        <td>89.</td>
                        <td>
                            <a id="aE" class="character" href="/top-characters-with-outfit/768/0/4161/4391" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="31522815" data-dye2="16826367" data-accessory-dye-id="4391" data-clothing-dye-id="4161" data-count="1"></a>
                        </td>
                        <td><a href="/player/Typhoons">Typhoons</a></td>
                        <td>2042</td>
                        <td>3674344</td>
                        <td>
                            <span class="item" data-item="3113"></span><span class="item" data-item="2855"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,42,52,84]" data-bonuses="[100,0,4,21,5,2,2,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>90.</td>
                        <td>
                            <a id="aF" class="character" href="/top-characters-with-outfit/768/0/4676/4955" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="150994956" data-dye2="167772217" data-accessory-dye-id="4955" data-clothing-dye-id="4676" data-count="1"></a>
                        </td>
                        <td><a href="/player/EashyGER">EashyGER</a></td>
                        <td>2041</td>
                        <td>3671281</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[739,205,54,46,80,40,54,84]" data-bonuses="[100,0,4,21,5,0,4,9]" data-class="768" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>91.</td>
                        <td>
                            <a id="aG" class="character" href="/top-characters-with-outfit/768/913/4645/4399" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="67108870" data-dye2="33093887" data-accessory-dye-id="4399" data-clothing-dye-id="4645" data-count="1"></a>
                        </td>
                        <td><a href="/player/WouldBang">WouldBang</a></td>
                        <td>2038</td>
                        <td>3664942</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,54,84]" data-bonuses="[100,0,4,21,5,0,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>92.</td>
                        <td>
                            <a id="aH" class="character" href="/top-characters-with-outfit/768/29808/4186/0" style="background-position: -250px -4850px" data-class="768" data-skin="29808" data-dye1="18422128" data-dye2="0" data-accessory-dye-id="0" data-clothing-dye-id="4186" data-count="1"></a>
                        </td>
                        <td><a href="/player/Furbo">Furbo</a></td>
                        <td>2037</td>
                        <td>3664203</td>
                        <td>
                            <span class="item" data-item="3106"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[766,209,54,45,83,40,50,83]" data-bonuses="[100,0,4,20,8,0,0,8]" data-class="768" data-level="20">6/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>93.</td>
                        <td>
                            <a id="aI" class="character" href="/top-characters-with-outfit/768/8614/4103/4488" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="16777216" data-dye2="33554431" data-accessory-dye-id="4488" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/ZinxHD">ZinxHD</a></td>
                        <td>2037</td>
                        <td>3663721</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>94.</td>
                        <td>
                            <a id="aJ" class="character" href="/top-characters-with-outfit/768/8966/4103/4375" style="background-position: -250px -3550px" data-class="768" data-skin="8966" data-dye1="16777216" data-dye2="28870155" data-accessory-dye-id="4375" data-clothing-dye-id="4103" data-count="1"></a>
                        </td>
                        <td><a href="/player/Xlan">Xlan</a></td>
                        <td>2035</td>
                        <td>3659249</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,201,57,43,83,40,50,82]" data-bonuses="[100,0,7,18,8,0,0,7]" data-class="768" data-level="20">7/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>95.</td>
                        <td>
                            <a id="aK" class="character" href="/top-characters-with-outfit/768/916/4232/4949" style="background-position: -250px -3300px" data-class="768" data-skin="916" data-dye1="33554431" data-dye2="83886087" data-accessory-dye-id="4949" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/Sallander">Sallander</a></td>
                        <td>2033</td>
                        <td>3654820</td>
                        <td>
                            <span class="item" data-item="9002"></span><span class="item" data-item="2650"></span><span class="item" data-item="3112"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,57,43,83,40,50,82]" data-bonuses="[100,0,7,18,8,0,0,7]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>96.</td>
                        <td>
                            <a id="aL" class="character" href="/top-characters-with-outfit/768/0/4613/4904" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="150994945" data-dye2="167772178" data-accessory-dye-id="4904" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/Chochota">Chochota</a></td>
                        <td>2026</td>
                        <td>3641674</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="3096"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,45,83,40,54,83]" data-bonuses="[100,0,4,20,8,0,4,8]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>97.</td>
                        <td>
                            <a id="aM" class="character" href="/top-characters-with-outfit/768/0/4613/4869" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="150994945" data-dye2="150994945" data-accessory-dye-id="4869" data-clothing-dye-id="4613" data-count="1"></a>
                        </td>
                        <td><a href="/player/OrangeBang">OrangeBang</a></td>
                        <td>2023</td>
                        <td>3636460</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2760"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[720,252,50,50,80,40,50,84]" data-bonuses="[0,0,0,25,5,0,0,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td><span class="timeago" title="2015-09-20T17:38:25Z">2015-09-20 17:38:25</span></td>
                        <td><abbr title="USWest2">USW2</abbr></td>
                    </tr>
                    <tr>
                        <td>98.</td>
                        <td>
                            <a id="aN" class="character" href="/top-characters-with-outfit/768/8614/4116/4359" style="background-position: -250px -5450px" data-class="768" data-skin="8614" data-dye1="16842751" data-dye2="16777216" data-accessory-dye-id="4359" data-clothing-dye-id="4116" data-count="1"></a>
                        </td>
                        <td><a href="/player/Domoswag">Domoswag</a></td>
                        <td>2020</td>
                        <td>3629662</td>
                        <td>
                            <span class="item" data-item="8608"></span><span class="item" data-item="8610"></span><span class="item" data-item="8609"></span><span class="item" data-item="8611"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[850,292,55,37,79,44,54,80]" data-bonuses="[130,40,5,12,4,4,4,5]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>99.</td>
                        <td>
                            <a id="aO" class="character" href="/top-characters-with-outfit/768/0/4232/4894" style="background-position: -250px -0px" data-class="768" data-skin="0" data-dye1="33554431" data-dye2="150994952" data-accessory-dye-id="4894" data-clothing-dye-id="4232" data-count="1"></a>
                        </td>
                        <td><a href="/player/REBAXES">REBAXES</a></td>
                        <td>2020</td>
                        <td>3629329</td>
                        <td>
                            <span class="item" data-item="3082"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,54,84]" data-bonuses="[100,0,4,21,5,0,4,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>100.</td>
                        <td>
                            <a id="aP" class="character" href="/top-characters-with-outfit/768/913/4111/4460" style="background-position: -250px -2900px" data-class="768" data-skin="913" data-dye1="30566686" data-dye2="30246207" data-accessory-dye-id="4460" data-clothing-dye-id="4111" data-count="1"></a>
                        </td>
                        <td><a href="/player/Oztraya">Oztraya</a></td>
                        <td>2019</td>
                        <td>3627069</td>
                        <td>
                            <span class="item" data-item="2815"></span><span class="item" data-item="2650"></span><span class="item" data-item="2809"></span><span class="item" data-item="2978"></span>
                        </td>
                        <td>
                            <span class="player-stats" data-stats="[820,252,54,46,80,40,50,84]" data-bonuses="[100,0,4,21,5,0,0,9]" data-class="768" data-level="20">8/8</span>
                        </td>
                        <td>hidden</td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <nav class="text-center">
                <ul class="pagination">
                    <li class="active"><a href="/top-rogues">1 - 100</a></li>
                    <li><a href="/top-rogues/101">101 - 200</a></li>
                    <li><a href="/top-rogues/201">201 - 300</a></li>
                    <li><a href="/top-rogues/301">301 - 400</a></li>
                    <li><a href="/top-rogues/401">401 - 500</a></li>
                    <li><a href="/top-rogues/501">501 - 600</a></li>
                    <li><a href="/top-rogues/601">601 - 700</a></li>
                    <li><a href="/top-rogues/701">701 - 800</a></li>
                    <li><a href="/top-rogues/801">801 - 900</a></li>
                    <li><a href="/top-rogues/901">901 - 1000</a></li>
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