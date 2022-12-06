<?php
try {
  include __DIR__ . '/../../../classes/Category.php';

  $category = new Category();
  $categories = $category->getCategories();

  $title = 'Categories';

  if (isset($_POST['add'])) {
    $category->name = htmlspecialchars($_POST['name']);
    $category->addCategory();
    header('location: /admin/categories');
  } else if (isset($_POST['edit'])) {
    $category->name = htmlspecialchars($_POST['name']);
    $category->editCategory($_GET['id']);
    header('Location: /admin/categories');
  } else if (isset($_POST['delete_category'])) {
    $category->deleteCategory($_POST['delete_category']);
    header('location: /admin/categories');
  }

  ob_start();
  include __DIR__ . '/../../../views/admin/categories/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';