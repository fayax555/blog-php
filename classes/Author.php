<?php
require_once __DIR__ . '/Database.php';
class Author
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

  public function getAuthors()
  {
    $stmt = $this->pdo->prepare('SELECT * FROM `authors` ORDER BY `id` DESC');
    $stmt->execute();
    return $stmt->fetchAll();
  }

  public function getTotal()
  {
    $stmt = $this->pdo->prepare('SELECT COUNT(*) FROM `products`');
    $stmt->execute();
    $row = $stmt->fetch();
    return $row[0];
  }

  // public function saveProduct()
  // {
  //   $query = 'INSERT INTO `products` (`ProductName`, `SupplierID`, `CategoryID`, `Unit`, `Price`)
  //   VALUES(:ProductName, :SupplierID, :CategoryID, :Unit, :Price)';
  //   $values = [
  //     ':ProductName' => $this->name,
  //     ':SupplierID' => $this->supplierId,
  //     ':CategoryID' => $this->categoryId,
  //     ':Unit' => $this->unit,
  //     ':Price' => $this->price,
  //   ];
  //   $stmt = $this->pdo->prepare($query);
  //   $stmt->execute($values);
  // }
}