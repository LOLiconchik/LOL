<?php

class QueryBuilder
{
    static private $itemsPerPage = 10;
    static private $instance = null;
    private $pdo;
    private $host = '127.0.0.1';
    private $tableName = 'kostya';
    private $dbUserName = 'root';
    private $dbPassword = 'h4PTCZJGhmk4kWv8';

    private function __construct()
    {
        $this->pdo = new PDO("mysql:host={$this->host}; dbname={$this->tableName}", "{$this->dbUserName}", "{$this->dbPassword}");
    }

    public static function getInstance()
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
        $statement->execute(
            [
                ':username' => $data['your_name'],
                ':email' => $data['email'],
                ':textcomment' => $data['textcomment'],
            ]
        );
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

    public function getCommentsByPage($page = 1): array
    {
        $offset = self::$itemsPerPage * ($page - 1);
        $sql = "SELECT * FROM comments LIMIT " . self::$itemsPerPage . " OFFSET " . $offset . ";";
        if (!mysqli_num_rows($sql)) {
            $insert_col = "CREATE TABLE `$this->tableName`.`comments` (
                            `id` INT NOT NULL AUTO_INCREMENT,
                            `username` VARCHAR(45) NOT NULL,
                            `email` VARCHAR(45) NOT NULL,
                            `commentext` VARCHAR(45) NOT NULL,
                            UNIQUE INDEX `id_UNIQUE` (`id` ASC),
                            PRIMARY KEY (`id`));";
            $this->pdo->query($insert_col);
            $createComment = "ALTER TABLE `$this->tableName`.`comments` 
            ADD COLUMN `username` VARCHAR(45) NOT NULL AFTER `id`,
            ADD COLUMN `commentext` VARCHAR(45) NOT NULL AFTER `username`,
            ADD COLUMN `email` VARCHAR(45) NOT NULL AFTER `commentext`,
            CHANGE COLUMN `id` `id` INT(11) NOT NULL ;";
            $this->pdo->query($createComment);
        }

        return $this->pdo->query($sql)->fetchAll();
    }
}