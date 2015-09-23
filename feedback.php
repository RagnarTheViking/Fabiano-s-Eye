<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 1:53 PM
     */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, target-densityDpi=device-dpi">
    <title>Feedback | RealmEye.com</title>
    <link rel="shortcut icon" href="img/favicon.ico">

    <link rel="canonical" href="/feedback">
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
                <div class="col-md-8 col-md-offset-2"><h3>Feedback</h3><p>You didn&apos;t find the answer to your
                        question on the <a href="q-and-a.php">Q &amp; A</a> page? Ask away!</p><p>There are multiple ways
                        to send feedback:</p><h4>through MrEyeball</h4><p>Just visit his <a href="player.php?name=MrEyeball">RealmEye
                            page</a> and click on the Send message button. You need to be logged in to RealmEye to do
                        this.</p><h4>via IRC</h4><p>Join #rotmg on irc.sorcery.net, or just send a private message to
                        the user named realmeye.</p><h4>through MrEyeball in RotMG</h4><p>You can send feedback directly
                        from RotMG. <a href="mreyeball.php#feedback">Click here</a> to see how. Please note that <strong>we
                            can&apos;t answer your question</strong> directly in this case</p><h4>by email</h4><p>Sadly
                        <strong>we can&apos;t answer your mails</strong>, but we read them all! <a id="c">Click here</a>
                        to send us an email. If the link doesn&apos;t work for you, then try copying the email address
                        into your mail client.</p></div>
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
    renderMail("c");
</script>
</body>
</html>
