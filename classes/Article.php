<?php
require_once __DIR__ . '/Database.php';
class Article
{
  private $pdo;

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

  public function getArticle($id)
  {
    $stmt = $this->pdo->prepare('SELECT * FROM articles WHERE id = :id');
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
  }

  public function getArticles()
  {
    $stmt = $this->pdo->prepare('SELECT articles.id, title, content, status, categories.name as category_name, authors.name as author_name
    FROM articles 
    LEFT JOIN categories ON articles.category_id = categories.id
    LEFT JOIN authors ON articles.author_id = authors.id
    ORDER BY articles.id');
    $stmt->execute();
    return  $stmt->fetchAll();
  }

  public function getPublishedArticles()
  {
    $stmt = $this->pdo->prepare('SELECT articles.id, title, content, status, categories.name as category_name, authors.name as author_name
    FROM articles 
    LEFT JOIN categories ON articles.category_id = categories.id
    LEFT JOIN authors ON articles.author_id = authors.id
    WHERE status = "Published"
    ORDER BY articles.id DESC');
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

  public function editArticle($id)
  {
    $stmt = $this->pdo->prepare('UPDATE articles SET title = :title, content = :content, category_id = :category_id, author_id = :author_id, status = :status WHERE id = :id');
    $stmt->execute([
      ':title' => $this->title,
      ':content' => $this->content,
      ':category_id' => $this->category_id,
      ':author_id' => $this->author_id,
      ':status' => $this->status,
      ':id' => $id
    ]);
  }

  public function deleteArticle($id)
  {
    $stmt = $this->pdo->prepare('DELETE FROM articles WHERE id = :id');
    $stmt->execute([':id' => $id]);
  }
}