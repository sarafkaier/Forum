<?php

class MyPDO extends PDO {

    private $sgbd = 'mysql';
    private $db = 'ipi_team';
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';

    public function __construct()
    {
        $sgbdHost = $this->sgbd . ':dbname=' . $this->db . ';host=' . $this->host;
        parent::__construct($sgbdHost, $this->user, $this->password);
    }
}

?>