<?php
try {
  include __DIR__ . '/../../../classes/Author.php';
  $authorDB = new Author();
  $authors = $authorDB->getAuthors();

  $title = 'Authors';
  $showAddBtn = true;
  ob_start();
  include __DIR__ . '/../../../views/admin/authors/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';