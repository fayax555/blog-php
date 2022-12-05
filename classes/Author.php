<?php
require_once __DIR__ . '/Database.php';
class Author
{
  private $pdo;

  public $name;
  public function __construct()
  {
    $db = new Database();
    $this->pdo = $db->connect();
  }

  public function getAuthors()
  {
    $stmt = $this->pdo->prepare('SELECT * FROM authors ORDER BY authors.id ASC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function addAuthor()
  {
    $stmt = $this->pdo->prepare('INSERT INTO authors (name) VALUES (:name)');
    $stmt->execute([':name' => $this->name]);
  }
}