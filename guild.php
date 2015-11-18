<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 10/19/2015
     * Time: 7:51 PM
     */
    error_reporting(error_reporting() & ~E_NOTICE);
    $opts = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH];
    $db = new PDO('mysql:host=localhost;dbname=rotmgprod;', 'root', '', $opts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Members of the RotMG guild Merikuh | RealmEye.com</title>
    <link rel="icon" href="img/favicon.ico">
    <link href="css/realmeye.css" rel="stylesheet">
</head>
<body>
<?php require_once('banana/template/navbar.php'); ?>
<div class="container">
    <noscript>
        <div class="help-block alert alert-info">It seems like you have disabled javascript. The site uses it
            extensively, so expect a much degraded experience!
        </div>
    </noscript>
    <div class="row">
        <div class="col-md-12"><h1><span class="entity-name">Merikuh</span></h1>
            <div class="row">
                <div class="col-md-5">
                    <table class="summary">
                        <tr>
                            <td>Members</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Characters</td>
                            <td>256</td>
                        </tr>
                        <tr>
                            <td>Fame</td>
                            <td><span class="numeric">1117329</span> (<a href="/top-guilds-by-fame">1<sup>st</sup></a>)
                            </td>
                        </tr>
                        <tr>
                            <td>Exp</td>
                            <td><span class="numeric">2134339363</span> (<a href="/top-guilds-by-exp">1<sup>st</sup></a>)
                            </td>
                        </tr>
                        <tr>
                            <td>Most active on</td>
                            <td><a href="/top-guilds-on-server/EUNorth2">EUNorth2</a> (1<sup>st</sup>)</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-7">
                    <div class="well description" id="c">
                        <div class="line1 description-line">Reqs: Merikuh</div>
                        <div class="line2 description-line">Goal: Merikuh</div>
                        <div class="line3 description-line">Base Fame: Merikuh</div>
                    </div>
                </div>
            </div>
            <ul class="nav nav-pills" style="margin-top: 8px">
                <li class="active"><a href="/guild/Merikuh">Members</a></li>
                <li><a href="/top-characters-of-guild/Merikuh">Top Characters</a></li>
                <li><a href="/top-pets-of-guild/Merikuh">Top Pets</a></li>
                <li><a href="/recent-deaths-in-guild/Merikuh">Recent Deaths</a></li>
                <li><a href="/fame-history-of-guild/Merikuh">Fame History</a></li>
                <li><a href="/former-members-of-guild/Merikuh">Former Members</a></li>
                <li><a href="/server-activity-of-guild/Merikuh">Server Activity</a></li>
            </ul>
            <script async src="http://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <div style="margin:15px 0px;text-align:center">
                <script>var s = 0, d = document, a;
                    try {
                        s = d.documentElement.clientWidth || 0
                    } catch (e) {
                    }
                    a = s < 758 ? ["block", 5593172932, " data-ad-format=\"auto\""] : ["inline-block;width:728px;height:90px", 7520543336];
                    d.write('<ins class="adsbygoogle" data-ad-client="ca-pub-0854318594344150" style="display:' + a[0] + '" data-ad-slot="' + a[1] + '"' + (a[2] || '') + '></ins>');
                    (adsbygoogle = window.adsbygoogle || []).push({})</script>
            </div>
            <p>Current members of the guild Merikuh in RotMG.</p>
            <div class="table-responsive">
                <style type="text/css">#d th:nth-child(3), #d td:nth-child(3), #d th:nth-child(4), #d td:nth-child(4), #d th:nth-child(5), #d td:nth-child(5), #d th:nth-child(6), #d td:nth-child(6), #d th:nth-child(9), #d td:nth-child(9), #d th:nth-child(10), #d td:nth-child(10) {
                        text-align: right
                    }</style>
                <table id="d" class="table table-striped tablesorter">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Guild Rank</th>
                        <th>Fame</th>
                        <th>Exp</th>
                        <th><abbr title="Rank">R</abbr></th>
                        <th><abbr title="Chars">C</abbr></th>
                        <th>Last seen</th>
                        <th><abbr title="Server">Srv.</abbr></th>
                        <th><abbr title="Avg. Fame / Char">AF/C</abbr></th>
                        <th><abbr title="Avg. Exp / Char">AE/C</abbr></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Fiddy">Fiddy</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Founder</td>
                        <td><a href="/fame-history-of-player/Fiddy">156408</a></td>
                        <td>307071166</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>11172</td>
                        <td>21933654</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Rannnar">Rannnar</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Founder</td>
                        <td><a href="/fame-history-of-player/Rannnar">129150</a></td>
                        <td>252549470</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>9225</td>
                        <td>18039247</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/MOblivion">MOblivion</a>
                                <div class="star star-red"></div>
                            </div>
                        </td>
                        <td>Leader</td>
                        <td><a href="/fame-history-of-player/MOblivion">92000</a></td>
                        <td>182770178</td>
                        <td>32</td>
                        <td>3</td>
                        <td><span class="timeago" title="2015-10-16T17:53:28Z">2015-10-16 17:53:28</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                        <td>30666</td>
                        <td>60923392</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/SaltyOcean">SaltyOcean</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Leader</td>
                        <td><a href="/fame-history-of-player/SaltyOcean">50757</a></td>
                        <td>97929246</td>
                        <td>70</td>
                        <td>10</td>
                        <td>hidden</td>
                        <td></td>
                        <td>5075</td>
                        <td>9792924</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Lodis">Lodis</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Leader</td>
                        <td><a href="/fame-history-of-player/Lodis">39015</a></td>
                        <td>72282548</td>
                        <td>70</td>
                        <td>14</td>
                        <td><span class="timeago" title="2015-10-18T21:24:30Z">2015-10-18 21:24:30</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                        <td>2786</td>
                        <td>5163039</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Dattler">Dattler</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/Dattler">110779</a></td>
                        <td>215833767</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>7912</td>
                        <td>15416697</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Shu">Shu</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/Shu">31573</a></td>
                        <td>59453971</td>
                        <td>70</td>
                        <td>9</td>
                        <td><span class="timeago" title="2015-10-18T04:44:43Z">2015-10-18 04:44:43</span></td>
                        <td><abbr title="EUNorth2">EUN2</abbr></td>
                        <td>3508</td>
                        <td>6605996</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/KNCHA">KNCHA</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/KNCHA">30560</a></td>
                        <td>57837239</td>
                        <td>70</td>
                        <td>8</td>
                        <td>hidden</td>
                        <td></td>
                        <td>3820</td>
                        <td>7229654</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/LiveJoker">LiveJoker</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/LiveJoker">30200</a></td>
                        <td>59989169</td>
                        <td>70</td>
                        <td>1</td>
                        <td>hidden</td>
                        <td></td>
                        <td>30200</td>
                        <td>59989169</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Evilswan">Evilswan</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/Evilswan">28223</a></td>
                        <td>53142977</td>
                        <td>70</td>
                        <td>9</td>
                        <td>hidden</td>
                        <td></td>
                        <td>3135</td>
                        <td>5904775</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Troglodyta">Troglodyta</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Officer</td>
                        <td><a href="/fame-history-of-player/Troglodyta">21534</a></td>
                        <td>37399648</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1538</td>
                        <td>2671403</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/TBQNEE">TBQNEE</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/TBQNEE">74235</a></td>
                        <td>142725634</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>5302</td>
                        <td>10194688</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/SgtToasty">SgtToasty</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/SgtToasty">63400</a></td>
                        <td>121047456</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>4528</td>
                        <td>8646246</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Scrubbling">Scrubbling</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Scrubbling">50453</a></td>
                        <td>100127019</td>
                        <td>70</td>
                        <td>2</td>
                        <td>hidden</td>
                        <td></td>
                        <td>25226</td>
                        <td>50063509</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Polak">Polak</a>
                                <div class="star star-yellow"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Polak">36903</a></td>
                        <td>68528647</td>
                        <td>69</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>2635</td>
                        <td>4894903</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Fawl">Fawl</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Fawl">35650</a></td>
                        <td>70067048</td>
                        <td>70</td>
                        <td>3</td>
                        <td>hidden</td>
                        <td></td>
                        <td>11883</td>
                        <td>23355682</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Zeus">Zeus</a>
                                <div class="star star-yellow"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Zeus">24551</a></td>
                        <td>46660980</td>
                        <td>58</td>
                        <td>6</td>
                        <td>hidden</td>
                        <td></td>
                        <td>4091</td>
                        <td>7776830</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Lerquis">Lerquis</a>
                                <div class="star star-yellow"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Lerquis">21003</a></td>
                        <td>36293875</td>
                        <td>62</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1500</td>
                        <td>2592419</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Sieniaa">Sieniaa</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Sieniaa">19860</a></td>
                        <td>35568726</td>
                        <td>70</td>
                        <td>11</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1805</td>
                        <td>3233520</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/TheAngelic">TheAngelic</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/TheAngelic">15585</a></td>
                        <td>27022935</td>
                        <td>70</td>
                        <td>13</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1198</td>
                        <td>2078687</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/DanylMc">DanylMc</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/DanylMc">15238</a></td>
                        <td>25086393</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1088</td>
                        <td>1791885</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Cenka">Cenka</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Cenka">14624</a></td>
                        <td>24025855</td>
                        <td>70</td>
                        <td>14</td>
                        <td>hidden</td>
                        <td></td>
                        <td>1044</td>
                        <td>1716132</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/MikeBeszPL">MikeBeszPL</a>
                                <div class="star star-yellow"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/MikeBeszPL">8882</a></td>
                        <td>16121702</td>
                        <td>69</td>
                        <td>4</td>
                        <td>hidden</td>
                        <td></td>
                        <td>2220</td>
                        <td>4030425</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Turtlpanda">Turtlpanda</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Turtlpanda">7205</a></td>
                        <td>9681961</td>
                        <td>70</td>
                        <td>13</td>
                        <td>hidden</td>
                        <td></td>
                        <td>554</td>
                        <td>744766</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/Whaet">Whaet</a>
                                <div class="star star-yellow"></div>
                            </div>
                        </td>
                        <td>Member</td>
                        <td><a href="/fame-history-of-player/Whaet">6979</a></td>
                        <td>10407540</td>
                        <td>59</td>
                        <td>9</td>
                        <td>hidden</td>
                        <td></td>
                        <td>775</td>
                        <td>1156393</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="star-container"><a href="/player/LaQuaysha">LaQuaysha</a>
                                <div class="star star-white"></div>
                            </div>
                        </td>
                        <td>Initiate</td>
                        <td><a href="/fame-history-of-player/LaQuaysha">2562</a></td>
                        <td>4714213</td>
                        <td>70</td>
                        <td>1</td>
                        <td>hidden</td>
                        <td></td>
                        <td>2562</td>
                        <td>4714213</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div style="margin:15px 0px;text-align:center">
                <script>if (document.body.clientHeight > window.innerHeight) {
                        var s = 0, d = document, a;
                        try {
                            s = d.documentElement.clientWidth || 0
                        } catch (e) {
                        }
                        a = s < 330 ? ["block", 6930305338, " data-ad-format=\"auto\""] : s < 366 ? ["inline-block;width:300px;height:250px", 4616393335] : s < 758 ? ["inline-block;width:336px;height:280px", 6232727339] : ["inline-block;width:728px;height:90px", 1547194137];
                        d.write('<ins class="adsbygoogle" data-ad-client="ca-pub-0854318594344150" style="display:' + a[0] + '" data-ad-slot="' + a[1] + '"' + (a[2] || '') + '></ins>');
                        (adsbygoogle = window.adsbygoogle || []).push({})
                    }</script>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/typeahead.bundle.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.timeago.js"></script>
<script src="js/jquery.timeago.en-short.js"></script>
<script src="js/realmeye.definition.js"></script>
<script src="js/jquery.tablesorter.js"></script>
<script src="js/realmeye.js"></script>
<script type="text/javascript">$(function () {
        initializeSearch("a");
    });
    initializeLoginButton("b");
    addAnchorsInDescription("c", null);
    makeSortable("d", {
        0: {"sorter": "text"},
        1: {"sorter": "guildRank"},
        2: {"sorter": "digit"},
        3: {"sorter": "digit"},
        4: {"sorter": "digit"},
        5: {"sorter": "digit"},
        6: {"sorter": "text"},
        7: {"sorter": "text"},
        8: {"sorter": "digit"},
        9: {"sorter": "digit"}
    });
    renderNumeric("d", 3);
    renderNumeric("d", 4);
    renderNumeric("d", 5);
    renderNumeric("d", 6);
    renderNumeric("d", 9);
    renderNumeric("d", 10);
    bookmarkGuild("Merikuh");
</script>
<?php require_once('banana/template/googleanalytics.php'); ?>
</body>
</html>
