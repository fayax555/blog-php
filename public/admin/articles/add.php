<?php
try {
  include __DIR__ . '/../../../classes/Article.php';
  include __DIR__ . '/../../../classes/Author.php';
  include __DIR__ . '/../../../classes/Category.php';

  $author = new Author();
  $category = new Category();
  $categories = $category->getCategories();
  $authors = $author->getAuthors();
  $article = new Article();

  $statuses = ['Draft', 'Published'];
  $showAddBtn = false;

  $editing = isset($_GET['id']);
  $articleTitle = $editing ? $article->getArticle($_GET['id'])['title'] : '';
  $articleContent = $editing ? $article->getArticle($_GET['id'])['content'] : '';
  $articleAuthor = $editing ? $article->getArticle($_GET['id'])['author_id'] : '';
  $articleCategory = $editing ? $article->getArticle($_GET['id'])['category_id'] : '';
  $articleStatus = $editing ? $article->getArticle($_GET['id'])['status'] : '';

  $title = $editing ? "Editing item in Articles" : "Add Article";

  ob_start();
  include __DIR__ . '/../../../views/admin/articles/add.php';
  $output = ob_get_clean();

  if (isset($_POST['add'])) {
    $article->title = htmlspecialchars($_POST['title']);
    $article->content = htmlspecialchars($_POST['content']);
    $article->status = htmlspecialchars($_POST['status']);
    $article->author_id = htmlspecialchars($_POST['author']);
    $article->category_id = htmlspecialchars($_POST['category']);

    $article->addArticle();
    header('location: ./');
  }

  if (isset($_POST['edit'])) {
    $article->title = htmlspecialchars($_POST['title']);
    $article->content = htmlspecialchars($_POST['content']);
    $article->status = htmlspecialchars($_POST['status']);
    $article->author_id = htmlspecialchars($_POST['author']);
    $article->category_id = htmlspecialchars($_POST['category']);

    $article->editArticle($_GET['id']);
    header('location: ./');
  }
} catch (PDOException $e) {
  $title = 'An error has occurred';
  $output = 'Database error: ' . $e->getMessage() . ' in ' .
    $e->getFile() . ':' . $e->getLine();
}
include __DIR__ . '/../../../views/layout.php';