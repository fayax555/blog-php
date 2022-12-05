<?php
try {
  include __DIR__ . '/../../../classes/Author.php';
  $author = new Author();
  $authors = $author->getAuthors();

  $title = 'Authors';
  $showAddBtn = true;

  if (isset($_POST['delete']) && isset($_POST['author_id'])) {
    $author->deleteAuthor($_POST['author_id']);
    header('location: ./');
  }

  ob_start();
  include __DIR__ . '/../../../views/admin/authors/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';