<?php
try {
  include __DIR__ . '/../../../classes/Article.php';
  include __DIR__ . '/../../../classes/Author.php';
  include __DIR__ . '/../../../classes/Category.php';

  $author = new Author();
  $category = new Category();
  $categories = $category->getCategories();
  $authors = $author->getAuthors();
  $article = new Article();

  $statuses = ['Draft', 'Published'];
  $title = 'Add Articles';
  $showAddBtn = false;

  if (isset($_POST['submit'])) {
    $article->title = htmlspecialchars($_POST['title']);
    $article->content = htmlspecialchars($_POST['content']);
    $article->status = htmlspecialchars($_POST['status']);
    $article->author_id = htmlspecialchars($_POST['author']);
    $article->category_id = htmlspecialchars($_POST['category']);

    $article->addArticle();
    header('location: ./');
  } else {
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