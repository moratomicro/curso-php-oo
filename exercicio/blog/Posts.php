<?php

declare(strict_types=1);

class Posts {

    /**
     * @var PDO
     */
    private $_dbHostName = "localhost";
    private $_bdName = "blog";
    private $_dbUserName = "root";
    private $_dbPassword = "";
    private $_con;

    public function __construct()
    {
        try {
            $this->_con = new PDO("mysql:host=$this->_dbHostName; dbname=$this->_bdName", $this->_dbUserName, $this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "conectado com sucesso.";
        } catch(PDOException $e) {
            echo "<h1>Ops, algo deu errado: " . $e->getMessage()."</h1>";
            echo "<pre>";
            echo print_r($e);
        }
    }

    // return Connection
    public function returnConnection() {
        return $this->_con;
    }

    public function read(): array
    {
        $sql = 'select * from post';
      
        $post = [];

        foreach ($this->_con->query($sql) as $key => $value) {
            array_push($post, $value);
        }

        return $post;
    }

    public function create(string $date, string $title, string $body, string $author): int
    {
        $sql = 'insert into post(date, title, body, author) values(?, ?, ?, ?)';

        $prepare = $this->_con->prepare($sql);

        $prepare->bindParam(1, $date);
        $prepare->bindParam(2, $title);
        $prepare->bindParam(3, $body);
        $prepare->bindParam(4, $author);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function update(string $date, string $title, string $body, string $author, int $id): int
    {
        $sql = 'update post set date = ?, title = ?, body = ?, author = ? where id = ?';

        $prepare = $this->_con->prepare($sql);

        $prepare->bindParam(1, $date);
        $prepare->bindParam(2, $title);
        $prepare->bindParam(3, $body);
        $prepare->bindParam(4, $author);
        $prepare->bindParam(5, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }

    public function delete(int $id): int
    {
        $sql = 'delete from post where id = ?';

        $prepare = $this->_con->prepare($sql);

        $prepare->bindParam(1, $id);
        $prepare->execute();

        return $prepare->rowCount();
    }
}