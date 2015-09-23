<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:49 PM
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mr. Eyeball | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="canonical" href="/mreyeball">
    <link href="css/re.css" rel="stylesheet">
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
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-2 col-md-8"><h3 id="who-is-mr-eyeball">Who is Mr. Eyeball?</h3><p>Mr. Eyeball
                        is a RotMG player, through whom you can interact with RealmEye.com. His IGN is MrEyeball.</p>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="list-group"><a class="list-group-item" href="#player-specific-messages">Player
                                    specific
                                    messages<i class="glyphicon glyphicon-chevron-right pull-right" style="color:#fff"></i></a><a class="list-group-item" href="#guild-specific-messages">Guild
                                    specific
                                    messages<i class="glyphicon glyphicon-chevron-right pull-right" style="color:#fff"></i></a><a class="list-group-item" href="#troubleshooting">Troubleshooting<i class="glyphicon glyphicon-chevron-right pull-right" style="color:#fff"></i></a>
                            </div>
                        </div>
                    </div>
                    <h3 id="player-specific-messages">Player specific messages</h3><h4 id="password">The Password
                        message</h4><p><code>/tell mreyeball password</code></p><p>With this command, you can get a
                        <strong>new</strong> password with which you can log in to RealmEye.com. In the game you can use
                        the
                        <a target="_blank" href="http://en.wikipedia.org/wiki/Page_Up_and_Page_Down_keys" class="btn btn-default btn-xs" style="text-align:left">Page<br>Up</a>
                        key to scroll the chat back, and keep the response visible. If you ever forget your password,
                        then you can also get a new one with this command. Dr. Terrible recommends you to change your
                        password from time to time, as it&apos;s good for your health.</p><h4 id="stats">The Stats
                        message</h4><p><code>/tell mreyeball stats</code></p><p>With this message you can check the
                        stats (distance from average) of your last seen character. It&apos;s useful for rolling.</p>
                    <h4 id="lefttomax">The LeftToMax message</h4><p><code>/tell mreyeball lefttomax</code></p><p>With
                        this message you can check how many pots you&apos;ll have to drink on your last seen character
                        to max its stats. It&apos;s useful for rolling or maxing.</p><h4 id="server">The Server
                        message</h4><p><code>/tell mreyeball server</code></p><p>With this message you can check the
                        last server we&apos;ve seen you on.</p><h4 id="friends">The Friends message</h4><p><code>/tell
                            mreyeball friends</code></p><p>With this command, you can list your friends whom we&apos;ve
                        seen in the past 30 minutes by server. Players who don&apos;t allow you to see their current
                        location are not listed.</p><h4 id="hideme">The Hide Me message</h4><p><code>/tell mreyeball
                            hide me</code></p><p>With this command, you can hide your current location on RealmEye for
                        the next 10 minutes.</p><h4 id="tag">The Tag message</h4><p><code>/tell mreyeball tag &lt;tag
                            name&gt; &lt;player&gt;</code></p><p>With this message you can tag players as <strong>cheater</strong>
                        or <strong>scammer</strong>, even if they have private RealmEye profile.</p><h4 id="untag">The
                        Untag message</h4><p><code>/tell mreyeball untag &lt;tag name&gt; &lt;player&gt;</code></p><p>
                        With this message you can remove the <strong>cheater</strong> and the <strong>scammer</strong>
                        tags from players, even if they have private RealmEye profile.</p><h4 id="scammer">The Scammer
                        message</h4><p><code>/tell mreyeball scammer &lt;player&gt;</code></p><p>With this message you
                        can check if the given player has too many scam reports. It only works if you and the player
                        were both last seen on the same server in the past ten minutes. This command works, even if the
                        player has a private profile.</p><h4 id="feedback">The Feedback message</h4><p><code>/tell
                            mreyeball feedback: &lt;your message&gt;</code></p><p>Is obsolete. Get a
                        <a href="/mreyeball#password">password</a>, log in and send a message to
                        <a href="/player/MrEyeball"> MrEyeball.</a></p><h4 id="privateprofile">The Private Profile
                        message</h4><p><code>/tell mreyeball private profile</code></p><p>Is obsolete. Get a
                        <a href="/mreyeball#password">password</a>, log in and change your visibility settings from your
                        profile page.</p><h4 id="publicprofile">The Public Profile message</h4><p><code>/tell mreyeball
                            public profile</code></p><p>Is obsolete. Get a <a href="/mreyeball#password">password</a>,
                        log in and change your visibility settings from your profile page.</p>
                    <h3 id="guild-specific-messages">Guild specific messages</h3><h4 id="mates">The Mates message</h4>
                    <p><code>/tell mreyeball mates</code></p><p>With this command, you can list your guild mates whom we&apos;ve
                        seen in the past 30 minutes by server. Players who don&apos;t allow you to see their current
                        location are not listed.</p><h4 id="guildhide">The Hide My Guild message</h4><p><code>/tell
                            mreyeball hide my guild</code></p><p>With this command, you can hide the current location of
                        all members of your guild on RealmEye for the next 10 minutes. Only Founders, Leaders and
                        Officers can use this command.</p><h3 id="troubleshooting">Troubleshooting</h3>
                    <h4 id="i-get-no-response">I get no response from Mr. Eyeball. Why is that?</h4><p>The following are
                        the most common causes why he&apos;s not responding to you:
                    <ul>
                        <li>He&apos;s too busy responding to others. Please try again a bit later.</li>
                        <li>You&apos;ve ignored Mr. Eyeball. Try <code>/unignore mreyeball</code></li>
                    </ul>
                    </p></div>
            </div>
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
<script type="text/javascript">$(function () {
        initializeSearch("a");
    });
    initializeLoginButton("b");
</script>
</body>
</html>
