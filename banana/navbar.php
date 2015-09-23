<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 9/7/2015
     * Time: 4:13 PM
     */

    define('HEADER_TEXT_COLOR_1', '#4D4D4D'); // Original #333
    define('HEADER_TEXT_COLOR_2', '#FF00EA'); // Original #08C
    define('HEADER_TEXT_1', "Fabiano's");
    define('HEADER_TEXT_2', 'Eye');
?>
<header class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button button-default" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="brand navbar-brand" href="/" tabindex="-1"><img class="realm-eye" alt="eye" title="eye" src="img/eye.png"><span style="color: <?= HEADER_TEXT_COLOR_1 ?>"><?= HEADER_TEXT_1 ?></span><span style="color: <?= HEADER_TEXT_COLOR_2 ?>"><?= HEADER_TEXT_2 ?></span></a>
        </div>
        <nav id="navbar" class="collapse navbar-collapse">
            <div class="navbar-right navbar-form">
                <div class="form-group player-search" id="a">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="player-guild-toggle-panel">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default active"><input type="radio" name="player-guild-search-toggle" autocomplete="off">Player</label><label class="btn btn-default"><input type="radio" name="player-guild-search-toggle" autocomplete="off">Guild</label>
                        </div>
                    </div>
                </div>
                <div class="auth-panel"><a id="b" href="https://www.realmeye.com/log-in" class="btn btn-default">Log
                        In</a></div>
            </div>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guilds<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="top-guilds-by-fame.php">Top Guilds by Fame</a></li>
                        <li><a href="top-guilds-by-exp.php">Top Guilds by Exp</a></li>
                        <li><a href="servers-by-active-guilds.php">Servers by active Guilds</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Players<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Top
                            Players</a>
                            <ul class="dropdown-menu">
                                <li><a href="top-players-by-fame.php">by Fame</a></li>
                                <li><a href="top-players-by-exp.php">by Exp</a></li>
                                <li><a href="top-players-by-account-fame.php">by Account Fame</a></li>
                                <li><a href="top-graveyards-by.php">by Graveyard</a></li>
                                <li><a href="top-players-with-no-guild.php">with no Guild</a></li>
                            </ul>
                        </li>
                        <li><a href="top-oldest-active-players.php">Top Oldest Active Players</a></li>
                        <li><a href="recently-seen-unnamed-players.php">Recently seen Unnamed Players</a></li>
                        <li><a href="number-of-players-by-rank.php">Number of Players by Rank</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Characters<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="top-characters.php">Top Characters</a></li>
                        <li><a href="top-archers.php">Top Characters by Class</a></li>
                        <li><a href="top-characters-with-outfit.php">Top Characters with Outfit</a></li>
                        <li><a href="top-dead-characters-by.php">Top Dead Characters</a></li>
                        <li><a href="dye-statistics.php">Dye statistics</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pets<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="top-pets.php">Top Pets</a></li>
                        <li><a href="top-pets-by-ability-heal.php">Top Pets by Ability</a></li>
                        <li><a href="feed-power-of-items.php">Feed Power of Items</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Items<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="mystery-boxes.php">Mystery Boxes</a></li>
                        <li><a href="keys.php">Nexus Shop Items</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Trading<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="current-offers.php">Current offers</a></li>
                        <li><a href="recent-offers.php">Recent offers</a></li>
                        <li><a href="trading-help.php">Help</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Help<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="q-and-a.php">Q &amp; A</a></li>
                        <li><a href="recent-changes.php">Recent changes</a></li>
                        <li><a href="mreyeball.php">Mr. Eyeball</a></li>
                        <li><a href="user-help.php">For Users</a></li>
                        <li><a href="signature-help.php">User Signatures</a></li>
                        <li><a href="admins.php">Administrators</a></li>
                        <li><a href="donators.php">Donators</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                        <li><a href="privacy-policy.php">Privacy policy</a></li>
                    </ul>
                </li>
                <li><a href="/wiki/realm-of-the-mad-god.php" title="RotMG Wiki">Wiki</a></li>
            </ul>
        </nav>
    </div>
</header>