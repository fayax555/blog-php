<?php
try {
  include __DIR__ . '/../../../classes/Author.php';

  $author = new Author();

  $title = 'Add Authors';
  $showAddBtn = false;

  if (isset($_POST['submit'])) {
    $author->name = htmlspecialchars($_POST['name']);

    $author->addAuthor();
    header('location: ./');
  } else {
    ob_start();
    include __DIR__ . '/../../../views/admin/authors/add.php';
    $output = ob_get_clean();
  }
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';
