<?php
    /**
     * Created by PhpStorm.
     * User: Mark
     * Date: 10/19/2015
     * Time: 10:52 PM
     */
    class Database
    {
        public $_db;
        private $_credentials;

        public function __construct($credentials = [])
        {
            $this->_credentials = ['host' => $credentials['host'], 'user' => $credentials['user'], 'password' => $credentials['password'], 'database' => $credentials['database']];
            try
            {
                $this->_db = new PDO('mysql:host=' . $credentials['host'] . ';dbname=' . $credentials['database'], $credentials['user'], $credentials['password']);
            } catch (PDOException $error)
            { }
        }

        public function multipleQuery($query, $params = [])
        {
            $query = $this->_db->prepare($query);
            if ($query->execute($params))
            {
                return $query->fetchAll();
            } else
            {
                return false;
            }
        }

        public function simpleQuery($query)
        {
            $query = $this->_db->prepare($query);
            if ($query->execute())
            {
                return $query->fetchAll();
            } else
            {
                return false;
            }
        }
    }