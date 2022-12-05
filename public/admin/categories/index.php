<?php
try {
  include __DIR__ . '/../../../classes/Category.php';
  $category = new Category();
  $categories = $category->getCategories();

  if (isset($_POST['delete']) && isset($_POST['category_id'])) {
    $category->deleteCategory($_POST['category_id']);
    header('location: ./');
  }

  $title = 'Categories';
  $showAddBtn = true;
  ob_start();
  include __DIR__ . '/../../../views/admin/categories/index.php';
  $output = ob_get_clean();
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';