<?php

class QueryBuilder
{
    static private $itemsPerPage = 10;
    static private $instance = null;
    private $pdo;

    private function __construct()
    {
        $this->pdo = new PDO("mysql:host=127.0.0.1; dbname=comment", "root", "");
    }

    static public function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new QueryBuilder();
        }
        return self::$instance;
    }

    public function addComment($data)
    {
        $sql = "INSERT INTO comments (username, email, textcomment) values (:username, :email, :textcomment)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            ':username' => $data['your_name'],
            ':email' => $data['email'],
            ':textcomment' => $data['textcomment'],
        ]);
    }

    public function allComments()
    {
        $sql = "SELECT * FROM comments ";
        $result = $this->pdo->query($sql);
        return $result->fetchAll();
    }

    public function getPagesCount()
    {
        $sql = "select count(*) from comments";
        $recordsCount = $this->pdo->query($sql)->fetch()[0];
        $pagesCount = $recordsCount / self::$itemsPerPage;
        $remain = $recordsCount % self::$itemsPerPage;
        if ($remain !== 0) {
            $pagesCount++;
        }
        return $pagesCount;


    }

    public function getCommentsByPage($page = 1)
    {
        $offset = self::$itemsPerPage * ($page - 1);
        $sql = "SELECT * FROM comments LIMIT " . self::$itemsPerPage . " OFFSET " . $offset . ";";
        return $this->pdo->query($sql)->fetchAll();
    }

}