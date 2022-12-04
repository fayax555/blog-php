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
    $stmt = $this->pdo->prepare('SELECT articles.id, title, content, status, categories.name as category_name, authors.name as author_name
    FROM articles 
    JOIN categories ON articles.category_id = categories.id
    JOIN authors ON articles.author_id = authors.id
    ORDER BY articles.id ASC');
    $stmt->execute();
    return  $stmt->fetchAll();
  }

  public function addArticle()
  {
    $stmt = $this->pdo->prepare('INSERT INTO articles (title, content, category_id, author_id, status)
    VALUES (:title, :content, :category_id, :author_id, :status)');
    $stmt->execute([
      ':title' => $this->title,
      ':content' => $this->content,
      ':category_id' => $this->category_id,
      ':author_id' => $this->author_id,
      ':status' => $this->status
    ]);
  }
}