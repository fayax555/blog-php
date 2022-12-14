<main class='mx-auto max-w-[70ch] px-4 py-2'>
  <div class='mt-16 grid place-content-center gap-5'>
    <h1 class='text-center text-5xl font-semibold'><?= $title ?></h1>
    <div class='flex items-center justify-center gap-4'>
      <div>
        <span class='text-sm text-slate-500'>by</span>
        <span class='text-sm'><?= $authorName ?></span>
      </div>
      <a href="/?category=<?= $categoryName ?>"
        class='rounded-full bg-slate-200 hover:bg-slate-300 transition px-4 py-1 text-sm'>
        <?= $categoryName ?>
      </a>
    </div>

    <div class='mt-10 grid gap-5 text-lg'>
      <p><?= $content ?></p>
    </div>
  </div>
</main>