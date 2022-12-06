<?php
try {
  include __DIR__ . '/../../../classes/Category.php';

  $category = new Category();

  $editing = isset($_GET['id']);
  $categoryName =  '';

  $title = "Add Category";

  ob_start();
  include __DIR__ . '/../../../views/admin/categories/add.php';
  $output = ob_get_clean();

  if (isset($_POST['add'])) {
    $category->name = htmlspecialchars($_POST['name']);
    $category->addCategory();
    header('location: ./');
  }
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';