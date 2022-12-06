<?php
try {
  include __DIR__ . '/../../../classes/Category.php';

  $category = new Category();
  $categories = $category->getCategories();

  $title = 'Categories';
  $showAddBtn = true;

  if (isset($_POST['edit'])) {
    $category->name = $_POST['name'];
    $category->editCategory($_POST['id']);
    header('Location: /admin/categories');
  }

  if (isset($_POST['edit'])) {
    $category->name = htmlspecialchars($_POST['name']);
    $category->editCategory($_GET['id']);
    header('location: ./');
  }

  if (isset($_POST['category_id']) && isset($_POST['delete'])) {
    $category->deleteCategory($_POST['category_id']);
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