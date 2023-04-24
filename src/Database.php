<?php

abstract class Database
{
    protected $_handler; // Control connection to DB
    protected $statement; // SQL Statement
    protected $host, $db_name, $db_user, $db_password; // DB Conncet information

    public function __construct($host, $db_name, $db_user, $db_password)
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    // Must be implemented in child class
    abstract public function connect();
    
    public function select($sql)
    {
        $this->statement = $this->_handler->query($sql);
        return $this;
    }
    
    public function getConnection()
    {
        return $this->_handler;
    }
    
    // Must be implemented in child class
    abstract public function get();

}