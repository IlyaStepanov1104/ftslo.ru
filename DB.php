<?php

class DB
{
private $host = 'server2.hosting.reg.ru'; //имя хоста, на локальном компьютере это localhost
    private $user = 'u1279356_ilya'; //имя пользователя, по умолчанию это root
    private $password = '1Z1p6J2u'; //пароль, по умолчанию пустой
    private $db_name = 'u1279356_dancers'; //имя базы данных
    private $db;

    function __construct()
    {
        $this->db = mysqli_connect($this->host, $this->user, $this->password, $this->db_name);
        mysqli_query($this->db, "SET NAMES 'utf8'");
    }

    function select($db_name, $where='1'){
        return $this->db->query('SELECT * FROM '.$db_name.' WHERE '.$where.';')->fetch_all();
    }
}
