<?php
class Key
{
    private $db;

    public function __construct()
    {

        $this->db = new Database;
    }

    public function addkey()
    {

        // Prepare Query
        // $this->db->query('UPDATE users SET (haskey, userkey) VALUES (:haskey, :userkey) WHERE idUsers='.$_SESSION['userId'].'');
        $this->db->query('UPDATE users SET haskey = 1, userkey = "ThisKeyShouldBeRandom." WHERE idUsers = ' . $_SESSION['userId'] . ';');

        // Bind Values
        // $this->db->bind(':haskey',  $data['haskey']);
        // $this->db->bind(':userkey', $data['userkey']);

        // Execute
        if ($this->db->execute()) {

            return true;
        } else {

            return false;
        }
    }

    public function getKey()
    {

        $this->db->query('SELECT * FROM users ORDER BY idUsers DESC');

        $results = $this->db->resultset();

        return $results;
    }
}
