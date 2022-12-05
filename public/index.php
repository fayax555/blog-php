<?php
try {
  include __DIR__ . '/../classes/Article.php';
  include __DIR__ . '/../classes/Category.php';

  $article = new Article();
  $category = new Category();
  $articles = $article->getPublishedArticles();
  $categories = $category->getCategories();
  $title = 'Home';

  include __DIR__ . '/../views/header.php';
  include __DIR__ . '/../views/home.php';
  include __DIR__ . '/../views/footer.php';
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}