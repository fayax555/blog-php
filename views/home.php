<main class='mx-auto max-w-[1000px] px-4 py-2'>
  <div class='mt-10 grid place-items-center gap-5'>
    <h1 class='text-5xl font-semibold'>Blog</h1>
  </div>

  <div class='mt-16 flex gap-4 place-content-center items-center'>
    <?php foreach ($categories as $category) : ?>
    <a href="/?category=<?= $category['name'] ?>"
      class="<?= $category['name'] === ($_GET['category'] ?? null) ? 'bg-slate-800 text-slate-100' : 'bg-slate-200 hover:bg-slate-300 transition' ?>  text-sm rounded-full px-4 py-1.5"><?= $category['name'] ?></a>
    <?php endforeach ?>

    <?php if (isset($_GET['category'])) : ?>
    <a title="remove filters" href="/"
      class="text-sm px-4 py-2 transition bg-slate-100 [&:hover_svg]:text-red-700 rounded-full">
      <svg class="transition" stroke="currentColor" fill="currentColor" stroke-width="0" version="1.1"
        viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M15.854 12.854c-0-0-0-0-0-0l-4.854-4.854 4.854-4.854c0-0 0-0 0-0 0.052-0.052 0.090-0.113 0.114-0.178 0.066-0.178 0.028-0.386-0.114-0.529l-2.293-2.293c-0.143-0.143-0.351-0.181-0.529-0.114-0.065 0.024-0.126 0.062-0.178 0.114 0 0-0 0-0 0l-4.854 4.854-4.854-4.854c-0-0-0-0-0-0-0.052-0.052-0.113-0.090-0.178-0.114-0.178-0.066-0.386-0.029-0.529 0.114l-2.293 2.293c-0.143 0.143-0.181 0.351-0.114 0.529 0.024 0.065 0.062 0.126 0.114 0.178 0 0 0 0 0 0l4.854 4.854-4.854 4.854c-0 0-0 0-0 0-0.052 0.052-0.090 0.113-0.114 0.178-0.066 0.178-0.029 0.386 0.114 0.529l2.293 2.293c0.143 0.143 0.351 0.181 0.529 0.114 0.065-0.024 0.126-0.062 0.178-0.114 0-0 0-0 0-0l4.854-4.854 4.854 4.854c0 0 0 0 0 0 0.052 0.052 0.113 0.090 0.178 0.114 0.178 0.066 0.386 0.029 0.529-0.114l2.293-2.293c0.143-0.143 0.181-0.351 0.114-0.529-0.024-0.065-0.062-0.126-0.114-0.178z">
        </path>
      </svg>
    </a>
    <?php endif ?>

  </div>

  <section class='mt-10 grid grid-cols-2 gap-5'>

    <?php foreach ($articles as $article) : ?>
    <a href="/article.php?id=<?= $article['id'] ?>"
      class='rounded-md border-2 border-transparent bg-slate-100 hover:border-slate-600'>
      <article class='p-4'>
        <?php if ($article['category_name']) : ?>
        <span class='rounded-full font-bold bg-slate-300 px-4 py-1 text-xs text-slate-800'>
          <?= $article['category_name']  ?>
        </span>
        <?php endif ?>
        <div class='py-4'>
          <h2 class='text-xl font-semibold'><?= $article['title'] ?></h2>
          <p class='text-sm text-slate-700'>
            by <span class='font-semibold'><?= $article['author_name']  ?></span>
          </p>
        </div>
        <p class="line-clamp-3"><?= $article['content'] ?></p>
      </article>
    </a>
    <?php endforeach ?>
  </section>
</main>