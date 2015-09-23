<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 8/30/2015
     * Time: 3:08 PM
     */

    function mysqlx()
    {
        return new PDO('mysql:host=localhost;dbname=rotmgprod;charset=utf8', 'root', '');
        //return new mysqli('localhost', 'root', '', 'rotmgprod');
    }

    function get_id_from_name_json($name)
    {
        $name = mysqlx()->quote($name);
        return json_encode(['id' => mysqlx()->query("select id from accounts where name='$name';")->fetch_assoc()['id']]);
    }

    function get_id_from_name($name)
    {
        $name = mysqlx()->quote($name);
        return mysqlx()->query("SELECT id FROM accounts WHERE name=$name")->fetch(PDO::FETCH_ASSOC)['id'];
    }

    function get_accounts_limit($limit)
    {
        $limit = mysqlx()->quote($limit);
        return mysqlx()->query("select * from accounts order by id asc limit $limit;")->fetch(PDO::FETCH_ASSOC);
    }

    function get_accounts_limit_sort($limit, $sort = true)
    {
        $limit = mysqlx()->quote($limit);
        return mysqlx()->query("select * from accounts order by id asc limit $limit;")->fetch(PDO::FETCH_ASSOC);
    }

    function get_guildname_from_guildid($id)
    {
        $id = mysqlx()->quote($id);
        return mysqlx()->query("select name from guilds where id = $id")->fetch(PDO::FETCH_ASSOC);
    }

    function get_alivefame_from_id($id, $fame = 0)
    {
        $id = mysqlx()->quote($id);
        $chars = mysqlx()->query("select fame from characters where accId=$id and dead=0;")->fetch(PDO::FETCH_ASSOC);
        while ($_fame = $chars)
            $fame += $_fame;
        return $fame;
    }

    function get_accountfame_from_id($id, $fame = 0)
    {
        $id = mysqlx()->quote($id);
        $chars = mysqlx()->query("select fame from stats where accId=$id;")->fetch(PDO::FETCH_ASSOC);
        while ($_fame = $chars)
            $fame += $_fame;
        return $fame;
    }

    function get_alivechars_from_id($id, $alivechars = 0)
    {
        $id = mysqlx()->quote($id);
        $chars = mysqlx()->query("select id from characters where accId=$id and dead=0;")->fetch(PDO::FETCH_ASSOC);
        while ($_fame = $chars)
            $alivechars += 1;
        return $alivechars;
    }

    function get_aliveexp_from_id($id, $exp = 0)
    {
        $id = mysqlx()->quote($id);
        $chars = mysqlx()->query("select exp from characters where accId=$id and dead=0;")->fetch(PDO::FETCH_ASSOC);
        while ($_exp = $chars)
            $exp += $_exp;
        return $exp;
    }

    function get_stars_from_id($id, $stars = 0)
    {
        $id = mysqlx()->quote($id);
        $chars = mysqlx()->query("select bestFame from classstats where accId=$id;")->fetch(PDO::FETCH_ASSOC);
        while ($_stars = $chars)
        {
            if ($_stars >= 2000) $stars += 5;
            elseif ($_stars >= 800) $stars += 4;
            elseif ($_stars >= 400) $stars += 3;
            elseif ($_stars >= 150) $stars += 2;
            elseif ($_stars >= 20) $stars += 1;
        }
        return $stars;
    }