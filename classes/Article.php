<?php
require_once __DIR__ . '/Database.php';
class Article
{
  private $pdo;

  public $id;
  public $title;
  public $content;
  public $category_id;
  public $author_id;
  public $status;
  public function __construct()
  {
    $db = new Database();
    $this->pdo = $db->connect();
  }

  public function getArticles()
  {
    $stmt = $this->pdo->prepare('SELECT * FROM `articles` ORDER BY `id` DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }
}