<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 10/19/2015
     * Time: 10:52 PM
     */

    include 'core/database.php';
    include 'core/engine.php';

    session_start();

    if (isset($_GET['name']))
        $account = $db->multipleQuery('SELECT id, name, rank, namechosen, verified, guild, guildRank, regTime, banned, lastSeen, accTex1, accTex2, line1, line2, line3 FROM accounts WHERE name=?;', [$_GET['name']]);
        if (count($account) > 0)
            $characters = $db->multipleQuery('SELECT charType, level, exp, fame, items, hp, mp, stats, tex1, tex2, texIds, hasBackpack, skin, lastSeen, lastLocation FROM characters WHERE accId=? AND dead=0;', [$account[0][0]]);
    else
        header('Location: /404');
?>
<html>
<head>
    <title>Profile of <?= $account[0][1] ?></title>
    <link rel="icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="/css/realmeye.css">
    <link rel="stylesheet" href="/css/select2.css">
    <link rel="stylesheet" href="/css/select2-bootstrap.css">
    <link rel="stylesheet" href="/css/realmeye.messages.css">
</head>
<body>
<?php include '../banana/template/navbar.php'; ?>
<script src="/js/jquery-1.11.2.min.js"></script>
<script src="/js/typeahead.bundle.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.timeago.js"></script>
<script src="/js/jquery.timeago.en-short.js"></script>
<script src="/js/realmeye.definition.js"></script>
<script src="/js/jquery.tablesorter.js"></script>
<script src="/js/realmeye.js"></script>
<script src="/js/underscore-min.js"></script>
<script src="/js/realmeye.sheet.js"></script>
<script src="/js/realmeye.characters.js"></script>
<script src="/js/Utils.js"></script>
<script>
    <?php if (!$_SESSION['logged']) { ?>initializeLogin('loginz', {
        'type': 'POST',
        'url': 'core/login.php',
        'data': {'password': null, 'username': null, 'bindToIp': null}
    });<?php } else { ?>initializeClickHandlerWithAction("logoutz", {"type": "POST", "url": "core/logout.php", "data": {}});<?php } ?>
</script>
</body>
</html>
