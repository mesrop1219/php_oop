<?php

/*
    Encapsulation is first of the main principles with help of that we can isolate properties and methods.
    Hiding is process with help of it we can hide our properties or methods.
*/

class Database
{
    private string $dsn;
    private string $username;
    private string $password;

    public function __construct(string $dsn, string $username, string $password)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
    }

    public  function getInfo(): void
    {
        echo "dsn is: " . $this->dsn, "\n";
        echo "username is: " . $this->username, "\n";
        echo "password is: " . $this->password, "\n";
    }

    /**
     * @param string $dsn
     */
    public function setDsn(string $dsn): void
    {
        $this->dsn = $dsn;
    }
}

$db = new Database("host=localhost;dbname=test", "root", "root");

$db->getInfo();
$db->setDsn("host=database,dbname=app");