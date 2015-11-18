<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 10/20/2015
     * Time: 12:29 AM
     */
    include 'database.php';
    include 'engine.php';

if (isset($_POST['username']) && isset($_POST['password'])){
    $acc = $db->multipleQuery('SELECT accounts.id, accounts.name, uuid, rank, guild, guilds.name FROM accounts, guilds WHERE accounts.name=? AND password=?', [$_POST['username'], sha1($_POST['password'])]);
    if (count($acc) > 0) {
        session_start();
        $_SESSION['logged'] = true;
        $_SESSION['data'] =
            ['name' => $acc[0][1],
                'id' => $acc[0][0],
                'email' => $acc[0][2],
                'admin' => $acc[0][3] == 3,
                'guild' => $acc[0][4],
                'guildName' => $acc[0][5]];
        echo 'OK';
    }
}