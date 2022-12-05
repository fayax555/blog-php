<?php
require_once __DIR__ . '/Database.php';
class Author
{
  private $pdo;

  public $name;
  public $email;
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
    $stmt = $this->pdo->prepare('INSERT INTO authors (name, email) VALUES (:name, :email)');
    $stmt->execute([':name' => $this->name, ':email' => $this->email]);
  }

  public function deleteAuthor($id)
  {
    $stmt = $this->pdo->prepare('DELETE FROM authors WHERE id = :id');
    $stmt->execute([':id' => $id]);
  }
}