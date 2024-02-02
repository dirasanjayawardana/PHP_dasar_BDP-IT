<?php

// buat object dan class untuk query
class SQL
{
    private $connection;
    private $statement;
    private $fetch;

    // function __construct akan dipanggil pertama kali ketika class digunakan
    public function __construct($database)
    {
        // buatk koneksi ke database
        $this->connection = new mysqli(
            $database["hostname"],
            $database["username"],
            $database["password"],
            $database["name"],
        );
    }

    public function setQueryParameter($username, $password, $name = null)
    {
        if (is_null($name)) {
            // prepare query
            $this->statement = $this->connection->prepare("SELECT * FROM user WHERE username = ? AND password = ?");

            // binding query SQL with parameter, s (string), i (integer)
            $this->statement->bind_param(
                "ss",
                $username,
                $password,
            );
        } else {
            $this->statement = $this->connection->prepare("UPDATE user SET name = ?, password = ? WHERE username = ?");
            $this->statement->bind_param(
                "sss",
                $name,
                $password,
                $username,
            );
        }
        // untuk execute querry
        $this->statement->execute();
        // konversi hasil dari query SQL
        $result = $this->statement->get_result();
        // fetch_assoc() --> untuk mengubah objek menjadi array
        if (isset($result->num_rows)) {
            $this->fetch = $result->fetch_assoc();
        }
    }

    public function getQueryFetch()
    {
        return $this->fetch;
    }
}
