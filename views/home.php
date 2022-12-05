<main class='mx-auto max-w-[1000px] px-4 py-2'>
  <div class='mt-10 flex items-center justify-center gap-5'>
    <h1 class='text-5xl font-semibold'>Blog</h1>
    <a class='rounded-md bg-slate-200 py-1.5 px-4 transition hover:bg-slate-800 text-sm hover:text-slate-100'
      href='/admin/articles'>
      Go to Admin
    </a>
  </div>

  <section class='mt-20 grid grid-cols-2 gap-5'>
    <?php foreach ($articles as $article) : ?>
    <a href="/article.php?id=<?= $article['id'] ?>"
      className='rounded-md border-2 border-transparent bg-slate-100 hover:border-slate-600'>
      <article class='p-4'>
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
    </a>
    <?php endforeach; ?>
  </section>
</main>