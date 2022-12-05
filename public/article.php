<?php
try {
  include __DIR__ . '/../classes/Article.php';
  include __DIR__ . '/../classes/Category.php';

  $articleDB = new Article();
  $article = isset($_GET['id']) ? $articleDB->getArticle($_GET['id']) : null;

  $title = $article['title'];
  $authorName = $article['author_name'];
  $categoryName = $article['category_name'];
  $content = $article['content'];

  $showEditButton = true;

  include __DIR__ . '/../views/header.php';
  include __DIR__ . '/../views/article.php';
  include __DIR__ . '/../views/footer.php';
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}