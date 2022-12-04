<?php
try {
  include __DIR__ . '/../classes/Home.php';
  include __DIR__ . '/../classes/Article.php';
  include __DIR__ . '/../classes/Category.php';
  $home = new Home();
  $articleDB = new Article();
  $categoryDB = new Category();
  $articles = $articleDB->getArticles();
  $categories = $categoryDB->getCategories();
  var_dump($categories);
  $title = 'Home';
  // ob_start();
  include __DIR__ . '/../views/header.php';
  include __DIR__ . '/../views/home.php';
  include __DIR__ . '/../views/footer.php';
  // $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
// include __DIR__ . '/../views/layout.php';