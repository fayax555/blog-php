<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/output.css">
  <title><?= $title ?></title>
  <style>
  html {
    font-family: 'Nunito', sans-serif;
  }
  </style>
</head>

<body>
  <nav class="max-w-[500px] flex gap-5 justify-center mx-auto py-4">
    <a class='rounded-md hover:bg-slate-200 py-1.5 px-4 transition text-sm ' href='/'>
      Home
    </a>
    <a class='rounded-md bg-slate-200 py-1.5 px-4 transition hover:bg-slate-800 text-sm hover:text-slate-100'
      href='/admin/articles'>
      Go to Admin
    </a>
  </nav>