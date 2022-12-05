<?php
try {
  include __DIR__ . '/../../../classes/Author.php';

  $author = new Author();

  $editing = isset($_GET['id']);
  $authorName = $editing ? $author->getAuthor($_GET['id'])['name'] : '';
  $authorEmail = $editing ? $author->getAuthor($_GET['id'])['email'] : '';

  $title = $editing ? "Editing item in Authors" : "Add Author";

  ob_start();
  include __DIR__ . '/../../../views/admin/authors/add.php';
  $output = ob_get_clean();

  if (isset($_POST['add'])) {
    $author->name = htmlspecialchars($_POST['name']);
    $author->email = htmlspecialchars($_POST['email']);

    $author->addAuthor();
    header('location: ./');
  }

  if (isset($_POST['edit'])) {
    $author->name = htmlspecialchars($_POST['name']);
    $author->email = htmlspecialchars($_POST['email']);

    $author->editAuthor($_GET['id']);
    header('location: ./');
  }
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';
