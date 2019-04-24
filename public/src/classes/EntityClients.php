<?php

require 'Connection.php';

abstract class EntityClients extends Connection {

    protected $Table;
    private $Id;
    private $Name;
    private $Email;

    public function getId() {
        return $this->Id;
    }

    public function setName($name) {
        $this->Name = $name;
    }

    public function getName() {
        return $this->Name;
    }

    public function setEmail($email) {
        $this->Email = $email;
    }

    public function getEmail() {
        return $this->Email;
    }
}
