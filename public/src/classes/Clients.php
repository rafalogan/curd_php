<?php
require 'EntityClients.php';

class Clients extends EntityClients {
    protected $Table = 'clients';

    public function insert() {
        $sql = "INSERT INTO $this->Table (name, email) VALUES (:name, :email)";

        $statement = Connection::prepare($sql);
        $statement->bindParam(':name', $this->Name);
        $statement->bindParam(':email', $this->Email);

        return $statement->execute();
    }

    public function findById($id) {
        $sql = "SELECT * FROM $this->Table WHERE id = :id";

        $statement = Connection::prepare($sql);
        $statement->bindParam('id', $id, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    public function findAll() {
        $sql = "SELECT * FROM $this->Table";

        $statement = Connection::prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }

    public function update($id) {
        $sql= "UPDATE $this->Table SET name = :name, email = :email WHERE id = :id";

        $statement = Connection::prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->bindParam(':name', $this->getName());
        $statement->bindParam(':email', $this->getEmail());

        return $statement->execute();
    }

    public function remove($id) {
        $sql= "DELETE * FROM $this->Table WHERE id = :id";

        $statement = Connection::prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);

        return $statement->execute();
    }
}
