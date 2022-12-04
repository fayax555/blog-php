<?php
try {
  include __DIR__ . '/../../../classes/Category.php';
  $categoryDB = new Category();
  $categories = $categoryDB->getCategories();

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