<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 3:08 PM
     */

    if (isset($_GET['action'])){
        switch($_GET['action']){
            case "getidfromname":
                echo get_id_from_name($_GET['name']);
                break;
            case "getaccounts":
                echo get_accounts();
                break;
        }
    }

    function mysqlx()
    {
        return new mysqli('localhost', 'root', '', 'rotmgprod');
    }

    function get_id_from_name_json($name){
        $name = mysqlx()->real_escape_string($name);
        return json_encode(['id' => mysqlx()->query("select id from accounts where name='$name';")->fetch_assoc()['id']]);
    }

    function get_id_from_name($name)
    {
        $name = mysqlx()->real_escape_string($name);
        return mysqlx()->query("select id from accounts where name=$name;")->fetch_assoc()['id'];
    }

    function get_accounts_limit($limit)
    {
        $limit = mysqlx()->real_escape_string($limit);
        return mysqlx()->query("select * from accounts order by id asc limit $limit;");
    }

    function get_accounts_limit_sort($limit, $sort = true)
    {
        $limit = mysqlx()->real_escape_string($limit);
        return mysqlx()->query("select * from accounts order by id asc limit $limit;");
    }

    function get_guildname_from_guildid($id)
    {
        $id = mysqlx()->real_escape_string($id);
        return mysqlx()->query("select name from guilds where id = $id")->fetch_assoc()['name'];
    }

    function get_alivefame_from_id($id, $fame = 0)
    {
        $id = mysqlx()->real_escape_string($id);
        $chars = mysqlx()->query("select fame from characters where accId=$id and dead=0;");
        while ($_fame = $chars->fetch_assoc()['fame'])
            $fame += $_fame;
        return $fame;
    }

    function get_accountfame_from_id($id, $fame = 0)
    {
        $id = mysqlx()->real_escape_string($id);
        $chars = mysqlx()->query("select fame from stats where accId=$id;");
        while ($_fame = $chars->fetch_assoc()['fame'])
            $fame += $_fame;
        return $fame;
    }

    function get_alivechars_from_id($id, $alivechars = 0)
    {
        $id = mysqlx()->real_escape_string($id);
        $chars = mysqlx()->query("select id from characters where accId=$id and dead=0;");
        while ($_fame = $chars->fetch_assoc()['id'])
            $alivechars += 1;
        return $alivechars;
    }

    function get_aliveexp_from_id($id, $exp = 0)
    {
        $id = mysqlx()->real_escape_string($id);
        $chars = mysqlx()->query("select exp from characters where accId=$id and dead=0;");
        while ($_exp = $chars->fetch_assoc()['exp'])
            $exp += $_exp;
        return $exp;
    }

    function get_stars_from_id($id, $stars = 0)
    {
        $id = mysqlx()->real_escape_string($id);
        $chars = mysqlx()->query("select bestFame from classstats where accId=$id;");
        while ($_stars = $chars->fetch_assoc()['bestFame'])
        {
            if ($_stars >= 2000) $stars += 5;
            elseif ($_stars >= 800) $stars += 4;
            elseif ($_stars >= 400) $stars += 3;
            elseif ($_stars >= 150) $stars += 2;
            elseif ($_stars >= 20) $stars += 1;
        }
        return $stars;
    }