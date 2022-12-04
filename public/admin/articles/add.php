<?php
try {
  include __DIR__ . '/../../../classes/Home.php';
  include __DIR__ . '/../../../classes/Article.php';
  include __DIR__ . '/../../../classes/Author.php';
  include __DIR__ . '/../../../classes/Category.php';
  $home = new Home();
  $authorDB = new Author();
  $categoryDB = new Category();
  $categories = $categoryDB->getCategories();
  $authors = $authorDB->getAuthors();
  $article = new Article();

  $statuses = ['Draft', 'Published'];
  $title = 'Add Articles';
  $showAddBtn = false;

  if (isset($_POST['submit'])) {
    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->status = $_POST['status'];
    $article->author_id = $_POST['author'];
    $article->category_id = $_POST['category'];

    $article->addArticle();
    header('location: ./');
  } else {
    $article = null;

    ob_start();
    include __DIR__ . '/../../../views/admin/articles/add.php';
    $output = ob_get_clean();
  }
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';