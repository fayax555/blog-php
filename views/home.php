<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/output.css">
  <title><?= $title ?></title>
</head>

<body>
  <nav>
    <header>
      <h1>Shop Database</h1>
    </header>
  </nav>
  <main class='mx-auto max-w-[1000px] px-4 py-2'>
    <div class='mt-10 flex items-center justify-center gap-5'>
      <h1 class='text-5xl font-semibold'>Blog</h1>
      <a class='rounded-md bg-slate-200 py-1.5 px-4 transition hover:bg-slate-800 text-sm hover:text-slate-100'
        href='/admin.php'>
        Go to Admin
      </a>
    </div>
    <section class='mt-20 grid grid-cols-2 gap-5'>
      <?php foreach ($articles as $article) : ?>
      <article class='rounded-md bg-slate-100 p-4'>
        <span class='rounded-full bg-slate-300 px-4 py-1 text-xs text-slate-800'>
          <?= $article['category_name']  ?>
        </span>
        <div class='py-4'>
          <h2 class='text-lg font-semibold'><?= $article['title'] ?></h2>
          <p class='text-sm text-slate-700'>
            by <span class='font-semibold'><?= $article['author_name']  ?></span>
          </p>
        </div>
        <p><?= $article['content'] ?></p>
      </article>
      <?php endforeach; ?>
      <!-- {articles.map((a) => (
      <article key={a.id} className='rounded-md bg-slate-100 p-4'>
        <span className='rounded-full bg-slate-300 px-4 py-1 text-xs text-slate-800'>
          {a.category}
        </span>
        <div className='py-4'>
          <h2 className='text-lg font-semibold'>{a.title}</h2>
          <p className='text-sm text-slate-700'>
            by <span className='font-semibold'>{a.author}</span>
          </p>
        </div>
        <p>{a.content}</p>
      </article>
      ))} -->
    </section>
  </main>
</body>

</html>