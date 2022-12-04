<?php
try {
  include __DIR__ . '/../../../classes/Article.php';
  $articleDB = new Article();
  $articles = $articleDB->getArticles();

  $title = 'Articles';
  $showAddBtn = true;

  ob_start();
  include __DIR__ . '/../../../views/admin/articles/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';