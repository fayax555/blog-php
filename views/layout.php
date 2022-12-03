<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/output.css">
  <title><?= $title ?></title>
</head>

<body>
  <div class='mx-auto grid max-w-[1200px] grid-cols-[200px_auto] gap-4 p-5'>
    <nav>
      <aside class='mt-24'>
        <ul class='grid rounded-md bg-slate-100 p-4 text-lg'>
          <li>
            <a class='block w-full rounded-md py-2 px-4' href='/admin/articles'>
              Articles
            </a>
          </li>
          <li>
            <a class='block w-full rounded-md py-2 px-4' href='/admin/categories'>
              Categories
            </a>
          </li>
          <li>
            <a class='block w-full rounded-md py-2 px-4' href='/admin/authors'>
              Authors
            </a>
          </li>
        </ul>
      </aside>
    </nav>

    <main>
      <?= $output ?>
    </main>
  </div>

</body>

</html>