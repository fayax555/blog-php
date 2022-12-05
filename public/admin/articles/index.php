<?php
try {
  include __DIR__ . '/../../../classes/Article.php';
  $article = new Article();
  $articles = $article->getArticles();

  $title = 'Articles';
  $showAddBtn = true;

  if (isset($_POST['delete']) && isset($_POST['article_id'])) {
    $article->deleteArticle($_POST['article_id']);
    header('location: ./');
  }

  ob_start();
  include __DIR__ . '/../../../views/admin/articles/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';