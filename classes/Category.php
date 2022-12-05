<?php
require_once __DIR__ . '/Database.php';
class Category
{
  private $pdo;

  public $name;

  public function __construct()
  {
    $db = new Database();
    $this->pdo = $db->connect();
  }

  public function getCategories()
  {
    $stmt = $this->pdo->prepare('SELECT * FROM `categories` ');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function addCategory()
  {
    $stmt = $this->pdo->prepare('INSERT INTO categories (name) VALUES (:name)');
    $stmt->execute([':name' => $this->name]);
  }
}